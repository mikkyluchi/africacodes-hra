<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title><?=$title?></title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="Africacodes" name="author" />
   <link href="<?=base_url()?>pub/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
   <link href="<?=base_url()?>pub/assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="<?=base_url()?>pub/assets/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" />
   <link href="<?=base_url()?>pub/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="<?=base_url()?>pub/css/style.css" rel="stylesheet" />
   <link href="<?=base_url()?>pub/css/style-responsive.css" rel="stylesheet" />
   <link href="<?=base_url()?>pub/css/style-default.css" rel="stylesheet" id="style_color" />
   
   <link href="<?=base_url()?>pub/assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
   <link rel="stylesheet" type="text/css" href="<?=base_url()?>pub/assets/uniform/css/uniform.default.css" />
   <link href="<?=base_url()?>pub/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
   <link rel="stylesheet" type="text/css" href="<?=base_url()?>pub/assets/chosen-bootstrap/chosen/chosen.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>pub/assets/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>pub/assets/bootstrap-daterangepicker/daterangepicker.css" />
   <link rel="stylesheet" type="text/css" href="<?=base_url()?>pub/assets/gritter/css/jquery.gritter.css" />
   <link rel="stylesheet" type="text/css" href="<?=base_url()?>pub/css/timeline-component.css" />
   <link href="<?=base_url()?>pub/css/owl.css" rel="stylesheet" />
   <link rel="stylesheet" href="<?=base_url()?>pub/assets/jquery-ui/jquery-ui-1.10.1.custom.min.css" />
   <!--<link href="<?=base_url()?>pub/css/custom.css" rel="stylesheet" />-->
    <style>
     /*#route-map {
        height: 500px;
        margin: 0px;
        padding: 0px
      }*/
	 .fixed-icons{
background: transparent;
width: 25px;
position: fixed;
top: 25%;
left: 0px;
padding:15px 10px;
  border-radius: 5px;
  -webkit-border-radius: 0px 5px 5px 0px;
  background-color:#703E3F
}

#float-icons{
background:transparent;
margin:0;
padding:0;
width:100%;
}

#float-icons li{
float:left;
list-style-type:none;
}

#float-icons a{
display:block;
margin:3px 0;
padding:0;
height:35px;
width:35px;
text-decoration:none;
font-size:24px;
}

#float-icons a:hover{
opacity: 0.6;
}

    </style>
   <!--<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>-->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
<!--Floating Sidebar-->

<div class="fixed-icons">

<ul id="float-icons" class="clearfix">
    <li><a href="#gp_nursery" id="icon1"><i class="icon-group" style="color:#FFF"></i></a></li>
    <li><a href="#gp_routes_tasks" id="icon2"><i class="icon-road" style="color:#FFF"></i></a></li>
    <li><a href="#gp_expense_visits" id="icon3"><i class="icon-money" style="color:#FFF"></i></a></li>
    <li><a href="#gp_watermen" id="icon4"><i class="icon-filter" style="color:#FFF"></i></a></li>
    <li><a href="#gp_events" id="icon5"><i class="icon-calendar" style="color:#FFF"></i></a></li>
    <li><a href="#gp_timeline" id="icon6"><i class="icon-leaf" style="color:#FFF"></i></a></li>
</ul>

