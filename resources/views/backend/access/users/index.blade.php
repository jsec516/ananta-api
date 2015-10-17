@extends ('backend.layouts.master')

@section ('title', trans('menus.user_management'))

@section('styles')
{!! HTML::style(elixir('assets/css/b_tf_all.css')) !!}
@endsection

@section('scripts')
{!! HTML::script(elixir('assets/js/b_tf_all.js')) !!}
@endsection

@section('page-header')
<h5 class="breadcrumbs-title">
    {{ trans('menus.user_management') }}
    <small>{{ trans('menus.active_users') }}</small>
</h5>
@endsection

@section ('breadcrumbs')
<li><a href="{!!route('backend.dashboard')!!}"><i class="fa fa-dashboard"></i> {{ trans('menus.dashboard') }}</a></li>
<li class="active">{{ trans('menus.user_management') }}</li>
@stop

@section('content')
<div class="row mt30">
    <div class="col s12 nlp nrp">
        <ul class="tab-option clearfix">
            <li><a class="active" href="#test1">Users</a></li>
        </ul>
    </div>
    <div class="col s12 tab-content nlp nrp">
        <div id="User" class="review-block">
            <div class="row">
                <div class="col s12">
                    <button onclick="modJs.renderForm('User');return false;" class="waves-effect waves-light btn btn-primary">Add New <i class="material-icons right">add</i></button>
                    &nbsp;&nbsp;
                    <button onclick="modJs.showFilters();return false;" class="waves-effect waves-light btn btn-primary">Filter <i class="material-icons right">local_bar</i></button>
                    &nbsp;&nbsp;
                    <button id="User_resetFilters" onclick="modJs.resetFilters();return false;" class="waves-effect waves-light btn btn-default" style="display:none;">Reset Filters <i class="material-icons right">close</i></button>
                </div>
            </div>
            <div class="box-body responsive-table">
                {!! Datatable::table()
                ->addColumn('Name', 'Email', 'Last Login', 'Actions')       // these are the column headings to be shown
                ->setUrl(route('api.users'))   // this is the route where data will be retrieved
                ->render() !!}
            </div>
        </div>
        <div id="UserForm" class="review-block hide">
            @include('backend.access.users.includes.partials.form')
        </div>
    </div>
    @include('backend.access.users.includes.partials.modal')
</div>
@stop