<aside class="left-sidebar-nav">
	<ul id="slide-out" class="side-nav leftside-navigation ps-container ps-active-y">
		<li class="user-details blue darken-4 darken-2">
			<div class="row">
				<div class="col s4 m4 l4">
					<img src="<?php echo IMAGES_URL; ?>avatar.jpg" alt="" class="circle responsive-img valign profile-image">
				</div>
				<div class="col s8 m8 l8">
					<a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">John Doe<i class="material-icons right">arrow_drop_down</i></a>
					<ul id="profile-dropdown" class="dropdown-content">
						<li><a href="<?php echo BASE_URL; ?>?m=users&a=edit"><i class="material-icons">face</i> Profile</a></li>
						<li><a href="<?php echo BASE_URL; ?>?m=settings"><i class="material-icons">settings</i> Settings</a></li>
						<li class="divider"></li>
						<li><a href="<?php echo BASE_URL; ?>?m=auth&a=logout"><i class="material-icons">keyboard_tab</i> Logout</a></li>
					</ul>
					<p class="user-role">Administrator</p>
				</div>
			</div>
		</li>
		<li class="active"><a href="<?php echo BASE_URL; ?>?m=dashboard"><i class="material-icons">dashboard</i> Dashboard</a></li>
		<li><a href="<?php echo BASE_URL; ?>?m=calendars"><i class="material-icons">event</i> Calendar</a></li>
		<li><a href="<?php echo BASE_URL; ?>?m=patients"><i class="material-icons">people</i> Patients</a></li>
		<li><a href="<?php echo BASE_URL; ?>?m=services"><i class="material-icons">card_giftcard</i> Services</a></li>
		<li><a href="<?php echo BASE_URL; ?>?m=practitioners"><i class="material-icons">supervisor_account</i> Practitioners</a></li>
		<li><a href="<?php echo BASE_URL; ?>?m=appointments"><i class="material-icons">schedule</i> Appointments</a></li>
		<li><a href="<?php echo BASE_URL; ?>?m=reports"><i class="material-icons">insert_chart</i> Data Reports</a></li>
		<li class="no-hover">
			<ul class="collapsible" data-collapsible="accordion">
				<li>
					<a class="collapsible-header waves-effect waves-cyan">
						<i class="material-icons">access_alarm</i> Reminders
					</a>
					<div class="collapsible-body" style="display: none;">
						<ul>
							<li><a href="<?php echo BASE_URL; ?>?m=reminders&a=email"><i class="material-icons">email</i> Email Reminder</a>
							</li>                                        
							<li><a href="<?php echo BASE_URL; ?>?m=reminders&a=call"><i class="material-icons">call</i> Call Reminder</a>
							</li>
						</ul>
					</div>
				</li>
				<li>
					<a class="collapsible-header waves-effect waves-cyan" >
						<i class="material-icons">settings</i> Systems
					</a>
					<div class="collapsible-body" style="display: none;">
						<ul>
							<li><a href="<?php echo BASE_URL; ?>?m=settings&a=schedule"><i class="material-icons">alarm</i> Schedule</a>
							</li>                                        
							<li><a href="<?php echo BASE_URL; ?>?m=users"><i class="material-icons">supervisor_account</i> Users</a>
							</li>
							<li><a href="<?php echo BASE_URL; ?>?m=myaccount"><i class="material-icons">info</i> Account Info</a>
							</li>
							<li><a href="<?php echo BASE_URL; ?>?m=auth&a=logout"><i class="material-icons">power_settings_new</i> Logout</a>
							</li>
						</ul>
					</div>
				</li>
			</ul>
		</li>
	</ul>
</aside>