<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<!-- saved from url=(0014)about:internet -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximun-scale=1, user-scalable=no">
	<meta name="keyword" content="JobLead China, Joblead, Job in China, Job in Shenzhen, Working in China, Life in China, Living in China, Work Visa in China">
	<meta name="description" content="JobLead China provide a set of job solution for enterises and forein talents.">

	<title>JobLeadChina </title>


	{!! Html::style('css/app.css') !!}
	{!! Html::script('js/app.js') !!}

	<style>
		body {
			padding-top: 80px;
		}
	</style>

</head>

<body>

@include('site.navbar')

@yield('content')

<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

@yield('scripts')

</body>
</html>