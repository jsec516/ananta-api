@extends('backend.layouts.master')

@section('styles')
<link type="text/css" rel="stylesheet" href="{{ asset('assets/css/login.css') }}"  media="screen,projection"/>
@endsection

@section('body')
<body  class="blue darken-3 ">
    <main>
      <div class="row  nf-container center-align">
        
        <div class="col s12 l12 white-text darken-3-text center-align">
          <h2>Login</h2>
        </div>
        <div class="col card-container s12 l5">
          <div class="card">
            <div class="card-content">
              <div class="row">
                  {{Former::framework('Nude')}}
                  {!! Former::open(url('admin/login'))->addClass('col s12')->method('post') !!}
                  <div class="row">
                    <div class="input-field col s12">
                      <i class="material-icons prefix">account_circle</i>
                      {!! Former::email('email')->required()->class('validate') !!}
                      <label for="email">your e-mail</label>
                    </div>
                    <div class="input-field col s12">
                      <i class="material-icons prefix">vpn_key</i>
                      {!! Former::password('password')->required()->class('validate') !!}
                      <label for="password">your password</label>
                    </div>
                    
                    <div class="input-field col s12">
                      <button type="submit" class="waves-effect waves-light btn" name="loginBtn"><i class="material-icons left">keyboard_arrow_left</i> ENTER</button>
                      <a href="{{ url('/') }}" class="waves-effect waves-light btn"><i class="material-icons left">person_add</i> REGISTER</a>
                    </div>
                  </div>
                {!! Former::close() !!}
              </div>
              
            </div>
          </div>
        </div>
        <div class="col s12 l12 white-text darken-3-text">
          <p>Have you forgot your password? Please click <a href="" class="white-text darken-3-text" style="text-decoration:underline;font-weight:bold;">here</a> to retrieve it.</p>
        </div>
      </div>
      
      
    </main>
    
@include('backend.includes.footer')
<script src="{{ asset('assets/js/admin.js') }}"></script>

@yield('scripts')
</body>
@endsection

