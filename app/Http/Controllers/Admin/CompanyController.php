<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Job;
use App\Http\Requests\CompanyStoreRequest;
use Carbon\Carbon;
use App\Company;
use Auth;
use App\Http\Requests\PreCompanyStoreRequest;
use League\Flysystem\File;
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
        $companies = Company::where('created_at','<=', Carbon::now())->orderBy('created_at','desc')->paginate(config('companies.posts_per_page'));
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

            return view('Company.link_request_form',['user'=> $user]);

        }else{
            
            $company = $user->company;

            return view('Company.detail',compact('company'));

        }
    }



    public function storePreCompany(PreCompanyStoreRequest $request)
    {

    	$input = $request->all();
		$verifyEmail = $input['company_email'];
    	$this->store($request);

	    $user = \Auth::user();
	    $company = $user->company;
	    return $this->sendValidateLink($verifyEmail, ['id' => $company->id]);

    }

//    public function store

    public function resendVerifyLinkEmail()
    {
    	$user = \Auth::user();
	    $company = $user->company;
    	if ($company){
    		$this->sendValidateLink($company->company_email, ['id'=>$company->id]);
	    }else{
	    	return;
	    }
    }

	/**
	 * @param CompanyStoreRequest $request
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|void
	 */
	public function storeCompany(CompanyStoreRequest $request)
	{

		$user = \Auth::user();

		$company = $user->company;

		if ($company){

			$input = $request->all();
			$company->fill($input)->save();
			$this->correctImgPath($request, $company);
			$company->complete_create = true;
			$company->save();

			return view('Jobs.create',['company'=>$company]);

		}else{

			$this->store($request);

			return;

		}
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param  CompanyStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$input = $this->replaceLineFeed($request);

	    $company = Company::create($input);

		$this->correctImgPath($request, $company);

	    $company->save();

    }

    public function correctImgPath(Request $request, Company $company)
    {
	    /**
	     * 处理上传的公司logo,营业执照图片等
	     */
	    $company_logo_avatar = $request->file('logo_url');
	    $company_license_img = $request->file('certificate_url');

	    if ($company_logo_avatar){

		    $file_name = 'company_logo_avatar'.'.'.$company_logo_avatar->getClientOriginalExtension();
		    $save_path = '/companies/'.$company->id.'/'.$file_name;

		    Storage::disk('local')->put($save_path, file_get_contents($company_logo_avatar->getRealPath()));

		    $company->logo_url = '/uploads'.$save_path;

	    }

	    if ($company_license_img){

		    $file_name = 'company_license_img'.'.'.$company_license_img->getClientOriginalExtension();
		    $save_path = '/companies/'.$company->id.'/'.$file_name;

		    Storage::disk('local')->put($save_path, file_get_contents($company_license_img->getRealPath()));

		    $company->certificate_url = '/uploads'.$save_path;
	    }

    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company = Company::findOrFail($id);

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
	    $user = \Auth::user();
        if ($company->user_id == $user->id) {
            $jobs = Job::where('company_id', '=', $company->id)->orderBy('updated_at','desc')->paginate(config('jobs.posts_per_page'));
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

        $input = $this->replaceLineFeed($request);
        $company->fill($input)->save();
	    $this->correctImgPath($request, $company);
	    $company->save();

        return redirect('/job');
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

	    return redirect('/company/create');
    }



	public function replaceLineFeed(Request $request)
	{
		$input = $request->all();
		if ($input['company_description']){
			$input['company_description'] = str_replace("\n", "<br />", $input['company_description']);
			$input['company_description'] = str_replace(" ", "&nbsp;", $input['company_description']);
		}

		return $input;
	}
}
