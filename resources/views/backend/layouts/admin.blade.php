@extends('backend.layouts.master')

@section('styles')
<link type="text/css" rel="stylesheet" href="{{ asset('assets/css/admin_all.css') }}"  media="screen,projection"/>
@endsection



@section('body')
<body>
	@include('backend.includes.nav_top')
	<main>
		@include('backend.includes.nav_left')
		@yield('contents')
		@include('backend.includes.nav_right')
	</main>
	@include('backend.includes.footer')
	<script src="{{ asset('assets/js/admin.js') }}"></script>
	@yield('scripts')
</body>
@endsection