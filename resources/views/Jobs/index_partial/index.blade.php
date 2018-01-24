@extends('site.layout')

@section('content')

	<div>
		@include('Jobs.index_partial.jobIndexHeader')
	</div>

	<div class="container">

		@include('Jobs.index_partial.searchbar')

		{{--<ul class="nav nav-tabs">--}}
			{{--<li class="active" data-toggle="tab">--}}
				{{--<a href="#jobs">Jobs</a>--}}
			{{--</li>--}}
			{{--<li>--}}
				{{--<a href="" data-toggle="tab">others</a>--}}
			{{--</li>--}}
		{{--</ul>--}}





		<div id="jobs" class="joblist">

			@foreach ($jobs as $job)

				<div class="row">

					@include('Jobs.index_partial.jobListCell')

				</div>

			@endforeach

		</div>


		<div class="loadMoreBtn-container">
			<form action="{{action('Admin\JobController@paginationJobsIndex')}}">
				<div class="form-group">
					<button type="submit" class="loadMore-btn">
						<i class="fa fa-btn fa-user"></i>
						More Jobs
					</button>
				</div>
			</form>
		</div>

	</div>




@stop
