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
   <link rel="stylesheet" type="text/css" href="<?=base_url()?>pub/assets/gritter/css/jquery.gritter.css" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
   <!-- BEGIN HEADER -->
   <div id="header" class="navbar navbar-inverse navbar-fixed-top">
       <!-- BEGIN TOP NAVIGATION BAR -->
       <div class="navbar-inner">
           <div class="container-fluid">
               <!--BEGIN SIDEBAR TOGGLE-->
               <div class="sidebar-toggle-box hidden-phone">
                   <div class="icon-reorder tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
               </div>
               <!--END SIDEBAR TOGGLE-->
                <!--BEGIN SIDEBAR RIGHT TOGGLE-->
               <div class="sidebar-toggle-right-box hidden-phone">
                   <div class="icon-reorder tooltips" data-placement="bottom" data-original-title="Toggle Sidebar"></div>
               </div>
               <!--END SIDEBAR RIGHT TOGGLE-->
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
      <!-- BEGIN SIDEBAR -->
      <div class="sidebar-scroll">
        <div id="sidebar" class="nav-collapse collapse">

         <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
         <div class="navbar-inverse">
            <form class="navbar-search visible-phone">
               <input type="text" class="search-query" placeholder="Search" />
            </form>
         </div>
         <!-- END RESPONSIVE QUICK SEARCH FORM -->
         <!-- BEGIN SIDEBAR MENU -->
          <ul class="sidebar-menu">
              <li class="sub-menu">
                  <a class="" href="<?=base_url()?>dashboard">
                      <i class="icon-dashboard"></i>
                      <span>Dashboard</span>
                  </a>
              </li>
              <li class="sub-menu <?=$menuIndex[0]=="1"?"active":""?>">
                  <a class="" href="javascript:;">
                      <i class="icon-home"></i>
                      <span>Nursery</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li <?=$menuIndex[1]=="0"?"class='active'":""?>><a href="<?=base_url()?>nursery">Nursery</a></li>
                      <li <?=$menuIndex[1]=="1"?"class='active'":""?>><a href="<?=base_url()?>nursery/nursery_groups">Nursery Groups</a></li>
                      <li <?=$menuIndex[1]=="2"?"class='active'":""?>><a href="<?=base_url()?>nursery/nursery_group_categories">Group Categories</a></li>
                      <li <?=$menuIndex[1]=="3"?"class='active'":""?>><a href="<?=base_url()?>nursery/nursery_settings">Settings</a></li>
                  </ul>
              </li>
              <li class="sub-menu">
                  <a class="" href="javascript:;">
                      <i class="icon-male"></i>
                      <span>Waterman</span>
                  </a>
              </li>
              <li class="sub-menu">
                  <a class="" href="javascript:;">
                      <i class="icon-leaf"></i>
                      <span>Mustard</span>
                  </a>
              </li>
              <li class="sub-menu">
                  <a class="" href="javascript:;">
                      <i class="icon-group"></i>
                      <span>Groups</span>
                  </a>
              </li>
              <li class="sub-menu">
                  <a class="" href="javascript:;">
                      <i class="icon-calendar"></i>
                      <span>Events</span>
                  </a>
              </li>
              <li class="sub-menu">
                  <a class="" href="javascript:;">
                      <i class="icon-eye-open"></i>
                      <span>Reports</span>
                  </a>
              </li>
              <li class="sub-menu">
                  <a class="" href="javascript:;">
                      <i class="icon-cog"></i>
                      <span>System</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="">Settings</a></li>
                      <li><a class="" href="">Design</a></li>
                      <li><a class="" href="">Users</a></li>
                  </ul>
              </li>
              <!--<li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-book"></i>
                      <span>UI Elements</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="general.html">General</a></li>
                      <li><a class="" href="button.html">Buttons</a></li>
                      <li><a class="" href="slider.html">Sliders</a></li>
                      <li><a class="" href="metro_view.html">Metro View</a></li>
                      <li><a class="" href="tabs_accordion.html">Tabs & Accordions</a></li>
                      <li><a class="" href="typography.html">Typography</a></li>
                      <li><a class="" href="tree_view.html">Tree View</a></li>
                      <li><a class="" href="nestable.html">Nestable List</a></li>
                  </ul>
              </li>
              <li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-cogs"></i>
                      <span>Components</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="calendar.html">Calendar</a></li>
                      <li><a class="" href="grids.html">Grids</a></li>
                      <li><a class="" href="chartjs.html">Chart Js</a></li>
                      <li><a class="" href="flot_chart.html">Flot Charts</a></li>
                      <li><a class="" href="gallery.html"> Gallery</a></li>
                  </ul>
              </li>
              <li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-tasks"></i>
                      <span>Form Stuff</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="form_layout.html">Form Layouts</a></li>
                      <li><a class="" href="form_component.html">Form Components</a></li>
                      <li><a class="" href="form_wizard.html">Form Wizard</a></li>
                      <li><a class="" href="form_validation.html">Form Validation</a></li>
                      <li><a class="" href="dropzone.html">Dropzone File Upload </a></li>

                  </ul>
              </li>
              <li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-th"></i>
                      <span>Data Tables</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="basic_table.html">Basic Table</a></li>
                      <li><a class="" href="dynamic_table.html">Dynamic Table</a></li>
                      <li><a class="" href="editable_table.html">Editable Table</a></li>
                  </ul>
              </li>
              <li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-fire"></i>
                      <span>Icons</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="font_awesome.html">Font Awesome</a></li>
                      <li><a class="" href="glyphicons.html">Glyphicons</a></li>
                  </ul>
              </li>
              <li class="sub-menu">
                  <a class="" href="javascript:;">
                      <i class="icon-trophy"></i>
                      <span>Portlets</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a href="general_portlet.html" class=""> General Portlet</a></li>
                      <li><a href="draggable_portlet.html" class="">Draggable Portlet</a></li>
                  </ul>
              </li>
              <li class="sub-menu">
                  <a class="" href="javascript:;">
                      <i class="icon-map-marker"></i>
                      <span>Maps</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a href="vector_map.html" class="">Vector Maps</a></li>
                      <li><a href="google_map.html" class="">Google Map</a></li>
                  </ul>
              </li>
              <li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-file-alt"></i>
                      <span>Sample Pages</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="blank.html">Blank Page</a></li>
                      <li><a class="" href="blog.html">Blog</a></li>
                      <li><a class="" href="timeline.html">Timeline</a></li>
                      <li><a class="" href="profile.html">Profile</a></li>
                      <li><a class="" href="about_us.html">About Us</a></li>
                      <li><a class="" href="contact_us.html">Contact Us</a></li>
                  </ul>
              </li>
              <li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-glass"></i>
                      <span>Extra</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="lock.html">Lock Screen</a></li>
                      <li><a class="" href="invoice.html">Invoice</a></li>
                      <li><a class="" href="pricing_tables.html">Pricing Tables</a></li>
                      <li><a class="" href="search_result.html">Search Result</a></li>
                      <li><a class="" href="faq.html">FAQ</a></li>
                      <li><a class="" href="404.html">404 Error</a></li>
                      <li><a class="" href="500.html">500 Error</a></li>
                  </ul>
              </li>

              <li>
                  <a class="" href="login.html">
                    <i class="icon-user"></i>
                    <span>Login Page</span>
                  </a>
              </li>-->
          </ul>
         <!-- END SIDEBAR MENU -->
      </div>
      </div>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->  
      <div id="main-content">
         <?=$this->template->content;?>
      </div>
      <!-- END PAGE --> 
      <!-- BEGIN RIGHT SIDEBAR -->
      <div id="sidebar-left-scroll" style="overflow:hidden; outline:none">
      		<div class="slc-inner-1" style="margin-top: 0px;"></div>
            <div id="slc-inner-2">&nbsp;</div>
      </div>
      <!-- END RIGHT SIDEBAR -->
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
   <script src="<?=base_url()?>pub/js/jquery.nicescroll.js" type="text/javascript"></script>
   <script src="<?=base_url()?>pub/assets/bootstrap/js/bootstrap.min.js"></script>
   <script src="<?=base_url()?>pub/assets/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
   <script src="<?=base_url()?>pub/js/jquery.blockui.js"></script>
   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="<?=base_url()?>pub/js/excanvas.js"></script>
   <script src="<?=base_url()?>pub/js/respond.js"></script>
   <![endif]-->
   <script type="text/javascript" src="<?=base_url()?>pub/assets/uniform/jquery.uniform.min.js"></script>
   <script type="text/javascript" src="<?=base_url()?>pub/assets/data-tables/jquery.dataTables.js"></script>
   <script type="text/javascript" src="<?=base_url()?>pub/assets/data-tables/DT_bootstrap.js"></script>
   <script type="text/javascript" src="<?=base_url()?>pub/assets/gritter/js/jquery.gritter.js"></script>
   <script type="text/javascript" src="<?=base_url()?>pub/assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
   <script src="<?=base_url()?>pub/js/jquery.scrollTo.min.js"></script>
   <script type="text/javascript" src="<?=base_url()?>pub/js/jquery.validate.min.js"></script>
   <script type="text/javascript" src="<?=base_url()?>pub/js/additional-methods.min.js"></script>
   <script type="text/javascript" src="<?=base_url()?>pub/assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
   
   <!--common script for all pages-->
   <script src="<?=base_url()?>pub/js/common-scripts.js"></script>
   
   <!--script for this page only-->
   <script src="<?=base_url()?>pub/js/core/nursery.js" type="text/javascript"></script>
   <script src="<?=base_url()?>pub/js/dynamic-table.js"></script>
   <!-- END JAVASCRIPTS -->
    
</body>
<!-- END BODY -->
</html>