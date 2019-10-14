<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	@include('templates.header')
	<link rel='stylesheet' 	href="{{asset('myasset/dropzone-master/dist/dropzone.css')}}"/>
	<style type="text/css">
		.grey-background {
			background: #EEE;
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
			justify-content: space-between;
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
		}
		.info-panel {
			margin-left: 300px;
			/*background: blue;*/
		}
		.rate-space {
			position: absolute;
			top: 0;
			right: 0;
			/*background: red;*/
			margin-top: 5px;
			margin-right: 40px;
			font-size: 1.1em;
		}
		.rate {
     		color: #FFC300;
    	}
    	.rate-o {
     		color: #CACACA;
    	}
		.section-header {
			margin-top: 20px;
			height: 300px;
			/*background: yellow;*/
		}
		.section-sub-header {
			height: 40%;
			/*background: #ff0068;*/
			background: #fff;
		}
		.section-profile-img {
			/*background: blue;*/
			z-index: 9999;
			height: 200px;
			width: 200px;
			position: absolute;
			top: 1;
			margin-top: 50px;
			margin-left: 40px;
			display: flex;
			justify-content: center;
			align-items: center; 
			cursor: pointer;
		}

		.std_info {
			font-weight: bold;
		}
		.std-label {
			opacity: 0.8;
			font-style: italic;
			font-size: 0.9em;
		}
		.tags-space {
			margin-top: 40px;
			margin-left: 300px;			
		}			
		.tags {
			background: #888;
			color: #fff;
			padding: 8px 10px;
			font-size: 1.0em;
			border-radius: 5px;
			border: 0.1em solid #999;
			margin-right: 1px;			
		}
		.vend_pic{
	    	height: 200px;
	    	width: 200px;
	    	border-radius: 50%;
	    	border: 10px solid #fff;
	    	object-fit: cover;
	    }

	    .vend_pic:hover {
	    	border: 10px solid #f8f8f8;
	    }

	    #dp_uploader_container {
	    	display: none;
	    	position: absolute;
	    	min-height: 40%;
	    	width: 20%;
	    	top: 30%;
	    	left: 40%;
	    	background: white;  
	        padding: 20px 20px;
	        border-radius: 5px;
	        -moz-box-shadow: 0 0 5px #888;
	        -webkit-box-shadow: 0 0 5px#888;
	        box-shadow: 0 0 2px #888;
	    }

	    #logo_uploader_container {
	    	display: none;
	    	position: absolute;
	    	min-height: 40%;
	    	width: 20%;
	    	top: 30%;
	    	left: 40%;
	    	background: white;  
	        padding: 20px 20px;
	        border-radius: 5px;
	        -moz-box-shadow: 0 0 5px #888;
	        -webkit-box-shadow: 0 0 5px#888;
	        box-shadow: 0 0 2px #888;
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
	</style>
