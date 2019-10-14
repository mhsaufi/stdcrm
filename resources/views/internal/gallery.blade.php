<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Gallery</title>
	@include('templates.header')
	<script src="{{asset('myasset/js/jquery-min.js')}}"></script>
	<link rel="stylesheet" href="{{asset('myasset/justified/jquery.justified.css')}}"/>
	<script src="{{asset('myasset/unitegallery-master/dist/js/unitegallery.min.js')}}"></script>
	<link rel='stylesheet' href="{{asset('myasset/unitegallery-master/dist/css/unite-gallery.css')}}"/> 
	<!-- <script src="{{asset('myasset/unitegallery-master/dist/themes/default/ug-theme-default.js')}}"></script>  -->
	<script src="{{asset('myasset/unitegallery-master/dist/themes/tiles/ug-theme-tiles.js')}}"></script>
	<link rel='stylesheet' href="{{asset('myasset/unitegallery-master/dist/themes/default/ug-theme-default.css')}}"/>
	<link rel='stylesheet' 	href="{{asset('myasset/unitegallery-master/dist/skins/alexis/alexis.css')}}"/>
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
			z-index: 90;
			height: 200px;
			width: 200px;
			position: absolute;
			top: 1;
			margin-top: 50px;
			margin-left: 40px;
			display: flex;
			justify-content: center;
			align-items: center; 
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
    			<div class="section-profile-img">
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

	<div class="container" style="margin-top: -160px!important;">
		<div class="section-header">
	    	<div class="section-sub-header">
	    		<div class="header-company">
	    			<div class="header-company-tab" onclick="profilemenu('1')">BUSINESS INFO</div>
	    			<div class="header-company-tab" onclick="profilemenu('2')">GALLERY</div>
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
								data-description="Image 1 Description">

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
    	
    	$("#gallery").unitegallery({
			lightbox_type: "compact",
			tiles_type: "justified",		//example how to change only skin for slider bullets
		});

		$('#close_uploader_container').click(function(){

			$('#uploader_container').fadeToggle();

		});

		function upload_image(){

			$('#uploader_container').fadeToggle();

		}

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