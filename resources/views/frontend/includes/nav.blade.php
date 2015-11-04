 <ul id="languageDropdown" class="dropdown-content">
 	<li><a href="#!">English</a></li>
 	<li><a href="#!">French</a></li>
 </ul>
 <ul id="accountDropdown" class="dropdown-content mw200" style="overflow:visible;">
 	<li>{!! link_to('dashboard', trans('navs.dashboard')) !!}</li>
 	<li>{!! link_to_route('user.setting', trans('navs.user_setting')) !!}</li>
 	<li>{!! link_to_route('admin.dashboard', trans('navs.administration')) !!}</li>
 	<li>{!! link_to_route('logout', trans('navs.logout')) !!}</li>
 </ul>
 <nav class="white pl20">
 	<div class="nav-wrapper top-nav">
 		<a href="#" class="brand-logo">Qclinic</a>
 		<ul id="nav-mobile" class="right hide-on-med-and-down">
 			<!-- Dropdown Trigger -->
 			<!-- <li><a class="dropdown-button" href="#!" data-activates="languageDropdown">Language<i class="material-icons right">arrow_drop_down</i></a></li> -->
 			
 			@if (Auth::guest())
 			<li>{!! link_to_route('login', trans('navs.login')) !!}</li>
 			<li>{!! link_to('contact', trans('navs.contact')) !!}</li>
 			<li>{!! link_to('about', trans('navs.about')) !!}</li>
 			@else
 			<li><a class="dropdown-button" href="#!" data-activates="accountDropdown" data-beloworigin="true">{{ Auth::user()->last_name }}<i class="material-icons right">arrow_drop_down</i></a></li>
 			@endif
 		</ul>
 	</div>
 </nav>