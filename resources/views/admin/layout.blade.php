<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>{{ config('blog.title') }} </title>

	<link href="//cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">


	<link rel="stylesheet" href="data:text/css;charset=utf-8,"
	      data-href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" id="bs-theme-stylesheet">
	<link href="//cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../packages/patch.css">
	<link rel="stylesheet" href="../packages/doc.min.css">

	@yield('styles')

	<meta name="viewport" content="width=device-width, initial-scale=1, maximun-scale=1, user-scalable=no">
        <!--[if lt IE 9]>
	<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

{{-- Navigation Bar --}}


<nav class="navbar navbar-static-top bs-docs-nav">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-menu">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">{{ config('blog.title') }} Admin</a>
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