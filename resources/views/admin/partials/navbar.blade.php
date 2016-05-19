<ul class="nav navbar-nav">
	<li><a href="/">Home</a></li>
	@if(Auth::check())
		<li @if(Request::is('admin/job*')) class="active" @endif>
			<a href="/admin/jobs">Jobs</a>
		</li>
		<li @if(Request::is('admin/company*')) class="active" @endif>
			<a href="/admin/companies">Uploads</a>
		</li>
		<li @if(Request::is('admin/upload*')) class="active" @endif>
			<a href="/admin/upload">Uploads</a>
		</li>
		<li @if(Request::is('admin/jobs/create')) class="active" @endif>
			<a href="/admin/jobs/create">Post Job</a>
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
				<li><a href="/auth/logout"></a></li>
			</ul>
		</li>
	@endif
</ul>