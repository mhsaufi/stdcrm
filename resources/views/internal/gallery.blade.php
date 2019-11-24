<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Gallery</title>
	@include('templates.header')
	<script src="{{asset('myasset/js/jquery-min.js')}}"></script>
	<link rel="stylesheet" href="{{asset('myasset/justified/jquery.justified.css')}}"/>
	<script src="{{asset('myasset/unitegallery-master/dist/js/unitegallery.min.js')}}"></script>
	<link rel='stylesheet' href="{{asset('myasset/unitegallery-master/dist/css/unite-gallery.css')}}"/>
	<script src="{{asset('myasset/unitegallery-master/dist/themes/tiles/ug-theme-tiles.js')}}"></script>
	<link rel='stylesheet' href="{{asset('myasset/unitegallery-master/dist/themes/default/ug-theme-default.css')}}"/>
	<link rel='stylesheet' 	href="{{asset('myasset/unitegallery-master/dist/skins/alexis/alexis.css')}}"/>
	<link rel='stylesheet' 	href="{{asset('myasset/dropzone-master/dist/dropzone.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{asset('myasset/std_rating/std_rating.css')}}">
	<style type="text/css">

 
		.grey-background {
			background: url("{{asset('myasset/img/bg1y.jpg')}}");
			background-repeat: no-repeat;
        	background-size: cover;
		}
		.half-vertical {
			width: 100%;
			height: 50%;
			position: relative;
		}

		.info-company {
			padding: 20px 40px;
			background: #fff;
			display: flex;
			flex-direction: column;
			justify-content: space-between;
		}
		.info-content {
			text-align: left;
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

		.std_info {
			font-weight: bold;
		}
		.std-label {
			opacity: 0.8;
			font-style: italic;
			font-size: 0.9em;
		}
		
		.vend_pic{
	    	height: 200px;
	    	width: 200px;
	    	border-radius: 50%;
	    	border: 10px solid #fff;
	    	object-fit: cover;
	    }

	    #std_gallery_header {
	    	display: flex;
	    	flex-direction: row;
	    	justify-content: space-between;
	    	padding: 10px 0;
	    	border-bottom: 0.05em solid #fa8072;
	    	width: 100%;
	    	margin-bottom: 15px;
	    }

	    #std_gallery_content {
	    	width: 100%;
	    	height: 60%;
	    }

	    #std_gallery_content {
	    	padding-bottom: 100px;
	    }

	    #uploader_container {
	    	display: none;
	    	position: absolute;
	    	top: 20%;
	    	left: 20%;
	    	width: 60%;
	    	min-height: 20%;
	    	background: white;
	    	z-index: 99;
	        padding: 20px 20px;
	        border-radius: 5px;
	        -moz-box-shadow: 0 0 5px #888;
	        -webkit-box-shadow: 0 0 5px#888;
	        box-shadow: 0 0 2px #888;
	    }

	    #done_upload {
	    	background: #00bfa5;
	    	margin-top: 15px;
	    	height: 30px;
	    	width: 100%;
	    	cursor: pointer;
	    	display: flex;
	    	flex-direction: row;
	    	justify-content: space-around;
	    	align-items: center;
	    	color: #fff;
	    }

	    #done_upload:hover {
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

	<div class="container" style="margin-top: -160px!important;">
		<div class="section-header">
	    	<div class="section-sub-header">
	    		<div class="header-company">
	    			<div class="header-company-tab" onclick="profilemenu('0')">PERSONAL INFO</div>
	    			<div class="header-company-tab" onclick="profilemenu('1')">BUSINESS INFO</div>
	    			<div class="header-company-tab-active" onclick="profilemenu('2')">GALLERY</div>
	    			<div class="header-company-tab" onclick="profilemenu('3')">PACKAGES</div>
	    			<div class="header-company-tab" onclick="profilemenu('4')">MARKETING</div>
	    		</div>
	    		<div class="info-company" style="background: #fff;">

	    			<!-- CONTENT START -->

	    			<div id="std_gallery_header">
	    				<div><span></span></div>
	    				<div>
	    					<button onclick="upload_image()" class="btn_style btn-six"><i class="fas fa-camera"></i><span> ADD PHOTO </span></button>
	    				</div>
	    			</div>
	    			<div id="std_gallery_content">
						<div id="gallery" style="display:none;">

							@foreach($result as $photo)

							<img alt="Gallery" src="{{ asset('storage/'.$photo['att_path']) }}"
								data-image="{{ asset('storage/'.$photo['att_path']) }}"
								data-description="Image 1 Description" 
								data-att="{{ $photo['att_id'] }}" 
								>

							@endforeach
						
						</div>
	    			</div>


	    			<!-- CONTENT END -->
	    		</div>
	    	</div>
	    </div>
	</div>

	<div id="uploader_container">
		<div style="display: flex;flex-direction:row;justify-content:space-between;border-bottom: 0.05em solid #fa8072;padding: 10px 10px;margin-bottom: 15px;">
			<div>UPLOAD PHOTO</div><div><i class="fas fa-times" id="close_uploader_container" style="cursor: pointer;"></i></div>
		</div>
		<div>
			<form action="{{ url('/uploading') }}" method="POST" class="dropzone">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="fallback">
					<input name="file" type="file" multiple />
				</div>
			</form>
		</div>
		<div id="done_upload">
			<span>DONE</span>
		</div>
	</div>

	<div class="unite_gallery_custom_option_container">
		<div class="unite_gallery_custom_option animated bounceInRight fast">
			<div id="delete_loading"><img src="{{ asset('myasset/img/carrier/loading5.gif') }}"></div>
			<div>
				<div id="remove_image_btn"><i class="fa fa-trash" style="margin-right: 15px"></i> Remove</div>
				<div id="email_image_btn"><i class="fa fa-share-alt" style="margin-right: 15px"></i> Share</div>
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
    	
    	var api = $("#gallery").unitegallery({
			lightbox_type: "compact",
			tiles_type: "justified",		//example how to change only skin for slider bullets
		});

		var img_data;
		var img_att;

		console.log(api);

		api.on("open_lightbox",function(num,data){	//on enter fullscreen
			$('.unite_gallery_custom_option_container').show();
		});

		api.on("close_lightbox",function(){	//on exit fulscreen
			$('.unite_gallery_custom_option_container').hide();
		});

		api.on("item_change",function(num, data){		//on item change, get item number and item data
			img_data = data.urlImage;
			img_att = data.att;

			$('.unite_gallery_custom_option_container').fadeOut(10,function(){
				$('.unite_gallery_custom_option_container').fadeIn("fast");
			});
		});

		$('#remove_image_btn').click(function(){

			var img_name = img_data.split('/').pop();

			url = APP_URL + '/removeimg';

			$('#delete_loading').show();

			$.post(url,{_token:token,img:img_name,att:img_att},function(result){

				if(result == 0){

					location.reload();

				}else{

					api.nextItem();

					$('#delete_loading').hide();
				}
			});
		});

		$('#close_uploader_container').click(function(){

			$('#uploader_container').fadeToggle();
		});

		$('#done_upload').click(function(){
			location.reload();
		});

		$('#email_image_btn').click(function(){
			alert('This features is currently not available');
		});

		function upload_image(){

			$('#uploader_container').fadeToggle();
		}

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

    	function customAction(){
    		alert('lab');
    	}
    </script>

    <script src="{{asset('myasset/js/global_notification.js')}}"></script>
</body>
</html>