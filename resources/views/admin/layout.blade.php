<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<!-- saved from url=(0014)about:internet -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>{{ config('blog.title') }} </title>


	{!! Html::style('css/app.css') !!}
	{!! Html::script('js/app.js') !!}

	<style>
		body {
			padding-top: 60px;
		}
	</style>


	@yield('styles')

	<meta name="viewport" content="width=device-width, initial-scale=1, maximun-scale=1, user-scalable=no">

</head>

<body>

{{-- Navigation Bar --}}


<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-menu">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/">JobLead China</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar-menu">
			@include('admin.partials.navbar')
		</div>
	</div>
</nav>

@yield('content')

<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

@yield('scripts')

</body>
</html>