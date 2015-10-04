@extends('backend.layouts.master')

@section('styles')
   {!! HTML::style(elixir('assets/css/b_min_all.css')) !!}
@endsection

@section('scripts')
	{!! HTML::script(elixir('assets/js/b_min_all.js')) !!}
@endsection

@section('content')
<div class="row mt30">
	<div class="col s12 m12 l6">
		<ul class="collection">
			<li class="collection-item avatar">
				<i class="material-icons circle cyan darken-1">schedule</i>
				<span class="collection-header">Appointments</span>
				<p>Today's Appointments</p>
				<a href="{{ route('backend.appointment') }}" class="secondary-content"><i class="material-icons cyan-text darken-1-text">view_list</i></a>
			</li>
			<li class="collection-item">
				<div class="row">
					<div class="col s7 nlp">
						<p class="collections-title">MD. Jahidul Islam</p>
						<p class="collections-content">Schedule: 12:00 pm - 01:10 pm</p>
					</div>
					<div class="col s5 nrp right-align">
						<span class="service-cat cyan darken-1">Acupuncture</span>
						<p class="collections-content">Rebecca Risk</p>
					</div>
				</div>
			</li>
			<li class="collection-item">
				<div class="row">
					<div class="col s7 nlp">
						<p class="collections-title">MD. Jahidul Islam</p>
						<p class="collections-content">Schedule: 12:00 pm - 01:10 pm</p>
					</div>
					<div class="col s5 nrp right-align">
						<span class="service-cat cyan darken-1">Acupuncture</span>
						<p class="collections-content">Rebecca Risk</p>
					</div>
				</div>
			</li>
		</ul>
	</div>
	<div class="col s12 m12 l6">
		<ul class="collection">
			<li class="collection-item avatar">
				<i class="material-icons circle cyan darken-1">assignment_turned_in</i>
				<span class="collection-header">Waitings</span>
				<p>Today's Matched Waitings</p>
				<a href="{{ route('backend.waiting') }}" class="secondary-content"><i class="material-icons cyan-text darken-1-text">view_list</i></a>
			</li>
			<li class="collection-item">
				<div class="row">
					<div class="col s7 nlp">
						<p class="collections-title">MD. Jahidul Islam</p>
						<p class="collections-content">Exp. Schedule: 12:00 pm - 1:10 pm </p>
					</div>
					<div class="col s5 nrp right-align">
						<span class="service-cat cyan darken-1">Acupuncture</span>
						<p class="collections-content">Rebecca Risk</p>
					</div>
				</div>
			</li>
			<li class="collection-item">
				<div class="row">
					<div class="col s7 nlp">
						<p class="collections-title">MD. Jahidul Islam</p>
						<p class="collections-content">Exp. Schedule: 12:00 pm - 1:10 pm </p>
					</div>
					<div class="col s5 nrp right-align">
						<span class="service-cat cyan darken-1">Acupuncture</span>
						<p class="collections-content">Rebecca Risk</p>
					</div>
				</div>
			</li>
		</ul>
	</div>
</div>
<div class="row stats">
	<div class="col s12 m6 l3">
		<div class="card">
			<div class="card-content  purple white-text center-align">
				<p class="card-stats-title"><i class="tiny material-icons">person</i> Total Users</p>
				<h4 class="card-stats-number">566</h4>
			</div>
			<div class="card-action center-align purple darken-2">
				<a href="{{ route('backend.user') }}" class="">Manage Users</a>
			</div>
		</div>
	</div>
	<div class="col s12 m6 l3">
		<div class="card">
			<div class="card-content  green white-text center-align">
				<p class="card-stats-title"><i class="tiny material-icons">people</i> Total Patients</p>
				<h4 class="card-stats-number">566</h4>
			</div>
			<div class="card-action center-align green darken-2">
				<a href="{{ route('backend.patient') }}" class="">Manage Patients</a>
			</div>
		</div>
	</div>
	<div class="col s12 m6 l3">
		<div class="card">
			<div class="card-content  blue-grey white-text center-align">
				<p class="card-stats-title"><i class="tiny material-icons">supervisor_account</i> Total Practitioners</p>
				<h4 class="card-stats-number">566</h4>
			</div>
			<div class="card-action  center-align blue-grey darken-2">
				<a href="{{ route('backend.practitioner') }}" class="">Manage Practitioners</a>
			</div>
		</div>
	</div>
	<div class="col s12 m6 l3">
		<div class="card">
			<div class="card-content  pink lighten-2 white-text center-align">
				<p class="card-stats-title"><i class="tiny material-icons">card_giftcard</i> Total Services</p>
				<h4 class="card-stats-number">566</h4>
			</div>
			<div class="card-action center-align pink darken-2">
				<a href="{{ route('backend.service') }}" class="">Manage Services</a>
			</div>
		</div>
	</div>
</div>
@endsection