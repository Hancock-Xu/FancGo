@extends('site.layout')

@section('content')

	<div class="container">

		<div id="page-container">
			<div class="container">

				<!-- 上传公司信息 -->
				<div class="container">

					<form class="form-horizontal" id="company-submit" method="post" action="{{action('Admin\CompanyController@storeCompany')}}" role="form" enctype="multipart/form-data">

						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<h2>Edit Company Info</h2>
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
											<input autofocus id="short-name" type="text" class="form-control" name="company_name" value="{{ $company->company_name }}">

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

											<input type="text" class="industryInput input-large form-control" name="company_industry" id="selectedIndustry" value="{{$company->company_industry}}" placeholder="Industry" autocomplete="off" readonly>

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
												<option disabled {{$company->scale == null ? 'selected' : ''}}>choose</option>
												<option value=1 {{$company->scale == '< 15' ? 'selected' : ''}}>Less than 15</option>
												<option value=2 {{$company->scale == '15~50' ? 'selected' : ''}}>15-50</option>
												<option value=3 {{$company->scale == '50~150' ? 'selected' : ''}}>50-150</option>
												<option value=4 {{$company->scale == '150~500' ? 'selected' : ''}}>150-500</option>
												<option value=5 {{$company->scale == '500~2000' ? 'selected' : ''}}>500-2000</option>
												<option value=6 {{$company->scale == '> 2000' ? 'selected' : ''}}>More than 2000</option>
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
												<option value="1980" {{$company->founder_time == '1980' ? 'selected' : ''}}>1980</option>
												<option value="1981" {{$company->founder_time == '1981' ? 'selected' : ''}}>1981</option>
												<option value="1982" {{$company->founder_time == '1982' ? 'selected' : ''}}>1982</option>
												<option value="1983" {{$company->founder_time == '1983' ? 'selected' : ''}}>1983</option>
												<option value="1984" {{$company->founder_time == '1984' ? 'selected' : ''}}>1984</option>
												<option value="1985" {{$company->founder_time == '1985' ? 'selected' : ''}}>1985</option>
												<option value="1986" {{$company->founder_time == '1986' ? 'selected' : ''}}>1986</option>
												<option value="1987" {{$company->founder_time == '1987' ? 'selected' : ''}}>1987</option>
												<option value="1988" {{$company->founder_time == '1988' ? 'selected' : ''}}>1988</option>
												<option value="1989" {{$company->founder_time == '1989' ? 'selected' : ''}}>1989</option>
												<option value="1990" {{$company->founder_time == '1990' ? 'selected' : ''}}>1990</option>
												<option value="1991" {{$company->founder_time == '1991' ? 'selected' : ''}}>1991</option>
												<option value="1992" {{$company->founder_time == '1992' ? 'selected' : ''}}>1992</option>
												<option value="1993" {{$company->founder_time == '1993' ? 'selected' : ''}}>1993</option>
												<option value="1994" {{$company->founder_time == '1994' ? 'selected' : ''}}>1994</option>
												<option value="1995" {{$company->founder_time == '1995' ? 'selected' : ''}}>1995</option>
												<option value="1996" {{$company->founder_time == '1996' ? 'selected' : ''}}>1996</option>
												<option value="1997" {{$company->founder_time == '1997' ? 'selected' : ''}}>1997</option>
												<option value="1998" {{$company->founder_time == '1998' ? 'selected' : ''}}>1998</option>
												<option value="1999" {{$company->founder_time == '1999' ? 'selected' : ''}}>1999</option>
												<option value="2000" {{$company->founder_time == '2000' ? 'selected' : ''}}>2000</option>
												<option value="2001" {{$company->founder_time == '2001' ? 'selected' : ''}}>2001</option>
												<option value="2002" {{$company->founder_time == '2002' ? 'selected' : ''}}>2002</option>
												<option value="2003" {{$company->founder_time == '2003' ? 'selected' : ''}}>2003</option>
												<option value="2004" {{$company->founder_time == '2004' ? 'selected' : ''}}>2004</option>
												<option value="2005" {{$company->founder_time == '2005' ? 'selected' : ''}}>2005</option>
												<option value="2006" {{$company->founder_time == '2006' ? 'selected' : ''}}>2006</option>
												<option value="2007" {{$company->founder_time == '2007' ? 'selected' : ''}}>2007</option>
												<option value="2008" {{$company->founder_time == '2008' ? 'selected' : ''}}>2008</option>
												<option value="2009" {{$company->founder_time == '2009' ? 'selected' : ''}}>2009</option>
												<option value="2010" {{$company->founder_time == '2010' ? 'selected' : ''}}>2010</option>
												<option value="2011" {{$company->founder_time == '2011' ? 'selected' : ''}}>2011</option>
												<option value="2012" {{$company->founder_time == '2012' ? 'selected' : ''}}>2012</option>
												<option value="2013" {{$company->founder_time == '2013' ? 'selected' : ''}}>2013</option>
												<option value="2014" {{$company->founder_time == '2014' ? 'selected' : ''}}>2014</option>
												<option value="2015" {{$company->founder_time == '2015' ? 'selected' : ''}}>2015</option>
												<option value="2016" {{$company->founder_time == '2016' ? 'selected' : ''}}>2016</option>
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
												<option disabled {{$company->company_location == null ? 'selected' : ''}}>Choose</option>
												<option value="Work City" {{ $company->company_location == "Work City" ? "selected":""}}>Work City</option>
												<option value="Hongkong" {{ $company->company_location == "Hongkong" ? "selected":""}}>Hongkong</option>
												<option value="Shenzhen" {{ $company->company_location == "Shenzhen" ? "selected":""}}>Shenzhen</option>
												<option value="Beijing" {{ $company->company_location == "Beijing" ? "selected":""}}>Beijing</option>
												<option value="Shanghai" {{ $company->company_location == "Shanghai" ? "selected":""}}>Shanghai</option>
												<option value="Guangzhou" {{ $company->company_location == "Guangzhou" ? "selected":""}}>Guangzhou</option>
												<option value="Taiwan" {{ $company->company_location == "Taiwan" ? "selected":""}}>Taiwan</option>
												<option value="Chengdu" {{ $company->company_location == "Chengdu" ? "selected":""}}>Chengdu</option>
												<option value="Hangzhou" {{ $company->company_location == "Hangzhou" ? "selected":""}}>Hangzhou</option>
												<option value="Nanjing" {{ $company->company_location == "Nanjing" ? "selected":""}}>Nanjing</option>
												<option value="Xi'an" {{ $company->company_location == "Xi'an" ? "selected":""}}>Xi'an</option>
												<option value="Haikou" {{ $company->company_location == "Haikou" ? "selected":""}}>Haikou</option>
												<option value="Tianjin" {{ $company->company_location == "Tianjin" ? "selected":""}}>Tianjin</option>
												<option value="Wuhan" {{ $company->company_location == "Wuhan" ? "selected":""}}>Wuhan</option>
												<option value="Chongqing" {{ $company->company_location == "Chongqing" ? "selected":""}}>Chongqing</option>
												<option value="Kunming" {{ $company->company_location == "Kunming" ? "selected":""}}>Kunming</option>
												<option value="Shenyang" {{ $company->company_location == "Shenyang" ? "selected":""}}>Shenyang</option>
												<option value="Dongguan" {{ $company->company_location == "Dongguan" ? "selected":""}}>Dongguan</option>
												<option value="Ningbo" {{ $company->company_location == "Ningbo" ? "selected":""}}>Ningbo</option>
												<option value="Zhuhai" {{ $company->company_location == "Zhuhai" ? "selected":""}}>Zhuhai</option>
												<option value="Dalian" {{ $company->company_location == "Dalian" ? "selected":""}}>Dalian</option>
												<option value="Qingdao" {{ $company->company_location == "Qingdao" ? "selected":""}}>Qingdao</option>
												<option value="Others" {{ $company->company_location == "Others" ? "selected":""}}>Others</option>
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
											<input id="company_address" type="text" class="form-control" name="company_address" value="{{ $company->company_address }}">

											@if ($errors->has('company_address'))
												<span class="help-block">
			                                        <strong>{{ $errors->first('company_address') }}</strong>
			                                    </span>
											@endif
										</div>

									</div>

									<div class="form-group{{ $errors->has('website') ? ' has-error' : '' }}">
										<label for="company_website" class="col-md-4 control-label">Company Website
											<i class="glyphicon glyphicon-asterisk required-item"></i>
										</label>

										<div class="col-md-6">
											<input id="company_website" type="url" class="form-control" name="website" value="{{ $company->website }}">

											@if ($errors->has('website'))
												<span class="help-block">
			                                        <strong>{{ $errors->first('website') }}</strong>
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

										<textarea name="company_description" id="company_description" cols="20" rows="15" spellcheck="true" class="form-control">{{$company->company_description}}</textarea>

										@if ($errors->has('company_description'))
											<span class="help-block">
		                                        <strong>{{ $errors->first('company_description') }}</strong>
		                                    </span>
										@endif
									</div>

								</div>


							</div>

						</div>

						<h2>Edit Position</h2>
						<div class="refine-position">

							@if(count($jobs)>0)

								@foreach($jobs as $job)
									<div class="refine-position-item">

										<h3 class="refine-position-item-title">{{$job->job_title}}</h3>
										<div class="refine-position-item-point">
											<span>{{$job->min_salary}}K - {{$job->max_salary}}K</span>
											<span class="seperate-line"></span>
											<span>{{$job->education_degree}}</span>
											<span class="seperate-line"></span>
											<span>Experience:&nbsp;{{$job->position_experience}}</span>
											<span class="seperate-line"></span>
											<span>{{$job->job_status_type}}</span>
										</div>
										<div class="refine-position-item-edit">
											<span class="updated-time" >Updated time:&nbsp;{{ date('F d, Y', strtotime($job->updated_at)) }}</span>
											<div class="refine-links pull-right">
												<a  class="job-refresh">Refresh</a>
												<a href="{{action('Admin\JobController@edit', $job->id)}}" class="job-edit" target="_blank">Edit</a>
												<a href="">Delete</a>
											</div>
										</div>
									</div>
								@endforeach

							@else

								<h2>No other jobs</h2>

							@endif



						</div><!--refine company position-->



						<div class="form-group form-submit-button">
							<div class="joblead_btn">
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