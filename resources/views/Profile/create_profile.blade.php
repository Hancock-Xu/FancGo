@extends('site.layout')

@section('linked_script')
	{!! Html::script('js/select_input_file.js') !!}
@endsection


@section('content')

	<div class="container">


			{{--<input type="hidden" name="_method" value="put">--}}

			<div class="company-info">

				<div class="business_license {{ $errors->has('resume_url') ? ' has-error' : '' }}">

					<div class="company_logo_container">

						<form class="form-horizontal" id="resume_chooser_form" method="post" role="form" enctype="multipart/form-data" action="{{action('Admin\ProfileController@uploadResume')}}">

							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<div class="upload-file">

								<div class="upload-icon">

									<embed src="{{asset('images/upload.svg')}}" type="image/svg+xml" pluginspage="http://www.adobe.com/svg/viewer/install/" />

									@if($user->resume_url)
										<label for="logo_url">Update your Resume</label>
									@else
										<label for="logo_url">UpLoad your Resume</label>
									@endif

										<input class="resume_chooser" type="file" id="files" accept="application/pdf" name="resume_url">
										<label for="">Upper Limit 2M</label>
										<label for="">Only Accept PDF</label>

										<br/>

										@if($user->resume_url)
											<label for="" class="showFileName">PDF: resume.pdf</label>
										@else
											<label id="progress" for="" class="showFileName"></label>
										@endif




									<script type="text/javascript">

										$(".resume_chooser").change(function () {
											var filePath=$(this).val();
											if(filePath.indexOf("pdf")!=-1 || filePath.indexOf("PDF")!=-1){
												$(".fileerrorTip").html("").hide();
												var arr=filePath.split('\\');
												var fileName=arr[arr.length-1];
												$(".showFileName").html(fileName);
											}else{
												$(".showFileName").html("");
												$(".fileerrorTip").html("您未上传文件，或者您上传文件类型有误！").show();
												return false;
											}
										});
									</script>
								</div>
								<i class="glyphicon glyphicon-asterisk required-item"></i>



							</div>

							<div class="form-group form-submit-button">
								<button type="submit" class="btn upload_resume-btn btn-primary">
									<i class="fa fa-btn fa-envelope"></i> Upload Resume
								</button>
							</div>

						</form>

						@if ($errors->has('resume_url'))
							<span class="help-block">
                            <strong>{{ $errors->first('resume_url') }}</strong>
                        </span>
						@endif

						<div class="previewSelectFile">

							<object class="pdfViewer" data="{{$user->resume_url}}" type="application/pdf" width="100%" height="100%"></object>
						</div>


					</div>



				</div>

				<div class="company_property_form">
					<form class="form-horizontal" method="post" role="form" enctype="multipart/form-data" action="{{action('Admin\ProfileController@storeProfile')}}">

						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="company-property-container">

							<div class="company_property">

								<h1 class="company_business_license_name">{{$user->first_name}} {{$user->last_name}}</h1>

								<div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
									<label for="first_name" class="col-md-4 control-label">First Name
										<i class="glyphicon glyphicon-asterisk required-item"></i>
									</label>

									<div class="col-md-6">
										<input id="first_name" type="text" class="form-control" name="first_name" value="{{ $user->first_name }}">

										@if ($errors->has('first_name'))
											<span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
										@endif
									</div>
								</div>

								<div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
									<label for="last_name" class="col-md-4 control-label">Last Name
										<i class="glyphicon glyphicon-asterisk required-item"></i>
									</label>

									<div class="col-md-6">
										<input id="last_name" type="text" class="form-control" name="last_name" value="{{ $user->last_name }}">

										@if ($errors->has('last_name'))
											<span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
										@endif
									</div>
								</div>

								<div class="form-group {{ $errors->has('phone_number') ? ' has-error' : '' }}">
									<label for="short-name" class="col-md-4 control-label">Phone Number
										<i class="glyphicon glyphicon-asterisk required-item"></i>
									</label>

									<div class="col-md-6">
										<input id="short-name" type="text" class="form-control" name="phone_number" value="{{ old('phone_number') }}">

										@if ($errors->has('phone_number'))
											<span class="help-block">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
										@endif
									</div>

								</div>

								<hr>

								<div class="form-group{{ $errors->has('sex') ? ' has-error' : '' }}">
									<label for="sex" class="col-md-4 control-label">Gender
										<i class="glyphicon glyphicon-asterisk required-item"></i>
									</label>

									<div class="col-md-6">

										<select name="sex" class="form-control" id="sex" onselect="{{$user->sex}}">
											<option disabled {{ $user->sex == null ? 'selected':''}}>choose</option>
											<option value=1 {{ $user->sex == 'Male' ? 'selected':''}}>Male</option>
											<option value=2 {{ $user->sex == 'Female' ? 'selected':''}}>Female</option>
											<option value=3 {{ $user->sex == 'Can not tell' ? 'selected':''}}>Can not tell</option>
										</select>

										@if ($errors->has('sex'))
											<span class="help-block">
                                        <strong>{{ $errors->first('sex') }}</strong>
                                    </span>
										@endif

									</div>

								</div>

								<div class="form-group{{ $errors->has('date_of_birth') ? ' has-error' : '' }}">
									<label for="date_of_birth" class="col-md-4 control-label">Date of Birth
										<i class="glyphicon glyphicon-asterisk required-item"></i>
									</label>

									<div class="col-md-6">
										<input id="date_of_birth" type="date" class="form-control" name="date_of_birth" value="{{ old('date_of_birth')}}">

										@if ($errors->has('date_of_birth'))
											<span class="help-block">
                                        <strong>{{ $errors->first('date_of_birth') }}</strong>
                                    </span>
										@endif
									</div>

								</div>




								<div class="form-group{{ $errors->has('nationality') ? ' has-error' : '' }}">
									<label for="nationality" class="col-md-4 control-label">Nationality
										<i class="glyphicon glyphicon-asterisk required-item"></i>
									</label>

									<div class="col-md-6">
										<select name="nationality" class="form-control" id="nationality" onselect="{{$user->nationality}}">
											<option disabled selected>choose</option>
											<option value="Afghanistan" {{ $user->nationality == "Afghanistan" ? "selected":""}}>Afghanistan</option>
											<option value="Albania" {{ $user->nationality == "Albania" ? "selected":""}}>Albania</option>
											<option value="Algeria" {{ $user->nationality == "Algeria" ? "selected":""}}>Algeria</option>
											<option value="Andorra" {{ $user->nationality == "Andorra" ? "selected":""}}>Andorra</option>
											<option value="Angola" {{ $user->nationality == "Angola" ? "selected":""}}>Angola</option>
											<option value="Antigua & Barbuda" {{ $user->nationality == "Antigua & Barbuda" ? "selected":""}}>Antigua & Barbuda</option>
											<option value="Argentina" {{ $user->nationality == "Argentina" ? "selected":""}}>Argentina</option>
											<option value="Armenia" {{ $user->nationality == "Armenia" ? "selected":""}}>Armenia</option>
											<option value="Aruba" {{ $user->nationality == "Aruba" ? "selected":""}}>Aruba</option>
											<option value="Australia" {{ $user->nationality == "Australia" ? "selected":""}}>Australia</option>
											<option value="Austria" {{ $user->nationality == "Austria" ? "selected":""}}>Austria</option>
											<option value="Azerbaijan" {{ $user->nationality == "Azerbaijan" ? "selected":""}}>Azerbaijan</option>
											<option value="Bahamas" {{ $user->nationality == "Bahamas" ? "selected":""}}>Bahamas</option>
											<option value="Bahrain" {{ $user->nationality == "Bahrain" ? "selected":""}}>Bahrain</option>
											<option value="Bangladesh" {{ $user->nationality == "Bangladesh" ? "selected":""}}>Bangladesh</option>
											<option value="Barbados" {{ $user->nationality == "Barbados" ? "selected":""}}>Barbados</option>
											<option value="Belarus" {{ $user->nationality == "Belarus" ? "selected":""}}>Belarus</option>
											<option value="Belgium" {{ $user->nationality == "Belgium" ? "selected":""}}>Belgium</option>
											<option value="Belize" {{ $user->nationality == "Belize" ? "selected":""}}>Belize</option>
											<option value="Benin" {{ $user->nationality == "Benin" ? "selected":""}}>Benin</option>
											<option value="Bermuda" {{ $user->nationality == "Bermuda" ? "selected":""}}>Bermuda</option>
											<option value="Bhutan" {{ $user->nationality == "Bhutan" ? "selected":""}}>Bhutan</option>
											<option value="Bolivia" {{ $user->nationality == "Bolivia" ? "selected":""}}>Bolivia</option>
											<option value="Bosnia-Herzegovina" {{ $user->nationality == "Bosnia-Herzegovina" ? "selected":""}}>Bosnia-Herzegovina</option>
											<option value="Botswana" {{ $user->nationality == "Botswana" ? "selected":""}}>Botswana</option>
											<option value="Brazil" {{ $user->nationality == "Brazil" ? "selected":""}}>Brazil</option>
											<option value="Brunei" {{ $user->nationality == "Brunei" ? "selected":""}}>Brunei</option>
											<option value="Bulgaria" {{ $user->nationality == "Bulgaria" ? "selected":""}}>Bulgaria</option>
											<option value="Cambodia" {{ $user->nationality == "Cambodia" ? "selected":""}}>Cambodia</option>
											<option value="Cameroon" {{ $user->nationality == "Cameroon" ? "selected":""}}>Cameroon</option>
											<option value="Canada" {{ $user->nationality == "Canada" ? "selected":""}}>Canada</option>
											<option value="Cape Verde" {{ $user->nationality == "Cape Verde" ? "selected":""}}>Cape Verde</option>
											<option value="Cayman Islands" {{ $user->nationality == "Cayman Islands" ? "selected":""}}>Cayman Islands</option>
											<option value="Chad" {{ $user->nationality == "Chad" ? "selected":""}}>Chad</option>
											<option value="Chile" {{ $user->nationality == "Chile" ? "selected":""}}>Chile</option>
											<option value="China" {{ $user->nationality == "China" ? "selected":""}}>China</option>
											<option value="Colombia" {{ $user->nationality == "Colombia" ? "selected":""}}>Colombia</option>
											<option value="Comoros" {{ $user->nationality == "Comoros" ? "selected":""}}>Comoros</option>
											<option value="Congo" {{ $user->nationality == "Congo" ? "selected":""}}>Congo</option>
											<option value="Cook Islands" {{ $user->nationality == "Cook Islands" ? "selected":""}}>Cook Islands</option>
											<option value="Costa Rica" {{ $user->nationality == "Costa Rica" ? "selected":""}}>Costa Rica</option>
											<option value="Croatia" {{ $user->nationality == "Croatia" ? "selected":""}}>Croatia</option>
											<option value="Cuba" {{ $user->nationality == "Cuba" ? "selected":""}}>Cuba</option>
											<option value="Cyprus" {{ $user->nationality == "Cyprus" ? "selected":""}}>Cyprus</option>
											<option value="Czech Republic" {{ $user->nationality == "Czech Republic" ? "selected":""}}>Czech Republic</option>
											<option value="Denmark" {{ $user->nationality == "Denmark" ? "selected":""}}>Denmark</option>
											<option value="Dominica" {{ $user->nationality == "Dominica" ? "selected":""}}>Dominica</option>
											<option value="Ecuador" {{ $user->nationality == "Ecuador" ? "selected":""}}>Ecuador</option>
											<option value="Egypt" {{ $user->nationality == "Egypt" ? "selected":""}}>Egypt</option>
											<option value="EI Salvador" {{ $user->nationality == "EI Salvador" ? "selected":""}}>EI Salvador</option>
											<option value="England" {{ $user->nationality == "England" ? "selected":""}}>England</option>
											<option value="Equatorial Guinea" {{ $user->nationality == "Equatorial Guinea" ? "selected":""}}>Equatorial Guinea</option>
											<option value="Eritrea" {{ $user->nationality == "Eritrea" ? "selected":""}}>Eritrea</option>
											<option value="Estonia" {{ $user->nationality == "Estonia" ? "selected":""}}>Estonia</option>
											<option value="Ethiopia" {{ $user->nationality == "Ethiopia" ? "selected":""}}>Ethiopia</option>
											<option value="Falkland Islands" {{ $user->nationality == "Falkland Islands" ? "selected":""}}>Falkland Islands</option>
											<option value="Faroe Islands" {{ $user->nationality == "Faroe Islands" ? "selected":""}}>Faroe Islands</option>
											<option value="Fiji" {{ $user->nationality == "Fiji" ? "selected":""}}>Fiji</option>
											<option value="Finland" {{ $user->nationality == "Finland" ? "selected":""}}>Finland</option>
											<option value="France" {{ $user->nationality == "France" ? "selected":""}}>France</option>
											<option value="Gabon" {{ $user->nationality == "Gabon" ? "selected":""}}>Gabon</option>
											<option value="Gambia" {{ $user->nationality == "Gambia" ? "selected":""}}>Gambia</option>
											<option value="Germany" {{ $user->nationality == "Germany" ? "selected":""}}>Germany</option>
											<option value="Ghana" {{ $user->nationality == "Ghana" ? "selected":""}}>Ghana</option>
											<option value="Greece" {{ $user->nationality == "Greece" ? "selected":""}}>Greece</option>
											<option value="Greenland" {{ $user->nationality == "Greenland" ? "selected":""}}>Greenland</option>
											<option value="Grenada" {{ $user->nationality == "Grenada" ? "selected":""}}>Grenada</option>
											<option value="Guatemala" {{ $user->nationality == "Guatemala" ? "selected":""}}>Guatemala</option>
											<option value="Guinea" {{ $user->nationality == "Guinea" ? "selected":""}}>Guinea</option>
											<option value="Guinea-Bissau" {{ $user->nationality == "Guinea-Bissau" ? "selected":""}}>Guinea-Bissau</option>
											<option value="Guyana" {{ $user->nationality == "Guyana" ? "selected":""}}>Guyana</option>
											<option value="Haiti" {{ $user->nationality == "Haiti" ? "selected":""}}>Haiti</option>
											<option value="Honduras" {{ $user->nationality == "Honduras" ? "selected":""}}>Honduras</option>
											<option value="Hong Kong of China" {{ $user->nationality == "Hong Kong of China" ? "selected":""}}>Hong Kong of China</option>
											<option value="Hungary" {{ $user->nationality == "Hungary" ? "selected":""}}>Hungary</option>
											<option value="Iceland" {{ $user->nationality == "Iceland" ? "selected":""}}>Iceland</option>
											<option value="India" {{ $user->nationality == "India" ? "selected":""}}>India</option>
											<option value="Indonesia" {{ $user->nationality == "Indonesia" ? "selected":""}}>Indonesia</option>
											<option value="Iran" {{ $user->nationality == "Iran" ? "selected":""}}>Iran</option>
											<option value="Iraq" {{ $user->nationality == "Iraq" ? "selected":""}}>Iraq</option>
											<option value="Ireland" {{ $user->nationality == "Ireland" ? "selected":""}}>Ireland</option>
											<option value="Israel" {{ $user->nationality == "Israel" ? "selected":""}}>Israel</option>
											<option value="Italy" {{ $user->nationality == "Italy" ? "selected":""}}>Italy</option>
											<option value="Ivory Coast" {{ $user->nationality == "Ivory Coast" ? "selected":""}}>Ivory Coast</option>
											<option value="Jamaica" {{ $user->nationality == "Jamaica" ? "selected":""}}>Jamaica</option>
											<option value="Japan" {{ $user->nationality == "Japan" ? "selected":""}}>Japan</option>
											<option value="Jordan" {{ $user->nationality == "Jordan" ? "selected":""}}>Jordan</option>
											<option value="Kazakhstan" {{ $user->nationality == "Kazakhstan" ? "selected":""}}>Kazakhstan</option>
											<option value="Kenya" {{ $user->nationality == "Kenya" ? "selected":""}}>Kenya</option>
											<option value="Kiribati" {{ $user->nationality == "Kiribati" ? "selected":""}}>Kiribati</option>
											<option value="Korea" {{ $user->nationality == "Korea" ? "selected":""}}>Korea</option>
											<option value="Kuwait" {{ $user->nationality == "Kuwait" ? "selected":""}}>Kuwait</option>
											<option value="Kyrgyzstan" {{ $user->nationality == "Kyrgyzstan" ? "selected":""}}>Kyrgyzstan</option>
											<option value="Laos" {{ $user->nationality == "Laos" ? "selected":""}}>Laos</option>
											<option value="Latvia" {{ $user->nationality == "Latvia" ? "selected":""}}>Latvia</option>
											<option value="Lebanon" {{ $user->nationality == "Lebanon" ? "selected":""}}>Lebanon</option>
											<option value="Lesotho" {{ $user->nationality == "Lesotho" ? "selected":""}}>Lesotho</option>
											<option value="Liberia" {{ $user->nationality == "Liberia" ? "selected":""}}>Liberia</option>
											<option value="Libya" {{ $user->nationality == "Libya" ? "selected":""}}>Libya</option>
											<option value="Liechtenstein" {{ $user->nationality == "Liechtenstein" ? "selected":""}}>Liechtenstein</option>
											<option value="Lithuania" {{ $user->nationality == "Lithuania" ? "selected":""}}>Lithuania</option>
											<option value="Luxembourg" {{ $user->nationality == "Luxembourg" ? "selected":""}}>Luxembourg</option>
											<option value="Macao of China" {{ $user->nationality == "Macao of China" ? "selected":""}}>Macao of China</option>
											<option value="Madagascar" {{ $user->nationality == "Madagascar" ? "selected":""}}>Madagascar</option>
											<option value="Malawi" {{ $user->nationality == "Malawi" ? "selected":""}}>Malawi</option>
											<option value="Malaysia" {{ $user->nationality == "Malaysia" ? "selected":""}}>Malaysia</option>
											<option value="Maldives" {{ $user->nationality == "Maldives" ? "selected":""}}>Maldives</option>
											<option value="Mali" {{ $user->nationality == "Mali" ? "selected":""}}>Mali</option>
											<option value="Malta" {{ $user->nationality == "Malta" ? "selected":""}}>Malta</option>
											<option value="Mauritania" {{ $user->nationality == "Mauritania" ? "selected":""}}>Mauritania</option>
											<option value="Mauritius" {{ $user->nationality == "Mauritius" ? "selected":""}}>Mauritius</option>
											<option value="Mexico" {{ $user->nationality == "Mexico" ? "selected":""}}>Mexico</option>
											<option value="Micronesia" {{ $user->nationality == "Micronesia" ? "selected":""}}>Micronesia</option>
											<option value="Moldova" {{ $user->nationality == "Moldova" ? "selected":""}}>Moldova</option>
											<option value="Mongolia" {{ $user->nationality == "Mongolia" ? "selected":""}}>Mongolia</option>
											<option value="Montserrat" {{ $user->nationality == "Montserrat" ? "selected":""}}>Montserrat</option>
											<option value="Morocco" {{ $user->nationality == "Morocco" ? "selected":""}}>Morocco</option>
											<option value="Mozambique" {{ $user->nationality == "Mozambique" ? "selected":""}}>Mozambique</option>
											<option value="Myanmar(Burma)" {{ $user->nationality == "Myanmar(Burma)" ? "selected":""}}>Myanmar(Burma)</option>
											<option value="Namibia" {{ $user->nationality == "Namibia" ? "selected":""}}>Namibia</option>
											<option value="Nauru" {{ $user->nationality == "Nauru" ? "selected":""}}>Nauru</option>
											<option value="Nepal" {{ $user->nationality == "Nepal" ? "selected":""}}>Nepal</option>
											<option value="Netherlands" {{ $user->nationality == "Netherlands" ? "selected":""}}>Netherlands</option>
											<option value="New Zealand" {{ $user->nationality == "New Zealand" ? "selected":""}}>New Zealand</option>
											<option value="Nicaragua" {{ $user->nationality == "Nicaragua" ? "selected":""}}>Nicaragua</option>
											<option value="Niger" {{ $user->nationality == "Niger" ? "selected":""}}>Niger</option>
											<option value="Nigeria" {{ $user->nationality == "Nigeria" ? "selected":""}}>Nigeria</option>
											<option value="North Korea" {{ $user->nationality == "North Korea" ? "selected":""}}>North Korea</option>
											<option value="Norway" {{ $user->nationality == "Norway" ? "selected":""}}>Norway</option>
											<option value="Oman" {{ $user->nationality == "Oman" ? "selected":""}}>Oman</option>
											<option value="Pakistan" {{ $user->nationality == "Pakistan" ? "selected":""}}>Pakistan</option>
											<option value="Palau" {{ $user->nationality == "Palau" ? "selected":""}}>Palau</option>
											<option value="Panama" {{ $user->nationality == "Panama" ? "selected":""}}>Panama</option>
											<option value="Papua New Guinea" {{ $user->nationality == "Papua New Guinea" ? "selected":""}}>Papua New Guinea</option>
											<option value="Paraguay" {{ $user->nationality == "Paraguay" ? "selected":""}}>Paraguay</option>
											<option value="Peru" {{ $user->nationality == "Peru" ? "selected":""}}>Peru</option>
											<option value="Philippines" {{ $user->nationality == "Philippines" ? "selected":""}}>Philippines</option>
											<option value="Poland" {{ $user->nationality == "Poland" ? "selected":""}}>Poland</option>
											<option value="Portugal" {{ $user->nationality == "Portugal" ? "selected":""}}>Portugal</option>
											<option value="Puerto Rico" {{ $user->nationality == "Puerto Rico" ? "selected":""}}>Puerto Rico</option>
											<option value="Qatar" {{ $user->nationality == "Qatar" ? "selected":""}}>Qatar</option>
											<option value="Romania" {{ $user->nationality == "Romania" ? "selected":""}}>Romania</option>
											<option value="Russia" {{ $user->nationality == "Russia" ? "selected":""}}>Russia</option>
											<option value="Rwanda" {{ $user->nationality == "Rwanda" ? "selected":""}}>Rwanda</option>
											<option value="Samoa" {{ $user->nationality == "Samoa" ? "selected":""}}>Samoa</option>
											<option value="Saudi Arabia" {{ $user->nationality == "Saudi Arabia" ? "selected":""}}>Saudi Arabia</option>
											<option value="Scotland" {{ $user->nationality == "Scotland" ? "selected":""}}>Scotland</option>
											<option value="Senegal" {{ $user->nationality == "Senegal" ? "selected":""}}>Senegal</option>
											<option value="Seychelles" {{ $user->nationality == "Seychelles" ? "selected":""}}>Seychelles</option>
											<option value="Sierra Leone" {{ $user->nationality == "Sierra Leone" ? "selected":""}}>Sierra Leone</option>
											<option value="Singapore" {{ $user->nationality == "Singapore" ? "selected":""}}>Singapore</option>
											<option value="Slovakia" {{ $user->nationality == "Slovakia" ? "selected":""}}>Slovakia</option>
											<option value="Slovenia" {{ $user->nationality == "Slovenia" ? "selected":""}}>Slovenia</option>
											<option value="Somalia" {{ $user->nationality == "Somalia" ? "selected":""}}>Somalia</option>
											<option value="South Africa" {{ $user->nationality == "South Africa" ? "selected":""}}>South Africa</option>
											<option value="Spain" {{ $user->nationality == "Spain" ? "selected":""}}>Spain</option>
											<option value="Sri Lanka" {{ $user->nationality == "Sri Lanka" ? "selected":""}}>Sri Lanka</option>
											<option value="Sudan" {{ $user->nationality == "Sudan" ? "selected":""}}>Sudan</option>
											<option value="Suriname" {{ $user->nationality == "Suriname" ? "selected":""}}>Suriname</option>
											<option value="Swaziland" {{ $user->nationality == "Swaziland" ? "selected":""}}>Swaziland</option>
											<option value="Sweden" {{ $user->nationality == "Sweden" ? "selected":""}}>Sweden</option>
											<option value="Switzerland" {{ $user->nationality == "Switzerland" ? "selected":""}}>Switzerland</option>
											<option value="Syria" {{ $user->nationality == "Syria" ? "selected":""}}>Syria</option>
											<option value="Taiwan of China" {{ $user->nationality == "Taiwan of China" ? "selected":""}}>Taiwan of China</option>
											<option value="Tajikistan" {{ $user->nationality == "Tajikistan" ? "selected":""}}>Tajikistan</option>
											<option value="Tanzania" {{ $user->nationality == "Tanzania" ? "selected":""}}>Tanzania</option>
											<option value="Thailand" {{ $user->nationality == "Thailand" ? "selected":""}}>Thailand</option>
											<option value="Togo" {{ $user->nationality == "Togo" ? "selected":""}}>Togo</option>
											<option value="Tonga" {{ $user->nationality == "Tonga" ? "selected":""}}>Tonga</option>
											<option value="Trinidad & Tobago" {{ $user->nationality == "Trinidad & Tobago" ? "selected":""}}>Trinidad & Tobago</option>
											<option value="Tunisia" {{ $user->nationality == "Tunisia" ? "selected":""}}>Tunisia</option>
											<option value="Turkey" {{ $user->nationality == "Turkey" ? "selected":""}}>Turkey</option>
											<option value="Turkmenistan" {{ $user->nationality == "Turkmenistan" ? "selected":""}}>Turkmenistan</option>
											<option value="Tuvalu" {{ $user->nationality == "Tuvalu" ? "selected":""}}>Tuvalu</option>
											<option value="Uganda" {{ $user->nationality == "Uganda" ? "selected":""}}>Uganda</option>
											<option value="Ukraine" {{ $user->nationality == "Ukraine" ? "selected":""}}>Ukraine</option>
											<option value="United Arab Emirates" {{ $user->nationality == "United Arab Emirates" ? "selected":""}}>United Arab Emirates</option>
											<option value="USA" {{ $user->nationality == "USA" ? "selected":""}}>USA</option>
											<option value="Uruguay" {{ $user->nationality == "Uruguay" ? "selected":""}}>Uruguay</option>
											<option value="Uzbekistan" {{ $user->nationality == "Uzbekistan" ? "selected":""}}>Uzbekistan</option>
											<option value="Vanuatu" {{ $user->nationality == "Vanuatu" ? "selected":""}}>Vanuatu</option>
											<option value="Vatican City" {{ $user->nationality == "Vatican City" ? "selected":""}}>Vatican City</option>
											<option value="Venezuela" {{ $user->nationality == "Venezuela" ? "selected":""}}>Venezuela</option>
											<option value="Vietnam" {{ $user->nationality == "Vietnam" ? "selected":""}}>Vietnam</option>
											<option value="Wales" {{ $user->nationality == "Wales" ? "selected":""}}>Wales</option>
											<option value="Yemen" {{ $user->nationality == "Yemen" ? "selected":""}}>Yemen</option>
											<option value="Yugoslavia" {{ $user->nationality == "Yugoslavia" ? "selected":""}}>Yugoslavia</option>
											<option value="Zaire" {{ $user->nationality == "Zaire" ? "selected":""}}>Zaire</option>
											<option value="Zambia" {{ $user->nationality == "Zambia" ? "selected":""}}>Zambia</option>
											<option value="Zimbabwe" {{ $user->nationality == "Zimbabwe" ? "selected":""}}>Zimbabwe</option>
											<option value="Other" {{ $user->nationality == "Other " ? "selected":""}}>Other</option>
										</select>
										@if ($errors->has('nationality'))
											<span class="help-block">
                                        <strong>{{ $errors->first('nationality') }}</strong>
                                    </span>
										@endif
									</div>

								</div>

								<div class="form-group{{ $errors->has('native_language') ? ' has-error' : '' }}">
									<label for="native_language" class="col-md-4 control-label">Native Language
										<i class="glyphicon glyphicon-asterisk required-item"></i>
									</label>

									<div class="col-md-6">
										<select name="native_language" class="form-control" id="native_language" onselect="{{$user->native_language}}">
											<option disabled selected>choose</option>
											<option value="Algerian" {{ $user->native_language == "Algerian" ? "selected":""}}>Algerian</option>
											<option value="Arabic" {{ $user->native_language == "Arabic" ? "selected":""}}>Arabic</option>
											<option value="Azerbaijani" {{ $user->native_language == "Azerbaijani" ? "selected":""}}>Azerbaijani</option>
											<option value="Bengali" {{ $user->native_language == "Bengali" ? "selected":""}}>Bengali</option>
											<option value="Bulgarian" {{ $user->native_language == "Bulgarian" ? "selected":""}}>Bulgarian</option>
											<option value="Burmese" {{ $user->native_language == "Burmese" ? "selected":""}}>Burmese</option>
											<option value="Cambodian" {{ $user->native_language == "Cambodian" ? "selected":""}}>Cambodian</option>
											<option value="Chinese(Cantonese)" {{ $user->native_language == "Chinese(Cantonese)" ? "selected":""}}>Chinese(Cantonese)</option>
											<option value="Chinese(Mandarin)" {{ $user->native_language == "Chinese(Mandarin)" ? "selected":""}}>Chinese(Mandarin)</option>
											<option value="Czech" {{ $user->native_language == "Czech" ? "selected":""}}>Czech</option>
											<option value="Danish" {{ $user->native_language == "Danish" ? "selected":""}}>Danish</option>
											<option value="Dutch" {{ $user->native_language == "Dutch" ? "selected":""}}>Dutch</option>
											<option value="English" {{ $user->native_language == "English" ? "selected":""}}>English</option>
											<option value="Estonian" {{ $user->native_language == "Estonian" ? "selected":""}}>Estonian</option>
											<option value="Farsi" {{ $user->native_language == "Farsi" ? "selected":""}}>Farsi</option>
											<option value="Finnish" {{ $user->native_language == "Finnish" ? "selected":""}}>Finnish</option>
											<option value="French" {{ $user->native_language == "French" ? "selected":""}}>French</option>
											<option value="German" {{ $user->native_language == "German" ? "selected":""}}>German</option>
											<option value="Greek" {{ $user->native_language == "Greek" ? "selected":""}}>Greek</option>
											<option value="Hebrew" {{ $user->native_language == "Hebrew" ? "selected":""}}>Hebrew</option>
											<option value="Hindi" {{ $user->native_language == "Hindi" ? "selected":""}}>Hindi</option>
											<option value="Hungarian" {{ $user->native_language == "Hungarian" ? "selected":""}}>Hungarian</option>
											<option value="Icelandic" {{ $user->native_language == "Icelandic" ? "selected":""}}>Icelandic</option>
											<option value="Indonesian" {{ $user->native_language == "Indonesian" ? "selected":""}}>Indonesian</option>
											<option value="Italian" {{ $user->native_language == "Italian" ? "selected":""}}>Italian</option>
											<option value="Japanese" {{ $user->native_language == "Japanese" ? "selected":""}}>Japanese</option>
											<option value="Korean" {{ $user->native_language == "Korean" ? "selected":""}}>Korean</option>
											<option value="Latvian" {{ $user->native_language == "Latvian" ? "selected":""}}>Latvian</option>
											<option value="Lithuanian" {{ $user->native_language == "Lithuanian" ? "selected":""}}>Lithuanian</option>
											<option value="Malaysian" {{ $user->native_language == "Malaysian" ? "selected":""}}>Malaysian</option>
											<option value="Nepalese" {{ $user->native_language == "Nepalese" ? "selected":""}}>Nepalese</option>
											<option value="Norwegian" {{ $user->native_language == "Norwegian" ? "selected":""}}>Norwegian</option>
											<option value="Persian" {{ $user->native_language == "Persian" ? "selected":""}}>Persian</option>
											<option value="Polish" {{ $user->native_language == "Polish" ? "selected":""}}>Polish</option>
											<option value="Portuguese" {{ $user->native_language == "Portuguese" ? "selected":""}}>Portuguese</option>
											<option value="Romanian" {{ $user->native_language == "Romanian" ? "selected":""}}>Romanian</option>
											<option value="Russian" {{ $user->native_language == "Russian" ? "selected":""}}>Russian</option>
											<option value="Rwandan" {{ $user->native_language == "Rwandan" ? "selected":""}}>Rwandan</option>
											<option value="Croatian" {{ $user->native_language == "Croatian" ? "selected":""}}>Croatian</option>
											<option value="Spanish" {{ $user->native_language == "Spanish" ? "selected":""}}>Spanish</option>
											<option value="Sri Lankan" {{ $user->native_language == "Sri Lankan" ? "selected":""}}>Sri Lankan</option>
											<option value="Sudanese" {{ $user->native_language == "Sudanese" ? "selected":""}}>Sudanese</option>
											<option value="Swahili" {{ $user->native_language == "Swahili" ? "selected":""}}>Swahili</option>
											<option value="Swedish" {{ $user->native_language == "Swedish" ? "selected":""}}>Swedish</option>
											<option value="Tagalog" {{ $user->native_language == "Tagalog" ? "selected":""}}>Tagalog</option>
											<option value="Tami" {{ $user->native_language == "Tami" ? "selected":""}}>Tami</option>
											<option value="Thai" {{ $user->native_language == "Thai" ? "selected":""}}>Thai</option>
											<option value="Tunisian" {{ $user->native_language == "Tunisian" ? "selected":""}}>Tunisian</option>
											<option value="Turkish" {{ $user->native_language == "Turkish" ? "selected":""}}>Turkish</option>
											<option value="Ukrainian" {{ $user->native_language == "Ukrainian" ? "selected":""}}>Ukrainian</option>
											<option value="Urdu" {{ $user->native_language == "Urdu" ? "selected":""}}>Urdu</option>
											<option value="Vietnamese" {{ $user->native_language == "Vietnamese" ? "selected":""}}>Vietnamese</option>
											<option value="Zulu" {{ $user->native_language == "Zulu" ? "selected":""}}>Zulu</option>
											<option value="Other" {{ $user->native_language == "Other" ? "selected":""}}>Other</option>
										</select>
										@if ($errors->has('native_language'))
											<span class="help-block">
                                        <strong>{{ $errors->first('native_language') }}</strong>
                                    </span>
										@endif
									</div>

								</div>

								<div class="form-group{{ $errors->has('chinese_level') ? ' has-error' : '' }}">
									<label for="chinese_level" class="col-md-4 control-label">Chiness Level
										<i class="glyphicon glyphicon-asterisk required-item"></i>
									</label>

									<div class="col-md-6">

										<select class="cityselect form-control" name="chinese_level" id="chinese_level" onselect="{{$user->chinese_level}}">
											<option disabled selected>choose</option>
											<option value="I Can't Speak" {{ $user->chinese_level == "I Can't Speak" ? "selected":""}}>I Can't Speak</option>
											<option value="Greeting Only" {{ $user->chinese_level == "Greeting Only" ? "selected":""}}>Greeting Only</option>
											<option value="Basic Conversation" {{ $user->chinese_level == "Basic Conversation" ? "selected":""}}>Basic Conversation</option>
											<option value="Conversational Level" {{ $user->chinese_level == "Conversational Level" ? "selected":""}}>Conversational Level</option>
											<option value="Advanced Speaker" {{ $user->chinese_level == "Advanced Speaker" ? "selected":""}}>Advanced Speaker</option>
											<option value="Native Level" {{ $user->chinese_level == "Native Level" ? "selected":""}}>Native Level</option>
										</select>

										@if ($errors->has('chinese_level'))
											<span class="help-block">
                                        <strong>{{ $errors->first('chinese_level') }}</strong>
                                    </span>
										@endif
									</div>

								</div>


								<div class="form-group{{ $errors->has('current_residence') ? ' has-error' : '' }}">
									<label for="current_residence" class="col-md-4 control-label">Current Residence
										<i class="glyphicon glyphicon-asterisk required-item"></i>
									</label>

									<div class="col-md-6">

										<select class="cityselect form-control" name="current_residence" id="current_residence">
											<option disabled selected>choose</option>
											<option value="Hongkong" {{ $user->current_residence == "Hongkong" ? "selected":""}}>Hongkong</option>
											<option value="Shenzhen" {{ $user->current_residence == "Shenzhen" ? "selected":""}}>Shenzhen</option>
											<option value="Beijing" {{ $user->current_residence == "Beijing" ? "selected":""}}>Beijing</option>
											<option value="Shanghai" {{ $user->current_residence == "Shanghai" ? "selected":""}}>Shanghai</option>
											<option value="Guangzhou" {{ $user->current_residence == "Guangzhou" ? "selected":""}}>Guangzhou</option>
											<option value="Taiwan" {{ $user->current_residence == "Taiwan" ? "selected":""}}>Taiwan</option>
											<option value="Chengdu" {{ $user->current_residence == "Chengdu" ? "selected":""}}>Chengdu</option>
											<option value="Hangzhou" {{ $user->current_residence == "Hangzhou" ? "selected":""}}>Hangzhou</option>
											<option value="Nanjing" {{ $user->current_residence == "Nanjing" ? "selected":""}}>Nanjing</option>
											<option value="Xi'an" {{ $user->current_residence == "Xi'an" ? "selected":""}}>Xi'an</option>
											<option value="Haikou" {{ $user->current_residence == "Haikou" ? "selected":""}}>Haikou</option>
											<option value="Tianjin" {{ $user->current_residence == "Tianjin" ? "selected":""}}>Tianjin</option>
											<option value="Wuhan" {{ $user->current_residence == "Wuhan" ? "selected":""}}>Wuhan</option>
											<option value="Chongqing" {{ $user->current_residence == "Chongqing" ? "selected":""}}>Chongqing</option>
											<option value="Kunming" {{ $user->current_residence == "Kunming" ? "selected":""}}>Kunming</option>
											<option value="Shenyang" {{ $user->current_residence == "Shenyang" ? "selected":""}}>Shenyang</option>
											<option value="Dongguan" {{ $user->current_residence == "Dongguan" ? "selected":""}}>Dongguan</option>
											<option value="Ningbo" {{ $user->current_residence == "Ningbo" ? "selected":""}}>Ningbo</option>
											<option value="Zhuhai" {{ $user->current_residence == "Zhuhai" ? "selected":""}}>Zhuhai</option>
											<option value="Dalian" {{ $user->current_residence == "Dalian" ? "selected":""}}>Dalian</option>
											<option value="Qingdao" {{ $user->current_residence == "Qingdao" ? "selected":""}}>Qingdao</option>
											<option value="Other City" {{ $user->current_residence == "Other City" ? "selected":""}}>Other City</option>
											<option value="Overseas" {{ $user->current_residence == "Overseas" ? "selected":""}}>Overseas</option>
										</select>

										@if ($errors->has('current_residence'))
											<span class="help-block">
	                                    <strong>{{ $errors->first('current_residence') }}</strong>
	                                </span>
										@endif
									</div>

								</div>

							</div>

						</div>


						<div class="form-group form-submit-button">
							<button type="submit" class="btn company-btn btn-primary">
								<i class="fa fa-btn fa-envelope"></i> Save
							</button>
						</div>

					</form>
				</div>


			</div>

	</div>

@endsection