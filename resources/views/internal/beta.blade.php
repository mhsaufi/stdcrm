<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	@include('templates.header')
	<link rel='stylesheet' 	href="{{asset('myasset/dropzone-master/dist/dropzone.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{asset('myasset/std_rating/std_rating.css')}}">
	<style type="text/css">
		.grey-background {
			background: #f1f1f1;
		}
		.half-vertical {
			width: 100%;
			height: 50%;
			position: relative;
		}
		
		.header-company-logo {
			padding: 20px 40px;
			background: white;
			display: flex;
			flex-direction: row;
			justify-content: space-around;
			width: 100%;
			height: 70vh;
			position: relative;
		}

		.company_logo_container {
			/*position: absolute;*/
			background: #f4f4f4;
			height: 180px;
			width: 180px;
			border-radius: 50%;
			z-index: 12;
		}

		.company_logo_container_2 {
			position: absolute;
			height: 180px;
			width: 180px;
			border-radius: 50%;
			z-index: 13;
			opacity: 0;
			cursor: pointer;
		}

		.company_logo_container_2 .fas {
			opacity: 0.4!important;
		}

		.company_logo_container_2:hover {
			background: #D3D3D3;
			opacity: 0.5;
		}

		.info-company {
			padding: 20px 40px;
			background: #fff;
			display: flex;
			justify-content: flex-start;
		}
		.info-content {
			text-align: left;
			/*background: blue;*/
			margin-right: 30px;
			margin-top: 20px;
			width: 40%;
		}
		
	    .company_logo_container {
	    	 float: right;
	    }

	    .ok_upload {
	    	width: 100%;
	    	background: #48c9b0;
	    	cursor: pointer;
	    	border-radius: 5px;
	    	height: 30px;
	    	text-align: center;
	    	padding: 2% 0;
	    	color: white;
	    	font-weight: bold;
	    }

	    .ok_upload_dp {
	    	width: 100%;
	    	background: #48c9b0;
	    	cursor: pointer;
	    	border-radius: 5px;
	    	height: 30px;
	    	text-align: center;
	    	padding: 2% 0;
	    	color: white;
	    	font-weight: bold;
	    }

	    #edit_profile_container {
	    	position: fixed;
	    	top: 0;
	    	left: 0;
	    	height: 100%;
	    	width: 100%;
	    	background: rgba(0,0,0,0.5);
	    	z-index: 999;
	    	display: none;
	    }

	    #edit_profile_popup {
	    	position: absolute;
	    	bottom: 10px!important;
	    	left: 0;
	    	width: 100%;
	    	height: auto;
	    	display: flex;
	    	flex-direction: row;
	    	justify-content: space-around;
	    	align-items: flex-start;
	    	background: #fff;
	    	padding: 50px 0;
	    	-moz-box-shadow:0 0 30px #888;
			-webkit-box-shadow:0 0 30px #888;
			box-shadow: 0 0 30px #888;
	    }
	    .po {
	    	width: 24%;
	    	display: flex;
	    	flex-direction: column;
	    	justify-content: space-around;
	    }

	    .closing_modal {
	    	display: flex;
	    	flex-direction: row;
	    	justify-content: flex-end;
	    }
	    .form-popup {
	    	padding: 5px 10px;
	    	border: 0.05em solid #dcdcdc;
	    	margin-bottom: 10px;
	    	width: 100%;
	    }
	    .update_btn {
	    	padding: 10px 20px;
	    	border: none;
	    	border-radius: 3px;
	    	background: #4caf50;
	    	cursor: pointer;
	    	color: #fff;
	    }
	    .update_btn:hover {
	    	opacity: 0.9;
	    }
	</style>
