@extends('admin.layout')

@section('content')
	
	<div class="container">
		
		<h1>Create Company</h1>
		<hr>
		
		{!! Form::open(['url'=>'/company', 'files'=>true]) !!}
		<div class="form-group">
			{!! Form::label('name','Company Name') !!}
			{!! Form::text('name',null, ['class'=>'form-control']) !!}

			@if($errors->has('name'))
				<span class="help-block">
					<ul class="alert-danger alert">
						<div class="container">
							<li>
								<strong>{{ $errors->first('name') }}</strong>
							</li>
						</div>
					</ul>

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
			{!! Form::label('resume_email','Resume email') !!}
			{!! Form::text('resume_email',null, ['class'=>'form-control']) !!}

			@if($errors->has('resume_email'))
				<span class="help-block">
					<ul class="alert-danger alert">
						<div class="container">
							<li>
								<strong>{{ $errors->first('resume_email') }}</strong>
							</li>
						</div>
					</ul>

				</span>
			@endif

		</div>

		<div class="form-group">
			{!! Form::label('description','Company description') !!}
			{!! Form::text('description',null, ['class'=>'form-control']) !!}

			@if($errors->has('description'))
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
			{!! Form::text('scale',null, ['class'=>'form-control']) !!}

			@if($errors->has('scale'))
				<span class="help-block">
					<ul class="alert-danger alert">
						<div class="container">
							<li>
								<strong>{{ $errors->first('scale') }}</strong>
							</li>
						</div>
					</ul>

				</span>
			@endif
		</div>

		<div class="form-group">
			{!! Form::label('location','location') !!}
			{!! Form::text('location',null, ['class'=>'form-control']) !!}

			@if($errors->has('location'))
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

		<div class="dropdown">
			{!! Form::label('industry','Industry') !!}
			{!! Form::select('industry',[
			'Actors',
			'English Teaching',
			'Design/Creative',
			'Models',
			'Eduction',
			'Musicians/DJ',
			'Engineering',
			'Entertainer',
			'Finance',
			'HealthCare',
			'Hotel',
			'HR/Admin',
			'Insurance',
			'International Trade',
			'IT/Internet',
			'PR/Media/Advertising',
			'Read Estate',
			'Retail',
			'Sales/Marketing',
			'Sports/Leisure'
			]) !!}

			@if($errors->has('industry'))
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
			{!! Form::label('email','email') !!}
			{!! Form::text('email',null, ['class'=>'form-control']) !!}

			@if($errors->has('email'))
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
			{!! Form::label('phone_number','phone number') !!}
			{!! Form::text('phone_number',null, ['class'=>'form-control']) !!}

			@if($errors->has('phone_number'))
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
			{!! Form::hidden('user_id',$user->id) !!}
		</div>

		<div class="form-group">
			{!! Form::label('published_at','Published At:') !!}
			{!! Form::input('date', 'published_at', date('Y-m-d'), ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Publish Company',['class'=>'btn btn-success form-control']) !!}
		</div>

		{!! Form::close() !!}

	</div>

@stop