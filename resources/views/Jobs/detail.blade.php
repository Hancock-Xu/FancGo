@extends('site.layout')

@section('title,FancyGo')
	{{config('job.title')}}
@stop

@section('content')
	<div class="container">

		<div class="job_company_info">
			<div class="job_info">
				<div class="job_basic_info">

					<ul class="detail-position-item list-unstyled ">
						<li><h2>{{$job->job_title}}</h2></li>
						<li><h4>{{$job->company_name}}</h4></li>
						<li class="detail-position-item-point ">
							<span>{{$job->min_salary}}K/MTH - {{$job->max_salary}}K/MTH</span>
							<span>{{$job->work_city}}</span>
						</li>
						<li>
							<span>Master</span>
							<span class="seperate-line "></span>
							<span>Experience:&nbsp;{{$job->position_experience}}</span>
							<span class="seperate-line "></span>
							<span>{{$job->job_status_type}}</span>
						</li>
						{{--<li class="benefit ">--}}
							{{--<span>Working Visa</span>--}}
							{{--<span>Working Visa</span>--}}
							{{--<span>Work Visddd</span>--}}
						{{--</li>--}}
						<li>
							<i class="glyphicon glyphicon-time icon-post-time "></i>
							<span class="post-time ">{{ date('F d, Y', strtotime($job->updated_at)) }}</span>
						</li>
					</ul>

				</div>
				<div class="job_apply_bar">

					{{--<label for="">Position Info</label>--}}
					{{--<button type="button" class="btn btn-primary" id="button-apply">Apply</button>--}}
					<ul class="nav nav-pills job_apply_bar_url" id="fixed">
						{{--<li role="presentation " class="active h3 job_apply_bar_title"><a href="# " role="tab" >Position Information</a></li>--}}
						<li class="job_apply_placeholder"></li>
						{{--<li role="presentation " class="h3 "><a href="# " id="newest-tab " role="tab " >Company Info</a></li>--}}
						{{--<button type="button " class="btn btn-primary job_apply_btn" id="button-apply ">--}}
							{{--<a href="">Apply</a>--}}
						{{--</button>--}}
						<input type="button" class="btn btn-primary job_apply_btn" value="Apply" onclick="location.href='{{action('Admin\JobController@applyJob', $job->id)}}'">
					</ul>
				</div>
				<div class="job_description_and_other">
					<div class="job_description">
						<div class="item-content ">
							<h4 class="color-line ">Job Description</h4>
							<div>
								{!! $job->job_description !!}
							</div>
							<hr/>
						</div>
					</div>
					<div class="job_desired_skill_and_experience">
						<div class="item-content ">
							<h4 class="color-line ">Desired Skill and Experience</h4>
							<div>
								{!! $job->desired_skill_experience !!}
							</div>
							<hr/>
						</div>
					</div>
					<div class="job_benefits">
						<div class="item-content ">
							<h4 class="color-line ">Benefits</h4>
							<div>{!! $job->position_benefit !!}</div>
						</div>
						<hr/>
					</div>
				</div>
			</div>

			<div class="company_info">
				<div class="company_logo">
					<div class="companyThumbnailCompanyLogo">
						<figure class="companyThumbnailCompanyLogo_figure">
							<img class="companyThumbnailCompanyLogoImg" src="{{$job->logo_url}}" alt="{{$job->company_name}}">

						</figure>

					</div>
					<label class="company_info_name">{{$job->company_name}}</label>
				</div>
				<div class="company_basic_info">
					<ul class="company-info-content ">
						<li>
							<div class="basic_info_container">
								<div class="basic_info_item">
									<span>Industry</span>
									{{--<label for="">Industry</label>--}}
								</div>

								<div class="basic_info_content">

									<label class="basic_info_label">{{$job->company_industry}}</label>

								</div>
							</div>
						</li>
						<li>
							<div class="basic_info_container">
								<div class="basic_info_item">
									<span>Founded</span>
									{{--<label for="">Industry</label>--}}
								</div>

								<div class="basic_info_content">

									<label class="basic_info_label">{{$job->founder_time}}</label>

								</div>
							</div>


						</li>
						<li>
							<div class="basic_info_container">
								<div class="basic_info_item">
									<span>Size</span>
									{{--<label for="">Industry</label>--}}
								</div>

								<div class="basic_info_content">

									<label class="basic_info_label">{{$job->scale}}</label>

								</div>
							</div>
						</li>
						<li>
							<div class="basic_info_container">
								<div class="basic_info_item">
									<span>Website</span>
									{{--<label for="">Industry</label>--}}
								</div>

								<div class="basic_info_content">

									<label class="basic_info_label"><a href="#" target="_blank ">{{$job->website}}</a></label>

								</div>
							</div>
						</li>
						<li>
							<div class="basic_info_container">
								<div class="basic_info_item">
									<span >Address</span>
									{{--<label for="">Industry</label>--}}
								</div>

								<div class="basic_info_content">

									<label class="basic_info_label">{{$job->company_address}}</label>

								</div>
							</div>


						</li>
					</ul>
				</div>
				<div class="company_description">
					<div class="item-content ">
						<h4 class="color-line ">Company Description</h4>
						<div>
							{!! $job->company_description !!}
						</div>
					</div>
				</div>
			</div>

		</div>

		<button class="btn btn-primary" onclick="history.go(-1)">
			«  Back
		</button>

	</div>
@stop