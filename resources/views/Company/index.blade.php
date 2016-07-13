@extends('site.layout')

@section('content')


	<div class="container">

		<div class="starter-template">

			@foreach ($companies as $company)

				<div class="container">

						<h3 class="company_name">
							<a href="{{ action('Admin\CompanyController@show',[$company->id]) }}">{{$company->business_license_name}}</a>
						</h3>

						<div class="company_published_at">
							<em>({{ $company->published_at}})</em>
						</div>
				</div>

			@endforeach
			<hr>
			{!! $companies->render() !!}
		</div>
	</div>

@endsection