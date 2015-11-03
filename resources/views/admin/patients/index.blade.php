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
        {{ trans('menus.patient_management') }}
        <small>{{ trans('menus.all_patients') }}</small>
    </h5>
@endsection

@section ('breadcrumbs')
    <li><a href="{!!route('backend.dashboard')!!}"><i class="fa fa-dashboard"></i> {{ trans('menus.dashboard') }}</a></li>
    <li class="active">{{ trans('menus.patient_management') }}</li>
@stop

@section('content')
<div class="row mt30">
    <div class="col s12">
        <ul class="tab-option clearfix">
            <li><a class="active" href="#test1">Patients</a></li>
        </ul>
    </div>
    <div class="col s12 tab-content">
        <div id="Patient" class="review-block">
            <div class="row">
                <div class="col s12">
                    <button onclick="modJs.renderForm('Patient');return false;" class="waves-effect waves-light btn btn-primary">Add New <i class="material-icons right">add</i></button>
                    &nbsp;&nbsp;
                    <button onclick="modJs.showFilters();return false;" class="waves-effect waves-light btn btn-primary">Filter <i class="material-icons right">local_bar</i></button>
                    &nbsp;&nbsp;
                    <button id="Employee_resetFilters" onclick="modJs.resetFilters();return false;" class="waves-effect waves-light btn btn-default" style="display:none;">Reset Filters <i class="material-icons right">close</i></button>
                </div>
            </div>
            <div class="box-body responsive-table">
                <table cellpadding="0" cellspacing="0" border="0" class="table bordered striped" id="grid">
                    <thead><tr><th class="site_name">Name</th><th>Url </th><th>Type</th><th>Last modified</th><th></th></tr></thead>
                </table>
            </div>
        </div>
        <div id="PatientForm" class="review-block hide">
            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s12 l6">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="firstName" type="text" class="validate">
                            <label for="firstName">First Name</label>
                        </div>
                        <div class="input-field col s12 l6">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="lastName" type="text" class="validate">
                            <label for="lastName">Last Name</label>
                        </div>
                        <div class="input-field col s12 l6">
                            <i class="material-icons prefix">email</i>
                            <input id="email"  type="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                        <div class="input-field col s12 l6">
                         <select class="validate">
                            <option value="" disabled selected>Choose your Practitioner</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                        </select>
                        <label>Primary Practitioner</label>
                    </div>
                    <div class="input-field col s12 l6">
                        <i class="material-icons prefix">phone</i>
                        <input id="phone" type="tel" class="validate">
                        <label for="phone">Telephone</label>
                    </div>
                    
                    <div class="input-field col s12">
                        <i class="material-icons prefix">mode_edit</i>
                        <textarea id="address" class="materialize-textarea"></textarea>
                        <label for="address">Address</label>
                    </div>
                    <div class="input-field col s12">
                        <button class="btn btn-primary waves-effect waves-light right" style="margin-left: 10px;" type="submit" name="action">Save
                            <i class="material-icons left">save</i>
                        </button>
                        
                        <button class="btn btn-default waves-effect waves-light right" type="button" name="action">Cancel
                            <i class="material-icons left">close</i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- modal -->
<!-- Modal Structure -->
<div id="modal1" class="modal">
    <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat right" style="padding-right: 5px;"><i class="mdi-navigation-close"></i></a>
    <div class="modal-content">
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="col s3 right-align">
                        <label class="tall-line">Name </label>
                    </div>
                    <div class="col s7">
                     <div style="width:100%; position:relative; ">
                        <select class="browser-default sel2">
                            <option value="">Patient Name</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s3 right-align">
                    <label class="tall-line">Appt. Made </label>
                </div>
                <div class="col s7">
                    <select class="browser-default sel2">
                        <option value="">Appt. Made (at least)</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col s10 right-align">
                    <button onclick="" class="waves-effect waves-light btn btn-primary">Filter <i class="material-icons left">local_bar</i></button>
                </div>
                
            </div>
        </form>
    </div>
</div>
<div class="modal-footer">
    
</div>
</div>
<!-- modal complete -->
</div>
@stop