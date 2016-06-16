<html>
	<head>
		<meta charset="UTF-8">
	</head>

	<body>

		{!! Form::open(['url'=>'company/verify_company_email'])!!}
			<div class="container">
				{!! Form::label('validate_email', 'Email') !!}
				{!! Form::textarea('email', null, ['class'=>'form-control']) !!}
				{!! Form::textarea('id', $company->id, ['class' => 'form-control']) !!}
			</div>

			<div>
				<button type="submit" class="btn btn-primary">
					<i class="fa fa-btn fa-sign-in"></i> submit
				</button>
			</div>
		{!! Form::close() !!}
	</body>
</html>