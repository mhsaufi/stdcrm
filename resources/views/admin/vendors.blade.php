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
        <link rel="stylesheet" type="text/css" id="theme" href="{{ asset('admin/css/custom.css') }}"/>
        <link rel="stylesheet" type="text/css" href="DataTablesBS4/datatables.min.css"/>
        <!-- EOF CSS INCLUDE -->                                
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
                    <li class="active">
                        <a href="{{ url('/recordvendors') }}"><span class="fa fa-users"></span>  <span class="xn-text">Vendors</span> </a>                        
                    </li>
                    <li>
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
                    <li class="active">Vendors</li>
                </ul>
                <!-- END BREADCRUMB -->

                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><span class="fa fa-arrow-circle-o-left"></span> Vendors / Companies </h2>
                </div>
                <!-- END PAGE TITLE -->                

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">                
                    <input type="hidden" name="selected_data" id="selected_data">
                    <div class="row">
                        <div class="col-md-12">

                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title">Default</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                    </ul>                                
                                </div>
                                <div class="panel-body">
                                    <div class="table_additional_option">
                                        <div>
                                            <button class="remove_selected_button" id="remove_selected_button">Remove</button>
                                            <button class="remove_selected_button" id="remove_all">Remove All</button>
                                        </div>
                                    </div>
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Contact</th>
                                                <th>Email</th>
                                                <th>SSM No</th>
                                                <th>Address</th>
                                                <th>Admin</th>
                                                <th>Admin Email</th>
                                                <th>Registered On</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END DEFAULT DATATABLE -->

                        </div>
                    </div>                                
                    
                </div>
                <!-- PAGE CONTENT WRAPPER -->                                
            </div>    
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->       
        
        <!-- MESSAGE BOX--> 
        @include('admin.templates.logout')
        <!-- END MESSAGE BOX-->

        <div class="confirm_remove_container">
            <div class="confirm_remove_container_child fade-in-top">
                <div class="confirm_header bg-standard">Remove Selected Vendor(s)</div>
                <div class="confirm_content">
                    <div style="padding-top: 3%;">
                        <p>Are you sure you want to remove selected vendor(s)?</p>
                    </div>
                    <div style="width: 100%;display: flex;flex-direction: row;justify-content: space-around;margin-top: 10px;">
                        <button class="remove_button_cancel">Cancel</button>
                        <button class="remove_button_confirm">Remove</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="confirm_remove_all_container">
            <div class="confirm_remove_all_child fade-in-top">
                <div class="confirm_header bg-harmfull">Remove All Vendors/Companies</div>
                <div class="confirm_content">
                    <div style="padding-top: 3%;">
                        <p>Are you sure you want to remove all registered vendors?</p>
                    </div>
                    <div style="width: 100%;display: flex;flex-direction: row;justify-content: space-around;margin-top: 10px;">
                        <button class="remove_all_button_cancel">Cancel</button>
                        <button class="remove_all_button_confirm">Remove</button>
                    </div>
                </div>
            </div>
        </div>

       @include('admin.templates.scripts')                

        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src="{{ asset('admin/js/plugins/icheck/icheck.min.js') }}"></script>        
        <script type="text/javascript" src="{{ asset('admin/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js') }}"></script>
        
        <!-- <script type="text/javascript" src="{{ asset('admin/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>   -->
        <script type="text/javascript" src="DataTablesBS4/datatables.min.js"></script>
        <!-- END PAGE PLUGINS -->

        <!-- START TEMPLATE -->
        <!-- <script type="text/javascript" src="js/settings.js"></script> -->
        
        <script type="text/javascript" src="{{ asset('admin/js/plugins.js') }}"></script>        
        <script type="text/javascript" src="{{ asset('admin/js/actions.js') }}"></script>        
        <!-- END TEMPLATE -->

        <script>
            var APP_URL = "{!! url('/') !!}";

            $(document).ready(function(){

                var url = APP_URL + '/vendorslist';
                
                if($(".datatable").length > 0){                
                    $(".datatable").DataTable({
                        "processing": true,
                        "serverSide": true,
                        "select": true,
                        "ajax": url,
                        "columns": [
                            { "data": "company_name" },
                            { "data": "company_contact" },
                            { "data": "company_email" },
                            { "data": "company_ssm" },
                            { "data": "company_address" },
                            { "data": "admin_name" },
                            { "data": "admin_email" },
                            { "data": "created_at" }
                        ],
                        buttons: [
                            'excel'
                        ]
                    });

                    $(".datatable").on('page.dt',function () {
                        onresize(100);
                    });

                    var table = $(".datatable").DataTable();

                    var obj;

                    table.on('select.dt',function( e, dt, type, indexes){

                        if(type === 'row'){

                            obj = table.rows({ selected: true }).ids().toArray();
                        }
                    });

                    $('#remove_selected_button').click(function(){

                        var obj1 = table.rows({selected: true}).data().pluck('DT_RowId').toArray();

                        if(obj1 === null || obj1.length == 0){

                        }else{

                            $('.confirm_remove_container').fadeIn('fast');
                            $('.confirm_remove_container_child').removeClass('slide-out-top');
                        }
                    });
                }

                $('.remove_button_cancel').on('click',function(){

                    $('.confirm_remove_container_child').addClass('slide-out-top').parent().fadeOut('fast');
                });

            });

            $('#remove_all').click(function(){

                $('.confirm_remove_all_container').fadeIn('fast');
                $('.confirm_remove_all_child').removeClass('slide-out-top');

            });

            $('.remove_all_button_cancel').on('click',function(){

                $('.confirm_remove_all_child').addClass('slide-out-top').parent().fadeOut('fast');
            });
        </script>
    <!-- END SCRIPTS --> 
        
    </body>
</html>






