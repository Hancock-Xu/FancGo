@extends('admin.layout')

@section('content')
	<div class="content">
		<a href="{{action('Admin\CompanyController@edit', [$company->id])}}">edit</a>
		<br>
		<img src="{{ $company_certificate_url }}" alt="">
	</div>

@endsection