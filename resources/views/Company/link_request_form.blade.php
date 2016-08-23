@extends('site.layout')

<!-- Main Content -->
@section('content')
	<div class="container">
		<div class="row">
			<div>
				<div class="head-verifyEmail">
					<h3>3 Steps to Open Recruitment</h3>
					<ul class="nav-justified list-unstyled recuitment-process">
						<li>
							<embed src="{{asset('images/verify_email.svg')}}" type="image/svg+xml" pluginspage="http://www.adobe.com/svg/viewer/install/" />
							<p>Verify Email</p>
						</li>
						<li>
							<embed src="{{asset('images/company_info.svg')}}" type="image/svg+xml" pluginspage="http://www.adobe.com/svg/viewer/install/" />
							<p>Company Information</p>

						</li>
						<li>
							<embed src="{{asset('images/position.svg')}}" type="image/svg+xml" pluginspage="http://www.adobe.com/svg/viewer/install/" />
							<p>Position Information</p>
						</li>
					</ul>
				</div>
				<div class="col-md-8 col-md-offset-2">
					<div class="panel panel-default">
						<div class="panel-heading">Send Verify Link</div>
						<div class="panel-body">
							@if (session('status'))
								<div class="alert alert-success">
									{{ session('status') }}
								</div>
							@endif

							<form class="form-horizontal" role="form" method="post" action= "{{action('Admin\CompanyController@storePreCompany')}}" enctype="multipart/form-data">
								{{ csrf_field() }}

								<div class="form-group {{ $errors->has('business_license_name') ? ' has-error' : '' }}">
									<label for="business_license_name" class="control-label col-md-4" >Full name of company
										<i class="glyphicon glyphicon-asterisk required-item"></i>
									</label>


									<div class="col-md-6">
										<input autofocus id="business_license_name" type="text" class="form-control" name="business_license_name" value="{{ old('business_license_name') }}">

										@if ($errors->has('business_license_name'))
											<span class="help-block">
	                                        <strong>{{ $errors->first('business_license_name') }}</strong>
	                                    </span>
										@endif
									</div>

								</div>

								<div class="form-group{{ $errors->has('company_email') ? ' has-error' : '' }}">
									<label for="company_email" class="col-md-4 control-label">E-Mail Address
										<i class="glyphicon glyphicon-asterisk required-item"></i>
									</label>

									<div class="col-md-6">
										<input autofocus id="company_email" type="email" class="form-control" name="company_email" value="{{ old('company_email') }}">

										@if ($errors->has('company_email'))
											<span class="help-block">
                                        <strong>{{ $errors->first('company_email') }}</strong>
                                    </span>
										@endif
									</div>

								</div>


								<div class="form-group {{ $errors->has('company_phone_number') ? ' has-error' : '' }}">
									<label for="company_phone_number" class="control-label col-md-4">TEl
										<i class="glyphicon glyphicon-asterisk required-item"></i>
									</label>

									<div class="col-md-6">
										<input autofocus id="company_phone_number" type="text" class="form-control" name="company_phone_number" value="{{ old('company_phone_number') }}">

										@if ($errors->has('company_phone_number'))
											<span class="help-block">
	                                        <strong>{{ $errors->first('company_phone_number') }}</strong>
	                                    </span>
										@endif
									</div>
									{{--<i class="glyphicon glyphicon-earphone icon-phone "></i>--}}
								</div>


								<div class="form-group {{ $errors->has('certificate_url') ? ' has-error' : '' }}">

									<div class="business_license">

										<div class="upload-file">

											<div class="upload-icon">

												<embed src="{{asset('images/upload.svg')}}" type="image/svg+xml" pluginspage="http://www.adobe.com/svg/viewer/install/" />

												<label for="file">UpLoad Business Lincense</label>
												<input type="file" id="filechooser" accept="image/png,images/jpg,image/gif,image/jpeg" name="certificate_url">
												<p>文件上限2MB</p>

											</div>

										</div>

										<div class="previewSelectFile">
											<img id="previewer" alt="Image Previewer">
										</div>

									</div>

								</div>

								<div class="form-group">
									{!! Form::hidden('user_id',$user->id) !!}
								</div>


								{{--@if($company)--}}

									{{--{!! Form::hidden('id', $company->id) !!}--}}

								{{--@endif--}}

								<div class="form-group form-submit-button">
									<div class="joblead_btn">
										<button type="submit" class="btn position-btn btn-primary">
											<i class="fa fa-btn fa-envelope"></i> Send Verify Link
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>


			</div>
		</div>
	</div>
@endsection