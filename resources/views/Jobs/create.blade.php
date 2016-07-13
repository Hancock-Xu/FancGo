@extends('site.layout')

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
			{!! Form::label('education_require', 'Education require') !!}
			{!! Form::select('education_require', [
				'1'=>'Any education',
				'2'=>'Degree and above',
				'3'=>'Master and above',
				'4'=>'Senior technical titles and Dr.'
			]) !!}
		</div>

		<div class="form-group">
			{!! Form::label('years_work_experience','Years Experience Require:') !!}
			{!! Form::select('years_work_experience', [
				'1'=>'Any work experience',
				'2'=>'Internship experience',
				'3'=>'1',
				'4'=>'2',
				'5'=>'3',
				'6'=>'More than 5 years'
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
				'1'=>'Full-time',
				'2'=>'Part-time',
				'3'=>'Internship'
			]) !!}
		</div>

		<div class="form-group">
			{!! Form::label('industry','industry:') !!}
			{!! Form::select('industry',[
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
			{!! Form::label('location', 'Location') !!}
			{!! Form::select('location', [
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