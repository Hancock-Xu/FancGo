<?php

namespace App\Http\Controllers\Admin;

use Session;
use Illuminate\Http\Request;
use Redirect;
use Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileStoreRequest;
use App\Http\Requests\ProfileUpdateRequest;
use Storage;
use Validator;
use Response;

class ProfileController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user = Auth::getUser();
        return view('Profile.profile',['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $user = Auth::getUser();
	    if (Session::has('backUrl')) {
		    Session::keep('backUrl');
	    }
        return view('Profile.edit_profile',['user'=>$user]);
    }

    public function create()
    {
	    $user = Auth::getUser();
	    if (Session::has('backUrl')) {
		    Session::keep('backUrl');
	    }
	    return view('Profile.create_profile',['user'=>$user]);
    }

    public function storeProfile(ProfileStoreRequest $request)
    {
    	return $this->store($request);
    }

    public function updateProfile(ProfileUpdateRequest $request)
    {
     	return $this->store($request);
    }

    public function store(Request $request)
    {
	    $user = Auth::user();
	    $input = $request->all();

	    $user->fill($input)->save();

	    $this->correctImgPath($request);

	    if (Session::has('backUrl')) {
		    Session::keep('backUrl');
	    }

	    if ($user->resume_url){
		    $user->finish_basic_info = true;
		    $user->save();

		    return ($url = Session::get('backUrl'))
			    ? Redirect::to($url)
			    : redirect('/job');
	    } else {

		    $validator = Validator::make($request->all(), [
			    'resume_url' => 'required'
		    ]);

		    if ($validator->fails()) {
			    return redirect()->back()
				    ->withErrors($validator)
				    ->withInput();
		    }

	    }


    }

    public function correctImgPath(Request $request)
    {
	    $avatar = $request->file('avatar');
	    $resume = $request->file('resume_url');
	    if ($avatar){

		    $fileName = 'avatar'.'.'.$avatar->getClientOriginalExtension();
		    $savePath = '/users/'.Auth::id().'/'.$fileName;

		    Storage::disk('local')->put($savePath, file_get_contents($avatar->getRealPath()));

		    Auth::user()->headimgurl = '/uploads'.$savePath;
		    Auth::user()->save();
	    }

	    if ($resume){

		    $fileName = 'resume'.'.'.$resume->getClientOriginalExtension();
		    $savePath = '/users/'.Auth::id().'/'.$fileName;

		    Storage::disk('local')->put($savePath, file_get_contents($resume->getRealPath()));

		    Auth::user()->resume_url = '/uploads'.$savePath;
		    Auth::user()->save();

	    }
    }

    public function uploadResume(Request $request)
    {
	    $this->wrongTokenAjax();

	    $validator = Validator::make($request->all(), [
		    'resume_url' => 'required',
	    ]);

	    if ( $validator->fails() ) {
		    return Response::json([
			    'success' => false,
			    'errors' => $validator->getMessageBag()->toArray()
		    ]);
	    }

	    $this->correctImgPath($request);


	    if (Session::has('backUrl')) {
		    Session::keep('backUrl');
	    }

	    return Response::json(
		    [
			    'success' => true,
			    'resume_url' => asset(Auth::user()->resume_url),
		    ]
	    );
    }

	public function wrongTokenAjax()
	{
		if ( Session::token() !== \Request::get('_token') ) {
			$response = [
				'status' => false,
				'errors' => 'Wrong Token',
			];

			return \Response::json($response);
		}

	}


    public function company()
    {
        $user = Auth::user();
        $company = $user->company;
        if (!$company){
	        return redirect('/company/create');
        }
        return redirect(action('Admin\CompanyController@edit',$company->id));
    }

    public function deleteCompany(Request $request)
    {
        $user = Auth::getUser();

        if ($user->company){
            return $user->company->delete();
        }else{
            $request->session()->flash('error', 'This user didn\'t have company');
        }

        return redirect()->back();
    }
}
