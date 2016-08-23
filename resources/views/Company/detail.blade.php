@extends('site.layout')

@section('content')
	<div class="content">

		<div class="header container">
			<header>
				<h1>{{$company->name}}</h1>
				<p>{{$company->published_at}}</p>
			</header>
		</div>

		<div class="container">
			<div class="content">
				<hr>
					<article>
						{!! nl2br(e($company->description)) !!}
					</article>
				<hr>
			</div>
		</div>

		<div class="container">
			<img src="{{ $company->certificate_url }}" alt="">
		</div>

	</div>

@endsection