@if ($isAdminSide)
@extends('layouts.master')
@section('content')
{{Former::framework('Nude')}}
<div class="row">
    {!! Former::open()->method('POST')->class("col s12") !!}
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          {!! Former::text('first_name')->required()->class('validate') !!}
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
      </div>
      {!! Former::close() !!}
  </div>
  @endsection
@endif