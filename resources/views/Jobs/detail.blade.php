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
							<span>{{$job->min_salary}} K - {{$job->max_salary}} k</span>
							<span>{{$job->work_city}}</span>
						</li>
						<li>
							<span>Master</span>
							<span class="seperate-line "></span>
							<span>Experience:&nbsp;{{$job->position_experience}}</span>
							<span class="seperate-line "></span>
							<span>{{$job->job_status_type}}</span>
						</li>
						<li class="benefit ">
							<span>Working Visa</span>
							<span>Working Visa</span>
							<span>Work Visddd</span>
						</li>
						<li>
							<i class="glyphicon glyphicon-time icon-post-time "></i>
							<span class="post-time ">{{$job->updated_at}}</span>
						</li>
					</ul>

				</div>
				<div class="job_apply_bar">
					<ul class="nav nav-pills " id="fixed ">
						<li role="presentation " class="active h3 "><a href="# " role="tab " >Position Info</a></li>
						<li role="presentation " class="h3 "><a href="# " id="newest-tab " role="tab " >Company Info</a></li>
						<button type="button " class="btn " id="button-apply ">Apply</button>
					</ul>
				</div>
				<div class="job_description_and_other">
					<div class="job_description">
						<div class="item-content ">
							<h4 class="color-line ">Job Description</h4>
							<article>
								{{$job->job_description}}
							</article>
						</div>
					</div>
					<div class="job_desired_skill_and_experience">
						<div class="item-content ">
							<h4 class="color-line ">Desired Skill and Experience</h4>
							<article>
								{{$job->desired_skill_experience}}
							</article>
						</div>
					</div>
					<div class="job_benefits">
						<div class="item-content ">
							<h4 class="color-line ">Benefits</h4>
							<p>{{$job->position_benefit}}</p>
						</div>
					</div>
				</div>
			</div>

			<div class="company_info">
				<div class="company_logo">
					<div class="company-info-title ">
						<img src="# " alt="JobLeadChina " class="company-info-logo ">
					</div>
				</div>
				<div class="company_name">
					<h3>{{$job->company_name}}</h3>
				</div>
				<div class="company_basic_info">
					<ul class="company-info-content ">
						<li>
							<span>Industry</span>
							{{$job->job_industry}}
						</li>
						<li>
							<span>Founded</span>
							{{$job->founder_time}}
						</li>
						<li>
							<span>Size</span>
							{{$job->scale}}
						</li>
						<li>
							<span>Website</span>
							<a href="#" target="_blank ">{{$job->website}}</a>
						</li>
						<li>
							<span >Address</span>
							{{$job->company_address}}
						</li>
					</ul>
				</div>
				<div class="company_description">
					<div class="item-content ">
						<h4 class="color-line ">Company Description</h4>
						<p>
							{{$job->company_description}}
						</p>
					</div>
				</div>
			</div>
		</div>

		<button class="btn btn-primary" onclick="history.go(-1)">
			« Back
		</button>

	</div>
@stop