<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Save The Date | Features</title>

    @include('templates.header')

     <link href="{{ asset('myasset/fullcalendar/core/main.css') }}"  rel='stylesheet' />

    <style type="text/css">
    html {
       height: 100%!important; 
    }
    /* ------------------------------------------------------------  navigation bar styling */
    .navcolumn {
        /* padding: 10px; */
        border-right: 2px dotted #d4af37;
        display: flex;
        flex-direction: column;
        justify-content: flex-start !important;
        text-align: left !important;
        /* background: blue; */
    }
    .icon-circle{
        background-color: #fff  ; /*#f2f4f4; */
        color:  #000  ; /*#aeb6bf ; #5d6d7e*/
        border: 2px solid #d4af37;
        height: 100px;
        width: 100px;
        padding-top: 10px;
        border-radius: 50%;
      } 

      .icon-circle:hover{
        background-color: white;
        color: #d4af37  ; 
        /* #ff1b4e */
        border: 3px inset #d4af37 ;
        z-index: 99;
        cursor: pointer;
      }

      .icon-circle a{
        color: black;
        opacity: 0.6;
      }

      .navbar-expand-lg .navbar-nav .nav-link {
        color: black !important;
      }
      .navbar-expand-lg .navbar-nav .nav-link:active{
        color: gold !important;
      }

      .drpdown {
        float: left;
        overflow: hidden;
    }

    .drpdown {
        font-size: 16px;  
        border: none;
        outline: none;
        color: white;
        padding: 1px 3px;
        font: inherit;
        margin: 0;
    }

    .drpdown:hover{
        color: #d4af37 ;
    }

    .drpdown-content {
        display: none;
        position: absolute;
        background: url("{{asset('myasset/img/movg.mp4')}}");  
        width: 100%;
        left: 0;
        z-index: 1;
    }

    .drpdown:hover .drpdown-content {
        display: block;
    }

    .fade-in {
        animation: fadeIn ease 1s;
        -webkit-animation: fadeIn ease 1s;
        -moz-animation: fadeIn ease 1s;
        -o-animation: fadeIn ease 1s;
        -ms-animation: fadeIn ease 1s;
    }

    @keyframes fadeIn{
        0% {opacity:0;}
        100% {opacity:1;}
    }

    /* ---------------------------------------------------- Video styling */    

    .back-about{
        /**/
        width:100%;
        height:100%;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        /* background: #fff; */
        color: #d4af37;
        background: url("{{asset('myasset/img/babout.jpg')}}");
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;       
    }  

    .backtext-about{
        width:60%;
        height:100%;
        z-index:80;
        color: #000;
        margin: 10% 20% 0 20%;
        /*background: blue;*/
    }

    .sub_table{
    	background: rgba(255,255,255,0.9);
    	width: 100%;
    	/*margin-bottom: 1%;*/
    	border-radius: 10px 10px 0 0; 
    	border-collapse: collapse;
    	overflow: hidden;   	
    } 

    input[type=text], select, textarea {
	  width: 100%;
	  padding: 12px;
	  border: 1px solid #d4af37;
	  border-radius: 4px;
	  box-sizing: border-box;
	  margin-top: 6px;
	  margin-bottom: 16px;
	  resize: vertical;
	}

    .tp-form{	
		height: auto!important;
		background: #fff;
		/*border: 1px solid #ddd;*/
		/*border-radius: 20px;*/
		width: 60%;
		margin: 0 20% 10% 20%;
		padding: 2% 10%;
	}

	.p-info{
		display:flex;
		flex-direction:column;
		justify-content: flex-start;
		color: #000;
	}

	.btn_form {
		border: 1px solid #d4af37;
		border-radius: 10px;
		float: left;
		margin-right: 10px;
		margin-bottom: 20px;
		opacity: 1.0;
		cursor: pointer;
		padding: 10px;
		background: rgba(212,175,55,0.5);
		width: 100%;			
	}
	.btn_form:hover {			
		background: rgba(212,175,55,0.8);
		color: black;
	}

    .offer{
    	color: limegreen;
    }

	table, td, th {
	  text-align: center;
	}
	
	td, th:nth-child(2){
		border: 0.5px solid #eee;
	}

	th:nth-child(2),th:nth-child(3){
		/*background: rgba(212,175,55,0.7);*/
		background: #000;
		color: #fff;
		font-weight: bold;
	}

	th:nth-child(1){
		background: rgba(212,175,55,0.9);
		font-weight: bold;
	}
	
	td:nth-child(1){
		background: rgba(212,175,55,0.7);
		font-weight: bold;
	}

	td:nth-child(1), th:nth-child(1){
		width: 40%;
	}

	table {
		border-radius: 20px 20px 0 0 !important; 
		border-collapse: collapse;
		overflow: hidden; 
	  	width: 100%;
	}

	th, td {
	  padding: 15px;
	}

		



    /* ============================================================================================ */


    /* ----------------------------- Footer styling */
    .credit {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: #fff !important;
    color: black !important;
    text-align: center;
    border-top: 3px solid #d4af37;
    z-index:999999;
    padding-top:10px;
    }

    @media (max-width: 600px){
        .credit {
            display: none;
        }

        

        .backtext-about{
            width:100%!important;
            height:100%;
            z-index:80;
            color:#000;
        }

        .backtext-about{
            width:100%;
            height:100%;
            z-index:80;
            color:#000;
            text-align: center;
        }

        
    }

    .small-tajuk{
    font-size:14px;
    color: #000 ;
    }

    .small-isi{
    font-size:13px;
    color: #d4af37;
    }

    .small-isi:hover{
    color: #000 ;
    }

    .small-p{
    font-size:13px;
    color: #d4af37;
    }

    </style>
  </head>
  <body>

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      
    @include('templates.navbar')
    </header>
    
    <!------------------- Header Area wrapper End ----------------------------------------------------->

    <div class="back-about">

        <div class="backtext-about">
        	<h6>We also provide <b>PREMIUM</b> subscription for vendors. </h6>
           <table class="sub_table">
			  <tr>
			    <th>Features</th>
			    <th>BASIC ( <em>FREE</em> )</th>
			    <th>PREMIUM ( <em>RM240/year</em> )</th>
			  </tr>
			  <tr>
			    <td>Registration</td>
			    <td><i class="fas fa-check offer"></i></td>
			    <td><i class="fas fa-check offer"></i></td>
			  </tr>
			  <tr>
			    <td>2-tier Event Creation</td>
			    <td><i class="fas fa-check offer"></i></td>
			    <td><i class="fas fa-check offer"></i></td>
			  </tr>
			  <tr>
			    <td>2-tier Timeline Creation</td>
			    <td><i class="fas fa-check offer"></i></td>
			    <td><i class="fas fa-check offer"></i></td>
			  </tr>
			  <tr>
			    <td>Approval</td>
			    <td><i class="fas fa-check offer"></i></td>
			    <td><i class="fas fa-check offer"></i></td>
			  </tr>
			  <tr>
			    <td>Insider</td>
			    <td><i class="fas fa-check offer"></i></td>
			    <td><i class="fas fa-check offer"></i></td>
			  </tr>
			  <tr>
			    <td>Marketing</td>
			    <td></td>
			    <td><i class="fas fa-check offer"></i></td>
			  </tr>
			  <tr>
			    <td>Contact</td>
			    <td></td>
			    <td><i class="fas fa-check offer"></i></td>
			  </tr>
			  <tr>
			    <td>Quick Access</td>
			    <td></td>
			    <td><i class="fas fa-check offer"></i></td>
			  </tr>
			  <tr>
			    <td>Full Report</td>
			    <td></td>
			    <td><i class="fas fa-check offer"></i></td>
			  </tr><hr>
			  <tr>
			    <td>Advertisement</td>
			    <td></td>
			    <td><i class="fas fa-check offer"></i></td>
			  </tr>
			  <tr>
			    <td>Google Analytics</td>
			    <td></td>
			    <td><i class="fas fa-check offer"></i></td>
			  </tr>
			</table>
        </div>

        <div class="tp-form">

        	<h6>Contact Save The Date</h6>
			
			<div class="p-info">
				<label for="email">Email:</label>
			    <input type="text" id="company_email" name="name" placeholder="Company email..">

			    <label for="cname">Company Name:</label>
			    <input type="text" id="company_name" name="lastname" placeholder="Company name..">
			    
			     <label for="cno">Company Contact No:</label>
			    <input type="text" id="company_no" name="lastname" placeholder="Company contact no..">

			    <label for="subject">Inquiries:</label>
			    <textarea id="message" name="subject" placeholder="Write something.." style="height:100px"></textarea>
			</div>

			<button class="btn_form" id="inq_submit">Send Inquiries</button>

        </div>

    </div>



    @include('templates.external_footer')
    @include('templates.footer')


    
    <!------------------------------------------------------------------------ Footer Section End-->
    

    <!-- Javascript  -->
    <script type="text/javascript">         

        $('#img-about').click(function(){
            window.location.replace("{{ url('/') }}");
        });

        $('.icon-circle').click(function(){
            window.location.replace("{{ url('/listvendor') }}");
        });  

        $('#btn-register').click(function(){
          window.location.replace("{{ route('register') }}");
        });

        $('#btn-pakej').click(function(){
          window.location.replace("{{ url('/packages') }}");
        });

        $('#btn-promo').click(function(){
          window.location.replace("{{ url('/events') }}");
        });

        $('#btn-islcenter').click(function(){
          window.location.replace("{{ url('/islamic_center') }}");
        });

        $('#inq_submit').click(function(){
			var c_email = $('#company_email').val();
			var c_name = $('#company_name').val();
			var c_no = $('#company_no').val();
			var c_inq = $('#message').val();
			var token = '{{ csrf_token() }}';
			var url = '{{ url("/subscrip") }}';				

			$.post(url, {email_company:c_email,name_company:c_name,company_no:c_no,message_company:c_inq,_token:token},function(){
				alert('Your inquiries has been sent to our online-support.');				
			});			
		});
     
    </script>

  </body>
</html>
