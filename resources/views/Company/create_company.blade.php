@extends('admin.layout')

@section('content')
	
	<div class="container">
		
		<h1>Create Company</h1>
		<hr>
		
		{!! Form::open(['url'=>'/company']) !!}
		<div class="form-group">
			{!! Form::label('company_name','Company Name') !!}
			{!! Form::text('company_name',null, ['class'=>'form-control']) !!}
		</div>
		
		<div class="form-group">
			{!! Form::label('business_license_name','Company registered name') !!}
			{!! Form::text('business_license_name',null,['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('resume_email','Resume email') !!}
			{!! Form::text('resume_email',null, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('description','Company description') !!}
			{!! Form::text('description',null, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('scale','scale') !!}
			{!! Form::text('scale',null, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('location','location') !!}
			{!! Form::text('location',null, ['class'=>'form-control']) !!}
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
		</div>

		<div class="form-group">
			{!! Form::label('email','email') !!}
			{!! Form::text('email',null, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('phone_number','phone number') !!}
			{!! Form::text('phone_number',null, ['class'=>'form-control']) !!}
		</div>


		<div class="form-group">
			{!! Form::submit('Publish Job',['class'=>'btn btn-success form-control']) !!}
		</div>
		{!! Form::close() !!}




	</div>

@stop