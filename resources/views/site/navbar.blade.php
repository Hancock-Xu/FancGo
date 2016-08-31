<nav class="jb_navbar">
	<div class="container-fluid">

		<div class="navbar-header">
			{{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-menu" aria-expanded="true">--}}
				{{--<span class="sr-only">Toggle Navigation</span>--}}
				{{--<span class="icon-bar"></span>--}}
				{{--<span class="icon-bar"></span>--}}
				{{--<span class="icon-bar"></span>--}}
			{{--</button>--}}
			<a id="brand-jobleadchina" class="brand" href="/">
				<img src="{{asset('images/logo.png')}}" alt="">
			</a>
		</div>

		<div class="collapse navbar-collapse" id="navbar-menu" aria-expanded="false">

					<div class="center-home">

						<ul class="nav navbar-nav">
							<li @if(Request::is('job')) class="active" @endif>
								<a href="{{url('/job')}}">Jobs <span class="sr-only">(current)</span></a>
							</li>
							{{--<li><a href="#">Apartment</a></li>--}}
							{{--<li @if(Request::is('company*')) class="active" @endif>--}}
								{{--<a href="{{url('/company')}}">Companies <span class="sr-only">(current)</span></a>--}}
							{{--</li>--}}
							<li @if(Request::is('job/create')) class="active" @endif>
								<a href="{{url('/job/create')}}">Post Job <span class="sr-only">(current)</span></a>
							</li>
							<li>
								<a href="{{action('Admin\BasicSiteInfoController@recruitmentGuidance')}}">Recruitment Guidance<span class="sr-only">(current)</span></a>
							</li>
							<li><a href="{{action('Admin\BasicSiteInfoController@about')}}">Consulting Services<span class="sr-only">(current)</span></a></li>
							{{--<li><a href="#">Guidence <span class="sr-only">(current)</span></a></li>--}}
						</ul>


					</div>

					<ul class="nav navbar-nav navbar-right">

						@if(Auth::guest())
							<li>
								<a href="{{ url('/login') }}">Login</a>
							</li>
							<li>
								<a href="{{ url('/register') }}">Register</a>
							</li>
						@else
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
									{{Auth::user()->last_name}}
									<span class="caret"></span>
								</a>

								<ul class="dropdown-menu" role="menu">
									<li>
										<a href="{{action('Admin\JobController@create')}}">Post job</a>
									</li>
									<li role="separator" class="divider">
										{{--					<a href="{{action('Admin\ApartmentController@create')}}">Post apartment</a>--}}
									</li>
									<li>
										<a href="{{url('/logout')}}">Logout</a>
									</li>
									<li>
										<a href="{{action('Admin\ProfileController@company')}}">Edit Company info</a>
									</li>
									<li>
										<a href="{{ action('Admin\ProfileController@edit') }}">Edit Resume/Profile</a>
									</li>
								</ul>
							</li>
						@endif
					</ul>
		</div>
	</div>
</nav>
