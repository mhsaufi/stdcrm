<!DOCTYPE html>
<html>
<head>
	<title>Marketing</title>
	@include('templates.header')
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
	    			
	    		</div>
	    	</div>
	    </div>
	</div>

    


    @include('templates.footer')

   <script>
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
</body>
</html>