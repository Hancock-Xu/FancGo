@extends('app')

@section('content')
<div class="container">
	<h1>{{ config('jobs.title') }}</h1>
	<h5>Page {{ $jobs->currentPage() }} of {{ $jobs->lastPage() }}</h5>
	<hr>
		@foreach ($jobs as $job)

		<div class="container">
			<article>
				<h3 class="job_title">
					<a href="{{ action('JobController@showJobById',[$job->id]) }}">{{$job->job_title}}</a>
				</h3>

				<div class="job_published_at">
					<em>({{ $job->published_at}})</em>
				</div>
				<div class="job_short_cut">
					<p>
						{{ str_limit($job->responsibility) }}
					</p>
				</div>
			</article>
		</div>

		@endforeach
	<hr>
	{!! $jobs->render() !!}
</div>
@stop