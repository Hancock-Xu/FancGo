<div class="searchbar">
	<form class="searchbarForm" action="/job" method="GET">
		<div class="searchbarWapper">

			<div class="searchbarCitySelect">
				<label class="industryinputlabel" for="work_city">
					<select class="cityselect" name="work_city" id="work_city">
						<option selected disabled>City</option>
						@if($condition_search)

							<option value="Shenzhen" {{ $work_city == "Shenzhen" ? "selected":""}}>Shenzhen</option>
							<option value="Beijing" {{ $work_city == "Beijing" ? "selected":""}}>Beijing</option>
							<option value="Shanghai" {{ $work_city == "Shanghai" ? "selected":""}}>Shanghai</option>
							<option value="Guangzhou" {{ $work_city == "Guangzhou" ? "selected":""}}>Guangzhou</option>
							<option value="Chengdu" {{ $work_city == "Chengdu" ? "selected":""}}>Chengdu</option>
							<option value="Hangzhou" {{ $work_city == "Hangzhou" ? "selected":""}}>Hangzhou</option>
							<option value="Nanjing" {{ $work_city == "Nanjing" ? "selected":""}}>Nanjing</option>
							<option value="Xi'an" {{ $work_city == "Xi'an" ? "selected":""}}>Xi'an</option>
							<option value="Haikou" {{ $work_city == "Haikou" ? "selected":""}}>Haikou</option>
							<option value="Tianjin" {{ $work_city == "Tianjin" ? "selected":""}}>Tianjin</option>
							<option value="Wuhan" {{ $work_city == "Wuhan" ? "selected":""}}>Wuhan</option>
							<option value="Chongqing" {{ $work_city == "Chongqing" ? "selected":""}}>Chongqing</option>
							<option value="Kunming" {{ $work_city == "Kunming" ? "selected":""}}>Kunming</option>
							<option value="Shenyang" {{ $work_city == "Shenyang" ? "selected":""}}>Shenyang</option>
							<option value="Dongguan" {{ $work_city == "Dongguan" ? "selected":""}}>Dongguan</option>
							<option value="Ningbo" {{ $work_city == "Ningbo" ? "selected":""}}>Ningbo</option>
							<option value="Zhuhai" {{ $work_city == "Zhuhai" ? "selected":""}}>Zhuhai</option>
							<option value="Dalian" {{ $work_city == "Dalian" ? "selected":""}}>Dalian</option>
							<option value="Qingdao" {{ $work_city == "Qingdao" ? "selected":""}}>Qingdao</option>
							<option value="Hongkong" {{ $work_city == "Hongkong" ? "selected":""}}>Hongkong</option>
							<option value="Macao" {{ $work_city == "Macao" ? "selected":""}}>Macao</option>
							<option value="Taiwan" {{ $work_city == "Taiwan" ? "selected":""}}>Taiwan</option>
							<option value="Others" {{ $work_city == "Others" ? "selected":""}}>Others</option>
						@else
							<option value="Shenzhen">Shenzhen</option>
							<option value="Beijing">Beijing</option>
							<option value="Shanghai">Shanghai</option>
							<option value="Guangzhou">Guangzhou</option>
							<option value="Chengdu">Chengdu</option>
							<option value="Hangzhou">Hangzhou</option>
							<option value="Nanjing">Nanjing</option>
							<option value="Xi'an">Xi'an</option>
							<option value="Haikou">Haikou</option>
							<option value="Tianjin">Tianjin</option>
							<option value="Wuhan">Wuhan</option>
							<option value="Chongqing">Chongqing</option>
							<option value="Kunming">Kunming</option>
							<option value="Shenyang">Shenyang</option>
							<option value="Dongguan">Dongguan</option>
							<option value="Ningbo">Ningbo</option>
							<option value="Zhuhai">Zhuhai</option>
							<option value="Dalian">Dalian</option>
							<option value="Qingdao">Qingdao</option>
							<option value="Hongkong">Hongkong</option>
							<option value="Macao">Macao</option>
							<option value="Taiwan">Taiwan</option>
							<option value="Others">Others</option>
						@endif
						<option value="">All</option>
					</select>
				</label>
				{{--<i id="cityselecticon" class="glyphicon glyphicon-chevron-down"></i>--}}
			</div>

			<div class="searchbarJobTypeSelect" >
				<label class="industryinputlabel" for="job_status_type">
				<select class="jobtypeselect" name="job_status_type" id="job_status_type">
					<option selected disabled>Job Type</option>
					@if($condition_search)
						<option value="full-time" {{$job_status_type == "full-time"?"selected":""}}>Full-time</option>
						<option value="part-time" {{$job_status_type == "part-time"?"selected":""}}>Part-time</option>
						<option value="internship" {{$job_status_type == "internship"?"selected":""}}>Internship</option>
					@else
						<option value="full-time">Full-time</option>
						<option value="part-time">Part-time</option>
						<option value="internship">Internship</option>
					@endif
					<option value="">All</option>
				</select>
				</label>
				{{--<i id="jobtypeselecticon" class="glyphicon glyphicon-chevron-down"></i>--}}
			</div>

			<div class="searchbarIndustrySelect">

				<div class="industrywarpper">
					<div class="industryCell">
						<label class="industryinputlabel" for="job_industry">
							<!--<span class="inputplaceholderlabel">Industry</span>-->
							@if($condition_search)
								<input type="text" class="industryInput input-large" name="job_industry" id="job_industry" value="{{$job_industry}}" placeholder="Industry" autocomplete="off" readonly>
							@else
								<input type="text" class="industryInput input-large" name="job_industry" id="job_industry" value="" placeholder="Industry" autocomplete="off" readonly>
							@endif
						{{--<i id="industryselecticon" class="glyphicon glyphicon-chevron-down"></i>--}}
						<!--<span class="caret"></span>-->
						</label>

					</div>

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


			</div>

			<div class="searchbarSalarySelect">
				<label class="industryinputlabel" for="salary_range">
					<select class="salaryselect" name="salary_range" id="salary_range" title="Salary Range">
						<option selected disabled>Salary Range</option>
						@if($condition_search)
							<option value="1" {{$salary_range == "1" ? "selected" : ""}}>Under 8K/MTH</option>
							<option value="2" {{$salary_range == "2" ? "selected" : ""}}>8K-10KMTH</option>
							<option value="3" {{$salary_range == "3" ? "selected" : ""}}>10K-15K/MTH</option>
							<option value="4" {{$salary_range == "4" ? "selected" : ""}}>15K-20K/MTH</option>
							<option value="5" {{$salary_range == "5" ? "selected" : ""}}>20K-30K/MTK</option>
							<option value="6" {{$salary_range == "6" ? "selected" : ""}}>30K-50K/MTH</option>
							<option value="7" {{$salary_range == "7" ? "selected" : ""}}>Above 50K/MTH</option>
						@else
							<option value="1">Under 8K/MTH</option>
							<option value="2">8K-10KMTH</option>
							<option value="3">10K-15K/MTH</option>
							<option value="4">15K-20K/MTH</option>
							<option value="5">20K-30K/MTK</option>
							<option value="6">30K-50K/MTH</option>
							<option value="7">Above 50K/MTH</option>
						@endif
						<option value="">All</option>
					</select>
				</label>
				{{--<i id="salaryselecticon" class="glyphicon glyphicon-chevron-down"></i>--}}
			</div>

			<div class="searchbarCompanyNameInput">

				<div class="industryCell">
					<label class="companyNameInputLabel" for="company_name">

						<input type="text" class="companyNameInput input-large" name="company_name" id="company_name" value="" placeholder="Company name" autocomplete="off">

					</label>
				</div>

			</div>

		</div>
		<div class="searchbarSearchButton">
			<button class="btn-searchbar searchbarButton" type="submit">
				Search
			</button>
		</div>
	</form>
</div>