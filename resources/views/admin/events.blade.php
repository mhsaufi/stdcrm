<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Save The Date Control Center</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="{{ asset('admin/css/theme-default.css') }}"/>
        <link rel="stylesheet" type="text/css" href="DataTablesBS4/datatables.min.css"/>
        <link rel="stylesheet" type="text/css" href="{{asset('myasset/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('myasset/air-datepicker-master/dist/css/datepicker.min.css')}}">
        <!-- EOF CSS INCLUDE -->  
        <style>
            .event_container {
                width: 100%;
                height: 100%;
                background: #fff;
                padding: 2% 2%;
                display: flex;
                flex-direction: column;
                justify-content: flex-start;
            }

            .event_container_header {
                display: flex;
                flex-direction: row;
                justify-content: space-between;
                margin-bottom: 20px;
            }

            .event_container_header > div:nth-child(1){

            }

            .event_container_header > div:nth-child(2){
                padding: 5px 10px;
                border-radius: 3px;
                border: 0.05em solid #f9f9f9;
                cursor: pointer;
            }

            .event_container_header > div:nth-child(2):hover {
                background: #f5f5f5;
            }

            .event_form_container {
                position: absolute;
                top: 0;
                left: 0;
                height: 100%;
                width: 100%;
                background: rgba(255,255,255,0.8);
                z-index: 9;
            }

            .event_form {
                position: fixed;
                top: 10%;
                left: 20%;
                width: 60%;
                padding: 15px;
                background: #fff;
                border-radius: 5px;
                -moz-box-shadow: 0 0 30px #888;
                -webkit-box-shadow: 0 0 30px#888;
                box-shadow: 0 0 30px #888;
                display: flex;
                flex-direction: column;
                justify-content: flex-start;
            }

            .datepicker-here {
                z-index: 999!important;
            }
        </style>                                  
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="index.html">Administrator</a>
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
                    <li>
                        <a href="{{ url('/home') }}"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>                        
                    </li>  
                    <li>
                        <a href="{{ url('/recordusers') }}"><span class="fa fa-user"></span>  <span class="xn-text">Users</span> </a>                        
                    </li>
                    <li>
                        <a href="{{ url('/recordvendors') }}"><span class="fa fa-users"></span>  <span class="xn-text">Vendors</span> </a>                        
                    </li>
                    <li class="active">
                        <a href="{{ url('/recordevents') }}"><span class="fa fa-th-list"></span>  <span class="xn-text">Events</span> </a>                        
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
                    <li><a href="{{ url('/home') }}">Home</a></li>
                    <li class="active">Events Management</li>
                </ul>
                <!-- END BREADCRUMB -->

                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><span class="fa fa-arrow-circle-o-left"></span> Events </h2>
                </div>
                <!-- END PAGE TITLE -->                

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">                
                
                    <div class="row">
                        <div class="col-md-12">

                            <div class="event_container">
                                <div class="event_container_header">
                                    <div>All posted upcoming events</div>
                                    <div>Post new</div>
                                </div>
                                <div>
                                    
                                </div>
                            </div>

                        </div>
                    </div>                                
                    
                </div>
                <!-- PAGE CONTENT WRAPPER -->                                
            </div>    
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->  

        <div class="event_form_container">
            <div class="event_form">
                <div>
                    <label>Event Name</label>
                    <input type="text" name="eventname" class="form-control">
                </div>
                <div>
                    
                </div>
                <div>
                    <input type='text' 
                      class="date_form" 
                      data-timepicker="true" 
                      data-position="bottom right" 
                      data-language='en' 
                      data-date-format='d-m-yyyy' 
                      data-time-format='h:ii aa' 
                      id="date_t"/>
                </div>
            </div>
        </div>     
        
        <!-- MESSAGE BOX--> 
        @include('admin.templates.logout')
        <!-- END MESSAGE BOX-->

        @include('admin.templates.scripts')               

        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src="{{ asset('admin/js/plugins/icheck/icheck.min.js') }}"></script>        
        <script type="text/javascript" src="{{ asset('admin/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js') }}"></script>
        
        <!-- <script type="text/javascript" src="{{ asset('admin/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>   -->
        <script type="text/javascript" src="DataTablesBS4/datatables.min.js"></script>
        <!-- END PAGE PLUGINS -->

        <!-- START TEMPLATE -->
        <!-- <script type="text/javascript" src="js/settings.js"></script> -->

        <script src="{{asset('myasset/air-datepicker-master/dist/js/datepicker.min.js')}}"></script>
        <script src="{{asset('myasset/air-datepicker-master/dist/js/i18n/datepicker.en.js')}}"></script>
        
        <script type="text/javascript" src="{{ asset('admin/js/plugins.js') }}"></script>        
        <script type="text/javascript" src="{{ asset('admin/js/actions.js') }}"></script>        
        <!-- END TEMPLATE -->

        <script>
            var APP_URL = "{!! url('/') !!}";

            $(document).ready(function() {

                var url = APP_URL + '/userslist';
                

            });
        </script>
    <!-- END SCRIPTS --> 
        
    </body>
</html>