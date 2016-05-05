@extends('app')

@section('title,FancyGo')
	{{config('job.title')}}
@stop

@section('content')
	<div class="container">
		<article>
			<h1>{{$job->job_title}}</h1>
			<h5>{{$job->published_at}}</h5>

			<hr>
			<p class="job_description">{{$job->responsibility}}</p>
			<hr>
		</article>

		<button class="btn btn-primary" onclick="history.go(-1)">
			« Back
		</button>

	</div>
@stop