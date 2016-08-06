@extends('site.layout')

@section('content')
	
	<div class="container">

		<div id="page-container">
			<div class="container">

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
							<embed src="{{asset('images/position.svg')}}" type="image/svg+xml" pluginspage="http://www.adobe.com/svg/viewer/install/" />
							<p>Position Info</p>
						</li>
					</ul>
				</div>

				<!-- 上传公司信息 -->
				<div class="container">

						<form id="company-submit" method="post" action="#" role="form" enctype="multipart/form-data">

								<div class="company-info">

									<div class="business_license">

										<div class="company_logo_container">

											<div class="upload-file">

												<div class="upload-icon">

													<embed src="{{asset('images/upload.svg')}}" type="image/svg+xml" pluginspage="http://www.adobe.com/svg/viewer/install/" />

													<label for="file">UpLoad Company Logo</label>
													<input type="file" id="filechooser" accept="image/png,images/jpg,image/gif,image/jpeg" name="certificate_url">
													<label for="">Upper Limit 2M</label>

												</div>

											</div>

											<div class="previewSelectFile">
												<img src="" alt="Logo Previewer">
											</div>

										</div>


									</div>

									<div class="company-property-container">

										<div class="company_property">

											<div class="business_license_name">
												<label for="license_name">Business License Name</label>
												<i class="glyphicon glyphicon-asterisk required-item"></i>
												{{--<span>This name will be shown in public</span>--}}
												<input type="text" class="form-control" id="short-name" name="business_licenese_name" value="{{$company->business_license_name}}">
											</div>

											<div class="company_short_name">
												<label for="short-name">Company Name</label>
												<i class="glyphicon glyphicon-asterisk required-item"></i>
												<span>This name will be shown in public</span>
												<input type="text" class="form-control" id="short-name" name="shortName">
											</div>

											<div class="company_industry_select">

												<div class="industrywarpper">
													<div class="industryCell">
														<label for="job_industry">Company Industry</label>
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

											<div class="company_scale_founded_time">

												<div class="company-scale">
													<label for="company-size">Company Size</label>
													<i class="glyphicon glyphicon-asterisk required-item"></i>
													<select name="companySize" class="form-control" id="company-size">

														<option disabled selected>choose</option>
														<option>Less than 15</option>
														<option>15-50</option>
														<option>50-150</option>
														<option>500-2000</option>
														<option>More than 2000</option>
													</select>
													<i class="glyphicon glyphicon-menu-down arrow-down"></i>
												</div>

												<div class="company-foundedtime">
													<label for="company-founded">Founded Year</label>
													<i class="glyphicon glyphicon-asterisk required-item"></i>
													<select name="companyFoundedTime" class="form-control" id="company-founded">
														<option value="1980">1980</option>
														<option value="1981">1981</option>
														<option value="1982">1982</option>
														<option value="1983">1983</option>
														<option value="1984">1984</option>
														<option value="1985">1985</option>
														<option value="1986">1986</option>
														<option value="1987">1987</option>
														<option value="1988">1988</option>
														<option value="1989">1989</option>
														<option value="1990">1990</option>
														<option value="1991">1991</option>
														<option value="1992">1992</option>
														<option value="1993">1993</option>
														<option value="1994">1994</option>
														<option value="1995">1995</option>
														<option value="1996">1996</option>
														<option value="1997">1997</option>
														<option value="1998">1998</option>
														<option value="1999">1999</option>
														<option value="2000">2000</option>
														<option value="2001">2001</option>
														<option value="2002">2002</option>
														<option value="2003">2003</option>
														<option value="2004">2004</option>
														<option value="2005">2005</option>
														<option value="2006">2006</option>
														<option value="2007">2007</option>
														<option value="2008">2008</option>
														<option value="2009">2009</option>
														<option value="2010">2010</option>
														<option value="2011">2011</option>
														<option value="2012">2012</option>
														<option value="2013">2013</option>
														<option value="2014">2014</option>
														<option value="2015">2015</option>
														<option value="2016">2016</option>
													</select>
												</div>
											</div>

											<div class="company_website">
												<label for="company-website">Webiste</label>
												<input type="url" name="companyWebsite" class="form-control" id="company-website">
											</div>

											<div class="company_address">
												<label for="company-address">Address</label>
												<input type="text" name="companyAddress" class="form-control" id="company-address">
											</div>

										</div>

										<div class="company_description">
											<label for="company-des-content">Company Description</label>
											<i class="glyphicon glyphicon-asterisk required-item"></i>
											<textarea class="form-control" rows="8" id="company-des-content" name="companyDescription" spellcheck="true"></textarea>
										</div>

									</div>

								</div>

							<div class="form-group">
								<button type="submit" class="btn company-btn" id="company-btn">Save</span>
								</button>
							</div>

						</form>

				</div>
			</div>

			<script type="text/javascript" src="js/jobleadchina.js"></script>


		</div>
	</div>

@endsection