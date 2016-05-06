@extends('app')

@section('content')
	<h1>Create New Job</h1>
	<hr>
	{!! Form::open(['url'=>'/jobs/store']) !!}
		<div class="form-group">
			{!! Form::label('job_title','Job title:') !!}
			{!! Form::text('job_title',null, ['class'=>'form-control']) !!}

		</div>

		<div class="form-group">
			{!! Form::label('responsibility','Job responsibility:') !!}
			{!! Form::textarea('responsibility',null, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('eduction_require','Eduction require:') !!}
			{!! Form::text('eduction_require',null,['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('years_work_experience','Years experience require:') !!}
			{!! Form::text('years_work_experience',null,['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('salary_and_other_welfare','Salary&welfare:') !!}
			{!! Form::textarea('salary_and_other_welfare',null,['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('industry','Industry:') !!}
			{!! Form::text('industry',null,['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('job_status_type','Job status:') !!}
			{!! Form::select('job_status_type',[
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
			{!! Form::label('published_at','Published at:') !!}
			{!! Form::input('date', 'published_at', date('Y-m-d'), ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Publish Job',['class'=>'btn btn-success form-control']) !!}
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

@stop