<div class="searchbar">
	<form class="searchbarForm" action="/job" method="GET">
		<div class="searchbarWapper">

			<div class="searchbarCitySelect">
				<label class="industryinputlabel" for="">
					<select class="cityselect" name="job_location">
						<option selected disabled>City</option>
						<option value="Shen Zhen">Shen Zhen</option>
						<option value="Shang Hai">Shang Hai</option>
						<option value="Guang Zhou">Guang Zhou</option>
						<option value="Bei Jing">Bei Jing</option>
						<option value="Hong Kong">Hong Kong</option>
						<option value="Macao">Macao</option>
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

				@include('site.industryselectlist')


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