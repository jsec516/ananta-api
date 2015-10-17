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
    <div class="col s12">
        <ul class="tab-option clearfix">
            <li><a class="active" href="#test1">Users</a></li>
        </ul>
    </div>
    <div class="col s12 tab-content">
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
    // ->setOptions(array('sDom' => '<"row"<"col l6"lT><"col l6"f>>tr<"row"<"col l6"i><"col l6"p>>'))
    ->addColumn('Name', 'Email', 'Last Login', 'Actions')       // these are the column headings to be shown
    ->setUrl(route('api.users'))   // this is the route where data will be retrieved
    ->render() !!}
            </div>
        </div>
        <div id="UserForm" class="review-block hide">
            @include('backend.access.includes.partials.form')
        </div>
    </div>
</div>
@stop
@section('content1')
<div class="row mt30">
    @include('backend.access.includes.partials.header-buttons')

    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>{{ trans('crud.users.id') }}</th>
                <th>{{ trans('crud.users.name') }}</th>
                <th>{{ trans('crud.users.email') }}</th>
                <th>{{ trans('crud.users.confirmed') }}</th>
                <th>{{ trans('crud.users.roles') }}</th>
                <th>{{ trans('crud.users.other_permissions') }}</th>
                <th class="visible-lg">{{ trans('crud.users.created') }}</th>
                <th class="visible-lg">{{ trans('crud.users.last_updated') }}</th>
                <th>{{ trans('crud.actions') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{!! $user->id !!}</td>
                <td>{!! $user->name !!}</td>
                <td>{!! link_to("mailto:".$user->email, $user->email) !!}</td>
                <td>{!! $user->confirmed_label !!}</td>
                <td>
                    @if ($user->roles()->count() > 0)
                    @foreach ($user->roles as $role)
                    {!! $role->name !!}<br/>
                    @endforeach
                    @else
                    None
                    @endif
                </td>
                <td>
                    @if ($user->permissions()->count() > 0)
                    @foreach ($user->permissions as $perm)
                    {!! $perm->display_name !!}<br/>
                    @endforeach
                    @else
                    None
                    @endif
                </td>
                <td class="visible-lg">{!! $user->created_at->diffForHumans() !!}</td>
                <td class="visible-lg">{!! $user->updated_at->diffForHumans() !!}</td>
                <td>{!! $user->action_buttons !!}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="pull-left">
        {!! $users->total() !!} {{ trans('crud.users.total') }}
    </div>

    <div class="pull-right">
        {!! $users->render() !!}
    </div>

    <div class="clearfix"></div>
</div>
@stop