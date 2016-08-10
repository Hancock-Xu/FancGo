<div class="searchbar">
	<form class="searchbarForm" action="/job" method="GET">
		<div class="searchbarWapper">

			<div class="searchbarCitySelect">
				<label class="industryinputlabel" for="">
					<select class="cityselect" name="job_location">
						<option selected disabled>City</option>
						<option value="Shenzhen">Shenzhen</option>
						<option value="Shanghai">Shanghai</option>
						<option value="Guangzhou">Guangzhou</option>
						<option value="Beijing">Beijing</option>
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
						<option value="">All</option>
					</select>
				</label>
				{{--<i id="cityselecticon" class="glyphicon glyphicon-chevron-down"></i>--}}
			</div>

			<div class="searchbarJobTypeSelect" >
				<label class="industryinputlabel" for="">
				<select class="jobtypeselect" name="job_status_type">
					<option selected disabled>Job Type</option>
					<option value="full-time">Full-time</option>
					<option value="part-time">Part-time</option>
					<option value="intership">Intership</option>
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
							<input type="text" class="industryInput input-large" name="job_industry" id="selectedIndustry" value="" placeholder="Industry" autocomplete="off" readonly>
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
				<label class="industryinputlabel" for="">
					<select class="salaryselect" name="salary_range" title="Salary Range">
						<option selected disabled>Salary Range</option>
						<option value="1">Under 8K/MTH</option>
						<option value="2">8K-10KMTH</option>
						<option value="3">10K-15K/MTH</option>
						<option value="4">15K-20K/MTH</option>
						<option value="5">20K-30K/MTK</option>
						<option value="6">30K-50K/MTH</option>
						<option value="7">Above 50K/MTH</option>
						<option value="">All</option>
					</select>
				</label>
				{{--<i id="salaryselecticon" class="glyphicon glyphicon-chevron-down"></i>--}}
			</div>

			<div class="searchbarCompanyNameInput">

				<div class="industryCell">
					<label class="companyNameInputLabel" for="">

						<input type="text" class="companyNameInput input-large" name="company_name" id="companyname" value="" placeholder="Company name" autocomplete="off">

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