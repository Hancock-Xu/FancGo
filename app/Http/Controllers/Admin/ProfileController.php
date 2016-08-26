<?php

namespace App\Http\Controllers\Admin;

use Session;
use Illuminate\Http\Request;
use Redirect;
use Auth;
use App\Http\Controllers\Controller;
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
        return view('Profile.edit',['user'=>$user]);

    }

    public function update(ProfileUpdateRequest $request)
    {
        $user = Auth::user();
        $input = $request->all();

        $user->fill($input)->save();

        if ($request->hasFile('avatar')){

            $file = $request->file('avatar');

            if ($file->isValid()){
                $fileName = 'avatar'.'.'.$file->getClientOriginalExtension();
                $savePath = '/users/'.Auth::id().'/'.$fileName;

                Storage::disk('local')->put($savePath, file_get_contents($file->getRealPath()));

                Auth::user()->headimgurl = '/uploads'.$savePath;
                Auth::user()->save();

            }else{
                $request->session()->flash('error', 'file error');
            }
        }

        if ($request->hasFile('resume_url')){
            $file = $request->file('resume_url');

            if ($file->isValid()){
                $fileName = 'resume'.'.'.$file->getClientOriginalExtension();
                $savePath = '/users/'.Auth::id().'/'.$fileName;

                Storage::disk('local')->put($savePath, file_get_contents($file->getRealPath()));

                Auth::user()->resume_url = '/uploads'.$savePath;
                Auth::user()->save();

            }else{
                $request->session()->flash('error', 'file error');
            }

        }


		$user->finish_basic_info = true;
	    $user->save();

	    return ($url = Session::get('backUrl'))
		    ? Redirect::to($url)
		    : redirect('/job');
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
//
//    public function updated()
//    {
//        return view('Profile.updated');
//    }
}
