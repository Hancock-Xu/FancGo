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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('Profile.profile',['user'=>$user]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $input = $request->all();

        $user->fill($input)->save();

        return redirect('/profile/updated');
        
    }
    
//    public function avatar()
//    {
//        return view('Profile.avatar');
//    }


    public function avatarUpload(Request $request)
    {
        if (!$request->hasFile('avatar')) {
            exit('上传文件为空');
            //TODO:修改此处上传request缺少avatar值后的错误信息
        }

        $file = $request->file('avatar');

        if (!$file->isValid()){
            exit('文件出错');
            //TODO:同上
        }

        $fileName = 'avatar'.'.'.$file->getClientOriginalExtension();
        $savePath = '/users/'.Auth::id().'/'.$fileName;

        Storage::disk('local')->put($savePath, file_get_contents($file->getRealPath()));

        Auth::user()->headimgurl = $savePath;
        Auth::user()->save();
    }
    
    

    public function updateSucceed(){
        return view('Profile.updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
