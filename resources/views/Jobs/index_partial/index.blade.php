@extends('site.layout')

@section('content')
	{{--<div class="container">--}}
		{{--@include('site.docHeader')--}}
	{{--</div>--}}

	<div class="container">
		@include('Jobs.index_partial.searchbar')
	</div>

	<div class="container">

		<div class="starter-template">

			<div class="container">
				<article>
					<h3 class="job_title">
						<a href="">fdsfdsdfsfds</a>
					</h3>

					<div class="job_published_at">
						<em>dsssfdsfdsfds</em>
					</div>
					<div class="job_short_cut">
						<p>
							grgfdgfd
						</p>
					</div>
				</article>
			</div>

			@foreach ($jobs as $job)

				<div class="container">
					<article>
						<h3 class="job_title">
							<a href="{{ action('Admin\JobController@show',[$job->id]) }}">{{$job->job_title}}</a>
						</h3>

						<div class="job_published_at">
							<em>({{ $job->published_at}})</em>
						</div>
						<div class="job_short_cut">
							<p>
								{{ str_limit($job->description) }}
							</p>
						</div>
					</article>
				</div>

			@endforeach
			<hr>
			{!! $jobs->render() !!}
		</div>
	</div>
@stop