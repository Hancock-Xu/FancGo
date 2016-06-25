<ul class="nav navbar-nav">
	@if(Auth::check())

		<li @if(Request::is('/job')) class="active" @endif>
			<a href="/job">Jobs</a>
		</li>
		<li @if(Request::is('admin/company*')) class="active" @endif>
			<a href="/company">Companies</a>
		</li>

		<li @if(Request::is('/job/create')) class="active" @endif>
			<a href="/job/create">Post Job</a>
		</li>
	@endif
</ul>

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
					<a href="{{action('Admin\ApartmentController@create')}}">Post apartment</a>
				</li>
				<li>
					<a href="{{ action('Auth\AuthController@getLogout') }}">Logout</a>
				</li>
				{{--<li><a href="/auth/logout">Logout</a></li>--}}
			</ul>
		</li>
	@endif
</ul>