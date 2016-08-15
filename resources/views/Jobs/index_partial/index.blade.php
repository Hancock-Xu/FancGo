@extends('site.layout')

@section('content')

	<div class="container">
		@include('Jobs.index_partial.searchbar')
	</div>

	<div class="container joblist">

			@foreach ($jobs as $job)

				<div class="jobThumbnail">
					<div class="jobThumbnailCompanyLogo">
						<figure>
							<img class="jobThumbnailCompanyLogoImg" src="{{$job->logo_url}}" alt="{{$job->company_name}}">
						</figure>
					</div>
					<div class="jobThumbnailPosition">
						<div class="jobThumbnailPositionName">
							<h3 class="positionTitle">
								<a href="{{ action('Admin\JobController@show',[$job->id]) }}">{{$job->job_title}}</a>
							</h3>
						</div>
						<div class="jobThumbnailSalaryRange">
							<h3 class="salaryRange">
								{{$job->min_salary}}K/M - {{$job->max_salary}}K/M
							</h3>
						</div>
						<div class="jobThumbnailPositionRequire">
							<span>{{$job->education_degree}}</span>
							<span class="seperate-line"></span>
							<span>Experience: {{$job->position_experience}}</span>
							<span class="seperate-line"></span>
							<span>{{$job->job_status_type}}</span>
						</div>
						@if($job->position_points)
							<div class="jobThumbnailPositionPoint">
								<p class="positionpoint">“{{$job->position_points}}"</p>
							</div>
						@else
							<div class="jobThumbnailPositionPoint"></div>
						@endif
					</div>
					<div class="jobThumbnailCompany">
						<div class="jobThumbnailCompanyName">
							<h3 class="companyName">
								<a href="{{ action('Admin\CompanyController@show',[$job->company_id]) }}">{{$job->company_name}}</a>
							</h3>
						</div>
						<div class="jobThumbnailCompanyIndustry">
							<span>{{$job->company_industry}}</span>
							<span class="seperate-line"></span>
							<span>{{$job->company_location}}</span>
						</div>
						<div class="jobThumbnailWalfareTag">
							{{--<span>Working Visa</span>--}}
							{{--<span>Working Visa</span>--}}
							{{--<span>Work Visa</span>--}}
						</div>
						<div class="timestamp">
							<i class="glyphicon glyphicon-time post-time"></i>
							<span class="post-time">post time: {{$job->updated_at->format('Y-m-d')}}</span>
						</div>
					</div>
				</div>

			@endforeach

			<hr>
{{--			{!! $jobs->render() !!}--}}

	</div>
@stop