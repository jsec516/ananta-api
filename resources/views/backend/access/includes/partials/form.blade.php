{{Former::framework('Nude')}}
<div class="row">
    {!! Former::open(route('admin.access.users.store'))->addClass('col s12')->method('post') !!}
    <h2 class="header2">{!! trans('copy.basic_info') !!}</h2>
    <div class="row">
        <div class="input-field col s6">
            {!! Former::text('first_name')->required()->class('validate')->placeholder(trans('forms.first_name')) !!}
            <label for="first_name" class="active">{!! trans('forms.first_name') !!}</label>
        </div>
        <div class="input-field col s6">
            {!! Former::text('last_name')->required()->class('validate')->placeholder(trans('forms.last_name')) !!}
            <label for="last_name" class="active">{!! trans('forms.last_name') !!}</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s6">
            {!! Former::email('email')->required()->class('validate')->placeholder(trans('forms.email')) !!}
            <label for="email" class="active">{!! trans('forms.email') !!}</label>
        </div>
        <div class="input-field col s6">
            {!! Former::select('user.practitioner')->options(array(
            1  => 'Max',
            3  => 'Clémence',
            12 => 'Jean Valjean'
            )) !!}
            <label for="primary_practitioner" class="active">{!! trans('forms.primary_prac') !!}</label>
        </div>
    </div>
    <h2 class="header2">{!! trans('copy.password_info') !!}</h2>
    <div class="row">
        <div class="input-field col s6">
            {!! Former::select('contact_with')->options(array(
            1  => 'Email',
            2  => 'Phone',
            3 => 'Both'
            )) !!}
            <label for="contact_with" class="active">{!! trans('forms.contact_with') !!}</label>
        </div>
        <div class="input-field col s6">
            {!! Former::select('primary_contact')->options(array(
            1  => 'Phone (Home)',
            2  => 'Phone (Cell)',
            3 => 'Phone (work)'
            )) !!}
            <label for="primary_contact" class="active">{!! trans('forms.primary_contact') !!}</label>
        </div>
    </div>
    <h2 class="header2">{!! trans('copy.contact_info') !!}</h2>
    <div class="row">
        <div class="input-field col s12 l4">
            {!! Former::text('phone_home')->placeholder(trans('forms.phone_home')) !!}
            <label for="phone_home" class="active">{!! trans('forms.phone_home') !!}</label>
        </div>
        <div class="input-field col s12 l4">
            {!! Former::text('phone_cell')->placeholder(trans('forms.phone_cell')) !!}
            <label for="phone_cell" class="active">{!! trans('forms.phone_cell') !!}</label>
        </div>
        <div class="input-field col s12 l4">
            {!! Former::text('phone_work')->placeholder(trans('forms.phone_work')) !!}
            <label for="phone_work" class="active">{!! trans('forms.phone_work') !!}</label>
        </div>
    </div>

    <h2 class="header2">{!! trans('copy.address_info') !!}</h2>
    <div class="row">
        <div class="input-field col s12 l4">
            {!! Former::text('street')->placeholder(trans('forms.street')) !!}
            <label for="street" class="active">{!! trans('forms.street') !!}</label>
        </div>
        <div class="input-field col s12 l4">
            {!! Former::text('province')->placeholder(trans('forms.province')) !!}
            <label for="province" class="active">{!! trans('forms.province') !!}</label>
        </div>
        <div class="input-field col s12 l4">
            {!! Former::text('city')->placeholder(trans('forms.city')) !!}
            <label for="city" class="active">{!! trans('forms.city') !!}</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12 l4">
            {!! Former::text('postal_code')->placeholder(trans('forms.postal_code')) !!}
            <label for="postal_code" class="active">{!! trans('forms.postal_code') !!}</label>
        </div>
        <div class="input-field col s12 l4">
            {!! Former::text('address1')->placeholder(trans('forms.address1')) !!}
            <label for="address1" class="active">{!! trans('forms.address1') !!}</label>
        </div>
        <div class="input-field col s12 l4">
            {!! Former::text('address2')->placeholder(trans('forms.address2')) !!}
            <label for="address2" class="active">{!! trans('forms.address2') !!}</label>
        </div>
    </div>
    <div class="row">
       <div class="input-field col s12">
            <button class="btn btn-primary waves-effect waves-light right" style="margin-left: 10px;" type="submit" name="action">Save
                <i class="material-icons left">save</i>
            </button>

            <button class="btn btn-default waves-effect waves-light right" type="button" name="action" onclick="modJs.cancelForm('User');return false;">Cancel
                <i class="material-icons left">close</i>
            </button>
        </div>
    </div>
{!! Former::close() !!}
</div>