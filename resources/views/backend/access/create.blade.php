@extends ('backend.layouts.master')

@section ('title', trans('menus.user_management') . ' | ' . trans('menus.create_user'))

@section('styles')
{!! HTML::style(elixir('assets/css/b_tf_all.css')) !!}
@endsection

@section('scripts')
{!! HTML::script(elixir('assets/js/b_tf_all.js')) !!}
@endsection


@section('page-header')
<h1>
    {{ trans('menus.user_management') }}
    <small>{{ trans('menus.create_user') }}</small>
</h1>
@endsection

@section ('breadcrumbs')
<li><a href="{!!route('backend.dashboard')!!}"><i class="fa fa-dashboard"></i> {{ trans('menus.dashboard') }}</a></li>
<li>{!! link_to_route('admin.access.users.index', trans('menus.user_management')) !!}</li>
<li class="active">{!! link_to_route('admin.access.users.create', trans('menus.create_user')) !!}</li>
@stop

@section('content')
@include('backend.access.includes.partials.header-buttons')
<h4 class="header2">Form with placeholder</h4>
@include('backend.access.includes.partials.form')
@stop

@section('after-scripts-end')
{!! HTML::script('js/backend/access/permissions/script.js') !!}
{!! HTML::script('js/backend/access/users/script.js') !!}
@stop