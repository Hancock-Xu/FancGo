<?php

namespace App\Http\Controllers\Admin;

use App\Company;
use App\Job;
use App\Http\Requests\JobStoreRequest;
use App\Http\Controllers\Controller;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Mail\Message;
use Illuminate\Http\Request;
use App\VerifyEmailService\VerifyEmail;

class JobController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request)
	{
		/**
		 * 查询参数数组
		 */
		$parameters = $request->query->all();

		$jobs = \DB::table('jobs')
			->where('jobs.updated_at','<=',Carbon::now())
			->join('companies', 'jobs.company_id', '=', 'companies.id')
			->select('jobs.*', 'companies.user_id', 'companies.company_name','companies.business_license_name','companies.logo_url','companies.website','companies.company_description','companies.scale','companies.company_location','companies.company_industry','companies.company_email','companies.company_phone_number')
			->orderBy('jobs.updated_at','desc');

		if (!$parameters){

			$jobs = $jobs->paginate(config('jobs.posts_per_page'));

			return view('Jobs.index_partial.index',compact('jobs'));

		}else{

			foreach ($parameters as $key => $value)
			{
				if ($key == 'work_city' && $value != null){
					$jobs = $jobs->where($key, '=', $value);
				}elseif ($key == 'job_status_type' && $value != null){
					$jobs = $jobs->where($key, '=', $value);
				}elseif ($key == 'job_industry' && $value != null){
					$jobs = $jobs->where($key, '=', $value);
				}elseif ($key == 'salary_range' && $value != null){
					if ($value == 1){
						$jobs = $jobs->where('max_salary', '<=', 8);
					}elseif ($value == 2){
						$jobs = $jobs->where('max_salary', '<=', 10);
						$jobs = $jobs->where('min_salary', '>=', 8);
					}elseif ($value == 3){
						$jobs = $jobs->where('max_salary', '<=', 15);
						$jobs = $jobs->where('min_salary', '>=', 10);
					}elseif ($value == 4){
						$jobs = $jobs->where('max_salary', '<=', 20);
						$jobs = $jobs->where('min_salary', '>=', 15);
					}elseif ($value == 5){
						$jobs = $jobs->where('max_salary', '<=', 30);
						$jobs = $jobs->where('min_salary', '>=', 20);
					}elseif ($value == 6){
						$jobs = $jobs->where('max_salary', '<=', 50);
						$jobs = $jobs->where('min_salary', '>=', 30);
					}else{
						$jobs = $jobs->where('max_salary', '>', 50);
					}
				}elseif ($key == 'company_name' && $value != null){
					$jobs = $jobs->where($key, 'like', $value);
				}
			}

			$jobs = $jobs->paginate(config('jobs.posts_per_page'));

			return view('Jobs.index_partial.index', ['jobs'=>$jobs]);
			
		}
		
		/**/
	}

	/**
	 * 当user不拥有company的时候,重定向到创建company的页面
	 * 当user拥有company的时候,定想到拥有company实例的创建job的页面
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		$user = \Auth::user();

		if (!$user->company){
			return redirect('/company/create');
		}else{
			$company = $user->company;

			if ($company->pass_email_verify){

				if ($company->complete_create){
					return view('Jobs.create', ['company'=>$company]);
				}else{
					return view('Company.create_company', ['company'=>$company]);
				}

			}else{
				return view('Company.resend_verify_email', ['company'=>$company]);
			}
		}
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(JobStoreRequest $request)
	{
		$input = $this->replaceLineFeed($request);

		Job::create($input);
		return redirect('/job');
	}



	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{

		$job = \DB::table('jobs')
			->where('jobs.id','=', $id)
			->join('companies', 'jobs.company_id', '=', 'companies.id')
			->select('jobs.*', 'companies.user_id', 'companies.company_name','companies.business_license_name','companies.logo_url','companies.website','companies.company_description','companies.scale','companies.company_location','companies.company_industry','companies.company_email','companies.company_phone_number', 'companies.founder_time', 'companies.company_address')
			->first();

		$user = \Auth::getUser();
		if ($job) {
			return view('Jobs.detail', ['job'=>$job, 'user'=>$user]);
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
		$job = Job::whereId($id)->firstOrFail();
		if ($job){
			return view('Jobs.edit', ['job'=>$job]);
		}else {
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
	public function update(JobStoreRequest $request, $id)
	{
		$job = Job::findOrFail($id);
		$input = $this->replaceLineFeed($request);

		$job->fill($input)->save();

//		return view('Jobs.update_succeed');
		return redirect(action('Admin\CompanyController@edit', $job->company_id));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		$job = Job::findOrFail($id);
		$job->delete();

		return redirect()->back();

	}

	public function applyJob($id){

		$user = \Auth::getUser();

		if ($user->finish_basic_info){

			$job = Job::findOrFail($id);

			$response = VerifyEmail::broker()->sendJobApplyEmail($job, function(Message $message) use ($job, $user){
				$to = $job->resume_email;
				$message->to($to)->subject('A candidate has applied for your position on JobLeadChina!');

				$resume_extension = substr(strrchr($user->resume_url, '.'), 1);

				if ($resume_extension == 'pdf' || $resume_extension == 'PDF'){
					$message->attach(public_path($user->resume_url), ['as'=>"=?UTF-8?B?".base64_encode('resume')."?=.pdf"]);

				}
				if ($resume_extension == 'docx'){
					$message->attach(public_path($user->resume_url), ['as'=>"=?UTF-8?B?".base64_encode('resume')."?=.docx"]);
				}
				if ($resume_extension == 'doc'){
					$message->attach(public_path($user->resume_url), ['as'=>"=?UTF-8?B?".base64_encode('resume')."?=.doc"]);
				}



			});

			if ($response == 'succeed'){
				return view('Jobs.apply_job_succeed');
			}else{
				return view('Jobs.apply_job_failed');
			}

		}else{

			Session::flash('backUrl', \Request::fullUrl());
			return redirect(action('Admin\ProfileController@create'));

		}

	}

	public function interestedInApplicant($id, $job)
	{
		$user = User::findOrFail($id);
		$applied_job = Job::findOrFail($job);
		$company = Company::findOrFail($applied_job->company_id);
		$response = VerifyEmail::broker()->interestedInApplicant(['user'=>$user, 'job'=>$applied_job, 'company'=>$company], function (Message $message) use ($user, $company, $job){
			$message->to($user->email)->subject($company->company_name.'-'.$job->job_title.' '.'Notification of recruitment feedback');
		});

		if ($response == 'succeed'){
			return view('Jobs.replay_succeed');
		}else{
			return view('Jobs.replay_failed');
		}
	}

	public function notInterestedInApplicant($id, $job)
	{
		$user = User::findOrFail($id);
		$applied_job = Job::findOrFail($job);
		$company = Company::findOrFail($applied_job->company_id);
		$response = VerifyEmail::broker()->notInterestedInApplicant(['user'=>$user, 'job'=>$applied_job, 'company'=>$company], function (Message $message) use ($user, $company, $job){
			$message->to($user->email)->subject($company->company_name.'-'.$job->job_title.' '.'Notification of recruitment feedback');
		});

		if ($response == 'succeed'){
			return view('Jobs.replay_succeed');
		}else{
			return view('Jobs.replay_failed');
		}
	}


	public function replaceLineFeed(Request $request)
	{
		$input = $request->all();
		if (isset($input['job_description'])){
			$input['job_description'] = preg_replace("/\r\n|\r|\n/",'<br/>',$input['job_description']);
			//			$input['job_description'] = str_replace("\n", "<br>", $input['job_description']);
//			$input['job_description'] = str_replace(" ", "&nbsp;", $input['job_description']);
		}
		if (isset($input['desired_skill_experience'])){
			$input['desired_skill_experience'] = preg_replace("/\r\n|\r|\n/",'<br/>',$input['desired_skill_experience']);
//			$input['desired_skill_experience'] = str_replace(" ", "&nbsp;", $input['desired_skill_experience']);
		}
		if (isset($input['position_benefit'])){
			$input['position_benefit'] = preg_replace("/\r\n|\r|\n/",'<br/>',$input['position_benefit']);
//			$input['position_benefit'] = str_replace(" ", "&nbsp;", $input['position_benefit']);
		}

		return $input;
	}

}

