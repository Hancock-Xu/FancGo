@extends('admin.layout')

@section('content')
	<div class="content">
		<a href="{{action('Admin\CompanyController@edit', [$company->id])}}">edit</a>
		<br>
		<img src="/uploads/companies/7/company_logo_avatar.png" alt="">
	</div>

@endsection