</div>
<!--End Floating Sidebar-->
   <!-- BEGIN HEADER -->
   <div id="header" class="navbar navbar-inverse navbar-fixed-top">
       <!-- BEGIN TOP NAVIGATION BAR -->
       <div class="navbar-inner">
           <div class="container-fluid">
               <!--BEGIN SIDEBAR TOGGLE-->
               <!--<div class="sidebar-toggle-box hidden-phone">
                   <div class="icon-reorder tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
               </div>-->
               <!--END SIDEBAR TOGGLE-->
               <!-- BEGIN LOGO -->
               <a class="brand" href="index-2.html">
                   <img src="<?=base_url()?>pub/img/logo.png" alt="Metro Lab" />
               </a>
               <!-- END LOGO -->
               <!-- BEGIN RESPONSIVE MENU TOGGLER -->
               <a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="arrow"></span>
               </a>
               <!-- END RESPONSIVE MENU TOGGLER -->
               <div id="top_menu" class="nav notify-row">
                   <!-- BEGIN NOTIFICATION -->
                   <ul class="nav top-menu">
                       <!-- BEGIN SETTINGS -->
                       <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                               <i class="icon-tasks"></i>
                               <span class="badge badge-important">6</span>
                           </a>
                           <ul class="dropdown-menu extended tasks-bar">
                               <li>
                                   <p>You have 6 pending tasks</p>
                               </li>
                               <li>
                                   <a href="#">
                                       <div class="task-info">
                                         <div class="desc">Dashboard v1.3</div>
                                         <div class="percent">44%</div>
                                       </div>
                                       <div class="progress progress-striped active no-margin-bot">
                                           <div class="bar" style="width: 44%;"></div>
                                       </div>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <div class="task-info">
                                           <div class="desc">Database Update</div>
                                           <div class="percent">65%</div>
                                       </div>
                                       <div class="progress progress-striped progress-success active no-margin-bot">
                                           <div class="bar" style="width: 65%;"></div>
                                       </div>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <div class="task-info">
                                           <div class="desc">Iphone Development</div>
                                           <div class="percent">87%</div>
                                       </div>
                                       <div class="progress progress-striped progress-info active no-margin-bot">
                                           <div class="bar" style="width: 87%;"></div>
                                       </div>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <div class="task-info">
                                           <div class="desc">Mobile App</div>
                                           <div class="percent">33%</div>
                                       </div>
                                       <div class="progress progress-striped progress-warning active no-margin-bot">
                                           <div class="bar" style="width: 33%;"></div>
                                       </div>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <div class="task-info">
                                           <div class="desc">Dashboard v1.3</div>
                                           <div class="percent">90%</div>
                                       </div>
                                       <div class="progress progress-striped progress-danger active no-margin-bot">
                                           <div class="bar" style="width: 90%;"></div>
                                       </div>
                                   </a>
                               </li>
                               <li class="external">
                                   <a href="#">See All Tasks</a>
                               </li>
                           </ul>
                       </li>
                       <!-- END SETTINGS -->
                       <!-- BEGIN INBOX DROPDOWN -->
                       <li class="dropdown" id="header_inbox_bar">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                               <i class="icon-envelope-alt"></i>
                               <span class="badge badge-important">5</span>
                           </a>
                           <ul class="dropdown-menu extended inbox">
                               <li>
                                   <p>You have 5 new messages</p>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="photo"><img src="<?=base_url()?>pub/img/avatar-mini.png" alt="avatar" /></span>
									<span class="subject">
									<span class="from">Jonathan Smith</span>
									<span class="time">Just now</span>
									</span>
									<span class="message">
									    Hello, this is an example msg.
									</span>
                                   </a>
                               </li>
                               <li>


                                   <a href="#">
                                       <span class="photo"><img src="<?=base_url()?>pub/img/avatar-mini.png" alt="avatar" /></span>
									<span class="subject">
									<span class="from">Jhon Doe</span>
									<span class="time">10 mins</span>
									</span>
									<span class="message">
									 Hi, Jhon Doe Bhai how are you ?
									</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="photo"><img src="<?=base_url()?>pub/img/avatar-mini.png" alt="avatar" /></span>
									<span class="subject">
									<span class="from">Jason Stathum</span>
									<span class="time">3 hrs</span>
									</span>
									<span class="message">
									    This is awesome dashboard.
									</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="photo"><img src="<?=base_url()?>pub/img/avatar-mini.png" alt="avatar" /></span>
									<span class="subject">
									<span class="from">Jondi Rose</span>
									<span class="time">Just now</span>
									</span>
									<span class="message">
									    Hello, this is metrolab
									</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">See all messages</a>
                               </li>
                           </ul>
                       </li>
                       <!-- END INBOX DROPDOWN -->
                       <!-- BEGIN NOTIFICATION DROPDOWN -->
                       <li class="dropdown" id="header_notification_bar">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                               <i class="icon-bell-alt"></i>
                               <span class="badge badge-warning">7</span>
                           </a>
                           <ul class="dropdown-menu extended notification">
                               <li>
                                   <p>You have 7 new notifications</p>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="label label-important"><i class="icon-bolt"></i></span>
                                       Server #3 overloaded.
                                       <span class="small italic">34 mins</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="label label-warning"><i class="icon-bell"></i></span>
                                       Server #10 not respoding.
                                       <span class="small italic">1 Hours</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="label label-important"><i class="icon-bolt"></i></span>
                                       Database overloaded 24%.
                                       <span class="small italic">4 hrs</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="label label-success"><i class="icon-plus"></i></span>
                                       New user registered.
                                       <span class="small italic">Just now</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="label label-info"><i class="icon-bullhorn"></i></span>
                                       Application error.
                                       <span class="small italic">10 mins</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">See all notifications</a>
                               </li>
                           </ul>
                       </li>
                       <li class="dropdown">
                       		<a data-toggle="dropdown" class="dropdown-toggle" role="button" href="#" id="drop1">Nursery <b class="caret"></b></a>
                       <ul class="dropdown-menu extended notification">
                               <li>
                                   <p>Nurseries</p>
                               </li>
                               <li>
                                   <a href="#">
                                       <!--<span class="label label-success"><i class="icon-plus"></i></span>-->
                                       Fornication
                                       <!--<span class="small italic">Just now</span>-->
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <!--<span class="label label-info"><i class="icon-bullhorn"></i></span>-->
                                       Membership
                                       <!--<span class="small italic">10 mins</span>-->
                                   </a>
                               </li>
                               <li>
                                   <a href="#">New Nursery</a>
                               </li>
                               <li>
                                   <a href="#">Settings</a>
                               </li>
                               <li>
                                   <a href="#">See all Nurseries</a>
                               </li>
                           </ul>
                       </li>
                       
                       <li class="dropdown">
                       		<a data-toggle="dropdown" class="dropdown-toggle" role="button" href="#" id="drop1">Waterman <b class="caret"></b></a>
                                                    <ul class="dropdown-menu extended notification">
                               <li>
                                   <p>
                                       Watermen
                                   </p>
                               </li>
                               <li>
                                   <a href="#">
                                       <!--<span class="label label-success"><i class="icon-plus"></i></span>-->
                                       Femi Bejide
                                       <!--<span class="small italic">Just now</span>-->
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <!--<span class="label label-info"><i class="icon-bullhorn"></i></span>-->
                                       Okunuga Soji
                                       <!--<span class="small italic">10 mins</span>-->
                                   </a>
                               </li>
                               <li>
                                   <a href="#">New Waterman</a>
                               </li>
                               <li>
                                   <a href="#">Settings</a>
                               </li>
                               <li>
                                   <a href="#">See all Watermen</a>
                               </li>
                           </ul>
                       </li>
                       <li class="dropdown">
                       		<a data-toggle="dropdown" class="dropdown-toggle" role="button" href="#" id="drop1">Mustards <b class="caret"></b></a>
                                                    <ul class="dropdown-menu extended notification">
                               <li>
                                   <p>
                                       Mustards
                                   </p>
                               </li>
                               <li>
                                   <a href="#">
                                       <!--<span class="label label-success"><i class="icon-plus"></i></span>-->
                                       Femi Bejide
                                       <!--<span class="small italic">Just now</span>-->
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <!--<span class="label label-info"><i class="icon-bullhorn"></i></span>-->
                                       Okunuga Soji
                                       <!--<span class="small italic">10 mins</span>-->
                                   </a>
                               </li>
                               <li>
                                   <a href="#">New Mustard</a>
                               </li>
                               <li>
                                   <a href="#">Settings</a>
                               </li>
                               <li>
                                   <a href="#">See all Mustards</a>
                               </li>
                           </ul>
                       </li>
                       <li class="dropdown">
                       		<a data-toggle="dropdown" class="dropdown-toggle" role="button" href="#" id="drop1">Groups <b class="caret"></b></a>
                                                    <ul class="dropdown-menu extended notification">
                               <li>
                                   <p>
                                       Groups
                                   </p>
                               </li>
                               <li>
                                   <a href="#">
                                       <!--<span class="label label-success"><i class="icon-plus"></i></span>-->
                                       South West
                                       <!--<span class="small italic">Just now</span>-->
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <!--<span class="label label-info"><i class="icon-bullhorn"></i></span>-->
                                       North West
                                       <!--<span class="small italic">10 mins</span>-->
                                   </a>
                               </li>
                               <li>
                                   <a href="<?=base_url()?>groups/new">New Group</a>
                               </li>
                               <li>
                                   <a href="<?=base_url()?>groups/settings">Settings</a>
                               </li>
                               <li>
                                   <a href="<?=base_url()?>groups">See all Groups</a>
                               </li>
                           </ul>
                       </li>
                       <li class="dropdown">
                       		<a data-toggle="dropdown" class="dropdown-toggle" role="button" href="#" id="drop1">Events<b class="caret"></b></a>
                                                    <ul class="dropdown-menu extended notification">
                               <li>
                                   <p>
                                       Events
                                   </p>
                               </li>
                               <li>
                                   <a href="#">
                                       <!--<span class="label label-success"><i class="icon-plus"></i></span>-->
                                       Fifth Group Session
                                       <!--<span class="small italic">Just now</span>-->
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <!--<span class="label label-info"><i class="icon-bullhorn"></i></span>-->
                                       Acapella Night
                                       <!--<span class="small italic">10 mins</span>-->
                                   </a>
                               </li>
                               <li>
                                   <a href="#">New Event</a>
                               </li>
                               <li>
                                   <a href="#">Settings</a>
                               </li>
                               <li>
                                   <a href="#">See all Events</a>
                               </li>
                           </ul>
                       </li>
                       <li>
                       		<a href="#">Reports</a>
                       </li>
                       <li>
                       		<a href="#">System</a>
                       </li>
                       <!-- END NOTIFICATION DROPDOWN -->

                   </ul>
               </div>
               <!-- END  NOTIFICATION -->
               <div class="top-nav ">
                   <ul class="nav pull-right top-menu" >
                       <!-- BEGIN SUPPORT -->
                       <li class="dropdown mtop5">

                           <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Chat">
                               <i class="icon-comments-alt"></i>
                           </a>
                       </li>
                       <li class="dropdown mtop5">
                           <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Help">
                               <i class="icon-headphones"></i>
                           </a>
                       </li>
                       <!-- END SUPPORT -->
                       <!-- BEGIN USER LOGIN DROPDOWN -->
                       <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                               <img src="<?=base_url()?>pub/img/avatar1_small.jpg" alt="">
                               <span class="username">Jhon Doe</span>
                               <b class="caret"></b>
                           </a>
                           <ul class="dropdown-menu extended logout">
                               <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
                               <li><a href="#"><i class="icon-cog"></i> My Settings</a></li>
                               <li><a href="<?=base_url()?>logout"><i class="icon-key"></i> Log Out</a></li>
                           </ul>
                       </li>
                       <!-- END USER LOGIN DROPDOWN -->
                   </ul>
                   <!-- END TOP NAVIGATION MENU -->
               </div>
           </div>
       </div>
       <!-- END TOP NAVIGATION BAR -->
   </div>
   <!-- END HEADER -->
   <!-- BEGIN CONTAINER -->
   <div id="container" class="row-fluid">
      
      <!-- BEGIN PAGE -->  
      <!--<div id="main-content">
         
      </div>-->
      <?=$this->template->content;?>
      <!-- END PAGE --> 
      
   </div>
   <!-- END CONTAINER -->

   <!-- BEGIN FOOTER -->
   <div id="footer">
       2013 &copy; Africacodes.
   </div>
   <!-- END FOOTER -->

   <!-- BEGIN JAVASCRIPTS -->
   <!-- Load javascripts at bottom, this will reduce page load time -->
   <script src="<?=base_url()?>pub/js/jquery-1.8.3.min.js"></script>
   <script src="<?=base_url()?>pub/assets/bootstrap/js/bootstrap.min.js"></script>
   <script src="<?=base_url()?>pub/js/jquery.nicescroll.js" type="text/javascript"></script>
   <script src="<?=base_url()?>pub/js/jquery.blockui.js"></script>
   <script src="<?=base_url()?>pub/assets/jquery-ui/jquery-ui-1.10.1.custom.min.js"></script>
   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="<?=base_url()?>pub/js/excanvas.js"></script>
   <script src="<?=base_url()?>pub/js/respond.js"></script>
   <![endif]-->
   <script type="text/javascript" src="<?=base_url()?>pub/assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
   <script type="text/javascript" src="<?=base_url()?>pub/assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
   <script type="text/javascript" src="<?=base_url()?>pub/assets/uniform/jquery.uniform.min.js"></script>
   <script type="text/javascript" src="<?=base_url()?>pub/assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
   <script type="text/javascript" src="<?=base_url()?>pub/assets/bootstrap-daterangepicker/date.js"></script>
   <script type="text/javascript" src="<?=base_url()?>pub/assets/bootstrap-daterangepicker/daterangepicker.js"></script>
   <script src="<?=base_url()?>pub/js/jquery.scrollTo.min.js"></script>
   <script type="text/javascript" src="<?=base_url()?>pub/assets/gritter/js/jquery.gritter.js"></script>
   <script type="text/javascript" src="<?=base_url()?>pub/assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
   <script type="text/javascript" src="<?=base_url()?>pub/js/owl.carousel.js"></script>
   <script src="<?=base_url()?>pub/assets/mixitup-master/src/jquery.mixitup.js"></script>
   
   <script src="<?=base_url()?>pub/assets/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
   <script src="<?=base_url()?>pub/js/moment.min.js"></script>
   <script src="<?=base_url()?>pub/js/core/smoothscroll.js"></script>
   <!--common script for all pages-->
   <script src="<?=base_url()?>pub/js/common-scripts.js"></script>
   <script src="<?=base_url()?>pub/js/form-component.js"></script>
   <!--script for this page only-->
   <script src="<?=base_url()?>pub/js/external-dragging-calendar.js"></script>
   <!--script for this page only-->
   <script src="<?=base_url()?>pub/js/core/wotaman.js" type="text/javascript"></script>
   <!-- END JAVASCRIPTS -->
 
 	<script type="text/javascript">
		/*var map;

		function initialize() {
		  var mapOptions = {
			zoom: 6
		  };
		  map = new google.maps.Map(document.getElementById('route-map'),
			  mapOptions);
		
		// Try HTML5 geolocation
		  if(navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(function(position) {
			  var pos = new google.maps.LatLng(position.coords.latitude,
											   position.coords.longitude);
		
			  var infowindow = new google.maps.InfoWindow({
				map: map,
				position: pos,
				content: 'Location found using HTML5.'
			  });
			  map.setCenter(pos);
			}, function() {
			  handleNoGeolocation(true);
			});
		  } else {
			// Browser doesn't support Geolocation
			handleNoGeolocation(false);
		  }
		}
		
		function handleNoGeolocation(errorFlag) {
		  if (errorFlag) {
			var content = 'Error: The Geolocation service failed.';
		  } else {
			var content = 'Error: Your browser doesn\'t support geolocation.';
		  }
		
		  var options1 = {
			map: map,
			position: new google.maps.LatLng(60, 105),
			content: content
		  };
		  var infowindow = new google.maps.InfoWindow(options1);
		  map.setCenter(options1.position);
		}
		
		google.maps.event.addDomListener(window, 'load', initialize);*/
</script>
</body>
<!-- END BODY -->
</html>