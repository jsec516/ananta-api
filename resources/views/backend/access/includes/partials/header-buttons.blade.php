  <a class='dropdown-button waves-effect waves-light btn btn-primary' href='#' data-activates='userDropDown'><i class="material-icons right">keyboard_arrow_down</i> {{ trans('menus.header_buttons.users.button') }}</a>
  <a class='dropdown-button waves-effect waves-light btn btn-primary' href='#' data-activates='roleDropDown'><i class="material-icons right">keyboard_arrow_down</i> {{ trans('menus.header_buttons.roles.button') }}</a>
  <!-- <a class='dropdown-button btn' href='#' data-activates='permDropDown'><i class="material-icons right">keyboard_arrow_down</i> {{ trans('menus.header_buttons.permissions.button') }}</a> -->
  <ul id="userDropDown" class="dropdown-content" role="menu">
    <li><a href="{{route('admin.access.users.index')}}">{{ trans('menus.header_buttons.users.all') }}</a></li>

    @if (access()->can('create-users'))
    <li><a href="{{route('admin.access.users.create')}}">{{ trans('menus.create_user') }}</a></li>
    @endif

    <li class="divider"></li>
    <li><a href="{{route('admin.access.users.deactivated')}}">{{ trans('menus.deactivated_users') }}</a></li>
    <li><a href="{{route('admin.access.users.banned')}}">{{ trans('menus.banned_users') }}</a></li>
    <li><a href="{{route('admin.access.users.deleted')}}">{{ trans('menus.deleted_users') }}</a></li>
  </ul>

  <ul id="roleDropDown" class="dropdown-content" role="menu">
    <li><a href="{{route('admin.access.roles.index')}}">{{ trans('menus.header_buttons.roles.all') }}</a></li>

    @if (access()->can('create-roles'))
    <li><a href="{{route('admin.access.roles.create')}}">{{ trans('menus.create_role') }}</a></li>
    @endif
  </ul>
  <ul id="permDropDown" class="dropdown-content pull-right" role="menu">
    @if (access()->can('create-permission-groups'))
    <li><a href="{{route('admin.access.roles.permission-group.create')}}">{{ trans('menus.create_permission_group') }}</a></li>
    @endif

    @if (access()->can('create-permissions'))
    <li><a href="{{route('admin.access.roles.permissions.create')}}">{{ trans('menus.create_permission') }}</a></li>
    @endif

    @if (access()->can('create-permission-groups') || access()->can('create-permissions'))
    <li class="divider"></li>
    @endif

    <li><a href="{{route('admin.access.roles.permissions.index')}}">{{ trans('menus.header_buttons.permissions.all') }}</a></li>
    <li><a href="{{route('admin.access.roles.permissions.index')}}">{{ trans('menus.header_buttons.permissions.groups.all') }}</a></li>
  </ul>