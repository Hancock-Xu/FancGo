@extends('site.layout')

@section('content')
	
	<div class="container">
		
		<h1>Create Company</h1>
		<hr>
		
		{!! Form::open(['url'=>'/company', 'files'=>true]) !!}
		<div class="form-group">
			{!! Form::label('company_name','Company Name') !!}
			{!! Form::text('company_name',null, ['class'=>'form-control']) !!}

			@if($errors->has('name'))
				<span class="help-block">
					<div class="alert-danger alert">
						<strong>{{ $errors->first('name') }}</strong>
					</div>
				</span>
			@endif

		</div>
		
		<div class="form-group">
			{!! Form::label('business_license_name','Company registered name') !!}
			{!! Form::text('business_license_name',null,['class'=>'form-control']) !!}

			@if($errors->has('business_license_name'))
				<span class="help-block">
					<ul class="alert-danger alert">
						<div class="container">
							<li>
								<strong>{{ $errors->first('business_license_name') }}</strong>
							</li>
						</div>
					</ul>

				</span>
			@endif

		</div>

		<div class="form-group">
			{!! Form::label('logo_url','Upload company logo') !!}
			{!! Form::file('logo_url') !!}

			@if($errors->has('logo_url'))
				<span class="help-block">
					<ul class="alert-danger alert">
						<div class="container">
							<li>
								<strong>{{ $errors->first('logo_url') }}</strong>
							</li>
						</div>
					</ul>

				</span>
			@endif

		</div>

		<div class="form-group">
			{!! Form::label('certificate_url', 'Upload company license') !!}
			{!! Form::file('certificate_url') !!}

			@if($errors->has('certificate_url'))
				<span class="help-block">
					<ul class="alert-danger alert">
						<div class="container">
							<li>
								<strong>{{ $errors->first('certificate_url') }}</strong>
							</li>
						</div>
					</ul>

				</span>
			@endif
		</div>

		<div class="form-group">
			{!! Form::label('Website', 'Company website') !!}
			{!! Form::text('Website', null, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('company_description','Company description') !!}
			{!! Form::textarea('company_description',null, ['class'=>'form-control']) !!}

			@if($errors->has('company_description'))
				<span class="help-block">
					<ul class="alert-danger alert">
						<div class="container">
							<li>
								<strong>{{ $errors->first('description') }}</strong>
							</li>
						</div>
					</ul>

				</span>
			@endif
		</div>

		<div class="form-group">
			{!! Form::label('scale','scale') !!}
			{!! Form::select('scale', [
				'< 15',
				'15~50',
				'50~150',
				'150~500',
				'500~2000',
				'> 2000'
			]) !!}

			@if($errors->has('scale'))
				<span class="help-block">
					<div class="alert-danger alert">
						<strong>{{ $errors->first('scale') }}</strong>
					</div>
				</span>
			@endif
		</div>

		<div class="dropdown">

			{!! Form::label('company_industry','industry:') !!}
			{!! Form::select('company_industry',[
			'Actors'=>'Actors',
			'English Teaching'=>'English Teaching',
			'Design/Creative'=>'Design/Creative',
			'Models'=>'Models',
			'Eduction'=>'Eduction',
			'Musicians'=>'Musicians/DJ',
			'Engineering'=>'Engineering',
			'Entertainer'=>'Entertainer',
			'Finance'=>'Finance',
			'HealthCare'=>'HealthCare',
			'Hotel'=>'Hotel',
			'HR/Admin'=>'HR/Admin',
			'Insurance'=>'Insurance',
			'International Trade'=>'International Trade',
			'IT/Internet'=>'IT/Internet',
			'PR/Media/Advertising'=>'PR/Media/Advertising',
			'Read Estate'=>'Read Estate',
			'Retail'=>'Retail',
			'Sales/Marketing'=>'Sales/Marketing',
			'Sports/Leisure'=>'Sports/Leisure'
			]) !!}

			@if($errors->has('company_industry'))
				<span class="help-block">
					<ul class="alert-danger alert">
						<div class="container">
							<li>
								<strong>{{ $errors->first('industry') }}</strong>
							</li>
						</div>
					</ul>

				</span>
			@endif
		</div>

		<div class="form-group">
			{!! Form::label('company_email','email') !!}
			{!! Form::text('company_email',null, ['class'=>'form-control']) !!}

			@if($errors->has('company_email'))
				<span class="help-block">
					<ul class="alert-danger alert">
						<div class="container">
							<li>
								<strong>{{ $errors->first('email') }}</strong>
							</li>
						</div>
					</ul>

				</span>
			@endif
		</div>

		<div class="form-group">
			{!! Form::label('company_phone_number','phone number') !!}
			{!! Form::text('company_phone_number',null, ['class'=>'form-control']) !!}

			@if($errors->has('company_phone_number'))
				<span class="help-block">
					<ul class="alert-danger alert">
						<div class="container">
							<li>
								<strong>{{ $errors->first('phone_number') }}</strong>
							</li>
						</div>
					</ul>

				</span>
			@endif
		</div>

		<div class="form-group">
			{!! Form::label('company_location', 'Location') !!}
			{!! Form::select('company_location', [
				'Hong Kong'=>'Hong Kong',
                'Shenzhen'=>'Shenzhen',
                'Beijing'=>'Beijing',
                'Shanghai'=>'Shanghai',
                'Chengdu'=>'Chengdu',
                'Qingdao'=>'Qingdao',
                'Hangzhou'=>'Hangzhou',
                'Guangzhou'=>'Guangzhou',
                'Nanjing'=>'Nanjing',
                'Xi\'an'=>'Xi\'an',
                'Lanzhou'=>'Lanzhou',
                'Haikou'=>'Haikou',
                'Tianjin'=>'Tianjin',
                'Kunming'=>'Kunming',
                'Taiwan'=>'Taiwan',
                'Chongqing'=>'Chongqing',
                'Wuhan'=>'Wuhan',
                'Shenyang'=>'Shenyang',
                'Changchun'=>'Changchun',
                'Suzhou'=>'Suzhou',
                'Changsha'=>'Changsha',
                'Dongguan'=>'Dongguan',
                'Wuxi'=>'Wuxi',
                'Guiyang'=>'Guiyang',
                'Ningbo'=>'Ningbo',
                'Changzhou'=>'Changzhou',
                'Dalian'=>'Dalian',
                'Zhuhai'=>'Zhuhai',
                'Others'=>'Others'
			]) !!}


			@if($errors->has('company_location'))
				<span class="help-block">
					<ul class="alert-danger alert">
						<div class="container">
							<li>
								<strong>{{ $errors->first('location') }}</strong>
							</li>
						</div>
					</ul>

				</span>
			@endif
		</div>


		{{--<div class="form-group">--}}
			{{--{!! Form::hidden('user_id',$user->id) !!}--}}
		{{--</div>--}}

		{{--<div class="form-group">--}}
			{{--{!! Form::label('published_at','Published At:') !!}--}}
			{{--{!! Form::input('date', 'published_at', date('Y-m-d'), ['class'=>'form-control']) !!}--}}
		{{--</div>--}}

		<div class="form-group">
			{!! Form::submit('Publish Company',['class'=>'btn btn-success form-control']) !!}
		</div>

		{!! Form::close() !!}

		@if($errors->any())
			<ul class="alert alert-danger">
				@foreach($errors->all() as $error)
					<div class="container">
						<li>{{ $error }}</li>
					</div>

				@endforeach
			</ul>
		@endif

	</div>

@stop