<!DOCTYPE html>
<html>
<head>
	<title>SaveTheDate | Profile</title>
	@include('templates.header')
	<style type="text/css">
		.grey-background {
			background: #EEE;
		}
		.half-vertical {
			width: 50%;
			height: 70%;
			position: absolute;
			right:0;
		}		
		.section-profile-img {
			background: #fff;
			/*border-radius:20px;*/
			/*border: 1px solid #d4af37;*/
			z-index: 99;
			min-height: 80%;
			width: 18%;
			position: absolute;			
			padding: 10px;
			margin-top: %;			
			/* margin: 2% 5%; */
			display: flex;
			flex-direction: column;
			justify-content: space-around;
			align-items: center; 
			-moz-box-shadow: 0 0 5px #888;
	        -webkit-box-shadow: 0 0 5px#888;
	        box-shadow: 0 0 2px #888;
		}
		
		.vend_pic{
			margin-top: 10%;
			margin-bottom: 20%;
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
			justify-content: center;
			min-width: 100%;
			/* height: 100%; */
			/* background:yellow; */
			
		}

		.left-space{
			width: 19%;
			 /*background: green; */
			
		}

		.right-space{
			width: 60%;
			/* background: orange; */
		}

		.down-step{
			width: 100%;
			background: #fff;
			/* padding: 10px; */
			border-radius: 10px;
		}
		
		.up-step{
			 display:flex;
			 flex-direction:row;
			 justify-content: center;
			 /* margin-top: 1%; */
			 margin-bottom: 2%;
			 width: 100%;
			 height: auto;
		 }

		 .middle-step{
			display:flex;
			 flex-direction:row;
			 justify-content: center;			 
			 margin-bottom: 2%;
			 width:100%;
			 height:90px;
			 border-radius: 10px;
			border: 1px solid #d4af37;
			background: #fff;
			/* background: url("{{asset('myasset/img/babout.jpg')}}"); */
			padding: auto;
		 }
		/* =============================== HEXAGON STEP INSTRUCTION */
		 .title-step{
			/* background:green; */
			width: 20%;
			text-align: right;
			padding: 60px 10px 5px 1px;
		 }

		.step-container{
			display: flex;
			flex-direction: row wrap;
			border-radius: 10px;
			border: 1px solid #d4af37;
			background: url("{{asset('myasset/img/babout.jpg')}}");
			padding: 20px 40px;
			width: 100%;
		}

		#border-hexagon {
			width: 114px;
			height: 74px;
			margin: 20px;
			background: #d4af37;
			position: relative; 
			text-align: center;
			padding: 5px;
			z-index:80;			
		}		
		
		 #border-hexagon:before { 
			 content: ""; 
			 position: absolute; 
			 top: -26px; 
			 left: 0; 
			 width: 0; 
			 height: 0; 
			 border-left: 57px solid transparent; 
			 border-right: 57px solid transparent; 
			 border-bottom: 26px solid #d4af37;
			 z-index:80;	
			 /* background: green;  */
		}
		 #border-hexagon:after { 
			 content: ""; 
			 position: absolute; 
			 bottom: -26px; 
			 left: 0; 
			 width: 0; 
			 height: 0; 
			 border-left: 57px solid transparent; 
			 border-right: 57px solid transparent; 
			 border-top: 26px solid #d4af37;
			 z-index:80;	
			 /* background: blue;  */
		 }

		#hexagon {
			width: 110px;
			height: 70px;
			margin: -3px;
			background: #fff;
			/* background:yellow;  */
			position: relative; 
			text-align: center;
			padding: 0 2px;	
			z-index:82;			
		}		
		
		 #hexagon:before { 
			 content: ""; 
			 position: absolute; 
			 top: -25px; 
			 left: 0; 
			 width: 0; 
			 height: 0; 
			 border-left: 55px solid transparent; 
			 border-right: 55px solid transparent; 
			 border-bottom: 25px solid white;
			 z-index:82;	
			 /* background: green;  */
		}
		 #hexagon:after { 
			 content: ""; 
			 position: absolute; 
			 bottom: -25px; 
			 left: 0; 
			 width: 0; 
			 height: 0; 
			 border-left: 55px solid transparent; 
			 border-right: 55px solid transparent; 
			 border-top: 25px solid white;
			 z-index:82;	
			 /* background: blue;  */
		 }

		 #step-p {
			 font-size: 11px;
		 }

		 /* ================== tab styling */
		section {
		position: relative;
		width: 100%;
		z-index: 0;
		/* color: #fff; */
		background: #eee;
		}



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
		border-radius: 0 10px 10px 10px;
		border-bottom: 1px solid #d4af37;
		border-left: 1px solid #d4af37;
		border-right: 1px solid #d4af37;
		background-color: #fff;
		color: #d4af37;
		min-height: 100%;
		width: 100%;
		left: 0;
		z-index: 2;
		outline: none;
		top: 38px;
		text-align: center;
		padding-top: 20px;
		/* margin-bottom: 20px; */
		}

		.tp {
			display: block;
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
		
		input[type=text], select {
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
			.col-25, .col-75, input[type=submit] {
				width: 100%;
				margin-top: 0;
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

		/* ==================================================================== */
		 #tp-wi-form, #gi-form, #fi-form{
			 display:none;
		 }

		 .name-space{
			 display: flex;
			 flex-direction: row;
			 justify-content: center;
			 width: 100%;
			 padding-top:5px;
			 /* background: blue; */
			 /* border-bottom: 1px solid #d4af37;			  */
		 }

		 .line-space{
			 padding:0;
			 border:thin solid #d4af37;
			 width:40%;
			 align-items:center;
			 margin:0 auto;

		 }

		 .detail-space{
			display: flex;
			 flex-direction: row;
			 justify-content: center;
			 width: 100%;
			 /* background: red; */
			 padding-top:10px;
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

		 		<div class="left-space">

					<div class="section-profile-img">
						<img class="vend_pic" src="{{asset('myasset/img/default.jpeg')}}">

						<div>
							<p><b>Name:</b>&nbsp {{ Auth::user()->name }}</p>
							<p><b>Email:</b>&nbsp {{ Auth::user()->email }}</p>
							<p><b>Phone No:</b>&nbsp {{ Auth::user()->phone }}</p>
							<p><b>DOB</b>&nbsp {{ Auth::user()->dob }}</p>
							<p><b>Address:</b>&nbsp {{ Auth::user()->address }}</p>
							<p><b>State:</b>&nbsp {{ Auth::user()->state }}</p>
							<p><b>Joined at:</b>&nbsp {{ Carbon\Carbon::parse(Auth::user()->created_at)->format('d M, Y') }}</p>
						</div>
					</div>

				</div>


				<div class="right-space">

					<div class="up-step">		 				
						<div class="step-container">
							<h5 style="font-size:14px;margin-top:40px;">How to start:</h5>
							<div id="border-hexagon">
								<div id="hexagon">
									<p id="step-p"><b>Step #1</b><br>
										Book wedding packages.
									</p>
								</div>
							</div><i class="fa fa-chevron-right fa-2x" style="margin-top:5%;"></i>
							


							<div id="border-hexagon">
								<div id="hexagon">
									<p id="step-p"><b>Step #2</b><br>
									Fill-up form send by the vendor.
									</p>
								</div>
							</div><i class="fa fa-chevron-right fa-2x" style="margin-top:5%;"></i>

							<div id="border-hexagon">
								<div id="hexagon">
									<p id="step-p"><b>Step #3</b><br>
									Wait for invitation into dashboard.</p>
								</div>
							</div><i class="fa fa-chevron-right fa-2x" style="margin-top:5%;"></i>

							<div id="border-hexagon">	
								<div id="hexagon">
									<p id="step-p"><b>Step #4</b><br>
									Start Planning !
									</p>
								</div>
							</div>
						</div>
					</div>

					<div class="middle-step">		 				
						<div class="container">
		 					<div class="name-space">
		 						<p>Bride's Name</p>
								<p>&nbsp&nbsp & &nbsp&nbsp</p>
								<p>Groom's Name</p>
							</div><hr class="line-space">
							<div class="detail-space">
								<p><i class="far fa-calendar"></i> Wedding date</p>
								<p>&nbsp&nbsp|&nbsp&nbsp</p>
								<p><i class="fa fa-map-marker-alt"></i> Wedding Venue</p>
		 					</div>
						</div>
					</div> 

					<div class="down-step">

						<section>
						<!-- PERSONAL INFO -->
							<div tabindex="0">
								<button class="tbutton tbutton-active" id="pi">Personal Information</button>
								
								<div class="tp tp-active" id="tp-form">
									<div class="p-info">

										<div class="row">
											<div class="col-25">
												<label for="fullname">Full Name</label>
											</div>
											<div class="col-75">
												<input type="text" id="fullname" name="fullname" placeholder="Your full name..">
											</div>
										</div>

										<div class="row">
											<div class="col-25">
												<label for="phone">Phone No.</label>
											</div>
											<div class="col-75">
												<input type="text" id="lname" name="lastname" placeholder="Your phone number..">
											</div>
										</div>

										<div class="row">
											<div class="col-25">
												<label for="dob">D.O.B</label>
											</div>
											<div class="col-75">
												<input type="text" id="lname" name="lastname" placeholder="Your date of birth..">
											</div>
										</div>

										<div class="row">
											<div class="col-25">
												<label for="address">Address</label>
											</div>
											<div class="col-75">
												<input type="text" id="lname" name="lastname" placeholder="Your address..">
											</div>
										</div>

										<div class="row">
											<div class="col-25">
												<label for="state">State</label>
											</div>
											<div class="col-75">
												<select id="country" name="country">
												<option value="">Please choose your state</option>
												<option value="Johor">Johor</option>
												<option value="Kedah">Kedah</option>
												<option value="Kelantan">Kelantan</option>
												<option value="Melaka">Melaka</option>
												<option value="Negeri">Negeri Sembilan</option>
												<option value="Pahang">Pahang</option>
												<option value="Perak">Perak</option>
												<option value="Perlis">Perlis</option>
												<option value="Pulau">Pulau Pinang</option>
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

									<button class="btn_form" onclick="()" style="margin-top:2%; margin-left:80%;">Update</button>
									
								</div>								
								
							</div>

						 <!-- WEDDING INFO -->
							<div tabindex="0">
								<button class="tbutton" id="wi">Wedding Information</button>
		 						
								<div class="tp" id="tp-wi-form">
									
									<div class="p-info" id="wi-form">
										<div class="row">
											<div class="col-25">
												<label for="bride">Bride's Name</label>
											</div>
											<div class="col-75">
												<input type="text" id="bridename" name="bridename" placeholder="Bride name..">
											</div>
										</div>

										<div class="row">
											<div class="col-25">
												<label for="groom">Groom's Name</label>
											</div>
											<div class="col-75">
												<input type="text" id="groomname" name="groomname" placeholder="Groom name..">
											</div>
										</div>

										<div class="row">
											<div class="col-25">
												<label for="weddate">Wedding Date</label>
											</div>
											<div class="col-75">
												<input type="text" id="weddate" name="weddate" placeholder="Your wedding date..">
											</div>
										</div>

										<div class="row">
											<div class="col-25">
												<label for="wedvenue">Wedding Venue</label>
											</div>
											<div class="col-75">
												<input type="text" id="wedvenue" name="wedvenue" placeholder="Your wedding venue..">
											</div>
										</div>	
									</div>

									<button class="btn_form" onclick="()" style="margin-top:2%; margin-left:80%;">Update</button>

								</div>
					
							</div>

						<!-- GALLERY -->
							<div tabindex="0">
								<button class="tbutton" id="gi">Gallery</button>

								<div class="tp" id="gi-form">
		 							<h1>Page Under Construction<br><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></h1>
								</div>

							</div>

						<!-- PAST EVENTS -->
							<div tabindex="0">
								<button class="tbutton" id="fi">Past Events</button>

								<div class="tp" id="fi-form">
									<h1>Page Under Construction<br><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></h1>
								</div>

							</div>
						</section>
						 
				</div>
				</div>
				
		    	
		    </div>
    	<!-- </div> -->
    </div>



    @include('templates.footer')

	<script>
		$(document).ready(function(){
			$('#pi').click(function(){
				$('.tbutton').removeClass('tbutton-active');
				$(this).addClass('tbutton-active');			

					$('#tp-wi-form').fadeOut(function(){
						$('.tp').removeClass('tp-active');
						$(this).addClass('tp-active');
					});

					$('#gi-form').fadeOut(function(){
						$('.tp').removeClass('tp-active');
						$(this).addClass('tp-active');
					});

					$('#fi-form').fadeOut(function(){
						$('.tp').removeClass('tp-active');
						$(this).addClass('tp-active');
					});

					$('#tp-form').slideDown(function(){
						$('.tp').removeClass('tp-active');
						$(this).addClass('tp-active');
					});


			});

			$('#wi').click(function(){
				$('.tbutton').removeClass('tbutton-active');
				$(this).addClass('tbutton-active');
				
					$('#tp-form').fadeOut(function(){
						$('.tp').removeClass('tp-active');
						$(this).addClass('tp-active');
					});

					$('#gi-form').fadeOut(function(){
						$('.tp').removeClass('tp-active');
						$(this).addClass('tp-active');
					});

					$('#fi-form').fadeOut(function(){
						$('.tp').removeClass('tp-active');
						$(this).addClass('tp-active');
					});

					$('#tp-wi-form').slideDown(function(){
						$('.tp').removeClass('tp-active');
						$(this).addClass('tp-active');
					});
				
			});

			$('#gi').click(function(){
				$('.tbutton').removeClass('tbutton-active');
				$(this).addClass('tbutton-active');

					$('#tp-form').fadeOut(function(){
						$('.tp').removeClass('tp-active');
						$(this).addClass('tp-active');
					});

					$('#tp-wi-form').fadeOut(function(){
						$('.tp').removeClass('tp-active');
						$(this).addClass('tp-active');
					});

					$('#fi-form').fadeOut(function(){
						$('.tp').removeClass('tp-active');
						$(this).addClass('tp-active');
					});

					$('#gi-form').slideDown(function(){
						$('.tp').removeClass('tp-active');
						$(this).addClass('tp-active');
					});
			});

			$('#fi').click(function(){
				$('.tbutton').removeClass('tbutton-active');
				$(this).addClass('tbutton-active');

				$('#tp-form').fadeOut(function(){
						$('.tp').removeClass('tp-active');
						$(this).addClass('tp-active');
					});

					$('#tp-wi-form').fadeOut(function(){
						$('.tp').removeClass('tp-active');
						$(this).addClass('tp-active');
					});

					$('#gi-form').fadeOut(function(){
						$('.tp').removeClass('tp-active');
						$(this).addClass('tp-active');
					});

					$('#fi-form').slideDown(function(){
						$('.tp').removeClass('tp-active');
						$(this).addClass('tp-active');
					});
			});		
			

		});
	</script>
</body>
</html>