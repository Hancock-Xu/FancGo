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

							<form class="form-horizontal" role="form" method="POST" action="{{ url('company/send_verify_apply') }}">
								{{ csrf_field() }}

								<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
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

								<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
									<label for="email" class="col-md-4 control-label">E-Mail Address
										<i class="glyphicon glyphicon-asterisk required-item"></i>
									</label>

									<div class="col-md-6">
										<input autofocus id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

										@if ($errors->has('email'))
											<span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
										@endif
									</div>

								</div>


								<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
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


								<div class="form-group">

									<div class="business-lincense">

										<div class="upload-file">

											<div class="upload-icon">

												<embed src="{{asset('images/upload.svg')}}" type="image/svg+xml" pluginspage="http://www.adobe.com/svg/viewer/install/" />

												<label for="file">UpLoad Business Lincense</label>
												<input type="file" id="filechooser" accept="image/png,images/jpg,image/gif, image/jpng" name="businessLicenseUpload">
												<p>文件上限2MB</p>

											</div>

										</div>

										<div class="previewSelectFile">
											<img id="previewer" alt="Image previewer">
										</div>

									</div>

								</div>




								@if($company)

									{!! Form::hidden('id', $company->id) !!}

								@endif

								<div class="form-group">
									<div class="col-md-6 col-md-offset-4">
										<button type="submit" class="btn btn-primary">
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