<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title>@yield('title','FancyGo')</title>
		<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="data:text/css;charset=utf-8," data-href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" id="bs-theme-stylesheet">
		<link rel="stylesheet" href="../assets/css/patch.css" type="text/css">
		<link rel="stylesheet" href="../assets/css/docs.min.css" type="text/css">
		<script src="../assets/js/ie-emulation-modes-warning.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximun-scale=1, user-scalable=no">

	</head>

	<body>

		<a id="skippy" class="sr-only-focusable sr-only" href="#content">
			<div class="container">
				<span class="skiplink-text">skip to main content</span>
			</div>
		</a>

		@include('site.header')

		<div class="container">
			<section class="content">
				<div class="pad group">
					@section('content')
					@show
				</div>
			</section>
		</div>

		<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
		<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	</body>
</html>