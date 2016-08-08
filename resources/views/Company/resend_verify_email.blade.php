@extends('site.layout')

@section('content')

	<div class="search-noresult">
		<div class="img-noresult">
			<embed src="{{asset('images/no_result.svg')}}" type="image/svg+xml" pluginspage="http://www.adobe.com/svg/viewer/install/" />
		</div>
		<div class="content-noresult">
			<h1>You have not yet verified~~ </h1>
			<h2>Do you need resend verified email to {{$company->company_email}}?</h2>
			<div class="resend_verify_email">
				<a href="">
					<button type="submit" class="btn btn-primary">
						<i class="fa fa-btn fa-envelope"></i> Send Verify Link
					</button>
				</a>
			</div>
			<div class="Re_create_company">
				<form action="{{action('Admin\CompanyController@destroy', ['id'=>$company->id])}}" method="post">
					<input type="hidden" name="_method" value="DELETE">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">

					<button type="submit" class="btn btn-primary">
						<i class="fa fa-btn fa-envelope"></i>Re-registration of the company
					</button>
				</form>

			</div>
		</div>
	</div>

@endsection