</head>
<body class="grey-background">
	<!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      @include('templates.navbar')
    </header>
    <!-- Header Area wrapper End -->
    <br>

    <div class="section-padding">
    	<div class="container">
    		<div class="section-header">
    			<div class="section-profile-img" id="uploader_trigger">
    				@if(Auth::user()->dp == '')
    				<img class="vend_pic" src="{{asset('myasset/img/default.jpeg')}}">
    				@else
    				<img class="vend_pic" src="{{asset('storage/'.Auth::user()->dp)}}">
    				@endif
    			</div>
		    	<div class="section-sub-header">
		    		<div class="half-vertical" style="background: #fff;">
		    			
		    		</div>
		    		<div class="half-vertical" style="background: #fff;">
		    			<div class="info-panel">
		    				<div>
			    				<h4 style="opacity: 0.8;color: #ff0068;">{{ Auth::user()->name }}</h4>
			    				<span style="font-style: italic;font-size: 1.1em ;color: grey;opacity: 0.7;">
				    				{{ Auth::user()->email }}
				    			</span>
				    		</div>
		    			</div>
	    				<div class="rate-space">
	    					<i class="fa fa-star rate"></i>
		    				<i class="fa fa-star rate"></i>
		    				<i class="fa fa-star rate"></i>
		    				<i class="fa fa-star rate"></i>
		    				<i class="fa fa-star rate-o"></i>
	    				</div>
		    		</div>
		    	</div>
		    	<div class="tags-space">
		    		@foreach($tag_list as $tag)
		    			<span class="tags">#{{ $tag['category']['cc_title'] }}</span>
		    		@endforeach
    				
    			</div>
		    </div>
    	</div>
    </div>

	<div class="container" style="margin-top: -160px!important;padding-bottom: 100px!important;">
		<div class="section-header">
	    	<div class="section-sub-header">
	    		<div class="header-company">
	    			<div class="header-company-tab" onclick="profilemenu('1')">BUSINESS INFO</div>
	    			<div class="header-company-tab" onclick="profilemenu('2')">GALLERY</div>
	    			<div class="header-company-tab" onclick="profilemenu('3')">PACKAGES</div>
	    			<div class="header-company-tab" onclick="profilemenu('4')">MARKETING</div>
	    		</div>
	    		<div class="header-company-logo">
	    			<div>
	    				<label class="std-label">Bussiness Name</label>
	    				<br>
	    				<span class="std_info">{{ $c_info[0]->company_name }}</span>
	    				<br><br>
	    				<label class="std-label">Address</label>
	    				<br>
	    				<span class="std_info">{{ $c_info[0]->company_address }}</span>
	    				<br>
	    				<div class="info-content">
	    				<label class="std-label">Contact</label>
	    				<br>
	    				<span class="std_info">{{ $c_info[0]->company_contact }}</span>
	    				<br><br>
	    				<label class="std-label">SSM</label>
	    				<br>
	    				<span class="std_info">{{ $c_info[0]->company_ssm }}</span>
	    			</div>
	    			<div class="info-content">
	    				<label class="std-label">Email</label>
	    				<br>
	    				@if($c_info[0]->company_email == '')
	    				<span class="std_info">{{ Auth::user()->email }}</span>
	    				@else
	    				<span class="std_info">{{ $c_info[0]->company_email }}</span>
	    				@endif
	    				<br><br>
	    				<label class="std-label">Registered at</label>
	    				<br>
	    				<span class="std_info">{{ $c_info[0]->created_at }}</span>
	    			</div>
	    			</div>
	    			<div style="position: relative;">
	    				<div class="company_logo_container" style="">
	    				
		    			</div>

		    			<div class="company_logo_container_2">
		    				<div style="font-size: 100px;margin: 22% 26%;"><i class="fas fa-plus"></i></div>
		    			</div>
	    			</div>
	    		</div>
	    	</div>
	    </div>
	</div>

	<div id="logo_uploader_container">
		<div style="padding-bottom: 15px;border-bottom: 0.05em solid #FFD54F;display: flex;flex-direction: row;justify-content:space-between;">
			<div>NEW LOGO</div>
			<div style="opacity: 0.6;"><i class="fas fa-times" id="close_uploader"></i></div>
		</div>
		<div style="padding-bottom: 20px;margin-top: 15px;">
			<form action="{{ url('/newlogo') }}" method="POST" class="dropzone">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="fallback">
					<input name="file" type="file" multiple />
				</div>
			</form>
		</div>
		<div class="ok_upload">DONE</div>
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

    		var urlCompany = '{{ url("/profile") }}';
    		var urlGallery = '{{ url("/profile/gallery") }}';
    		var urlPackage = '{{ url("/profile/package") }}';
    		var urlMarketing = '{{ url("/profile/marketing") }}';

    		if(id == 1)
    		{
    			window.location.replace(urlCompany);
    		}
    		else if(id == 2){
    			window.location.replace(urlGallery);
    		}
    		else if(id == 3){
    			window.location.replace(urlPackage);
    		}
    		else
    		{
    			window.location.replace(urlMarketing);
    		}

    	}
    </script>
    <script src="{{asset('myasset/js/global_notification.js')}}"></script> 
</body>
</html>