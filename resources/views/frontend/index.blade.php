@extends('frontend.layouts.master')
@section('content')

<div class="row nf-container center-align">
  <div class="col s12">
    <img src="{{ asset('assets/images/long-logo.png') }}" />
  </div>
  <div class="col s12 center-container">
    <h1 class="white-text">Qclinic.com</h1>
    <h2 class="white-text normal">It's so simple, you'll love it!</h2>
  </div>
  <div class="col s12 l5 center-container">
   <div class="card">
    <div class="card-content">
      <div class="row">
        <h1 class="cyan-text text-lighten-2 xlarge"> @yield('form_heading') </h1>
        @yield('form_messages')
        @yield('form')
      </div>
    </div>
  </div>
</div>
</div>
<div class="row  nf-container center-align">
  <div class="col s12 l12 white-text darken-3-text">
    <p>@yield('additional_link')</p>
  </div>
</div>
@endsection
