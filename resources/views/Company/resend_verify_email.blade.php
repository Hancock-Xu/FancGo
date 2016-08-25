@extends('site.layout')

@section('content')

	<div class="search-noresult">
		<div class="img-noresult">
			<embed src="{{asset('images/no_result.svg')}}" type="image/svg+xml" pluginspage="http://www.adobe.com/svg/viewer/install/" />
		</div>
		<div class="content-noresult">
			<h1>You have not verified yet~~ </h1>
			<h2>Do you need resend verified email to {{$company->company_email}}?</h2>

			<div class="resend_verify_email">
				<form action="{{action('Admin\CompanyController@edit', $company->id)}}" method="get">
					{{--<input type="hidden" name="_method" value="">--}}
					<input type="hidden" name="_token" value="{{ csrf_token() }}">

					<button type="submit" class="btn btn-primary">
						<i class="fa fa-btn fa-envelope"></i> Resend Verify Link
					</button>
				</form>
			</div>

			<div class="Re_create_company">
				<form action="{{action('Admin\CompanyController@edit', ['id'=>$company->id])}}" method="get">
					{{--<input type="hidden" name="_method" value="DELETE">--}}
					<input type="hidden" name="_token" value="{{ csrf_token() }}">

					<button type="submit" class="btn btn-primary">
						<i class="fa fa-btn fa-envelope"></i>Modify the company registration information
					</button>
				</form>

			</div>
		</div>
	</div>

@endsection