@extends('backend.layouts.master')

@section('styles')
   {!! HTML::style(elixir('assets/css/b_cal_all.css')) !!}
@endsection

@section('scripts')
	{!! HTML::script(elixir('assets/js/b_cal_all.js')) !!}
@endsection

@section('content')
<div class="row mt30">
	<div class="col s12 m12 l12">
		<div id="calendar">
		</div>
	</div>
</div>
@endsection