
<!DOCTYPE html>
<html>
<head>
	<title>SaveTheDate | Wedding Planners</title>
	 @include('templates.header')

	 <style>
	  .btn-like {
	  	border: 1px solid #d4af37;
	  	border-radius: 3px;
	  	background: #fff;
	  	padding: 10px 20px;
	  	margin-right: 15px;
	  	cursor: pointer;
	  }
	  .btn-like:hover {
	  	background: #EEE;
	  }
	  .btn-search {
	  	padding: 10px 20px;
	  	background: #d4af37;
	  	border: none;
	  	border-radius: 2px;
	  	cursor: pointer;
	  	color: #fff;
	  }
	  .btn-search:hover {
        background:#bb9928;
	  	opacity: 0.9;
	  }
	  .icon {
	  	margin-left: -30px;
	  	opacity: 0.5;
	  }
	  .icon-s {
	  	margin-left: 10px;
	  	opacity: 0.5;
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
      	background-image: url("{{asset('myasset/img/bkg.jpg')}}");
      	background-repeat: no-repeat;
        background-attachment: fixed;
      	background-size: cover;
      	height: 250px !important;
      }
      #query-input {
      	padding: 10px 20px;
      	border-radius: 2px;
      	border: 1px solid #d4af37;
      	width: 100%;
      }
      .rate {
      	color: #FFC300;
      }
      .rate-o {
      	color: #CACACA;
      }
      .search-engine-panel {
      	display: flex;
      	justify-content: center;
      	width: 100%;
      	/* background: rgba(255,255,255,0.5); */
      	padding: 40px 30px;
      	margin-top: 10px;
      	/*border-bottom: 0.2em solid #999;*/
      	/* border-top: 1px solid #d4af37; */
      }
      .search-engine-panel-footer {
      	display: flex;
      	justify-content: center;
      }
      .sep-choose {
      	display: flex;
      }
      .sep-search {
      	width: 40%;
      	padding-right: 20px;
      }
      .search-result-panel {
      	/*margin-top: 10px;*/
      	padding: 10px 15px;
      	display: flex;
      	justify-content: center;
      	flex-wrap: wrap;
      	background: rgba(255,255,255,0.7);
        /* border-top: 1px solid #d4af37; */
        border-bottom: 1px solid #d4af37;
      }

      .card-container{
		border-top: 1px solid #d4af37;
      	text-align: center;
		width:82.3%;
		margin-left:8.9%;
        background: rgba(255,255,255,0.7);
		padding-top:20px;
      }

      .std-card {
      	text-align: center;
      	padding: 20px 20px;
      	border: 2px solid #d4af37;
      	border-radius: 10%;
      	background: #fff;
      	width: 230px;
      	cursor: pointer;
      	margin: 10px 10px;
      }
      .std-card:hover {
      	border: 2px inset #d4af37;
      	background: #f8f5db;
      }
      .tags-space {
      	display: flex;
      	justify-content: center;
      	flex-wrap: wrap;
      	margin-top: 15px;
      }
      .tags {
      	background: #EEE;
      	padding: 1px 3px;
      	font-size: 0.9em;
      	border-radius: 5px;
      	border: 0.1em solid #999;
      	margin-right: 1px;
      }
      .vend_pic{
	     height: 100px;
	     width: 100px;
	     border-radius: 50%;
	     border: 1px solid #d4af37;
	     object-fit: cover;
         margin-bottom: 10px;
	   }
	   .page {
	   	margin-top: 10px;
	   	font-size: 1.3em;
	   	letter-spacing: 10px;
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

    <!-- Feature Section Start -->
    <div class="section-padding">       

    	<div class="container">        
    		<div class="search-engine-panel">            
    			<div class="sep-search">
    				<input type="text" name="query" placeholder="look by name etc" id="query-input" />
    				<i class="fa fa-search icon"></i>
    			</div>
    			<div class="sep-choose">
    				<div class="btn-like sep-area">
    					Select Area <i class="fas fa-map-marker-alt icon-s"></i>
    				</div>    				
    			</div><br>
    			<div class="search-engine-panel-footer">
	    			<button class="btn-search">Search Wedding Planner</button>
	    		</div>
    		</div>    		
    	</div>

        <div class="card-container">
            <h5>Wedding Planners</h5>
            <p>Why hired <b>Wedding Planner ?</b><br>
				Wedding planner will help the bride and groom-to-be in planning wedding ceremony.
				The cost for having a wedding planner is depends on your preferences based on 
				the service packages which ranged from RM x00 - RM x,000. 
				<br><b>Full Planning Services</b >- Budgeting, Checklist, Assist in choosing wedding dress, venues, pelamin and catering menus, wedding itineraries, 
				actual day set-ups
				<br><b>Pre-wedding Supervision Services</b> - Recommendation of vendors, Oversee proposed planning, Finalizing appointment and
				meeting with vendors
				<br><b>Personalized Services</b> - Discussed together on what you want the wedding planner to handle and can even 
				help you for post-wedding planning (etc: honeymoon).<br>
            </p><br>
       </div>

    	<div class="container">
    		<div class="search-result-panel">
    			<div class="std-card">
                    <img class="vend_pic" src="{{asset('myasset/img/default.jpeg')}}"><br>
    				<h6>Istana Puteh</h6>
    				<i class="fa fa-star rate"></i>
    				<i class="fa fa-star rate"></i>
    				<i class="fa fa-star rate"></i>
    				<i class="fa fa-star rate"></i>
    				<i class="fa fa-star rate-o"></i>
    				<br><br>    				
    				
    			</div>
    			<div class="std-card">
                    <img class="vend_pic" src="{{asset('myasset/img/default.jpeg')}}"><br>
    				<h6>Ain Ayunni Photography</h6>
    				<i class="fa fa-star rate"></i>
    				<i class="fa fa-star rate"></i>
    				<i class="fa fa-star rate"></i>
    				<i class="fa fa-star rate-o"></i>
    				<i class="fa fa-star rate-o"></i>
    				<br><br>    				
    				
    			</div>
    			<div class="std-card">
                    <img class="vend_pic" src="{{asset('myasset/img/default.jpeg')}}">
                    <h6>Veillaris</h6>
    				<i class="fa fa-star rate"></i>
    				<i class="fa fa-star rate"></i>
    				<i class="fa fa-star rate"></i>
    				<i class="fa fa-star rate"></i>
    				<i class="fa fa-star rate"></i>
    				<br><br>    				
    				
    			</div>
    			<div class="std-card">
                    <img class="vend_pic" src="{{asset('myasset/img/default.jpeg')}}">
                    <h6>Norazah Saji</h6>
    				<i class="fa fa-star rate"></i>
    				<i class="fa fa-star rate"></i>
    				<i class="fa fa-star rate-o"></i>
    				<i class="fa fa-star rate-o"></i>
    				<i class="fa fa-star rate-o"></i>
    				<br><br>    				
    				
    			</div>
    			<div class="std-card">
                    <img class="vend_pic" src="{{asset('myasset/img/default.jpeg')}}">
                    <h6>MyGlamm Co.</h6>
    				<i class="fa fa-star rate"></i>
    				<i class="fa fa-star rate"></i>
    				<i class="fa fa-star rate"></i>
    				<i class="fa fa-star rate"></i>
    				<i class="fa fa-star rate-o"></i>
    				<br><br>    				
    				
    			</div>
    			
    				
    			</div>
    		</div>
    	</div>


    @include('templates.footer')
</body>
</html>