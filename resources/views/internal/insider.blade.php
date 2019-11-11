
<!DOCTYPE html>
<html>
<head>
	<title>Insider</title>
	 @include('templates.header')

	<link rel="stylesheet" href="{{ asset('myasset/socialsharekit/dist/css/social-share-kit.css') }}" type="text/css">

	<style>
	 	.navbar {
	 		-moz-box-shadow: 0 0 5px #888;
	        -webkit-box-shadow: 0 0 5px#888;
	        box-shadow: 0 0 2px #888;
	 	}
		.navbar-expand-lg .navbar-nav .nav-link {
			color: black !important;
			opacity: 0.5;
		}
		.navbar-expand-lg .navbar-nav .nav-link:active{
			color: gold !important;
			opacity: 0.5;
		}
		.pattern{
			background-repeat: repeat;
			background-size:75px 75px;
			background-attachment: fixed;
			height: 250px !important;
		}

		.big_container {
			width: 100%;
			min-height: 100vh;
			/*background: yellow;*/
			display: flex;
			flex-direction: column;
			justify-content: flex-start;
			padding: 5vh 15%;
		}

		.contact_container {
			/*border-top: 0.05em solid #d4af37;*/
			width: auto;
			min-height: 100%;
			/*background: red;*/
			margin: 2% 0;
			padding: 2% 0;
			display: flex;
			flex-direction: column;
			justify-content: flex-start;
		}

		.contact_container > .header {
			position: relative;
			width: 100%;
			height: 200px!important;
			height: auto;
			display: flex;
			flex-direction: row;
			justify-content: space-between;
			align-items: center;
			border-bottom: 0.05em solid #dcdcdc;
			margin-bottom: 20px;
		}

		.company_logo_insider {
		  border-radius: 50%;
		  border: 0.05em solid white;
		  height: 150px;
		  width: 150px;
		}

		.insider {
			display: flex;
			flex-direction: column;
			justify-content: flex-start;
			width: 100%;
		}

		.insider_header {
			width: 100%;
			display: flex;
			flex-direction: row;
			flex-wrap: wrap;
			justify-content: flex-start;
		}

		.insider_tab_button {
			padding: 5px 10px;
			border: 0.05em solid #dcdcdc;
			cursor: pointer;
		}

		.alert_btn {
			padding: 5px 10px;
			border: 0.05em solid #dcdcdc;
			cursor: pointer;
			background: white;
		}

		.alert_btn:hover {
			background: #dcdcdc;
		}

		.insider_tab_button:hover {
			background: #f9f9f9;
		}

		.active-tab {
			background: #e8e8e8;
		}

		.insider_content {
			width: 100%;
			height: auto;
			position: relative;
			background: blue;
		}

		.insider_info {
			width: 100%;
			padding: 15px 20px;
			display: flex;
			flex-direction: row;
			justify-content: flex-start;
			align-items: center;
		}

		.insider_pic{
	    	height: 100px;
	    	width: 100px;
	    	border-radius: 50%;
	    	border: 10px solid #fff;
	    	object-fit: cover;
	    }

	    .insider_info_detail {
	    	padding: 15px 10px;
	    	width: 40%;
	    }

	    .insider_info_detail div {
	    	margin-bottom: 10px;
	    }

	    .insider_staff_member {
	    	position: absolute;
	    	top: 0;
	    	left: 0;
	    	width: 100%;
	    	/*background: green;*/
	    	min-height: 100px!important;
	    	display: none;
	    }

	    .insider_new_application {
	    	position: absolute;
	    	top: 0;
	    	left: 0;
	    	width: 100%;
	    	/*background: purple;*/
	    	min-height: 120px!important;
	    }

	    .insider_staff_inactive {
	    	position: absolute;
	    	top: 0;
	    	left: 0;
	    	width: 100%;
	    	/*background: pink;*/
	    	min-height: 120px!important;
	    	display: none;
	    }

	    .insider_table {
	    	margin-top: 15px;
	    	width: 100%;
	    	font-size: 12px;
	    }

	    .insider_table th, .insider_table td {
	    	border: 0.05em solid #dcdcdc;
	    	padding: 5px 10px;
	    }

	    .insider_table tbody>tr:hover {
	    	background: #dcdcdc;
	    }

	    .action_col_deactivate {
	    	cursor: pointer;
	    	background: #E74C3C;
	    	color: white;
	    	text-align: center;
	    }

	    .action_col_deactivate:hover {
	    	opacity: 0.9;
	    }

	    .action_col_activate {
	    	cursor: pointer;
	    	background: #52BE80;
	    	color: white;
	    	text-align: center;
	    }

	    .action_col_activate:HOVER {
	    	opacity: 0.9;
	    }

	    .action_col_approve {
	    	cursor: pointer;
	    	background: #52BE80;
	    	color: white;
	    	text-align: center;
	    }

	    .action_col_activate:HOVER {
	    	opacity: 0.9;
	    }

	    .action_col_reject {
	    	cursor: pointer;
	    	background: #E74C3C;
	    	color: white;
	    	text-align: center;
	    }

	    .action_col_reject:HOVER {
	    	opacity: 0.9;
	    }

	    .deactivating_container {
	    	position: fixed;
	    	top: 0;
	    	left: 0;
	    	width: 100%!important;
	    	height: 100%!important;
	    	background: rgba(255,255,255, 0.6);
	    	display: none;
	    }

	    .deactivating_container {
	    	position: fixed;
	    	top: 0;
	    	left: 0;
	    	width: 100%!important;
	    	height: 100%!important;
	    	background: rgba(255,255,255, 0.6);
	    	display: none;
	    }

	    .confirm_deactivation {
	    	height: 22%!important;
	    	width: 20%!important;
	    	position: absolute;
		    top: 50%;
		    left: 50%;
		    -moz-transform: translateX(-50%) translateY(-50%);
		    -webkit-transform: translateX(-50%) translateY(-50%);
		    transform: translateX(-50%) translateY(-70%);
	    	background: white;
	    	-moz-box-shadow: 0 0 30px #888;
	        -webkit-box-shadow: 0 0 30px#888;
	        box-shadow: 0 0 30px #888;
	        border-radius: 5px;
	        display: flex;
	        flex-direction: column;
	        justify-content: flex-start;
	        align-items: space-around;
	        padding: 15px 15px;
	    }

	    .confirm_deactivation_header {
	    	width: 100%;
	    	padding-bottom: 10px;
	    	margin-bottom: 10px;
	    	border-bottom: 0.05em solid #d4af37;
	    }

	    .activating_container, .approving_container, .rejecting_container {
	    	position: fixed;
	    	top: 0;
	    	left: 0;
	    	width: 100%!important;
	    	height: 100%!important;
	    	background: rgba(255,255,255, 0.6);
	    	display: none;
	    }

	    .confirm_activation, .confirm_approval , .confirm_rejection {
	    	height: 22%!important;
	    	width: 20%!important;
	    	position: absolute;
		    top: 50%;
		    left: 50%;
		    -moz-transform: translateX(-50%) translateY(-50%);
		    -webkit-transform: translateX(-50%) translateY(-50%);
		    transform: translateX(-50%) translateY(-70%);
	    	background: white;
	    	-moz-box-shadow: 0 0 30px #888;
	        -webkit-box-shadow: 0 0 30px#888;
	        box-shadow: 0 0 30px #888;
	        border-radius: 5px;
	        display: flex;
	        flex-direction: column;
	        justify-content: flex-start;
	        align-items: space-around;
	        padding: 15px 15px;
	    }

	    .confirm_activation_header, .confirm_approval_header, .confirm_rejection_header {
	    	width: 100%;
	    	padding-bottom: 10px;
	    	margin-bottom: 10px;
	    	border-bottom: 0.05em solid #d4af37;
	    }
	 </style>

