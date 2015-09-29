var modJs = {renderForm : function(elem){
	$("#"+elem).hide();
	$("#"+elem+"Form").removeClass('hide');
},
showFilters : function(){
	$("#modal1").openModal();
} };
(function($){
	$(document).ready(function(){
		// Initialize collapse button
		$(".menu-sidebar-collapse").sideNav();
		$(".chat-collapse").sideNav({
			menuWidth: 300, // Default is 240
			edge: 'right', // Choose the horizontal origin
			closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
		});
		$(".dropdown-button").dropdown();
		$('.chat-collapsible').collapsible();
		$('.collapsible').collapsible();
		$('.sel2').select2();
		if (!!$.prototype.DataTable){	
			$('#Patient #grid').DataTable({
				"aaData":[
				["Sitepoint","http://sitepoint.com","Blog","2013-10-15 10:30:00","view,edit,delete"],
				["Flippa","http://flippa.com","Marketplace","null","view,edit,delete"],
				["99designs","http://99designs.com","Marketplace","null","view,edit,delete"],
				["Learnable","http://learnable.com","Online courses","null","view,edit,delete"],
				["Rubysource","http://rubysource.com","Blog","2013-01-10 12:00:00","view,edit,delete"]
				],
				"aoColumnDefs":[{
					"sTitle":"Site name"
					, "aTargets": [ "site_name" ]
				},{
					"aTargets": [ 1 ]
					, "bSortable": false
					, "mRender": function ( url, type, full )  {
						return  '<a href="'+url+'">' + url + '</a>';
					}
				},{
					"aTargets":[ 3 ]
					, "sType": "date"
					, "mRender": function(date, type, full) {
						return (full[2] == "Blog") 
						? new Date(date).toDateString()
						: "N/A" ;
					}  
				},{
					"aTargets":[ 4 ]
					, "sTitle": ""
					, "sWidth": "10%"
					, "sClass": "center-align"
					, "mRender": function(actions, type, full) {
						return (actions) 
						? '<img class="tableActionButton" src="'+IMAGES_URL+'view.png" style="cursor:pointer;" rel="tooltip" title="Login as this Employee" onclick="modJs.setAdminEmployee(1);return false;">'+
						'<img class="tableActionButton" src="'+IMAGES_URL+'edit.png" style="cursor:pointer;margin-left: 15px;" rel="tooltip" title="Login as this Employee" onclick="modJs.setAdminEmployee(1);return false;">'+
						'<img class="tableActionButton" src="'+IMAGES_URL+'delete.png" style="cursor:pointer;margin-left: 15px;" rel="tooltip" title="Login as this Employee" onclick="modJs.setAdminEmployee(1);return false;">'
						: "N/A" ;
					}  
				}],
				"bSort": false
			});
}
$('select').material_select();
		// Initialize collapsible (uncomment the line below if you use the dropdown variation)
		//$('.collapsible').collapsible();
		$('.show').click(function(){
			$('.button-collapse').sideNav('show');
		});
	});


    // Toast Notification
    $(window).load(function() {
    	setTimeout(function() {
    		Materialize.toast('<span>You have a new appointment!!.</span>', 1500);
    		$(".noti-icon .material-icons").html("notifications_active").addClass("red-text text-lighten-4 ");
    	}, 1500);
    	
    });
    if (!!$.prototype.fullCalendar){
    	$('#calendar').fullCalendar({
    		now: '2015-08-07',
    		editable: true,
    		aspectRatio: 1.8,
    		scrollTime: '00:00',
    		header: {
    			left: 'today prev,next',
    			center: 'title',
    			right: 'timelineDay,timelineMonth,timelineWeek'
    		},
    		defaultView: 'timelineDay',
    		views: {
    			timelineDay: {
    				buttonText: 'day',
    				slotDuration: '00:15'
    			},
    		},
    		resourceAreaWidth: '15%',
    		resourceLabelText: 'Rooms',
    		resources: [
    		{ id: 'a', title: 'Auditorium A' },
    		{ id: 'b', title: 'Auditorium B', eventColor: 'green' },
    		{ id: 'c', title: 'Auditorium C', eventColor: 'orange' },
    		{ id: 'd', title: 'Auditorium D', children: [
    		{ id: 'd1', title: 'Room D1' },
    		{ id: 'd2', title: 'Room D2' }
    		] },
    		{ id: 'e', title: 'Auditorium E' },
    		{ id: 'f', title: 'Auditorium F', eventColor: 'red' },
    		{ id: 'g', title: 'Auditorium G' },
    		{ id: 'h', title: 'Auditorium H' },
    		{ id: 'i', title: 'Auditorium I' },
    		{ id: 'j', title: 'Auditorium J' },
    		{ id: 'k', title: 'Auditorium K' },
    		{ id: 'l', title: 'Auditorium L' },
    		{ id: 'm', title: 'Auditorium M' },
    		{ id: 'n', title: 'Auditorium N' },
    		{ id: 'o', title: 'Auditorium O' },
    		{ id: 'p', title: 'Auditorium P' },
    		{ id: 'q', title: 'Auditorium Q' },
    		{ id: 'r', title: 'Auditorium R' },
    		{ id: 's', title: 'Auditorium S' },
    		{ id: 't', title: 'Auditorium T' },
    		{ id: 'u', title: 'Auditorium U' },
    		{ id: 'v', title: 'Auditorium V' },
    		{ id: 'w', title: 'Auditorium W' },
    		{ id: 'x', title: 'Auditorium X' },
    		{ id: 'y', title: 'Auditorium Y' },
    		{ id: 'z', title: 'Auditorium Z' }
    		],
    		events: [
    		{ id: '1', resourceId: 'b', start: '2015-08-07T02:00:00', end: '2015-08-07T07:00:00', title: 'event 1' },
    		{ id: '2', resourceId: 'c', start: '2015-08-07T05:00:00', end: '2015-08-07T22:00:00', title: 'event 2' },
    		{ id: '3', resourceId: 'd', start: '2015-08-06', end: '2015-08-08', title: 'event 3' },
    		{ id: '4', resourceId: 'e', start: '2015-08-07T03:00:00', end: '2015-08-07T08:00:00', title: 'event 4' },
    		{ id: '5', resourceId: 'f', start: '2015-08-07T00:30:00', end: '2015-08-07T02:30:00', title: 'event 5' }
    		],
    		schedulerLicenseKey: 'GPL-My-Project-Is-Open-Source'
    	});
}



})(jQuery);