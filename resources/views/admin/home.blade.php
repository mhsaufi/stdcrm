<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Save The Date Control Center</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <link href="{{ asset('myasset/fullcalendar/daygrid/main.css') }}" rel='stylesheet' />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="{{ asset('admin/css/theme-default.css') }}"/>
        <!-- EOF CSS INCLUDE -->                                    
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar page-sidebar-fixed">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="#">Administrator</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="{{ asset('myasset/logodesignrequest/white_logo_notext.png') }}" />
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="{{ asset('myasset/logodesignrequest/white_logo.png') }}" />
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name">{{ Auth::user()->name }}</div>
                                <div class="profile-data-title">{{ Auth::user()->email }}</div>
                            </div>
                            <!-- <div class="profile-controls">
                                <a href="pages-profile.html" class="profile-control-left"><span class="fa fa-info"></span></a>
                                <a href="pages-messages.html" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                            </div> -->
                        </div>                                                                        
                    </li>
                    <li class="xn-title">Navigation</li>
                    <li class="active">
                        <a href="{{ url('/home') }}"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>                       
                    </li>  
                    <li>
                        <a href="{{ url('/recordusers') }}"><span class="fa fa-user"></span> <span class="xn-text">Users</span></a>                        
                    </li>
                    <li>
                        <a href="{{ url('/recordvendors') }}"><span class="fa fa-briefcase"></span> <span class="xn-text">Vendors</span></a>                        
                    </li>
                    <li>
                        <a href="{{ url('/recordevents') }}"><span class="fa fa-th-list"></span> <span class="xn-text">Events</span></a>                        
                    </li>
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
                    <!-- END SIGN OUT -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>                    
                    <li class="active">Dashboard</li>
                </ul>
                <!-- END BREADCRUMB -->                       
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
                    <!-- START WIDGETS -->                    
                    <div class="row">
                        <div class="col-md-3">
                            
                            <!-- START WIDGET REGISTRED -->
                            <div class="widget widget-default widget-item-icon">
                                <div class="widget-item-left">
                                    <span class="fa fa-user"></span>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-int num-count">{{ $count_user }}</div>
                                    <div class="widget-title">Registered users</div>
                                    <div class="widget-subtitle">On your platform</div>
                                </div>                           
                            </div>                            
                            <!-- END WIDGET REGISTRED -->
                            
                        </div>
                        <div class="col-md-3">
                            
                            <!-- START WIDGET MESSAGES -->
                            <div class="widget widget-default widget-item-icon">
                                <div class="widget-item-left">
                                    <span class="fa fa-briefcase"></span>
                                </div>                             
                                <div class="widget-data">
                                    <div class="widget-int num-count">{{ $count_company }}</div>
                                    <div class="widget-title">Total Vendors</div>
                                    <div class="widget-subtitle">On your platform</div>
                                </div>
                            </div>                            
                            <!-- END WIDGET MESSAGES -->
                            
                        </div>
                        <div class="col-md-3">
                            
                            <!-- START WIDGET MESSAGES -->
                            <div class="widget widget-default widget-item-icon">
                                <div class="widget-item-left">
                                    <span class="fa fa-th-list"></span>
                                </div>                             
                                <div class="widget-data">
                                    <div class="widget-int num-count">{{ $count_wevent }}</div>
                                    <div class="widget-title">Events</div>
                                    <div class="widget-subtitle">On your platform</div>
                                </div>
                            </div>                            
                            <!-- END WIDGET MESSAGES -->
                            
                        </div>
                        <div class="col-md-3">
                            
                            <!-- START WIDGET CLOCK -->
                            <div class="widget widget-info widget-padding-sm">
                                <div class="widget-big-int plugin-clock">00:00</div>                            
                                <div class="widget-subtitle plugin-date">Loading...</div>                     
                            </div>                        
                            <!-- END WIDGET CLOCK -->
                            
                        </div>
                    </div>
                    <!-- END WIDGETS -->                    
                    
                  
                    
                    <div class="row">
						<div class="col-md-8">
                            
                            <!-- START SALES BLOCK -->  
                                <div id="hello"></div>
                            <!-- END SALES BLOCK -->                          
                            
                        </div>
					

                        <div class="col-md-4">
                            
                            <!-- START VISITORS BLOCK -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title-box">
                                        <h3>Visitors</h3>
                                        <span>Visitors (last month)</span>
                                    </div>
                                    <ul class="panel-controls" style="margin-top: 2px;">
                                        <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span></a>                                        
                                            <ul class="dropdown-menu">
                                                <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span> Collapse</a></li>
                                                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span> Remove</a></li>
                                            </ul>                                        
                                        </li>                                        
                                    </ul>
                                </div>
                                <div class="panel-body padding-0">
                                    <div class="chart-holder" id="dashboard-donut-1" style="height: 200px;"></div>
                                </div>
                            </div>
                            <!-- END VISITORS BLOCK -->
                            
                        </div>

                        <div class="col-md-4">

                            <!-- START USERS ACTIVITY BLOCK -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title-box">
                                        <h3>Users Activity</h3>
                                        <span>Users vs returning</span>
                                    </div>                                    
                                    <ul class="panel-controls" style="margin-top: 2px;">
                                        <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span></a>                                        
                                            <ul class="dropdown-menu">
                                                <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span> Collapse</a></li>
                                                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span> Remove</a></li>
                                            </ul>                                        
                                        </li>                                        
                                    </ul>                                    
                                </div>                                
                                <div class="panel-body padding-0">
                                    <div class="chart-holder" id="dashboard-bar-1" style="height: 200px;"></div> 
                                </div>                                    
                            </div>
                            <!-- END USERS ACTIVITY BLOCK -->
                        </div>
                        
                        <div class="col-md-4">
                            
                            <!-- START SALES & EVENTS BLOCK -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title-box">
                                        <h3>Sales & Event</h3>
                                        <span>Event "Purchase Button"</span>
                                    </div>
                                    <ul class="panel-controls" style="margin-top: 2px;">
                                        <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span></a>                                        
                                            <ul class="dropdown-menu">
                                                <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span> Collapse</a></li>
                                                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span> Remove</a></li>
                                            </ul>                                        
                                        </li>                                        
                                    </ul>
                                </div>
                                <div class="panel-body padding-0">
                                    <div class="chart-holder" id="dashboard-line-1" style="height: 200px;"></div>
                                </div>
                            </div>
                            <!-- END SALES & EVENTS BLOCK -->
                            
                        </div>
                    </div>
                    
                    
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX--> 
        @include('admin.templates.logout')
        <!-- END MESSAGE BOX-->

        @include('admin.templates.scripts')

        <script>
            var APP_URL = "{{ url('/') }}";
            var token = "{{ csrf_token() }}";

            $(document).ready(function(){

                var calendarEl = document.getElementById('hello');

                var calendar = new FullCalendar.Calendar(calendarEl, {
                  plugins: [ 'dayGrid' ]
                });

                calendar.render();

            });


        </script>

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src="{{ asset('admin/js/plugins/icheck/icheck.min.js') }}"></script>        
        <script type="text/javascript" src="{{ asset('admin/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('admin/js/plugins/scrolltotop/scrolltopcontrol.js') }}"></script>
        
        <script type="text/javascript" src="{{ asset('admin/js/plugins/morris/raphael-min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('admin/js/plugins/morris/morris.min.js') }}"></script>       
        <script type="text/javascript" src="{{ asset('admin/js/plugins/rickshaw/d3.v3.js') }}"></script>
        <script type="text/javascript" src="{{ asset('admin/js/plugins/rickshaw/rickshaw.min.js') }}"></script>
        <script type='text/javascript' src="{{ asset('admin/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
        <script type='text/javascript' src="{{ asset('admin/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>                
        <script type='text/javascript' src="{{ asset('admin/js/plugins/bootstrap/bootstrap-datepicker.js') }}"></script>                
        <script type="text/javascript" src="{{ asset('admin/js/plugins/owl/owl.carousel.min.js') }}"></script>                 
        
        <script type="text/javascript" src="{{ asset('admin/js/plugins/moment.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('admin/js/plugins/daterangepicker/daterangepicker.js') }}"></script>
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
        <!-- <script type="text/javascript" src="{{ asset('admin/js/settings.js') }}"></script> -->
        
        <script type="text/javascript" src="{{ asset('admin/js/plugins.js') }}"></script>        
        <script type="text/javascript" src="{{ asset('admin/js/actions.js') }}"></script>
        
        <script type="text/javascript" src="{{ asset('admin/js/demo_dashboard.js') }}"></script>
        <script src="{{ asset('myasset/fullcalendar/core/main.js') }}"></script>
    <script src="{{ asset('myasset/fullcalendar/daygrid/main.js') }}"></script>
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
    </body>
</html>