</head>
<body class="pattern">

	<!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      @include('templates.navbar')
    </header>
    <!-- Header Area wrapper End -->
    <br>

    <div class="big_container">
    	<div class="contact_container">
    		<div class="header">
    			<div class="animated fadeInDown fast">
    				<h4 style="color: #d4af37;">{{ $company_info['company_name'] }}</h4>
    				<p><i class="fas fa-envelope"></i> &nbsp&nbsp{{ $company_info['company_email'] }}</p>
    				<p><i class="fas fa-phone"></i> &nbsp&nbsp{{ $company_info['company_contact'] }}</p>
    				<p><i class="fas fa-map-marker-alt"></i> &nbsp&nbsp{{ $company_info['company_address'] }}</p>
    			</div>
				@if($company_info['company_logo'] == '')
				<div class="company_logo_insider" style="background: url('{{ asset('myasset/img/null.jpg') }}');background-position: center;background-size: cover;"></div>
				@else
				<div class="company_logo_insider" style="background: url('{{ asset('storage/'.$company_info['company_logo']) }}');background-position: center;background-size: cover;"></div>
      			@endif

      			<div class="animated fadeInDown fast">
    				<h4 style="color: #d4af37;">{{ $company_info['userreverse']['name'] }}</h4>
    				<p><i class="fas fa-id-card"></i> &nbsp&nbsp{{ $company_info['userreverse']['fullname'] }}</p>
    				<p><i class="fas fa-envelope"></i> &nbsp&nbsp{{ $company_info['userreverse']['email'] }}</p>
    				<p><i class="fas fa-phone"></i> &nbsp&nbsp{{ $company_info['userreverse']['phone'] }}</p>
    			</div>
				@if($company_info['company_logo'] == '')
				<div class="company_logo_insider" style="background: url('{{asset('myasset/img/default.jpeg')}}');background-position: center;background-size: cover;"></div>
				@else
				<div class="company_logo_insider" style="background: url('{{asset('storage/'.$company_info['userreverse']['dp'])}}');background-position: center;background-size: cover;"></div>
      			@endif
    		</div>
    		<div class="insider animated fadeInUp fast">
    			<div class="insider_header">
    				<div class="insider_tab_button active-tab" id="tab_2">New Staff Application</div>
    				<div class="insider_tab_button" id="tab_1">Staff Member</div>
    				<div class="insider_tab_button" id="tab_3">Inactive Staff</div>
    			</div>
    			<div class="insider_content">
    				<div class="insider_staff_member">

    					<table class="insider_table">
    						<thead>
    							<tr>
    								<th>
    									
    								</th>
    								<th>
    									Fullname
    								</th>
    								<th>
    									Email
    								</th>
    								<th>
    									Name
    								</th>
    								<th>
    									Contact
    								</th>
    								<th style="text-align: center;">
    									Status
    								</th>
    								<th>
    									
    								</th>
    							</tr>
    						</thead>
    						<tbody>
    							@foreach($users as $user)
    							<tr>
    								<td>
    									
    								</td>
    								<td>
    									{{ $user['fullname'] }}
    								</td>
    								<td>
    									{{ $user['email'] }}
    								</td>
    								<td>
    									{{ $user['name'] }}
    								</td>
    								<td>
    									{{ $user['phone'] }}
    								</td>
    								<td style="text-align: center;">
    									{{ $user['status_id'] }}
    								</td>
    								<td class="action_col_deactivate" data-id="{{ $user['id'] }}">
    									Deactivate
    								</td>
    							</tr>
    							@endforeach
    						</tbody>
    					</table>
    				</div>

    				<div class="insider_new_application">
    					<table class="insider_table">
    						<thead>
    							<tr>
    								<th>
    									
    								</th>
    								<th>
    									Fullname
    								</th>
    								<th>
    									Email
    								</th>
    								<th>
    									Name
    								</th>
    								<th>
    									Contact
    								</th>
    								<th style="text-align: center;">
    									Status
    								</th>
    								<th colspan="2" style="text-align: center;">
    									Action
    								</th>
    							</tr>
    						</thead>
    						<tbody>
    							@foreach($users_pending as $user)
    							<tr>
    								<td>
    									
    								</td>
    								<td>
    									{{ $user['fullname'] }}
    								</td>
    								<td>
    									{{ $user['email'] }}
    								</td>
    								<td>
    									{{ $user['name'] }}
    								</td>
    								<td>
    									{{ $user['phone'] }}
    								</td>
    								<td style="text-align: center;">
    									{{ $user['status_id'] }}
    								</td>
    								<td class="action_col_approve" data-id="{{ $user['id'] }}">
    									Approve
    								</td>
    								<td class="action_col_reject" data-id="{{ $user['id'] }}">
    									Reject
    								</td>
    							</tr>
    							@endforeach
    						</tbody>
    					</table>
    				</div>

    				<div class="insider_staff_inactive">

    					<table class="insider_table">
    						<thead>
    							<tr>
    								<th>
    									
    								</th>
    								<th>
    									Fullname
    								</th>
    								<th>
    									Email
    								</th>
    								<th>
    									Name
    								</th>
    								<th>
    									Contact
    								</th>
    								<th style="text-align: center;">
    									Status
    								</th>
    								<th>
    									
    								</th>
    							</tr>
    						</thead>
    						<tbody>
    							@foreach($users_inactive as $user)
    							<tr>
    								<td>
    									
    								</td>
    								<td>
    									{{ $user['fullname'] }}
    								</td>
    								<td>
    									{{ $user['email'] }}
    								</td>
    								<td>
    									{{ $user['name'] }}
    								</td>
    								<td>
    									{{ $user['phone'] }}
    								</td>
    								<td style="text-align: center;">
    									{{ $user['status_id'] }}
    								</td>
    								<td class="action_col_activate" data-id="{{ $user['id'] }}">
    									Activate
    								</td>
    							</tr>
    							@endforeach
    						</tbody>
    					</table>
    					
    				</div>
    			</div>
    		</div>
    	</div>
    </div>

    <input type="hidden" name="staff_id" value="" id="staff_id">
	<input type="hidden" name="action" value="" id="action_value">

    <div class="deactivating_container">
    	<div class="confirm_deactivation">
    		<div class="confirm_deactivation_header">
    			Alert
    		</div>
    		<div class="confirm_deactivation_content" style="display: flex;flex-direction: column;justify-content: flex-start;">
    			<div><p>Confirm deactivate this staff?</p></div>
    			<div style="display: flex;flex-direction: row;justify-content: space-around;width: 100%;margin-top: 10px;">
    				<button class="alert_btn confirm_action">Confirm</button>
    				<button class="alert_btn cancel_button">Cancel</button>
    			</div>
    		</div>
    	</div>
    </div>

    <div class="activating_container">
    	<div class="confirm_activation">
    		<div class="confirm_activation_header">
    			Alert
    		</div>
    		<div class="confirm_activation_content" style="display: flex;flex-direction: column;justify-content: flex-start;">
    			<div><p>Confirm activate this staff?</p></div>
    			<div style="display: flex;flex-direction: row;justify-content: space-around;width: 100%;margin-top: 10px;">
    				<button class="alert_btn confirm_action">Confirm</button>
    				<button class="alert_btn cancel_button">Cancel</button>
    			</div>
    		</div>
    	</div>
    </div>

    <div class="approving_container">
    	<div class="confirm_approval">
    		<div class="confirm_approval_header">
    			Alert
    		</div>
    		<div class="confirm_approval_content" style="display: flex;flex-direction: column;justify-content: flex-start;">
    			<div><p>Confirm approve this application?</p></div>
    			<div style="display: flex;flex-direction: row;justify-content: space-around;width: 100%;margin-top: 10px;">
    				<button class="alert_btn confirm_action">Confirm</button>
    				<button class="alert_btn cancel_button">Cancel</button>
    			</div>
    		</div>
    	</div>
    </div>

    <div class="rejecting_container">
    	<div class="confirm_rejection">
    		<div class="confirm_rejection_header">
    			Alert
    		</div>
    		<div class="confirm_rejection_content" style="display: flex;flex-direction: column;justify-content: flex-start;">
    			<div><p>Confirm reject this application?</p></div>
    			<div style="display: flex;flex-direction: row;justify-content: space-around;width: 100%;margin-top: 10px;">
    				<button class="alert_btn confirm_action">Confirm</button>
    				<button class="alert_btn cancel_button">Cancel</button>
    			</div>
    		</div>
    	</div>
    </div>
	

    @include('templates.footer')

	<script src="{{asset('myasset/jqueryui/jquery-ui.js')}}"></script>

	
	<script>
		var token = '{{ csrf_token() }}';
		var APP_URL = '{!! url("/") !!}';
		var url = '';
		
		$(document).ready(function(){

			globalNotification();

			$('#tab_1').click(function(){

				$('.insider_staff_member').show('fade','fast');
				$('.insider_new_application').hide('fade','fast');
				$('.insider_staff_inactive').hide('fade','fast');

				$('#tab_1').addClass('active-tab');$('#tab_2').removeClass('active-tab');$('#tab_3').removeClass('active-tab');

			});

			$('#tab_2').click(function(){

				$('.insider_staff_member').hide('fade','fast');
				$('.insider_new_application').show('fade','fast');
				$('.insider_staff_inactive').hide('fade','fast');

				$('#tab_1').removeClass('active-tab');$('#tab_2').addClass('active-tab');$('#tab_3').removeClass('active-tab');
			});

			$('#tab_3').click(function(){

				$('.insider_staff_member').hide('fade','fast');
				$('.insider_new_application').hide('fade','fast');
				$('.insider_staff_inactive').show('fade','fast');

				$('#tab_1').removeClass('active-tab');$('#tab_2').removeClass('active-tab');$('#tab_3').addClass('active-tab');
			});

			$('.company_logo_insider').each(function(){

				var logo = $(this);

				logo.addClass('jelly');
			});

		});

		$('.action_col_deactivate').each(function(){

			var btn = $(this);
			var staff_id = btn.data('id');

			btn.click(function(){

				$('#staff_id').val(staff_id);
				$('#action_value').val('deactivate');
				$('.deactivating_container').show('fade','fast');

			});

		});

		$('.action_col_activate').each(function(){

			var btn = $(this);
			var staff_id = btn.data('id');

			btn.click(function(){

				$('#staff_id').val(staff_id);
				$('#action_value').val('activate');
				$('.activating_container').show('fade','fast');

			});

		});


		$('.action_col_approve').each(function(){

			var btn = $(this);
			var staff_id = btn.data('id');

			btn.click(function(){
				$('#staff_id').val(staff_id);
				$('#action_value').val('approve');
				$('.approving_container').show('fade','fast');
			});
		});

		$('.action_col_reject').each(function(){

			var btn = $(this);
			var staff_id = btn.data('id');

			btn.click(function(){
				$('#staff_id').val(staff_id);
				$('#action_value').val('reject');
				$('.rejecting_container').show('fade','fast');
			});
		});

		$('.cancel_button').click(function(){
			$('.deactivating_container').hide('fade','fast');
			$('.activating_container').hide('fade','fast');
			$('.approving_container').hide('fade','fast');
			$('.rejecting_container').hide('fade','fast');
		});

		$('.confirm_action').click(function(){

			var staff_id = $('#staff_id').val();
			var action = $('#action_value').val();
			var url = '{{ url("/activation") }}';
			var token = '{{ csrf_token() }}';

			$.post(url,{_token:token,staff_id:staff_id,action:action},function(data){
				location.reload();
			});

		});

	</script>
	<script src="{{ asset('myasset/js/global_notification.js') }}"></script>
</body>
</html>