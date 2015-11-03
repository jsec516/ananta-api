<aside class="left-sidebar-nav">
	<ul id="slide-out" class="side-nav leftside-navigation ps-container ps-active-y">
		<li class="user-details blue darken-4 darken-2">
			<div class="row">
				<div class="col s4 m4 l4">
					<img src="{{ asset('assets/images/avatar.jpg') }}" alt="" class="circle responsive-img valign profile-image">
				</div>
				<div class="col s8 m8 l8">
					<a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">John Doe<i class="material-icons right">arrow_drop_down</i></a>
					<ul id="profile-dropdown" class="dropdown-content">
						<li><a href="<?php echo 'BASE_URL'; ?>?m=users&a=edit"><i class="material-icons">face</i> {{ trans('menus.profile') }}</a></li>
						<li><a href="<?php echo 'BASE_URL'; ?>?m=settings"><i class="material-icons">settings</i> {{ trans('menus.settings') }}</a></li>
						<li class="divider"></li>
						<li><a href="<?php echo 'BASE_URL'; ?>?m=auth&a=logout"><i class="material-icons">keyboard_tab</i> {{ trans('menus.logout') }} </a></li>
					</ul>
					<p class="user-role">Administrator</p>
				</div>
			</div>
		</li>
		<li class="{{ Active::route('admin.dashboard') }}"><a href="{{ route('admin.dashboard') }}"><i class="material-icons">dashboard</i> {{ trans('menus.dashboard') }}</a></li>
		<li class='{{ Active::route("admin.calendar") }}'><a href="{{ route('admin.calendar') }}"><i class="material-icons">event</i> {{ trans('menus.calendar') }}</a></li>
		<li class="{{ Active::route('admin.patient') }}"><a href="{{ route('admin.patient') }}"><i class="material-icons">people</i> {{ trans('menus.patient') }}</a></li>
		<li class="{{ Active::route('admin.service') }}"><a href="{{ route('admin.service') }}"><i class="material-icons">card_giftcard</i> {{ trans('menus.service') }}</a></li>
		<li class="{{ Active::route('admin.practitioner') }}"><a href="{{ route('admin.practitioner') }}"><i class="material-icons">supervisor_account</i> {{ trans('menus.practitioner') }}</a></li>
		<li class="{{ Active::route('admin.appointment') }}"><a href="{{ route('admin.appointment') }}"><i class="material-icons">schedule</i> {{ trans('menus.appointment') }}</a></li>
		<li class="{{ Active::route('admin.report') }}"><a href="{{ route('admin.report') }}"><i class="material-icons">insert_chart</i> {{ trans('menus.report') }} </a></li>
		<li class="no-hover">
			<ul class="collapsible" data-collapsible="accordion">
				<li>
					<a class="collapsible-header waves-effect waves-cyan">
						<i class="material-icons">access_alarm</i> {{ trans('menus.reminder') }}
					</a>
					<div class="collapsible-body" style="display: none;">
						<ul>
							<li><a href="{{ route('admin.report', ['type' => 'email']) }}"><i class="material-icons">email</i> {{ trans('menus.email_reminder') }} </a>
							</li>                                        
							<li><a href="{{ route('admin.report', ['type' => 'call']) }}"><i class="material-icons">call</i> {{ trans('menus.call_reminder') }} </a>
							</li>
						</ul>
					</div>
				</li>
				<li>
					<a class="collapsible-header waves-effect waves-cyan" >
						<i class="material-icons">settings</i> {{ trans('menus.system') }}
					</a>
					<div class="collapsible-body" style="display: none;">
						<ul>
							<li><a href="{{ route('admin.setting.schedule') }}"><i class="material-icons">alarm</i> {{ trans('menus.schedule') }}</a>
							</li>                                        
							<li><a href="{{ url('/admin/access/users') }}"><i class="material-icons">supervisor_account</i> {{ trans('menus.user') }}</a>
							</li>
							<li><a href="{{ route('admin.setting.account') }}"><i class="material-icons">info</i> {{ trans('menus.account_info') }}</a>
							</li>
							<li><a href="{{ route('logout') }}"><i class="material-icons">power_settings_new</i> {{ trans('menus.logout') }}</a>
							</li>
						</ul>
					</div>
				</li>
			</ul>
		</li>
	</ul>
</aside>