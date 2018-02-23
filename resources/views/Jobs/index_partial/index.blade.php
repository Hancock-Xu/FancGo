@extends('site.layout')

@section('content')

	<div>
		@include('Jobs.index_partial.jobIndexHeader')
	</div>

	<div class="container">

		@include('Jobs.index_partial.searchbar')

		<div id="jobs" class="joblist">

			@foreach ($jobs as $job)

				@include('Jobs.index_partial.jobListCell')

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
