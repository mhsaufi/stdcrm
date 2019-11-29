<!DOCTYPE html>
<html>
<head>
	<title>SaveTheDate | Profile</title>

	@include('templates.header')

	<link href="{{ asset('myasset/fullcalendar/core/main.css') }}"  rel='stylesheet' />
	<link rel="stylesheet" href="{{ asset('myasset/swiper/css/swiper.min.css') }}" />
    <link href="{{ asset('myasset/fullcalendar/daygrid/main.css') }}" rel='stylesheet' />
    <link rel='stylesheet' 	href="{{asset('myasset/dropzone-master/dist/dropzone.css')}}"/>

	<style type="text/css">
		.grey-background {
			background: #EEE;
		}
		.half-vertical {
			width: 50%;
			height: 70%;
			position: absolute;
			right:0;
			background: red;
		}		
		.section-profile-img {
			background: #fff;
			border-radius: 10px;
			z-index: 99;
			min-height: 100%;
			width: 100%;
			margin-top: 0 !important;
			margin-left: 0 !important;	
			display: flex;
			flex-direction: column;
			justify-content: space-around;
			align-items: left !important; 
			-moz-box-shadow: 0 0 5px #888;
	        -webkit-box-shadow: 0 0 5px #888;
	        box-shadow: 0 0 2px #888;
		}
		
		.vend_pic{
			margin-top: 10%;
			/*margin-bottom: 20%;*/
	    	height: 150px;
	    	width: 150px;
	    	border-radius: 50%;
	    	border: 6px double #d4af37;
	    	object-fit: cover;
	    }
		/* =============================== spacing  */

		.big-space{
			position: absolute;			
			display: flex;
			flex-direction: row;
			justify-content: space-around;
			min-width: 100%;
			min-height: 100%;
			top: 0;
			padding-top: 7%; 
			background: url("{{asset('myasset/img/ll.jpg')}}");
			background-repeat: repeat;
        	/*background-size: cover;*/
			/*background-color: lightyellow; */
		}

		.left-space{
			position: relative;
			height: 550px;
			width: 20%;
			 /*background: green; */
		}

		.right-space{
			width: 20%;
			/*background: orange; */
		}

		.middle-space{
			width: 50%;
			height: auto;
			padding: 20px;
			border-radius: 10px;
			box-shadow: 0 0 2px #888;
			background: #fff;
		}

		.down-step{
			width: 100%;
			background: #fff;
			/* padding: 10px; */
			border-radius: 10px;
		}
		
		.swiper-container {
	        width: 300px;
	        height: 250px;
	        background: blue;
	        margin-bottom: 5%;
	        box-shadow: 0 0 2px #888;
	        border-radius: 10px;
	        /*position: fixed;*/
	    }

	    .swiper-image {
	        height: 250px!important;
	        width: 300px!important;
	    }

	    .swiper-button-next {
	        color: #fff;
	        display: none;
	    }

	    .swiper-button-prev {
	        color: #fff;
	        display: none;        
	    }

		.middle-step{			 
			margin-bottom: 5%;
			width: 100%;
			height: auto;
			border-radius: 10px;
			box-shadow: 0 0 2px #888;
			/*border: 1px solid #d4af37;*/
			background: #fff;
			padding: 20px;
		}

		
		 /* ================== tab styling */

		.tbutton {
			cursor: pointer;
			width: 199px;
			display: inline-block;
			background-color: #d4af37;
			color: #fff;
			text-align: center;
			transition: .25s ease;
			border: none;
			padding: 10px;
			border-radius: 12px 12px 0 0;
		}


		div:focus .tbutton, .tbutton:focus {
			background-color: #fff;
			color: #d4af37;
			outline: none;
		}

		.tbutton-active{
			background-color: #fff;
			border-top: 1px solid #d4af37;
			border-left: 1px solid #d4af37;
			border-right: 1px solid #d4af37;
			color: #d4af37;
			outline: none;
		}
		

		.tbutton:focus + .tp, div:focus .tP, .tp {
			display: block;
			position: absolute;
			box-shadow: 0 0 4px #888;
			border-radius: 10px;
			border: 1px solid #d4af37;
			background-color: #fff;
			height: auto;
			width: 50%;
			bottom: 1;
			left: 0;
			z-index: 2;
			outline: none;
			text-align: center;
			padding-top: 20px;
		}

		#tp-form{			
			z-index: 99 !important;
			position: absolute;
			bottom: 0;
			height: auto!important;
			background: #fff;
			width: 100%;
			padding: 2% 10%;
		}

		#background_tp{
			display: none;
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background: rgba(212,175,55,0.6);
		}

		.tp {
			/* display: block; */
			font-size: 14px;
		}


		div {
			display: inline-block;
		}

		div:focus {
			outline: none;
		}

		body {
			padding: 3em;
		}

		/* --------------------------- PERSONAL INFO */
		.p-info{
			display:flex;
			flex-direction:column;
			justify-content: flex-start;			
			padding: 10px;
			/* background: orange;			 */
		}
		
		input[type=text], input[type=date], select {
		width: 70%;
		padding: 5px;
		border: 1px solid #d4af37;
		border-radius: 4px;
		resize: vertical;
		}

		label {
		padding: 5px;
		display: inline-block;
		color: #000;
		}

		.col-25 {
		float: left;
		width: 25%;
		margin-top: 6px;
		}

		.col-75 {
		float: left;
		width: 75%;
		margin-top: 6px;
		}

		/* Clear floats after the columns */
		.row:after {
		content: "";
		display: table;
		clear: both;
		}

		/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
		@media screen and (max-width: 600px) {
			.big-space{
				position: absolute;			
				display: flex;
				flex-direction: column;
				justify-content: space-around;
				min-width: 100%;
				min-height: 100%;
				top: 0;
				margin-top: 20%;
				margin-bottom: 10px!important;
				padding-top: 7%; 
				background: url("{{asset('myasset/img/ll.jpg')}}");
				background-repeat: no-repeat;
	        	background-size: cover;
			}

			.col-25, .col-75, input[type=submit] {
				width: 100%;
				margin-top: 0;
			}

			.left-space{
				position: relative;
				height: 550px;
				width: 100%;
				border-radius: 0;
				 /*background: green; */
			}

			.right-space{
				position: relative;
				width: 100%;
				border-radius: 0;
				display: flex;
				flex-direction: column;
				justify-content: space-between;
				align-items: center;
				padding: 10px 0;
			}

			.middle-space{
				width: 100%;
				height: auto!important;
				padding: 20px;
				border-radius: 0;
				box-shadow: 0 0 2px #888;
				background: #fff;
			}

			.section-profile-img {
				background: #fff;
				border-radius: 0;
				z-index: 99;
				min-height: 100%;
				width: 100%;
				margin-top: 0 !important;
				margin-left: 0 !important;	
				display: flex;
				flex-direction: column;
				justify-content: space-around;
				align-items: left !important; 
				-moz-box-shadow: 0 0 5px #888;
		        -webkit-box-shadow: 0 0 5px #888;
		        box-shadow: 0 0 2px #888;
			}

			.swiper-container {
		        height: auto;
		        margin-bottom: 5%;
		        box-shadow: 0 0 2px #888;
		        border-radius: 0;
		        /*position: fixed;*/
		    }
		}
	

		.btn_form {
			border: 1px solid #d4af37;
			border-radius: 10px;
			float: left;
			margin-right: 10px;
			margin-bottom: 20px;
			opacity: 1.0;
			cursor: pointer;
			padding: 10px 20px;
			background: #fff;
			
		}
		.btn_form:hover {			
			background: rgba(212,175,55,0.5);
			/* border: 1px solid #000; */
			color: black;
		}
		.btn_form i {
			margin-right: 10px;
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

		/* ==================================================================== */
		 #tp-wi-form, #gi-form, #fi-form{
			 display:none;
		 }

		 .name-space{
			 display: flex;
			 flex-direction: column;
			 justify-content: center;
			 width: 100%;
			 padding: 10px 10%;
			 margin-bottom: 10%;
			  /*background: blue; */
			 /* border-bottom: 1px solid #d4af37;			  */
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

    

    <div class="section-padding" style="display:flex; flex-direction:row; justify-content: center;">


    	<!-- <div class="container" style="background:red;"> -->
    		<div class="big-space">
		 		<div class="left-space animated fadeInLeft fast">
					<div class="section-profile-img" >

						<div id="uploader_trigger">
							@if(Auth::user()->dp == '')
							<img class="vend_pic"  src="{{asset('myasset/img/profile.jpg')}}">
							@else
							<img class="vend_pic"  src="{{asset('storage/'.Auth::user()->dp)}}">
							@endif
						</div>

						
						<!-- <img class="vend_pic"  src="{{asset('myasset/img/profile.jpg')}}"> -->

						<div class="name-space">
	 						<p><b>Name:</b>&nbsp {{ Auth::user()->fullname }}</p>
							<p><b>Email:</b>&nbsp {{ Auth::user()->email }}</p>								
							<p><b>Address:</b>&nbsp {{ Auth::user()->address }}</p>	
							<p><b>Phone No:</b>&nbsp {{ Auth::user()->phone }}</p>
							<p><b>DOB:</b>&nbsp {{ Carbon\Carbon::parse(Auth::user()->dob)->format('d M Y') }}</p>
							<p><b>State:</b>&nbsp {{ Auth::user()->state }}</p>
							<p><b>Joined:</b>&nbsp {{ Carbon\Carbon::parse(Auth::user()->created_at)->format('d M, Y') }}</p>
							<button class="btn_form" onclick="updatePro()" style="width:90%;">Update My Profile</button>
						</div>

					</div>

				</div>

				<div class="middle-space animated fadeInUp fast" id="calendar">
					<!-- <p>Testing</p> -->
				</div>

				<div class="right-space animated fadeInRight fast">

					@if($event_count > 0)
		            <!-- Slider main container -->
		            <div class="swiper-container">
		                <!-- Additional required wrapper -->
		                <div class="swiper-wrapper">

		                    @foreach($event_data as $e)

		                    <div class="swiper-slide">
		                      <a href="{{ $e['url'] }}" target="_blank">
		                        <img src="{{ asset('storage/'.$e['poster']) }}" class="swiper-image" />
		                      </a>
		                    </div>

		                    @endforeach
		                </div>
		                <!-- If we need pagination -->
		                <div class="swiper-pagination"></div>

		                <!-- If we need navigation buttons -->
		                <div class="swiper-button-prev"></div>
		                <div class="swiper-button-next"></div>

		                <!-- If we need scrollbar -->
		                <div class="swiper-scrollbar"></div>
		            </div>

		            @endif

					<div class="middle-step">
						<h6>How To Start?</h6>
						<p><b>Step #1</b><br>Start looking for your favourite vendors/packages.</p>
						<p><b>Step #2</b><br>Booking your package manually or online.</p>								
						<p><b>Step #3</b><br>Wait for approval from the vendor.</p>								
						<p><b>Step #4</b><br>If aprroved! You can start planning your wedding at your dashboard.</p>
						<p><em>** visit <b>How it Works</b> tab for more explanation. **</em></p>							
					</div> 
				</div>
				
		    </div>
    	<!-- </div> -->
    </div>

    <!-- dropzone Change profile picture -->
    <div id="bg_dp_uploader" style="background:rgba(0,0,0,0.5); width:100%; height:100%; position:fixed; top:0; left:0;display:none;">
    	<div id="dp_uploader_container">
			<div style="padding-bottom: 15px;border-bottom: 0.05em solid #FFD54F;display: flex;flex-direction: row;justify-content:space-between;">
				<div>NEW PROFILE PICTURE</div>
				<div style="opacity: 0.6; cursor: pointer;"><i class="fas fa-times" id="close_uploader_dp"></i></div>
			</div>
			<div style="padding-bottom: 20px;margin-top: 15px; width: 100%; align-items: center;">
				<form action="{{ url('/newdp') }}" method="POST" class="dropzone">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="fallback">
						<input name="file" type="file" multiple />
					</div>
				</form>
			</div>
			<div class="ok_upload_dp">DONE</div>
		</div>
    </div>
    

    <!-- PERSONAL INFO -->
	<div id="background_tp">
		<!-- <button class="tbutton tbutton-active" id="pi">Personal Information</button> -->
		
		<div class="animated fadeInUp faster" id="tp-form">
			<div class="p-info">
			<i class="fa fa-times" onclick="closePro()" style="position:absolute;right:4%;top:4%;cursor:pointer;"></i>

				<div class="row">
					<div class="col-25">
						<label for="fullname">Full Name</label>
					</div>
					<div class="col-75">
						<input type="text" id="fullname" name="fullname" value="{{ Auth::user()->fullname }}" placeholder="{{ Auth::user()->fullname }}">
					</div>
				</div>

				<div class="row">
					<div class="col-25">
						<label for="phone">Phone No.</label>
					</div>
					<div class="col-75">
						<input type="text" id="phonenum" name="phonenum" value="{{ Auth::user()->phone }}" placeholder="{{ Auth::user()->phone }}">
					</div>
				</div>

				<div class="row">
					<div class="col-25">
						<label for="dob">D.O.B</label>
					</div>
					<div class="col-75">
						<input type="date" id="dob" name="dob" value="{{ Auth::user()->dob }}" placeholder="{{ Auth::user()->dob }}">
					</div>
				</div>

				<div class="row">
					<div class="col-25">
						<label for="address">Address</label>
					</div>
					<div class="col-75">
						<input type="text" id="addr" name="addr" value="{{ Auth::user()->address }}" placeholder="{{ Auth::user()->address }}">
					</div>
				</div>

				<div class="row">
					<div class="col-25">
						<label for="state">State</label>
					</div>
					<div class="col-75">
						<select id="state" name="state" value="{{ Auth::user()->state }}">
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
		
			</div>

			<button class="btn_form" id="pi_update" onclick="updateProfile()" style="margin-top:2%; margin-left:80%;">Update</button>
			
		</div>								
	</div>	

    @include('templates.footer')

    <script src="{{ asset('myasset/fullcalendar/core/main.js') }}"></script>
    <script src="{{ asset('myasset/fullcalendar/daygrid/main.js') }}"></script>
    <script src="{{ asset('myasset/swiper/js/swiper.min.js') }}"></script>
     <script src="{{asset('myasset/dropzone-master/dist/dropzone.js')}}"></script>

	<script>

		

		$(document).ready(function(){

			var calendarEl = document.getElementById('calendar');

	        var calendar = new FullCalendar.Calendar(calendarEl, {
	          plugins: [ 'dayGrid' ]
	        });

	        calendar.render();

	        var mySwiper = new Swiper ('.swiper-container', {
		        // Optional parameters
		        direction: 'horizontal',
		        loop: true,

		        autoplay: {
		          delay: 3000,
		        }
		      })

	        $('#dp_uploader_container').show();

	        $('#uploader_trigger').click(function(){
	    		// alert('Haluuu..jadi tak');
	    		$('#bg_dp_uploader').fadeToggle('fast');

	    	});

	    	$('.ok_upload_dp').click(function(){
	    		// $('#bg_dp_uploader').fadeToggle('fast');
	    		location.reload();
	    	});

	    	$('#close_uploader_dp').click(function(){
	    		$('#bg_dp_uploader').fadeToggle('fast');
	    	});

		});


		function updatePro() {
			$('#background_tp').fadeToggle('fast');
		}

		function closePro() {
			$('#background_tp').fadeToggle('fast');
		}

		// $(document).ready(function(){	
			

		 	// update the editing		
			$('#pi_update').click(function(){
				var fullname = $('#fullname').val();
				var phoneno = $('#phonenum').val();
				var dateob = $('#dob').val();
				var addrs = $('#addr').val();
				var states = $('#state').val();
				var token = '{{ csrf_token() }}';
				var url = '{{ url("/profile/update") }}';				

				$.post(url, {fname:fullname,phonenum:phoneno,dob:dateob,addr:addrs,state:states,_token:token},function(){
					alert('Profile successfully updated');
					$('#background_tp').fadeToggle('fast');
					location.reload();				
				});			
			});

		// });
	</script>
</body>
</html>