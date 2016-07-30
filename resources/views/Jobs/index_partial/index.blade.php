@extends('site.layout')

@section('content')

	<div class="container">
		@include('Jobs.index_partial.searchbar')
	</div>

	<div class="container joblist">

			{{--@foreach ($jobs as $job)--}}

			<div class="jobThumbnail">
				<div class="jobThumbnailCompanyLogo">
					<figure>
						<img src="#" alt="jobLeadChina">
					</figure>
				</div>
				<div class="jobThumbnailPosition">
					<div class="jobThumbnailPositionName">
						<h3 class="positionTitle">
							<a href="#">JobLead China</a>
						</h3>
					</div>
					<div class="jobThumbnailSalaryRange">
						<h3 class="salaryRange">
							30K-35K
						</h3>
					</div>
					<div class="jobThumbnailPositionRequire">
						<span>Master</span>
						<span class="seperate-line"></span>
						<span>Experience: 5 years</span>
						<span class="seperate-line"></span>
						<span>Full time</span>
					</div>
					<div class="jobThumbnailPositionPoint">
						<p class="positionpoint">“Must native English speaker,and fluent in Chinese"</p>
					</div>
				</div>
				<div class="jobThumbnailCompany">
					<div class="jobThumbnailCompanyName">
						<h3 class="companyName">
							<a href="#">JobLeadChina</a>
						</h3>
					</div>
					<div class="jobThumbnailCompanyIndustry">
						<span>IT</span>
						<span class="seperate-line"></span>
						<span>Shenzhen</span>
					</div>
					<div class="jobThumbnailWalfareTag">
						<span>Working Visa</span>
						<span>Working Visa</span>
						<span>Work Visa</span>
					</div>
					<div class="timestamp">
						<i class="glyphicon glyphicon-time post-time"></i>
						<span class="post-time">post time:</span>
					</div>
				</div>
			</div>

			{{--@endforeach--}}
			<hr>
			{!! $jobs->render() !!}

	</div>
@stop