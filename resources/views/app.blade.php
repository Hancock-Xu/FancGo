<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title>@yield('title','FancyGo')</title>
		<style class="anchorjs"></style>
		<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" href="data:text/css;charset=utf-8," data-href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" id="bs-theme-stylesheet">
		<link href="//cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" rel="stylesheet">
		<link rel="stylesheet" href="../packages/patch.css">
		<link rel="stylesheet" href="../packages/doc.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximun-scale=1, user-scalable=no">
	</head>

	<body>

		<a id="skippy" class="sr-only-focusable sr-only" href="#content">
			<div class="container">
				<span class="skiplink-text">skip to main content</span>
			</div>
		</a>

		<div class="container">
			@include('site.header')
		</div>

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