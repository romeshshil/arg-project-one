@extends('frontend.layouts.master')

@section('content')
	
	@if(Auth::user()->usertype=="1")

	@include('frontend.unverfiy-user')
	
	@elseif(Auth::user()->usertype=="2")
		verify user 
	@endif

		
@endsection