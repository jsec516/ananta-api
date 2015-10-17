{{Former::framework('Nude')}}
<div class="row">
    {!! Former::open(route('admin.access.users.store'))->addClass('col s12')->method('post') !!}
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

    {!! Former::close() !!}
</div>