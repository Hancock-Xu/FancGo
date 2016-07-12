{{--<ul class="navbar navbar-default navbar-fixed-top">--}}
	{{--@if(Auth::check())--}}

		{{--<li @if(Request::is('/job')) class="active" @endif>--}}
			{{--<a href="/job">Jobs</a>--}}
		{{--</li>--}}
		{{--<li @if(Request::is('admin/company*')) class="active" @endif>--}}
			{{--<a href="/company">Companies</a>--}}
		{{--</li>--}}

		{{--<li @if(Request::is('/job/create')) class="active" @endif>--}}
			{{--<a href="/job/create">Post Job</a>--}}
		{{--</li>--}}
	{{--@endif--}}
{{--</ul>--}}

{{--<nav class="navbar navbar-default navbar-fixed-top">--}}
	{{--<div class="container">--}}

		<!-- Home Link -->
		<div class="nav navbar-nav" id="bs-example-navbar-collapse-1">
		{{--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">--}}
			{{--<div class="yi">--}}
				@if(Auth::check())
					<ul class="nav navbar-nav">
						<li @if(Request::is('/job')) class="active" @endif>
							<a href="/job">Jobs</a>
						</li>
						{{--<li><a href="#">Apartment</a></li>--}}
						<li @if(Request::is('admin/company*')) class="active" @endif>
							<a href="/company">Companies</a>
						</li>
						<li @if(Request::is('/job/create')) class="active" @endif>
							<a href="/job/create">Post Job</a>
						</li>
						<li><a href="#">Work Visa</a></li>
						<li><a href="#">Guidence</a></li>
					</ul>
				@endif
			{{--</div>--}}

			{{--<ul class="nav navbar-nav navbar-right">--}}
				{{--<li><a href="#">Post Job</a></li>--}}
				{{--<li><a href="#">Sign In</a></li>--}}
				{{--<li><a href="#">Sign Up</a></li>--}}
			{{--</ul>--}}
		</div>
		<!-- /.navbar-collapse -->
	{{--</div>--}}
	<!-- /.container-fluid -->
{{--</nav>--}}


<ul class="nav navbar-nav navbar-right">

	@if(Auth::guest())
		<li><a href="/auth/login">Login</a></li>
		<li><a href="/auth/register">Register</a></li>
	@else
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
				{{Auth::user()->name}}
				<span class="caret"></span>
			</a>
			<ul class="dropdown-menu" role="menu">
				<li>
					<a href="{{action('Admin\JobController@create')}}">Post job</a>
				</li>
				<li>
					{{--					<a href="{{action('Admin\ApartmentController@create')}}">Post apartment</a>--}}
				</li>
				<li>
					<a href="{{ action('Auth\AuthController@getLogout') }}">Logout</a>
				</li>
				{{--<li><a href="/auth/logout">Logout</a></li>--}}
			</ul>
		</li>
	@endif
</ul>