</head>
<body class="grey-background">
	<!-- Header Area wrapper Starts -->
    <header id="header-wrap">
	@include('templates.navbar')
    </header>
    <!-- Header Area wrapper End -->
    <br>
	@include('templates.vendor_profile_header')

	<div class="container" style="margin-top: -160px!important;padding-bottom: 100px!important;">
		<div class="section-header">
	    	<div class="section-sub-header">
	    		<div class="header-company">
	    			<div class="header-company-tab-active" onclick="profilemenu('0')">PERSONAL INFO</div>
	    			<div class="header-company-tab" onclick="profilemenu('1')">BUSINESS INFO</div>
	    			<div class="header-company-tab" onclick="profilemenu('2')">GALLERY</div>
	    			<div class="header-company-tab" onclick="profilemenu('3')">PACKAGES</div>
	    			<div class="header-company-tab" onclick="profilemenu('4')">MARKETING</div>
	    		</div>
	    		<div class="header-company-logo">
	    			<div class="info-content">
	    				<label class="std-label">Fullname</label>
	    				<br>
	    				<span class="std_info">{{ Auth::user()->fullname }}</span>
	    				<br><br>
	    				<label class="std-label">Name</label>
	    				<br>
	    				<span class="std_info">{{ Auth::user()->name }}</span>
	    				<br>
	    				<label class="std-label">Contact Number</label>
	    				<br>
	    				<span class="std_info">{{ Auth::user()->phone }}</span>
	    				<br><br>
	    				<label class="std-label">Email</label>
	    				<br>
	    				<span class="std_info">{{ Auth::user()->email }}</span>
	    			</div>
	    			<div class="info-content" draggable="true">
	    				<div style="display: flex;flex-direction: row;justify-content: flex-end;">
	    					<div>
		    					<button onclick="edit_profile()" class="btn_style btn-six"><i class="fas fa-edit"></i><span>EDIT INFO </span></button>
		    				</div>
	    				</div>
	    				<br><br>
	    				<label class="std-label">DOB</label>
	    				<br>
	    				<span class="std_info">{{ Auth::user()->dob }}</span>
	    				<br><br>
	    				<label class="std-label">Address</label>
	    				<br>
	    				<span class="std_info">{{ Auth::user()->address }}</span>
	    				<br><br>
	    				<label class="std-label">State</label>
	    				<br>
	    				<span class="std_info">{{ Auth::user()->state }}</span>
	    				<br><br>
	    				<label class="std-label">Registered at</label>
	    				<br>
	    				<span class="std_info">{{ $c_info[0]->created_at }}</span>
	    			</div>
	    			</div>
	    		</div>
	    	</div>
	    </div>
	</div>

	<div id="dp_uploader_container">
		<div style="padding-bottom: 15px;border-bottom: 0.05em solid #FFD54F;display: flex;flex-direction: row;justify-content:space-between;">
			<div>NEW PROFILE PICTURE</div>
			<div style="opacity: 0.6;"><i class="fas fa-times" id="close_uploader_dp"></i></div>
		</div>
		<div style="padding-bottom: 20px;margin-top: 15px;">
			<form action="{{ url('/newdp') }}" method="POST" class="dropzone">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="fallback">
					<input name="file" type="file" multiple />
				</div>
			</form>
		</div>
		<div class="ok_upload_dp">DONE</div>
	</div>

    <div id="edit_profile_container">
    	<div id="edit_profile_popup" class="animated fadeInUp fast">
    		<div class="po">
    			<button class="update_btn">UPDATE INFO</button>
    		</div>
    		<div class="po">
    			<div>Fullname</div>
    			<div><input type="text" name="name" id="fullname" class="form-popup" value="{{ Auth::user()->fullname }}"/></div>
    			<div>Contact</div>
    			<div><input type="text" name="name" id="phone" class="form-popup" value="{{ Auth::user()->phone }}"/></div>
    			<div>State</div>
    			<div>
    				<select class="form-popup" id="state">
    					<option value="">Please choose your state</option>
						<option value="Johor">Johor</option>
						<option value="Kedah">Kedah</option>
						<option value="Kelantan">Kelantan</option>
						<option value="Melaka">Melaka</option>
						<option value="Negeri">Negeri Sembilan</option>
						<option value="Pahang">Pahang</option>
						<option value="Perak">Perak</option>
						<option value="Perlis">Perlis</option>
						<option value="Pulau Pinang">Pulau Pinang</option>
						<option value="Sabah">Sabah</option>
						<option value="Sarawak">Sarawak</option>
						<option value="Selangor">Selangor</option>
						<option value="Terengganu">Terengganu</option>
						<option value="Wilayah">Wilayah Persekutuan</option>
						<option value="International">International</option>
    				</select>
    			</div>
    		</div>
    		<div class="po">
    			<div>DOB</div>
    			<div><input type="date" name="name" class="form-popup" value="{{ Auth::user()->dob }}" id="dob" /></div>
    			<div>Address</div>
    			<div><textarea class="form-popup" id="address"></textarea></div>
    			
    			
    		</div>
    		<div class="po closing_modal">
    			<div style="width: 50px;cursor: pointer;" id="close_popup_edit"><i class="fas fa-times"></i></div>
    		</div>
    	</div>
    </div>


    @include('templates.footer')

    <script src="{{asset('myasset/dropzone-master/dist/dropzone.js')}}"></script>

    <script>
    	var token = '{{ csrf_token() }}';
		var APP_URL = '{!! url("/") !!}';
		var url = '';
    	
    	$(document).ready(function(){
    		globalNotification();
    	});

    	$('.company_logo_container_2').click(function(){
    		$('#logo_uploader_container').fadeToggle('fast');
    	});

    	$('.ok_upload').click(function(){
    		$('#logo_uploader_container').fadeToggle('fast');
    	});

    	$('#close_uploader').click(function(){
    		$('#logo_uploader_container').fadeToggle('fast');
    	});

    	$('#uploader_trigger').click(function(){
    		$('#dp_uploader_container').fadeToggle('fast');
    	});

    	$('.ok_upload_dp').click(function(){
    		$('#dp_uploader_container').fadeToggle('fast');
    	});

    	$('#close_uploader_dp').click(function(){
    		$('#dp_uploader_container').fadeToggle('fast');
    	});

    	var company_logo = '{{ asset("storage/".$logo) }}';
    	$('.company_logo_container').css('background-image', 'url(' + company_logo + ')');
    	$('.company_logo_container').css('background-position','center');
    	$('.company_logo_container').css('background-size','cover');

    	function profilemenu(id){

    		var urlPersonal = '{{ url("/profile") }}';
    		var urlCompany = '{{ url("/profile/business") }}';
    		var urlGallery = '{{ url("/profile/gallery") }}';
    		var urlPackage = '{{ url("/profile/package") }}';
    		var urlMarketing = '{{ url("/profile/marketing") }}';

    		if(id == 1)
    		{
    			window.location.replace(urlCompany);
    		}
    		else if(id == 0)
    		{
    			window.location.replace(urlPersonal);
    		}
    		else if(id == 2)
    		{
    			window.location.replace(urlGallery);
    		}
    		else if(id == 3)
    		{
    			window.location.replace(urlPackage);
    		}
    		else
    		{
    			window.location.replace(urlMarketing);
    		}
    	}

    	function edit_profile(){

    		$('#edit_profile_container').fadeIn('fast');
    	}

    	$('#close_popup_edit').click(function(){

    		$('#edit_profile_container').fadeOut('fast');
    	});

    	$('.update_btn').click(function(){

    		url = APP_URL + '/profile/update';
    		var fname = $('#fullname').val();
    		var phonenum = $('#phone').val();
    		var dob = $('#dob').val();
    		var addr = $('#address').val();
    		var state = $('#state').val();

    		// console.log(dob);

    		$.post(url,{_token:token,fname:fname,phonenum:phonenum,dob:dob,addr:addr,state:state},function(result){

    			location.reload();
    		});
    	});
    </script>
    <script src="{{asset('myasset/js/global_notification.js')}}"></script> 
</body>
</html>