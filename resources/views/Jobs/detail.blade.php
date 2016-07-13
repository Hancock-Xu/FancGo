@extends('site.layout')

@section('title,FancyGo')
	{{config('job.title')}}
@stop

@section('content')
	<div class="container">

			<h1>{{$job->job_title}}</h1>
			<h5>{{$job->published_at}}</h5>

			<br>
			<h4>Job description:</h4>
			<hr>
			<article class="job_description">{{$job->description}}</article>
			<hr>



			<h4>Salary&Welfare:</h4>
			<hr>
			{{--<p class="salary_and_welfare">{{$job->salary_and_other_welfare}}</p>--}}
			<hr>

		<button class="btn btn-primary" onclick="history.go(-1)">
			« Back
		</button>

	</div>
@stop