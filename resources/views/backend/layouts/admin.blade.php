@extends('backend.layouts.master')

@section('styles')
{!! HTML::style(elixir('assets/css/b_min_all.css')) !!}
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
	<script src="{{ asset('assets/js/all.js') }}"></script>
	@yield('scripts')
</body>
@endsection