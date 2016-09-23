@extends('site.layout')

@section('content')

	<div class="search-noresult">
		<div class="img-noresult">
			<embed src="{{asset('images/verify_email.svg')}}" type="image/svg+xml" pluginspage="http://www.adobe.com/svg/viewer/install/" />
		</div>

		<div>

			<div class="content-noresult">
				<h1>Verified email has been send to {{$company->company_email}} successfully~~ </h1>
				<h2>Please check you mailbox {{$company->company_email}}</h2>
			</div>

			<div style="margin-left: 30px; padding-top: 20px; width: 50px;">
				OR
			</div>

			<div class="content-noresult">

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

	</div>

@endsection