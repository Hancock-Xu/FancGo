@extends('site.layout')

@section('content')

	<!-- Company Info -->
	<div id="page-container">
		<div class="container">

			<!-- 岗位信息 -->

			<div class="job_property">

				<form class="form-horizontal" id="position-submit" method="post" action="{{action('Admin\JobController@update', $job->id)}}" role="form">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					{{--<input type="hidden" name="_method" value="put">--}}

					<div class="job_property_part1">

						<div class="job_property_part1_left_part">

							<div class="job_title form-group">
								<label class="job_label" for="job-title">Job Title</label>
								<i class="glyphicon glyphicon-asterisk required-item"></i>
								<input type="text" class="form-control" id="job-title" name="job_title" spellcheck="true" value="{{$job->job_title}}">
							</div>
							<div class="job_status_type form-group">
								<label class="job_label" for="employment-type">Employment Type</label>
								<i class="glyphicon glyphicon-asterisk required-item "></i>
								<select name="job_status_type" class="form-control job_select" id="employment-type ">
									<option disabled {{$job->job_status_type == null ? 'selected' : ''}}>Choose</option>
									<option value=1 {{$job->job_status_type == 'Full-time' ? 'selected' : ''}}>Full-time</option>
									<option value=2 {{$job->job_status_type == 'Part-time' ? 'selected' : ''}}>Part-time</option>
									<option value=3 {{$job->job_status_type == 'Intership' ? 'selected' : ''}}>Intership</option>
								</select>
								{{--<span class="glyphicon glyphicon-menu-down left-arrow-down"></span>--}}
							</div>
							<div class="salary_range form-group">
								<label class="job_label" for="employment-type">Salary Per Month</label>
								<i class="glyphicon glyphicon-asterisk required-item "></i>
								<div class="choose-salary ">
									<div class="min_salary_input">
										<input type="text" name="min_salary" class="min-salary form-control" placeholder="Min" value="{{$job->min_salary}}">
										<span class="salary-k ">K</span>
									</div>
									<div>
										<p class="salary-to">to</p>
									</div>
									<div class="max_salary_input">
										<input type="text" name="max_salary" class="max-salary form-control" placeholder="Max" value="{{$job->max_salary}}">
										<span class="salary-k">K</span>
									</div>
								</div>
							</div>

							<!-- Email Address and Work City -->
							<div class="resume_email form-group">
								<label class="job_label" for="resume_email" >Email Address</label>
								<i class="glyphicon glyphicon-asterisk required-item "></i>
								<span class="position-alert">This mailbox will receive resumes</span>
								<input type="email" class="form-control " name="resume_email" id="resume_email" value="{{$job->resume_email}}">
							</div>

						</div>

						<div class="job_property_part1_right_part">

							<label class="job_label" for="position_industry">Position Industry</label>
							<i class="glyphicon glyphicon-asterisk required-item"></i>
							<div class="job_industry form-group{{ $errors->has('company_industry') ? ' has-error' : '' }}">

								<label class="industryinputlabel" for="job_industry">
									<input type="text" class="industryInput input-large form-control" name="job_industry" id="job_industry" value="{{$job->job_industry}}" placeholder="Industry" autocomplete="off" readonly>
								</label>
								@if ($errors->has('company_industry'))
									<span class="help-block">
	                                        <strong>{{ $errors->first('company_industry') }}</strong>
	                                    </span>
								@endif

								<div class="industrylist">

									<div class="industrylist_row">
										<strong class="industrylist_row_name">
											Sales/Marketing
										</strong>
										<div class="industrylist_row_content">

											<ul class="industrylist_row_1">
												<li>
													<a href="#">Sales/Retail</a>
												</li>
												<li>
													<a href="#">Marketing</a>
												</li>
												<li>
													<a href="#">Advertisement </a>
												</li>
												<li>
													<a href="#">PR</a>
												</li>
												<li>
													<a href="#">Customer Service</a>
												</li>
											</ul>

										</div>
									</div>

									<div class="industrylist_row">
										<strong class="industrylist_row_name">
											Education/Training
										</strong>
										<div class="industrylist_row_content">

											<ul class="industrylist_row_1">
												<li>
													<a href="#">Teaching</a>
												</li>
												<li>
													<a href="#">Translation/Proofreading </a>
												</li>
												<li>
													<a href="#">Other Teaching</a>
												</li>
											</ul>
										</div>
									</div>


									<div class="industrylist_row">
										<strong class="industrylist_row_name">
											Creative
										</strong>
										<div class="industrylist_row_content">

											<ul class="industrylist_row_1">
												<li>
													<a href="#">Graphic Design</a>
												</li>
												<li>
													<a href="#">Photographer</a>
												</li>
												<li>
													<a href="#">Artwork Designer</a>
												</li>
											</ul>
										</div>
									</div>

									<div class="industrylist_row">
										<strong class="industrylist_row_name">
											Trade/Logistic
										</strong>
										<div class="industrylist_row_content">

											<ul class="industrylist_row_1">
												<li>
													<a href="#">Sourcing/Purchasing</a>
												</li>
												<li>
													<a href="#">International Trade</a>
												</li>
												<li>
													<a href="#">Logistic</a>
												</li>
											</ul>
										</div>
									</div>

									<div class="industrylist_row">
										<strong class="industrylist_row_name">
											Manufacture
										</strong>
										<div class="industrylist_row_content">

											<ul class="industrylist_row_1">
												<li>
													<a href="#">Architecture</a>
												</li>
												<li>
													<a href="#">Manufacturing/Production</a>
												</li>
												<li>
													<a href="#">Engineer</a>
												</li>
											</ul>
										</div>
									</div>

									<div class="industrylist_row">
										<strong class="industrylist_row_name">
											Finance/Consultancy
										</strong>
										<div class="industrylist_row_content">

											<ul class="industrylist_row_1">
												<li>
													<a href="#">Finance</a>
												</li>
												<li>
													<a href="#">Accounting</a>
												</li>
												<li>
													<a href="#">Banking</a>
												</li>
												<li>
													<a href="#">Consultancy</a>
												</li>
												<li>
													<a href="#">Legal</a>
												</li>
											</ul>
										</div>
									</div>

									<div class="industrylist_row">
										<strong class="industrylist_row_name">
											IT
										</strong>
										<div class="industrylist_row_content">

											<ul class="industrylist_row_1">
												<li>
													<a href="#">Software Engineer</a>
												</li>
												<li>
													<a href="#">Data Analyst</a>
												</li>
												<li>
													<a href="#">Product Designer</a>
												</li>
											</ul>
										</div>
									</div>

									<div class="industrylist_row">
										<strong class="industrylist_row_name">
											Admin
										</strong>
										<div class="industrylist_row_content">

											<ul class="industrylist_row_1">
												<li>
													<a href="#">Professional Manager</a>
												</li>
												<li>
													<a href="#">Secretarial/Office manager</a>
												</li>
												<li>
													<a href="#">Human Resource</a>
												</li>
											</ul>
										</div>
									</div>

									<div class="industrylist_row">
										<strong class="industrylist_row_name">
											Entertainment/Catering
										</strong>
										<div class="industrylist_row_content">

											<ul class="industrylist_row_1">
												<li>
													<a href="#">Acting/Model/Voice</a>
												</li>
												<li>
													<a href="#">Bar/Club/Restaurant Staff</a>
												</li>
												<li>
													<a href="#">Hotel/tourism</a>
												</li>
											</ul>
										</div>
									</div>



									<div class="industrylist_row">
										<strong class="industrylist_row_name">
											Healthcare
										</strong>
										<div class="industrylist_row_content">

											<ul class="industrylist_row_1">
												<li>
													<a href="#">Physician Job</a>
												</li>
												<li>
													<a href="#">Medical assistant job</a>
												</li>
												<li>
													<a href="#">Biomedical Engineer Job</a>
												</li>
											</ul>
										</div>
									</div>

									<div class="industrylist_row">
										<strong class="industrylist_row_name">
											Others
										</strong>
										<div class="industrylist_row_content">

											<ul class="industrylist_row_1">
												<li>
													<a href="#">Others</a>
												</li>

											</ul>
										</div>
									</div>

								</div>

							</div>

							<!-- Employment Type and Expereince -->


							<div class="position_experience form-group">
								<label class="job_label" for="experience">Expereince</label>
								<i class="glyphicon glyphicon-asterisk required-item "></i>
								<select name="position_experience" class="form-control job_select" id="experience ">
									<option disabled {{$job->position_experience == null ? 'selected':''}}>Choose</option>
									<option value=6 {{$job->position_experience == 'Executive' ? 'selected':''}}>Executive</option>
									<option value=5 {{$job->position_experience == 'Director' ? 'selected':''}}>Director</option>
									<option value=4 {{$job->position_experience == 'Mid-Senior Level' ? 'selected':''}}>Mid-Senior Level</option>
									<option value=3 {{$job->position_experience == 'Associate' ? 'selected':''}}>Associate</option>
									<option value=2 {{$job->position_experience == 'Entry Level' ? 'selected':''}}>Entry Level</option>
									<option value=1 {{$job->position_experience == 'Intership' ? 'selected':''}}>Intership</option>
								</select>
								{{--<i class="glyphicon glyphicon-menu-down arrow-down "></i>--}}
							</div>
							<!-- Salary and Education Degree-->

							<div class="education_degree_select form-group">
								<label class="job_label" for="education_degree">Education Degree</label>
								<i class="glyphicon glyphicon-asterisk required-item "></i>
								<select name="education_degree" class="form-control job_select" id="education_degree">
									<option disabled {{$job->education_degree == null?'selected':''}}>Choose</option>
									<option value=1 {{$job->education_degree == 'Any education'?'selected':''}}>Any education</option>
									<option value=2 {{$job->education_degree == 'Associate Degree'?'selected':''}}>Associate Degree</option>
									<option value=3 {{$job->education_degree == 'Bachelor Degree'?'selected':''}}>Bachelor Degree</option>
									<option value=4 {{$job->education_degree == 'Master Degree'?'selected':''}}>Master Degree</option>
									<option value=5 {{$job->education_degree == 'Dr.'?'selected':''}}>Dr.</option>
								</select>
								{{--<i class="glyphicon glyphicon-menu-down arrow-down "></i>--}}
							</div>

							<div class="work_city_select form-group">
								<label class="job_label" for="work-city">Work City</label>
								<i class="glyphicon glyphicon-asterisk required-item "></i>
								<select name="work_city" class="form-control job_select" id="work-city ">
									<option disabled {{ $job->work_city == null ? "selected":""}}>Choose</option>
									<option value="Hongkong" {{ $job->work_city == "Hongkong" ? "selected":""}}>Hongkong</option>
									<option value="Shenzhen" {{ $job->work_city == "Shenzhen" ? "selected":""}}>Shenzhen</option>
									<option value="Beijing" {{ $job->work_city == "Beijing" ? "selected":""}}>Beijing</option>
									<option value="Shanghai" {{ $job->work_city == "Shanghai" ? "selected":""}}>Shanghai</option>
									<option value="Guangzhou" {{ $job->work_city == "Guangzhou" ? "selected":""}}>Guangzhou</option>
									<option value="Taiwan" {{ $job->work_city == "Taiwan" ? "selected":""}}>Taiwan</option>
									<option value="Chengdu" {{ $job->work_city == "Chengdu" ? "selected":""}}>Chengdu</option>
									<option value="Hangzhou" {{ $job->work_city == "Hangzhou" ? "selected":""}}>Hangzhou</option>
									<option value="Nanjing" {{ $job->work_city == "Nanjing" ? "selected":""}}>Nanjing</option>
									<option value="Xi'an" {{ $job->work_city == "Xi'an" ? "selected":""}}>Xi'an</option>
									<option value="Haikou" {{ $job->work_city == "Haikou" ? "selected":""}}>Haikou</option>
									<option value="Tianjin" {{ $job->work_city == "Tianjin" ? "selected":""}}>Tianjin</option>
									<option value="Wuhan" {{ $job->work_city == "Wuhan" ? "selected":""}}>Wuhan</option>
									<option value="Chongqing" {{ $job->work_city == "Chongqing" ? "selected":""}}>Chongqing</option>
									<option value="Kunming" {{ $job->work_city == "Kunming" ? "selected":""}}>Kunming</option>
									<option value="Shenyang" {{ $job->work_city == "Shenyang" ? "selected":""}}>Shenyang</option>
									<option value="Dongguan" {{ $job->work_city == "Dongguan" ? "selected":""}}>Dongguan</option>
									<option value="Ningbo" {{ $job->work_city == "Ningbo" ? "selected":""}}>Ningbo</option>
									<option value="Zhuhai" {{ $job->work_city == "Zhuhai" ? "selected":""}}>Zhuhai</option>
									<option value="Dalian" {{ $job->work_city == "Dalian" ? "selected":""}}>Dalian</option>
									<option value="Qingdao" {{ $job->work_city == "Qingdao" ? "selected":""}}>Qingdao</option>
									<option value="Others" {{ $job->work_city == "Others" ? "selected":""}}>Others</option>
								</select>
								{{--<i class="glyphicon glyphicon-menu-down arrow-down "></i>--}}
							</div>

						</div>

					</div>



					<!-- Position Point -->
					<div class="position_point_input">
						<div class="form-group">
							<label class="job_label" for="position_point" >Position Point</label>
							<!-- <i class="glyphicon glyphicon-asterisk required-item ";"></i> -->
							<input type="text" class="form-control" name="position_points" id="position_point" placeholder="No more than 10 words (like the following example)" spellcheck="true" value="{{$job->position_points}}">
						</div>
						<div class="position-point">
							<span>
					        "Must native English speaker, and fluent in Chinese"
					      </span>
							<span>
				            "Experience of France market"
				          </span>
							<span>
			              "Can Speak Germany and Spanish"
			              </span>
						</div>
					</div>
					<!-- Job Description -->
					<div class="job_description_area form-group">
						<label class="job_label" for="job-des-content">Job Description</label>
						<i class="glyphicon glyphicon-asterisk required-item"></i>
						<textarea rows="8" type="text" name="job_description" class="form-control" id="job-des-content" spellcheck="true">{{$job->job_description}}</textarea>
					</div>
					<!-- Desired Skills and expertise -->
					<div class="desired_skill_experience_area form-group">
						<label class="job_label" for="skills-content">Desired Skills and Expertise</label>
						<i class="glyphicon glyphicon-asterisk required-item"></i>
						<textarea class="form-control" rows="8" id="skills-content" name="desired_skill_experience" spellcheck="true">{{$job->desired_skill_experience}}</textarea>
					</div>
					<!-- Benefit -->
					<div class="position_benefit_input form-group">
						<label class="job_label" for="benefit-content">Position Benefit</label>
						<textarea class="form-control" rows="3" id="benefit-content" name="position_benefit" spellcheck="true">{{$job->position_benefit}}</textarea>
					</div>
					<!-- Benefit Point -->
				{{--
				<div class="form-group">
					<label for="benefit-point">Extra Welfare</label>
					<div class="benefit-point">
						<ul class="allowance list-unstyled">
							<h4>Allowance</h4>
							<li>
								<label class="checkbox-inline">
									<input type="checkbox" value="1">Accommodation Allowance
								</label>
							</li>
							<li>
								<label class="checkbox-inline">
									<input type="checkbox" value="2">Accommodation Provided
								</label>
							</li>
							<li>
								<label class="checkbox-inline">
									<input type="checkbox" value="3">Physical Examination
								</label>
							</li>
							<li>
								<label class="checkbox-inline">
									<input type="checkbox" value="4">Airfare Allowance
								</label>
							</li>
							<li>
								<label class="checkbox-inline">
									<input type="checkbox" value="5">Lunch Included
								</label>
							</li>
						</ul>
						<ul class="entertainment list-unstyled">
							<h4>Vatation & Time Off</h4>
							<li>
								<label class="checkbox-inline">
									<input type="checkbox" value="6">Group Travel
								</label>
							</li>
							<li>
								<label class="checkbox-inline">
									<input type="checkbox" value="7">Outdoor Activities
								</label>
							</li>
							<li>
								<label class="checkbox-inline">
									<input type="checkbox" value="8">Tea Time
								</label>
							</li>
							<li>
								<label class="checkbox-inline">
									<input type="checkbox" value="9">Paid Holiday
								</label>
							</li>

						</ul>
						<ul class="work list-unstyled">
							<h4>Work</h4>
							<li>
								<label class="checkbox-inline">
									<input type="checkbox" id="inlineCheckbox1" value="10">Z Visa
								</label>
							</li>
							<li>
								<label class="checkbox-inline">
									<input type="checkbox" id="inlineCheckbox2" value="11"> Performance Bonus
								</label>
							</li>
							<li>
								<label class="checkbox-inline">
									<input type="checkbox" value="12">Flexible Working
								</label>
							</li>
							<li>
								<label class="checkbox-inline">
									<input type="checkbox"  value="13">Ongoing Training
								</label>
							</li>
							<li>
								<label class="checkbox-inline">
									<input type="checkbox" value="14">Overtime Pay
								</label>
							</li>
						</ul>
					</div>
				</div>
				--}}
				<!--choose benefit-->
					<!-- Verify -->

					<div>
						<input type="hidden" name="company_id" value="{{$job->company_id}}">
					</div>

					<div class="joblead_btn">
						<button type="submit" class="btn position-btn btn-primary" id="position-btn">Update Job
						</button>
					</div>

				</form>

			</div>



			<!--id="main-content"-->



		</div>
	</div>

	<script type="text/javascript" src="js/jobleadchina.js"></script>

	@if($errors->any())
		<ul class="alert alert-danger">
			@foreach($errors->all() as $error)
				<div class="container">
					<li>{{ $error }}</li>
				</div>

			@endforeach
		</ul>
	@endif

@stop