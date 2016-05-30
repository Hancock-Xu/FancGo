<?php

namespace App\Http\Controllers\Admin;

use App\Company;
use App\User;
use Illuminate\Http\Request;
use App\Job;
use App\Http\Requests\JobStoreRequest;
use App\Http\Requests\JobUpdateRequest;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$jobs = Job::where('published_at','<=',Carbon::now())->orderBy('published_at','desc')->paginate(config('jobs.posts_per_page'));
		return view('Jobs.index',compact('jobs'));

		/**/
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
			return redirect('/company/create');
		}else{
			return view('Jobs.create');
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
	public function update(JobUpdateRequest $request, $id)
	{
		$job = Job::firstOrFail($id);

		foreach (array_keys($this->fields) as $field){
			
		}
	}

	public function conditionalSearch(Request $request)
	{
		
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

