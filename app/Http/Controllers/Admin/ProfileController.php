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

	    $user->finish_basic_info = true;
	    $user->save();

	    return ($url = Session::get('backUrl'))
		    ? Redirect::to($url)
		    : redirect('/job');
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
