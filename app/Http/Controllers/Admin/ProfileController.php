<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests;
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
        return view('Profile.edit',['user'=>$user]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
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

        if ($request->hasFile('resume')){
            $file = $request->file('resume');

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

        return redirect('/profile/updated');
        
    }

    public function company()
    {
        $user = Auth::user();
        $company = $user->company;
        if (!$company){
            redirect('/company/create');
        }
        redirect(action('Admin\ApartmentController@edit',$company->id));
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

    public function updateSucceed()
    {
        return view('Profile.updated');
    }
}
