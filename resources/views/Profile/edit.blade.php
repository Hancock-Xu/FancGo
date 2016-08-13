@extends('site.layout')


@section('content')

	<div class="container">

		<form class="form-horizontal" id="company-submit" method="post" role="form" enctype="multipart/form-data" action="{{action('Admin\ProfileController@update')}}">

			<input type="hidden" name="_token" value="{{ csrf_token() }}">

			{{--<input type="hidden" name="_method" value="put">--}}

			<div class="company-info">

				<div class="business_license">

					<div class="company_logo_container">

						<div class="upload-file">

							<div class="upload-icon">

								<embed src="{{asset('images/upload.svg')}}" type="image/svg+xml" pluginspage="http://www.adobe.com/svg/viewer/install/" />

								<label for="logo_url">UpLoad your Resume</label>
								<input type="file" id="resume_chooser" accept="application/pdf" name="resume_url">
								<label for="">Upper Limit 2M</label>
								<label for="">Only Accept PDF</label>

							</div>

						</div>

						{{--<div class="previewSelectFile">--}}
							{{--<img id="previewer" src="" alt="Logo Previewer">--}}
							{{--<embed id="pdf_previewer" src="" type='application/pdf'>--}}
						{{--</div>--}}

					</div>


				</div>

				<div class="company-property-container">

					<div class="company_property">

						<h1 class="company_business_license_name">{{$user->first_name}} {{$user->last_name}}</h1>

						<div class="form-group{{ $errors->has('company_name') ? ' has-error' : '' }}">
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

								<select name="sex" class="form-control" id="sex">
									<option disabled selected>choose</option>
									<option value=0>Male</option>
									<option value=1>Female</option>
									<option value=2>Can not tell</option>
								</select>

								@if ($errors->has('sex'))
									<span class="help-block">
                                        <strong>{{ $errors->first('sex') }}</strong>
                                    </span>
								@endif
							</div>

						</div>


						{{--<div class="form-group">--}}
							{{--{!! Form::label('date_of_birth','Date of Birth') !!}--}}
							{{--{!! Form::input('date', 'date_of_birth', date('Y-m-d'), ['class'=>'form-control']) !!}--}}
						{{--</div>--}}

						<div class="form-group{{ $errors->has('date_of_birth') ? ' has-error' : '' }}">
							<label for="date_of_birth" class="col-md-4 control-label">Date of Birth
								<i class="glyphicon glyphicon-asterisk required-item"></i>
							</label>

							<div class="col-md-6">
								<input id="date_of_birth" type="date" class="form-control" name="date_of_birth" value="{{ old('date_of_birth') }}">

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
								<select name="nationality" class="form-control" id="nationality">
									<option disabled selected>choose</option>
									<option value="Afghanistan">Afghanistan</option>
									<option value="Albania">Albania</option>
									<option value="Algeria">Algeria</option>
									<option value="Andorra">Andorra</option>
									<option value="Angola">Angola</option>
									<option value="Antigua & Barbuda">Antigua & Barbuda</option>
									<option value="Argentina">Argentina</option>
									<option value="Armenia">Armenia</option>
									<option value="Aruba">Aruba</option>
									<option value="Australia">Australia</option>
									<option value="Austria">Austria</option>
									<option value="Azerbaijan">Azerbaijan</option>
									<option value="Bahamas">Bahamas</option>
									<option value="Bahrain">Bahrain</option>
									<option value="Bangladesh">Bangladesh</option>
									<option value="Barbados">Barbados</option>
									<option value="Belarus">Belarus</option>
									<option value="Belgium">Belgium</option>
									<option value="Belize">Belize</option>
									<option value="Benin">Benin</option>
									<option value="Bermuda">Bermuda</option>
									<option value="Bhutan">Bhutan</option>
									<option value="Bolivia">Bolivia</option>
									<option value="Bosnia-Herzegovina">Bosnia-Herzegovina</option>
									<option value="Botswana">Botswana</option>
									<option value="Brazil">Brazil</option>
									<option value="Brunei">Brunei</option>
									<option value="Bulgaria">Bulgaria</option>
									<option value="Cambodia">Cambodia</option>
									<option value="Cameroon">Cameroon</option>
									<option value="Canada">Canada</option>
									<option value="Cape Verde">Cape Verde</option>
									<option value="Cayman Islands">Cayman Islands</option>
									<option value="Chad">Chad</option>
									<option value="Chile">Chile</option>
									<option value="China">China</option>
									<option value="Colombia">Colombia</option>
									<option value="Comoros">Comoros</option>
									<option value="Congo">Congo</option>
									<option value="Cook Islands">Cook Islands</option>
									<option value="Costa Rica">Costa Rica</option>
									<option value="Croatia">Croatia</option>
									<option value="Cuba">Cuba</option>
									<option value="Cyprus">Cyprus</option>
									<option value="Czech Republic">Czech Republic</option>
									<option value="Denmark">Denmark</option>
									<option value="Dominica">Dominica</option>
									<option value="Ecuador">Ecuador</option>
									<option value="Egypt">Egypt</option>
									<option value="EI Salvador">EI Salvador</option>
									<option value="England">England</option>
									<option value="Equatorial Guinea">Equatorial Guinea</option>
									<option value="Eritrea">Eritrea</option>
									<option value="Estonia">Estonia</option>
									<option value="Ethiopia">Ethiopia</option>
									<option value="Falkland Islands">Falkland Islands</option>
									<option value="Faroe Islands">Faroe Islands</option>
									<option value="Fiji">Fiji</option>
									<option value="Finland">Finland</option>
									<option value="France">France</option>
									<option value="Gabon">Gabon</option>
									<option value="Gambia">Gambia</option>
									<option value="Germany">Germany</option>
									<option value="Ghana">Ghana</option>
									<option value="Greece">Greece</option>
									<option value="Greenland">Greenland</option>
									<option value="Grenada">Grenada</option>
									<option value="Guatemala">Guatemala</option>
									<option value="Guinea">Guinea</option>
									<option value="Guinea-Bissau">Guinea-Bissau</option>
									<option value="Guyana">Guyana</option>
									<option value="Haiti">Haiti</option>
									<option value="Honduras">Honduras</option>
									<option value="Hong Kong of China">Hong Kong of China</option>
									<option value="Hungary">Hungary</option>
									<option value="Iceland">Iceland</option>
									<option value="India">India</option>
									<option value="Indonesia">Indonesia</option>
									<option value="Iran">Iran</option>
									<option value="Iraq">Iraq</option>
									<option value="Ireland">Ireland</option>
									<option value="Israel">Israel</option>
									<option value="Italy">Italy</option>
									<option value="Ivory Coast">Ivory Coast</option>
									<option value="Jamaica">Jamaica</option>
									<option value="Japan">Japan</option>
									<option value="Jordan">Jordan</option>
									<option value="Kazakhstan">Kazakhstan</option>
									<option value="Kenya">Kenya</option>
									<option value="Kiribati">Kiribati</option>
									<option value="Korea">Korea</option>
									<option value="Kuwait">Kuwait</option>
									<option value="Kyrgyzstan">Kyrgyzstan</option>
									<option value="Laos">Laos</option>
									<option value="Latvia">Latvia</option>
									<option value="Lebanon">Lebanon</option>
									<option value="Lesotho">Lesotho</option>
									<option value="Liberia">Liberia</option>
									<option value="Libya">Libya</option>
									<option value="Liechtenstein">Liechtenstein</option>
									<option value="Lithuania">Lithuania</option>
									<option value="Luxembourg">Luxembourg</option>
									<option value="Macao of China">Macao of China</option>
									<option value="Madagascar">Madagascar</option>
									<option value="Malawi">Malawi</option>
									<option value="Malaysia">Malaysia</option>
									<option value="Maldives">Maldives</option>
									<option value="Mali">Mali</option>
									<option value="Malta">Malta</option>
									<option value="Mauritania">Mauritania</option>
									<option value="Mauritius">Mauritius</option>
									<option value="Mexico">Mexico</option>
									<option value="Micronesia">Micronesia</option>
									<option value="Moldova">Moldova</option>
									<option value="Mongolia">Mongolia</option>
									<option value="Montserrat">Montserrat</option>
									<option value="Morocco">Morocco</option>
									<option value="Mozambique">Mozambique</option>
									<option value="Myanmar(Burma)">Myanmar(Burma)</option>
									<option value="Namibia">Namibia</option>
									<option value="Nauru">Nauru</option>
									<option value="Nepal">Nepal</option>
									<option value="Netherlands">Netherlands</option>
									<option value="New Zealand">New Zealand</option>
									<option value="Nicaragua">Nicaragua</option>
									<option value="Niger">Niger</option>
									<option value="Nigeria">Nigeria</option>
									<option value="North Korea">North Korea</option>
									<option value="Norway">Norway</option>
									<option value="Oman">Oman</option>
									<option value="Pakistan">Pakistan</option>
									<option value="Palau">Palau</option>
									<option value="Panama">Panama</option>
									<option value="Papua New Guinea">Papua New Guinea</option>
									<option value="Paraguay">Paraguay</option>
									<option value="Peru">Peru</option>
									<option value="Philippines">Philippines</option>
									<option value="Poland">Poland</option>
									<option value="Portugal">Portugal</option>
									<option value="Puerto Rico">Puerto Rico</option>
									<option value="Qatar">Qatar</option>
									<option value="Romania">Romania</option>
									<option value="Russia">Russia</option>
									<option value="Rwanda">Rwanda</option>
									<option value="Samoa">Samoa</option>
									<option value="Saudi Arabia">Saudi Arabia</option>
									<option value="Scotland">Scotland</option>
									<option value="Senegal">Senegal</option>
									<option value="Seychelles">Seychelles</option>
									<option value="Sierra Leone">Sierra Leone</option>
									<option value="Singapore">Singapore</option>
									<option value="Slovakia">Slovakia</option>
									<option value="Slovenia">Slovenia</option>
									<option value="Somalia">Somalia</option>
									<option value="South Africa">South Africa</option>
									<option value="Spain">Spain</option>
									<option value="Sri Lanka">Sri Lanka</option>
									<option value="Sudan">Sudan</option>
									<option value="Suriname">Suriname</option>
									<option value="Swaziland">Swaziland</option>
									<option value="Sweden">Sweden</option>
									<option value="Switzerland">Switzerland</option>
									<option value="Syria">Syria</option>
									<option value="Taiwan of China">Taiwan of China</option>
									<option value="Tajikistan">Tajikistan</option>
									<option value="Tanzania">Tanzania</option>
									<option value="Thailand">Thailand</option>
									<option value="Togo">Togo</option>
									<option value="Tonga">Tonga</option>
									<option value="Trinidad & Tobago">Trinidad & Tobago</option>
									<option value="Tunisia">Tunisia</option>
									<option value="Turkey">Turkey</option>
									<option value="Turkmenistan">Turkmenistan</option>
									<option value="Tuvalu">Tuvalu</option>
									<option value="Uganda">Uganda</option>
									<option value="Ukraine">Ukraine</option>
									<option value="United Arab Emirates">United Arab Emirates</option>
									<option value="USA">USA</option>
									<option value="Uruguay">Uruguay</option>
									<option value="Uzbekistan">Uzbekistan</option>
									<option value="Vanuatu">Vanuatu</option>
									<option value="Vatican City">Vatican City</option>
									<option value="Venezuela">Venezuela</option>
									<option value="Vietnam">Vietnam</option>
									<option value="Wales">Wales</option>
									<option value="Yemen">Yemen</option>
									<option value="Yugoslavia">Yugoslavia</option>
									<option value="Zaire">Zaire</option>
									<option value="Zambia">Zambia</option>
									<option value="Zimbabwe">Zimbabwe</option>
									<option value="Other">Other</option>

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
								<select name="native_language" class="form-control" id="native_language">
									<option disabled selected>choose</option>
									<option value="Arabic">Arabic</option>
									<option value="Azerbaijani">Azerbaijani</option>
									<option value="Bengali">Bengali</option>
									<option value="Bulgarian">Bulgarian</option>
									<option value="Burmese">Burmese</option>
									<option value="Cambodian">Cambodian</option>
									<option value="Chinese(Cantonese)">Chinese(Cantonese)</option>
									<option value="Chinese(Mandarin)">Chinese(Mandarin)</option>
									<option value="Czech">Czech</option>
									<option value="Danish">Danish</option>
									<option value="Dutch">Dutch</option>
									<option value="English">English</option>
									<option value="Estonian">Estonian</option>
									<option value="Farsi">Farsi</option>
									<option value="Finnish">Finnish</option>
									<option value="French">French</option>
									<option value="German">German</option>
									<option value="Greek">Greek</option>
									<option value="Hebrew">Hebrew</option>
									<option value="Hindi">Hindi</option>
									<option value="Hungarian">Hungarian</option>
									<option value="Icelandic">Icelandic</option>
									<option value="Indonesian">Indonesian</option>
									<option value="Italian">Italian</option>
									<option value="Japanese">Japanese</option>
									<option value="Korean">Korean</option>
									<option value="Lithuanian">Lithuanian</option>
									<option value="Malaysian">Malaysian</option>
									<option value="Nepalese">Nepalese</option>
									<option value="Norwegian">Norwegian</option>
									<option value="Persian">Persian</option>
									<option value="Polish">Polish</option>
									<option value="Portuguese">Portuguese</option>
									<option value="Romanian">Romanian</option>
									<option value="Russian">Russian</option>
									<option value="Rwandan">Rwandan</option>
									<option value="Croatian">Croatian</option>
									<option value="Spanish">Spanish</option>
									<option value="Sri Lankan">Sri Lankan</option>
									<option value="Sudanese">Sudanese</option>
									<option value="Swahili">Swahili</option>
									<option value="Swedish">Swedish</option>
									<option value="Tagalog">Tagalog</option>
									<option value="Tami">Tami</option>
									<option value="Thai">Thai</option>
									<option value="Tunisian">Tunisian</option>
									<option value="Turkish">Turkish</option>
									<option value="Ukrainian">Ukrainian</option>
									<option value="Urdu">Urdu</option>
									<option value="Vietnamese">Vietnamese</option>
									<option value="Zulu">Zulu</option>
									<option value="Other">Other</option>
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

								<select class="cityselect form-control" name="chinese_level" id="chinese_level">
									<option disabled selected>choose</option>
									<option value="I Can't Speak">I Can't Speak</option>
									<option value="Greeting Only">Greeting Only</option>
									<option value="Basic Conversation">Basic Conversation</option>
									<option value="Conversational Level">Conversational Level</option>
									<option value="Advanced Speaker">Advanced Speaker</option>
									<option value="Native Level">Native Level</option>
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
									<option value="Others City">Others</option>
									<option value="Overseas">Overseas</option>
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

@endsection