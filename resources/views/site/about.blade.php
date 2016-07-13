@extends('site.layout')

@section('title')
	About
@stop

@section('testSideBar')
	@parent
	this is the second side bar
@stop

@section('content')

<h2>Who i am</h2>
	<p>My name is

		@if($firstName === 'Hancock')
			Hancock{{----}}
		@elseif($firstName === 'Hanyu')
			Hanyu
		@endif

		{{$secondName}}
	</p>

@stop
