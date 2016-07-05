<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Job;
use App\Http\Requests\CompanyStoreRequest;
use Carbon\Carbon;
use App\Company;
use Auth;
use App\Http\Requests;
use Storage;

class CompanyController extends Controller
{
    
    use EmailVerifier;


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

            return view('Company.link_request_form',['company'=> null]);

        }else{
            
            $company = $user->company;

            return view('Company.detail',compact('company'));

        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CompanyStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyStoreRequest $request)
    {
        /**
         * 处理上传的公司logo,营业执照图片等
         */

        $inputs = $request->all();
        $user = \Auth::user();
        $company = $user->company;

        if (!$company) {
            $company = Company::create($inputs);

            $company_logo_avatar = $request->file('logo_url');
            $company_license_img = $request->file('certificate_url');

            if ($company_logo_avatar){

                $file_name = 'company_logo_avatar'.'.'.$company_logo_avatar->getClientOriginalExtension();
                $save_path = '/companies/'.$company->id.'/'.$file_name;

                Storage::disk('local')->put($save_path, file_get_contents($company_logo_avatar->getRealPath()));

                $company->logo_url = $save_path;

            }

            if ($company_license_img){

                $file_name = 'company_license_img'.'.'.$company_license_img->getClientOriginalExtension();
                $save_path = '/companies/'.$company->id.'/'.$file_name;

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
        $company_certificate_url = '/uploads'.$company->certificate_url;

        if ($company){
            return view('Company.detail',['company'=>$company, 'company_certificate_url'=>$company_certificate_url]);
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
        if ($company->user_id == Auth::getUser()->id) {
            $jobs = Job::where('company_id', '==', $company->id)->orderBy('published_at','desc')->paginate(config('jobs.posts_per_page'));
            return view('Company.edit', ['company' => $company, 'jobs'=>$jobs]);
        }else{
            /**
             * 把company id作为隐含form值返回
             */
            return view('Company.link_request_form', ['company' => $company]);
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
     * 删除公司下的工作
     * @param $id 工作id
     * @return int
     */
    public function deleteJob($id)
    {
        $job = Job::findOrFail($id);
        if ($job){
            $job->delete();
        }else{
            \Session::flash('error','Can\'t find the job');
        }

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
