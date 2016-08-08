@extends('site.layout')

@section('content')

	<div class="search-noresult">
		<div class="img-noresult">
			<embed src="{{asset('images/verify_email.svg')}}" type="image/svg+xml" pluginspage="http://www.adobe.com/svg/viewer/install/" />
		</div>
		<div class="content-noresult">
			<h1>Verified email has been send successfully~~ </h1>
		</div>
	</div>

@endsection