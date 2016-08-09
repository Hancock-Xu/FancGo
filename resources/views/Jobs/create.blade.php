@extends('site.layout')

@section('content')

	<!-- Company Info -->
	<div id="page-container">
		<div class="container">
			<!-- 步骤栏 -->
			<div class="head-verifyEmail">
				<ul class="nav-justified list-unstyled recuitment-process">
					<li>
						<embed src="{{asset('images/verify_email.svg')}}" type="image/svg+xml" pluginspage="http://www.adobe.com/svg/viewer/install/" />
						<p>Verify Email</p>
					</li>
					<li>
						<embed src="{{asset('images/company_info_success.svg')}}" type="image/svg+xml" pluginspage="http://www.adobe.com/svg/viewer/install/" />
						<p>Company Infomation</p>

					</li>
					<li>
						<embed src="{{asset('images/position_success.svg')}}" type="image/svg+xml" pluginspage="http://www.adobe.com/svg/viewer/install/" />
						<p>Position Info</p>
					</li>
				</ul>
			</div>

			<!-- 岗位信息 -->

			<div class="job_property">

				<form class="form-horizontal" id="position-submit" method="post" action="/job" role="form">

					<div class="job_property_part1">

						<div class="job_property_part1_left_part">

							<div class="job_title form-group">
								<label class="job_label" for="job-title">Job Title</label>
								<i class="glyphicon glyphicon-asterisk required-item"></i>
								<input type="text" class="form-control" id="job-title" name="job_title" spellcheck="true">
							</div>
							<div class="job_status_type form-group">
								<label class="job_label" for="employment-type">Employment Type</label>
								<i class="glyphicon glyphicon-asterisk required-item "></i>
								<select name="job_status_type " class="form-control job_select" id="employment-type ">
									<option disabled selected>Choose</option>
									<option value="Full-time ">Full-time</option>
									<option value="Part-time ">Part-time</option>
									<option value="Intership ">Intership</option>
								</select>
								{{--<span class="glyphicon glyphicon-menu-down left-arrow-down"></span>--}}
							</div>
							<div class="salary_range form-group">
								<label class="job_label" for="employment-type">Salary Per Month</label>
								<i class="glyphicon glyphicon-asterisk required-item "></i>
								<div class="choose-salary ">
									<div class="min_salary_input">
										{{--<label class="sr-only" for="min-salary " >Salary--}}
											<input type="text" name="min_salary " class="min-salary form-control " placeholder="Min ">
											<span class="salary-k ">K</span>
										{{--</label>--}}
									</div>
									<div>
										<p class="salary-to">to</p>
									</div>
									<div class="max_salary_input">
										{{--<label class="sr-only " for="min-salary " >Salary--}}
											<input type="text" name="max_salary " class="max-salary form-control" placeholder="Max">
											<span class="salary-k">K</span>
										{{--</label>--}}
									</div>
								</div>
							</div>

							<!-- Email Address and Work City -->
							<div class="resume_email form-group">
								<label class="job_label" for="resume_email" >Email Address</label>
								<i class="glyphicon glyphicon-asterisk required-item "></i>
								<span class="position-alert">This mailbox will receive resumes</span>
								<input type="email" class="form-control " name="resume_email" id="resume_email">
							</div>

						</div>

						<div class="job_property_part1_right_part">

							<label class="job_label" for="position_industry">Position Industry</label>
							<i class="glyphicon glyphicon-asterisk required-item"></i>
							<div class="job_industry form-group{{ $errors->has('company_industry') ? ' has-error' : '' }}">

									<input type="text" class="industryInput input-large form-control" name="company_industry" id="selectedIndustry" value="" placeholder="Industry" autocomplete="off" readonly>

									@if ($errors->has('company_industry'))
										<span class="help-block">
	                                        <strong>{{ $errors->first('company_industry') }}</strong>
	                                    </span>
									@endif

								<div class="job_industrylist">

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
									<option disabled selected>Choose</option>
									<option value="Executive ">Executive</option>
									<option value="Director ">Director</option>
									<option value="Mid-Senior Level ">Mid-Senior Level</option>
									<option value="Associate ">Associate</option>
									<option value="Entry Level ">Entry Level</option>
									<option value="Intership ">Intership</option>
								</select>
								{{--<i class="glyphicon glyphicon-menu-down arrow-down "></i>--}}
							</div>
							<!-- Salary and Education Degree-->

							<div class="education_degree_select form-group">
								<label class="job_label" for="education_degree">Education Degree</label>
								<i class="glyphicon glyphicon-asterisk required-item "></i>
								<select name="education_degree " class="form-control job_select" id="education_degree">
									<option disabled selected>Choose</option>
									<option value="Any education ">Any education</option>
									<option value="Associate Degree ">Associate Degree</option>
									<option value="Bachelor Degree ">Bachelor Degree</option>
									<option value="Master Degree ">Master Degree</option>
									<option value="Dr. ">Dr.</option>
								</select>
								{{--<i class="glyphicon glyphicon-menu-down arrow-down "></i>--}}
							</div>

							<div class="work_city_select form-group">
								<label class="job_label" for="work-city">Work City</label>
								<i class="glyphicon glyphicon-asterisk required-item "></i>
								<select name="work_city" class="form-control job_select" id="work-city ">
									<option disabled selected>Choose</option>
									<option value="1 ">Hongkong</option>
									<option value="2 ">Shenzhen</option>
									<option value="3 ">Beijing</option>
									<option value="4 ">Shanghai</option>
									<option value="5 ">Guangzhou</option>
									<option value="6 ">Taiwan</option>
									<option value="7 ">Chengdu</option>
									<option value="8 ">Hangzhou</option>
									<option value="9 ">Nanjing</option>
									<option value="10 ">Xi'an</option>
									<option value="11 ">Haikou</option>
									<option value="12 ">Tianjin</option>
									<option value="13 ">Wuhan</option>
									<option value="14 ">Chongqing</option>
									<option value="15 ">Kunming</option>
									<option value="16 ">Shenyang</option>
									<option value="17 ">Dongguan</option>
									<option value="18 ">Ningbo</option>
									<option value="19 ">Zhuhai</option>
									<option value="20 ">Dalian</option>
									<option value="21 ">Qingdao</option>
									<option value="22 ">Others</option>
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
							<input type="text" class="form-control" name="position_points" id="position_point" placeholder="No more than 10 words (like the following example)" spellcheck="true">
						</div>
						<div class="position-point">
							<span>
					        “Must native English speaker, and fluent in Chinese"
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
						<textarea rows="8" type="text" name="job_description" class="form-control" id="job-des-content" spellcheck="true"></textarea>
					</div>
					<!-- Desired Skills and expertise -->
					<div class="desired_skill_experience_area form-group">
						<label class="job_label" for="skills-content">Desired Skills and Expertise</label>
						<i class="glyphicon glyphicon-asterisk required-item"></i>
						<textarea class="form-control" rows="8" id="skills-content" name="desired_skill_experience" spellcheck="true"></textarea>
					</div>
					<!-- Benefit -->
					<div class="position_benefit_input form-group">
						<label class="job_label" for="benefit-content">Position Benefit</label>
						<textarea class="form-control" rows="3" id="benefit-content" name="position_benefit" spellcheck="true"></textarea>
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
					<div class="joblead_btn">
						<button type="submit" class="btn position-btn" id="position-btn">Publish Job
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