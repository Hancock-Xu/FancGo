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

						<form class="form-horizontal" id="company-submit" method="post" action="{{action('Admin\CompanyController@storeCompany')}}" role="form" enctype="multipart/form-data">

							<input type="hidden" name="_token" value="{{ csrf_token() }}">

								<div class="company-info">

									<div class="business_license">

										<div class="company_logo_container">

											<div class="upload-file">

												<div class="upload-icon">

													<embed src="{{asset('images/upload.svg')}}" type="image/svg+xml" pluginspage="http://www.adobe.com/svg/viewer/install/" />

													<label for="logo_url">UpLoad Company Logo</label>
													<input type="file" id="filechooser" accept="image/png,images/jpg,image/gif,image/jpeg" name="logo_url">
													<label for="">Upper Limit 2M</label>

												</div>

											</div>

											<div class="previewSelectFile">
												<img id="previewer" src="" alt="Logo Previewer">
											</div>

										</div>


									</div>

									<div class="company-property-container">

										<div class="company_property">

											<h1 class="company_business_license_name">{{$company->business_license_name}}</h1>

											<div class="form-group{{ $errors->has('company_name') ? ' has-error' : '' }}">
												<label for="short-name" class="col-md-4 control-label">Company Public Name
													<i class="glyphicon glyphicon-asterisk required-item"></i>
												</label>

												<div class="col-md-6">
													<input autofocus id="short-name" type="text" class="form-control" name="company_name" value="{{ old('company_name') }}">

													@if ($errors->has('company_name'))
														<span class="help-block">
					                                        <strong>{{ $errors->first('company_name') }}</strong>
					                                    </span>
													@endif
												</div>

											</div>

											<hr>

											<div class="form-group{{ $errors->has('company_industry') ? ' has-error' : '' }}">
												<label for="company_industry" class="col-md-4 control-label">Company Industry
													<i class="glyphicon glyphicon-asterisk required-item"></i>
												</label>

												<div class="col-md-6">

														<input type="text" class="industryInput input-large form-control" name="company_industry" id="selectedIndustry" value="" placeholder="Industry" autocomplete="off" readonly>

													@if ($errors->has('company_industry'))
														<span class="help-block">
					                                        <strong>{{ $errors->first('company_industry') }}</strong>
					                                    </span>
													@endif
												</div>

												<div class="industrylist">

													<div class="industrylist_row">
														<strong class="industrylist_row_name">
															Retail/Wholesale
														</strong>
														<div class="industrylist_row_content">

															<ul class="industrylist_row_1">
																<li>
																	<a href="#">Cosmetics</a>
																</li>
																<li>
																	<a href="#">Luxury</a>
																</li>
																<li>
																	<a href="#">Clothing/Shoes Store</a>
																</li>
																<li>
																	<a href="#">Food</a>
																</li>
																<li>
																	<a href="#">Furniture</a>
																</li>
																<li>
																	<a href="#">Household Appliance Stores</a>
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
																	<a href="#">Teaching Center</a>
																</li>
																<li>
																	<a href="#">School</a>
																</li>
																<li>
																	<a href="#">Translation/Proofreading</a>
																</li>
															</ul>
														</div>
													</div>


													<div class="industrylist_row">
														<strong class="industrylist_row_name">
															Business Service
														</strong>
														<div class="industrylist_row_content">

															<ul class="industrylist_row_1">
																<li>
																	<a href="#">Consultancy/Legal/Admin</a>
																</li>
																<li>
																	<a href="#">Outsourcing</a>
																</li>
																<li>
																	<a href="#">Information Technology Services</a>
																</li>
																<li>
																	<a href="#">Convention and Exhibition/Ad/PR</a>
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
															Finance
														</strong>
														<div class="industrylist_row_content">

															<ul class="industrylist_row_1">
																<li>
																	<a href="#">Accounting</a>
																</li>
																<li>
																	<a href="#">Banking</a>
																</li>
																<li>
																	<a href="#">Insurance</a>
																</li>
																<li>
																	<a href="#">Investment</a>
																</li>
															</ul>
														</div>
													</div>

													<div class="industrylist_row">
														<strong class="industrylist_row_name">
															Internet
														</strong>
														<div class="industrylist_row_content">

															<ul class="industrylist_row_1">
																<li>
																	<a href="#">Software</a>
																</li>
																<li>
																	<a href="#">Computer Hardware</a>
																</li>
																<li>
																	<a href="#">E-Commerce</a>
																</li>
																<li>
																	<a href="#">Communication</a>
																</li>
															</ul>
														</div>
													</div>

													<div class="industrylist_row">
														<strong class="industrylist_row_name">
															Real Estate/Construction
														</strong>
														<div class="industrylist_row_content">

															<ul class="industrylist_row_1">
																<li>
																	<a href="#">Real Estate</a>
																</li>
																<li>
																	<a href="#">Construction/Engineering</a>
																</li>
																<li>
																	<a href="#">Interior Decoration/Interior Design</a>
																</li>
																<li>
																	<a href="#">Commercial Center</a>
																</li>
															</ul>
														</div>
													</div>

													<div class="industrylist_row">
														<strong class="industrylist_row_name">
															Culture/Entertainment/Media
														</strong>
														<div class="industrylist_row_content">

															<ul class="industrylist_row_1">
																<li>
																	<a href="#">Media/Film</a>
																</li>
																<li>
																	<a href="#">Club/Cafe/Bar</a>
																</li>
																<li>
																	<a href="#">Model</a>
																</li>
															</ul>
														</div>
													</div>



													<div class="industrylist_row">
														<strong class="industrylist_row_name">
															Service
														</strong>
														<div class="industrylist_row_content">

															<ul class="industrylist_row_1">
																<li>
																	<a href="#">Health Care</a>
																</li>
																<li>
																	<a href="#">Beauty</a>
																</li>
																<li>
																	<a href="#">Tourism</a>
																</li>
																<li>
																	<a href="#">Hotel</a>
																</li>
															</ul>
														</div>
													</div>

													<div class="industrylist_row">
														<strong class="industrylist_row_name">
															Producting/Processing/Manufacturing
														</strong>
														<div class="industrylist_row_content">

															<ul class="industrylist_row_1">
																<li>
																	<a href="#">Printing/Package</a>
																</li>
																<li>
																	<a href="#">Office Supplies & Equipment</a>
																</li>
																<li>
																	<a href="#">Medical Facility</a>
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

											<div class="form-group{{ $errors->has('scale') ? ' has-error' : '' }}">
												<label for="scale" class="col-md-4 control-label">Company Size
													<i class="glyphicon glyphicon-asterisk required-item"></i>
												</label>

												<div class="col-md-6">

													<select name="scale" class="form-control" id="company_scale">
														<option disabled selected>choose</option>
														<option>Less than 15</option>
														<option>15-50</option>
														<option>50-150</option>
														<option>500-2000</option>
														<option>More than 2000</option>
													</select>

													@if ($errors->has('scale'))
														<span class="help-block">
					                                        <strong>{{ $errors->first('scale') }}</strong>
					                                    </span>
													@endif
												</div>

											</div>

											<div class="form-group{{ $errors->has('founder_time') ? ' has-error' : '' }}">
												<label for="founder_time" class="col-md-4 control-label">Establishment Date
													<i class="glyphicon glyphicon-asterisk required-item"></i>
												</label>

												<div class="col-md-6">
													<select name="founder_time" class="form-control" id="company_founder_time">
														<option disabled selected>choose</option>
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
													@if ($errors->has('founder_time'))
														<span class="help-block">
					                                        <strong>{{ $errors->first('founder_time') }}</strong>
					                                    </span>
													@endif
												</div>

											</div>


											<div class="form-group{{ $errors->has('company_location') ? ' has-error' : '' }}">
												<label for="company_location" class="col-md-4 control-label">Location City
													<i class="glyphicon glyphicon-asterisk required-item"></i>
												</label>

												<div class="col-md-6">

													<select class="cityselect form-control" name="company_location" id="company_location">
														<option disabled selected>Choose</option>
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

													@if ($errors->has('company_location'))
														<span class="help-block">
					                                        <strong>{{ $errors->first('company_location') }}</strong>
					                                    </span>
													@endif
												</div>

											</div>

											<div class="form-group{{ $errors->has('company_address') ? ' has-error' : '' }}">
												<label for="company_address" class="col-md-4 control-label">Company Address
													<i class="glyphicon glyphicon-asterisk required-item"></i>
												</label>

												<div class="col-md-6">
													<input autofocus id="company_address" type="text" class="form-control" name="company_address" value="{{ old('company_address') }}">

													@if ($errors->has('company_address'))
														<span class="help-block">
					                                        <strong>{{ $errors->first('company_address') }}</strong>
					                                    </span>
													@endif
												</div>

											</div>

											<div class="form-group{{ $errors->has('company_website') ? ' has-error' : '' }}">
												<label for="company_website" class="col-md-4 control-label">Company Website
													<i class="glyphicon glyphicon-asterisk required-item"></i>
												</label>

												<div class="col-md-6">
													<input id="company_website" type="url" class="form-control" name="company_website" value="{{ old('company_website') }}">

													@if ($errors->has('company_website'))
														<span class="help-block">
					                                        <strong>{{ $errors->first('company_website') }}</strong>
					                                    </span>
													@endif
												</div>

											</div>

											<hr>



										</div>

										<div class="form-group{{ $errors->has('company_description') ? ' has-error' : '' }}">
											<label for="company_description" class="col-md-4 control-label">Company Description
												<i class="glyphicon glyphicon-asterisk required-item"></i>
											</label>

											<div class="col-md-6">

												<textarea name="company_description" id="company_description" cols="20" rows="15" spellcheck="true" class="form-control"></textarea>

											@if ($errors->has('company_description'))
													<span class="help-block">
					                                        <strong>{{ $errors->first('company_description') }}</strong>
					                                    </span>
												@endif
											</div>

										</div>


									</div>

								</div>

							<div class="form-group form-submit-button">
								<div class="col-md-6 col-md-offset-4">
									<button type="submit" class="btn company-btn btn-primary">
										<i class="fa fa-btn fa-envelope"></i> Save
									</button>
								</div>
							</div>

						</form>

				</div>
			</div>

			<script type="text/javascript" src="js/jobleadchina.js"></script>


		</div>
	</div>

@endsection