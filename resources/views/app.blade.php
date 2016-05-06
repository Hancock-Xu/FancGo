<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title>@yield('title','FancyGo')</title>
		<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="navbar-static-top.css">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximun-scale=1, user-scalable=no">

	</head>

	<body>

		<header class="row">
			@include('site.header')
		</header>


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