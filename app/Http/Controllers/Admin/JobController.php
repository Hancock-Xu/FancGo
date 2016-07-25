<?php

namespace App\Http\Controllers\Admin;

use App\Job;
use App\Http\Requests\JobStoreRequest;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

use Illuminate\Http\Request;

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

		if (!$parameters){

			$jobs = Job::where('published_at','<=',Carbon::now())->orderBy('published_at','desc')->paginate(config('jobs.posts_per_page'));

			return view('Jobs.index_partial.index',compact('jobs'));

		}else{

			$jobs = \DB::table('jobs');

			foreach ($parameters as $key => $value)
			{
				if ($key == 'salary_lower_limit'){
					$jobs = $jobs->where($key, '>=', $value);
				}elseif ($key == 'salary_upper_limit'){
					$jobs = $jobs->where($key, '<=', $value);
				}elseif ($key == 'name'){
					$jobs = $jobs->where($key, 'like', $value);
				}else{
					$jobs = $jobs->where($key, '=', $value);
				}
			}

			$jobs = $jobs->get();

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

