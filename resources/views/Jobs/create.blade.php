@extends('admin.layout')

@section('content')

	<div class="container">
		<h1>Create New Job</h1>
		<hr>
		{!! Form::open(['url'=>'/job']) !!}
		<div class="form-group">
			{!! Form::label('job_title','Job Title:') !!}
			{!! Form::text('job_title',null, ['class'=>'form-control']) !!}

		</div>

		<div class="form-group">
			{!! Form::label('description','Job description:') !!}
			{!! Form::textarea('description',null, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('desired_skill_experience','desired_skill_experience') !!}
			{!! Form::textarea('desired_skill_experience',null,['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('eduction_require', 'Eduction require') !!}
			{!! Form::select('eduction_require', [
				'Any education',
				'Degree and above',
				'Master and above',
				'Senior technical titles and Dr.'
			]) !!}
		</div>

		<div class="form-group">
			{!! Form::label('years_work_experience','Years Experience Require:') !!}
			{!! Form::select('years_work_experience', [
				'Any work experience',
				'Internship experience',
				'1',
				'2',
				'3',
				'More than 5 years'
			]) !!}
		</div>

		<div class="form-group">
			{!! Form::label('salary_lower_limit','salary_lower_limit:') !!}
			{!! Form::text('salary_lower_limit',null,['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('salary_upper_limit','salary_upper_limit:') !!}
			{!! Form::text('salary_upper_limit',null,['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('other_welfare', 'Other welfare') !!}
			{!! Form::text('other_welfare', null, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('job_status_type', 'job_status_type') !!}
			{!! Form::select('job_status_type', [
				'Full-time',
				'Part-time',
				'Internship'
			]) !!}
		</div>

		<div class="form-group">
			{!! Form::label('industry','Job Status:') !!}
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
			{!! Form::label('compensation_benefits', 'Compensation benefits') !!}
			{!! Form::textarea('compensation_benefits', null, ['class'=>'form-control']) !!}
		</div>




		<div class="form-group">
			{!! Form::label('resume_email', 'Resume email') !!}
			{!! Form::text('resume_email', null, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('published_at','Published At:') !!}
			{!! Form::input('date', 'published_at', date('Y-m-d'), ['class'=>'form-control']) !!}
		</div>
		
		{{--<div class="form-group">--}}
			{{--{!! Form::label('job_image','Job image') !!}--}}
			{{--{!! Form::file('job_image') !!}--}}
			{{--<hr>--}}
		{{--</div>--}}

		<div class="form-group">
			{!! Form::hidden('company_id',$company->id) !!}
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

	</div>
@stop