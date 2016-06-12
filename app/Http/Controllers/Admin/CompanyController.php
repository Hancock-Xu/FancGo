<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CompanyStoreRequest;
use Carbon\Carbon;
use App\Company;
use Auth;
use App\Http\Requests;
use Storage;


class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::where('published_at','<=', Carbon::now())->orderBy('published_at','desc')->paginate(config('companies.posts_per_page'));
        return view('Company.index',compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = \Auth::user();
        if (!$user->company){
            return view('Company.create_company',['user'=>$user]);
        }else{
            
            $company = $user->company;
            return view('Company.detail',compact('company'));
            
            /*
             * TODO:创建已经注册公司的提醒页面。
             */
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /**
         * 处理上传的公司logo,营业执照图片等
         */

        /**
         * TODO:处理companystorerequest的validate内容
         */
        $inputs = $request->all();
        $user = \Auth::user();
        $company = $user->company;

        if (!$company) {
            $company = Company::create($inputs);

            $company_logo_avatar = $request->file('company_logo_avatar');
            $company_license_img = $request->file('company_license_img');

            if ($company_logo_avatar){

                $file_name = 'company_logo_avatar'.'.'.$company_logo_avatar->getClientOriginalExtension();
                $save_path = '/uploads/companies/'.$company->id.'/'.$file_name;

                Storage::disk('local')->put($save_path, file_get_contents($company_logo_avatar->getRealPath()));

                $company->logo_url = $save_path;

            }

            if ($company_license_img){

                $file_name = 'company_license_img'.'.'.$company_license_img->getClientOriginalExtension();
                $save_path = '/uploads/companies/'.$company->id.'/'.$file_name;

                Storage::disk('local')->put($save_path, file_get_contents($company_license_img->getRealPath()));

                $company->certificate_url = $save_path;
            }

            $company->save();
        }

        return view('Jobs.create',['company'=>$company]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company = Company::find($id)->firstOrFail();

        if ($company){
            return view('Company.detail',['company'=>$company]);
        }else{
            return view('not_found');
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::findOrFail($id);
        if ($company){
            return view('Company.edit',['company'=>$company]);
        }else{
            return view('not_found');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyStoreRequest $request, $id)
    {
        $company = Company::findOrFail($id);
        $input = $request->all();
        $company->fill($input)->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = Company::findOrFail($id);
        $company->delete();

        return redirect()->back();
    }
}
