
<!DOCTYPE html>
<html>
<head>
	<title>SaveTheDate | Events</title>
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
	  	background: #eee;
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
      	background-image: url("{{asset('myasset/img/bg1.jpg')}}");
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
      	padding: 20px 15px;
      	display: flex;
      	justify-content: center;
      	flex-wrap: wrap;
      	background: rgba(255,255,255,0.7);
        /* border-top: 1px solid #d4af37; */
        border-bottom: 1px solid #d4af37;
      }

      .event-card {
      	text-align: center;
      	padding: 20px 20px;
      	border: 0.1em solid #d4af37;
      	border-radius: 2px;
      	background: #fff;
      	width: 90%;
      	margin: 10px 10px;
        display:flex;
        justify-content:space-between;
      }
      .event-card:hover {
      	border: 0.1em solid #d4af37;
      	/* background: #f8f5db; */
      }

	  .card-container{
      	text-align: center;
		    padding: 20px 20px;
      }

      .text-space{          
          /* background:blue; */
          width:65%;
      }

      .pic-space{
        width:35%;
      }

      .vend_pic{
	     height: 300px;
	     width: 100%;
	     /* border-radius: 10%; */
	     /* border: 1px solid lightgray; */
	     object-fit: contain;
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
    <section class="section-padding">

		<div class="container">
			<div class="search-engine-panel">
				<div class="sep-search">
					<input type="text" name="query" placeholder="look by name etc" id="query-input" />
					<i class="fa fa-search icon"></i>
				</div>                            
				<div class="search-engine-panel-footer">
					<button class="btn-search">Search Events</button>
				</div>
			</div> 
		</div>

    	<div class="container">
    		<div class="search-result-panel">
           <div class="card-container">
                <h5>Upcoming Events</h5>
                <p>Why hired <b>Wedding Planner ?</b> Wedding planner will help you
                 to manage your wedding planning including dealing with your vendors yang you nak laa.<br>
                 Wedding planner will help you
                 to manage your wedding planning including dealing with your vendors yang you nak laa.
                 </p><br>
           </div>
    			<!-- Event section Start -->              
                    
						<div class="event-card">
                            <div class="pic-space">
                                <img class="vend_pic" src="{{asset('myasset/img/event-1.jpg')}}">
                            </div>

                            <div class="text-space">
                                <h5><a href="http://www.mefa.my/" target="_blank">Malaysian Wedding Festival (MEFA)</a></h5><hr>
                                <p>This wedding festival is an opportunity for brides to prepare for the wedding as MEFA
								 organizes exhibitions as One Stop Center Wedding, from catering products, pelamin, 
								 bridal boutiques, wedding cards, souvenirs, wedding halls and more.</p>
								<p><b>Date: </b>27 - 29 December 2019</p>
								<p><b>Time: </b>10am - 10pm</p>
								<p><b>Venue: </b>Shah Alam Convention Centre</p>
                            </div>
                        </div>

                        <div class="event-card">
                            <div class="pic-space">
                                <img class="vend_pic" src="{{asset('myasset/img/event-2.jpg')}}">
                            </div>

                            <div class="text-space">
                                <h5><a href="https://www.klpj.com.my/" target="_blank">KLPJ Wedding Fair</a></h5><hr>
                                <p>Walk and sit 
                                  wherever you wish - there will be no limitations of where you must go or sit! Our hopes and 
                                  desires are for couples to make their wedding planning experience an exciting, meaningful and 
                                  comfortable in a unique and inspiring space!</p>
								  <p><b>Date: </b>11 - 12 January 2020</p>
								  <p><b>Time: </b> 10am - 10pm</p>
								  <p><b>Venue: </b>Kuala Lumpur Convention Centre</p>
                            </div>
                        </div>

                        

                
                <!-- Event Table Section End -->
    		</div>
    	</div>
    </section>

    @include('templates.footer')
</body>
</html>