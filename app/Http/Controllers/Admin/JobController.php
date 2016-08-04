<?php

namespace App\Http\Controllers\Admin;

use App\Job;
use App\Http\Requests\JobStoreRequest;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
			->where('published_at','<=',Carbon::now())->orderBy('published_at','desc')
			->join('companies', 'jobs.company_id', '=', 'companies.id')
			->select('jobs.*', 'companies.user_id', 'companies.company_name','companies.business_license_name','companies.logo_url','companies.website','companies.company_description','companies.scale','companies.company_location','companies.company_industry','companies.company_email','companies.company_phone_number')
			->orderBy('published_at','desc');

		if (!$parameters){

			$jobs = $jobs->paginate(config('jobs.posts_per_page'));

			return view('Jobs.index_partial.index',compact('jobs'));

		}else{



			foreach ($parameters as $key => $value)
			{
				if ($key == 'job_location' && $value != null){
					$jobs = $jobs->where($key, '=', $value);
				}elseif ($key == 'job_status_type' && $value != null){
					$jobs = $jobs->where($key, '=', $value);
				}elseif ($key == 'job_industry' && $value != null){
					$jobs = $jobs->where($key, '=', $value);
				}elseif ($key == 'salary_range' && $value != null){
					if ($value == 1){
						$jobs = $jobs->where('salary_upper_limit', '<=', 8);
					}elseif ($value == 2){
						$jobs = $jobs->where('salary_upper_limit', '<=', 10);
						$jobs = $jobs->where('salary_lower_limit', '>=', 8);
					}elseif ($value == 3){
						$jobs = $jobs->where('salary_upper_limit', '<=', 15);
						$jobs = $jobs->where('salary_lower_limit', '>=', 10);
					}elseif ($value == 4){
						$jobs = $jobs->where('salary_upper_limit', '<=', 20);
						$jobs = $jobs->where('salary_lower_limit', '>=', 15);
					}elseif ($value == 5){
						$jobs = $jobs->where('salary_upper_limit', '<=', 30);
						$jobs = $jobs->where('salary_lower_limit', '>=', 20);
					}elseif ($value == 6){
						$jobs = $jobs->where('salary_upper_limit', '<=', 50);
						$jobs = $jobs->where('salary_lower_limit', '>=', 30);
					}else{
						$jobs = $jobs->where('salary_upper_limit', '>', 50);
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

			if (!$company->pass_email_verify){
				return view('Company.create_company', ['company'=>$company]);
			}
			return view('Jobs.create', ['company'=>$company]);
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
		$input = $request->all();
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
		$job = Job::whereId($id)->firstOrFail();
		if ($job) {
			return view('Jobs.detail', compact('job'));
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
			return view('Jobs.edit',compact($job));
		}else {
			return view('not_found');
		}
		//
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
		$job = Job::firstOrFail($id);
		$input = $request->all();

		$job->fill($input)->save();
	
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
		$job = Job::findOrFail($id);
		$job->delete();

		return redirect()->back();

	}
}

