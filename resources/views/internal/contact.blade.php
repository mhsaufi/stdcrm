
<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
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
			padding: 10vh 5%;
		}

		.contact_container {
			border-top: 0.05em solid #d4af37;
			width: auto;
			min-height: 100%;
			/*background: red;*/
			margin: 2% 0;
			padding: 2% 0;
		}

		.tab_contact {
			padding: 8px 10px;
			border: 0.05em solid #dcdcdc;
			width: 100%;
			display: flex;
			flex-direction: row;
			justify-content: space-between;
			cursor: pointer;
		}

		.tab_contact:hover {
			border-left: 2px solid #dcdcdc;
		}

		.replacable_content {
			position: relative;
		}

		#container_vendor {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			/*background: green;	*/
			display: none;	
		}

		#container_client {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			/*background: blue;	*/
		}

		.contact_table {
			width: 100%;
		}

		.contact_table th, .contact_table td{
			padding: 5px 10px;
			border: 0.05em solid #dcdcdc;
			font-size: 12px;
			/*height: 40px;*/
		}

		.action_icon {
			opacity: 0.3;
			cursor: pointer;
		}

		.action_icon:hover {
			opacity: 1;
			color: #009688;
		}

		.user_profile_container {
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background: rgba(255,255,255, 0.7);
			display: none;
		}

		.user_profile_modal {
			position: absolute;
			top: 50%;
			left: 50%;
			width: 30%;
			height: auto;
			transform: translate(-50%, -50%);
			border-radius: 5px;
			background: #fff;
			-moz-box-shadow: 0 0  30px #888;
			-webkit-box-shadow: 0 0  30px #888;
			box-shadow: 0 0  30px #888;
			padding: 20px 20px;
			display: flex;
			flex-direction: column;
			justify-content: flex-start;
		}

		.user_profile_modal_content {
			display: flex;
			flex-direction: row;
			justify-content: space-between;
		}

		.user_profile_modal_info {
			display: flex;
			flex-direction: column;
			justify-content: flex-start;
		}

		.user_profile_modal_info > div {
			margin-bottom: 10px;
		}

		.user_profile_modal_close, .user_promotion_modal_close {
			width: 100%;
			display: flex;
			flex-direction: row;
			justify-content: flex-end;
			/*background: blue;*/
			margin-bottom: 15px;
		}

		.close_modal, .close_modal_promotion {
			width: 50px;
			cursor: pointer;
			opacity: 0.5;
			display: flex;
			flex-direction: row;
			justify-content: flex-end;
		}

		.close_modal:hover, .close_modal_promotion:hover {
			opacity: 1.0;
		}

		#user_dp {
			width: 150px;
			height: 150px;
			border-radius: 50%;
			background-size: cover;
			background-position: center;
		}

		.user_label {
			opacity: 0.5;
			font-style: italic;
			font-size: 0.9em;
		}

		.user_promotion_container {
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background: rgba(255,255,255, 0.7);
			display: none;
		}

		.user_promotion_modal {
			position: absolute;
			top: 50%;
			left: 50%;
			width: 40%;
			height: auto;
			transform: translate(-50%, -50%);
			border-radius: 5px;
			background: #fff;
			-moz-box-shadow: 0 0  30px #888;
			-webkit-box-shadow: 0 0  30px #888;
			box-shadow: 0 0  30px #888;
			padding: 20px 20px;
			display: flex;
			flex-direction: column;
			justify-content: flex-start;
		}

		.user_promotion_modal_content {
			display: flex;
			flex-direction: column;
			justify-content: flex-start;
		}

		.user_promotion_modal_content > div {
			margin-bottom: 10px;
		}

		.promotion_select {
			padding: 5px 10px;
			border: 0.05em solid #dcdcdc;
			width: 200px;
			height: auto;
		}

		.extra_mg {
			margin-bottom: 20px;
		}

		.user_promotion_modal_footer {
			padding: 10px 0;
			display: flex;
			flex-direction: row;
			justify-content: flex-end;
		}

		.user_promotion_modal_footer > button {
			margin-left: 15px;
		}

		.promotion_btn {
			padding: 5px 10px;
			border: none;
			border-radius: 3px;
			color: #fff;
		}

		.promotion_btn:hover {
			opacity: 0.9;
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
    		<div class="row">
    			<div class="col-lg-2 col-md-2 col-sm-12" style="display: flex;flex-direction: column;justify-content: flex-start;align-items: flex-start;">
    				<div class="tab_contact" id="client_tab"><span>Clients</span><span><i class="fas fa-caret-right"></i></span></div>
    				<div class="tab_contact" id="partner_tab"><span>Partners</span></div>
    			</div>
    			<div class="col-lg-10 col-md-10 col-sm-12 replacable_content">
    				<div id="container_client">
    					<table class="contact_table">
    						<thead>
    							<tr>
    								<th style="width: 1%;"></th>
	    							<th style="width: 15%;">Name</th>
	    							<th style="width: 15%;">Email</th>
	    							<th style="width: 10%;">Phone</th>
	    							<th style="width: 5%;">Status</th>
	    							<th style="width: 15%;text-align: center;">Action</th>
    							</tr>
    						</thead>
    						<tbody>
    							@foreach($users as $user)
    							<tr>
    								<td></td>
    								<td>{{ $user['fullname'] }}</td>
    								<td>{{ $user['email'] }}</td>
    								<td>{{ $user['phone'] }}</td>
    								@if($user['status'] == '1')
    								<td style="background: #7dcea0;color: #fff;">CURRENT</td>
    								@else
    								<td style="background: #f7dc6f;color: #fff;">PAST</td>
    								@endif
    								<td>
    									<div style="width: 100%;display: flex;flex-direction: row;justify-content: space-around;">
    										<div class="action_icon user_info" data-id="{{ $user['id'] }}"><i class="fas fa-search-plus"></i></div>
    										<div class="action_icon user_promote" data-id="{{ $user['id'] }}"><i class="fas fa-link"></i></div>
    										<div class="action_icon" data-id="{{ $user['id'] }}"><i class="fas fa-volume-mute"></i></div>
    									</div>
    								</td>
    							</tr>
    							@endforeach
    						</tbody>
    					</table>
    				</div>
    				<div id="container_vendor">
    					<table class="contact_table">
    						<thead>
    							<tr>
    								<th style="width: 1%;"></th>
	    							<th style="width: 15%;">Company</th>
	    							<th style="width: 5%;">Contact</th>
	    							<th style="width: 10%;">Mail</th>
	    							<th style="width: 10%;">PIC</th>
	    							<th style="width: 15%;">PIC Email</th>
	    							<th style="width: 15%;">PIC Email Contact</th>
    							</tr>
    						</thead>
    						<tbody>
    							@foreach($companies as $c)
    							<tr>
    								<td></td>
    								<td>{{ $c['company_name'] }}</td>
    								<td>{{ $c['company_contact'] }}</td>
    								<td>{{ $c['company_email'] }}</td>
    								<td>{{ $c['user']['name'] }}</td>
    								<td>{{ $c['user']['email'] }}</td>
    								<td>{{ $c['user']['phone'] }}</td>
    							</tr>
    							@endforeach
    						</tbody>
    					</table>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>

    <div class="user_profile_container">
    	<div class="user_profile_modal">
    		<div class="user_profile_modal_close"><div class="close_modal"><i class="fas fa-times"></i></div></div>
    		<div class="user_profile_modal_content">
    			<div class="user_profile_modal_info">
	    			<div class="user_label">Name</div>
	    			<div id="user_name"></div>
	    			<div class="user_label">Username</div>
	    			<div id="user_fullname"></div>
	    			<div class="user_label">Email</div>
	    			<div id="user_email"></div>
	    			<div class="user_label">Phone</div>
	    			<div id="user_phone"></div>
	    		</div>
	    		<div>
	    			<div id="user_dp"></div>
	    		</div>
    		</div>
    	</div>
    </div>

    <div class="user_promotion_container">
    	<div class="user_promotion_modal">
    		<div class="user_promotion_modal_close"><div class="close_modal_promotion"><i class="fas fa-times"></i></div></div>
    		<div class="user_promotion_modal_content">
    			<div>Promotion Package</div>
    			<div>
    				<select class="promotion_select extra_mg" id="promotion" style="width: auto;">
    					<option>- select promotion -</option>
    					@foreach($promotion_data as $promotion)

    					<option value="{{ $promotion['promotion_id'] }}">{{ $promotion['promotion_title'] }}</option>

    					@endforeach
    				</select>
    			</div>
    			<div><input type="checkbox" name=""> Email this user each time new Promotion released</div>
    		</div>
    		<div class="user_promotion_modal_footer">
    			<button class="promotion_btn" style="background: #9933FF;">Save Setting</button><button class="promotion_btn" style="background: #33CC99;">Email Promotion</button>
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

		});

		$('#client_tab').click(function(){

			$('#container_vendor').fadeOut('fast');
			$('#container_client').fadeIn('fast');

			if($('#client_tab span').length != 2){
				$(this).append('<span><i class="fas fa-caret-right"></i></span>');
			}

			if($('#partner_tab span').length > 1){
			   $('#partner_tab span').last().remove();
			}
		})

		$('#partner_tab').click(function(){

			$('#container_client').fadeOut('fast');
			$('#container_vendor').fadeIn('fast');

			if($('#partner_tab span').length != 2){
				$(this).append('<span><i class="fas fa-caret-right"></i></span>');
			}

			if($('#client_tab span').length > 1){
			   $('#client_tab span').last().remove();
			}
		})

		$('.user_info').each(function(){

			var icon = $(this);

			icon.click(function(){

				var url = APP_URL + '/infouser';
				var id = icon.data('id');

				$.post(url,{_token:token,id:id},function(result){

					var obj = JSON.parse(result);

					$('#user_name').html(obj.name);
					$('#user_fullname').html(obj.fullname);
					$('#user_email').html(obj.email);
					$('#user_phone').html(obj.phone);

					if(obj.dp === null){

						$('#user_dp').css('background-image','url("'+ APP_URL +'/myasset/img/default.png")');

					}else{

						$('#user_dp').css('background-image','url("'+ APP_URL +'/storage/'+ obj.dp +'")');
					}

					$('.user_profile_container').fadeIn('fast');
				});
			});
		});

		$('.user_promote').each(function(){

			var icon = $(this);

			icon.click(function(){

				$('.user_promotion_container').fadeIn('fast');
			});

		});

		$('.close_modal').click(function(){

			$('.user_profile_container').fadeOut('fast');
		});

		$('.close_modal_promotion').click(function(){

			$('.user_promotion_container').fadeOut('fast');
		});
	</script>

	<script src="{{ asset('myasset/js/global_notification.js') }}"></script>
</body>
</html>