<!DOCTYPE html>
<html>
<head>
	<title>SaveTheDate | Forgot Password</title>

	<link rel="stylesheet" type="text/css" href="{{asset('myasset/loginvendor/bootstrap/css/bootstrap.min.css')}}">
	<!-- <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="icon" href="{{asset('myasset/img/tab-icon2.png')}}">
    <style>
    	a:hover {
    		text-decoration: none;
    	}

        .main_container {
            width: 100%;
            height: 100vh;
            /*background: blue;*/
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            align-items: center;
        }

        .child_container {
            width: 60%;
            height: 45vh;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            align-items: center;
            /*background: yellow;*/
            position: relative;
        }

        .std_btn {
            padding: 5px 10px;
            border: none;
            background: green;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        .loading_resetting {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 999;
            background: white;
            display: none;
        }

        .loading_resetting div {
            width: 100%!important;
            height: 60%;
            /*background: blue;*/
            position: relative;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            align-items: center;
        }
    </style>	
</head>
<body>

    <div class="main_container">

        <div class="child_container">
            <img src="{{asset('myasset/img/logo.png')}}" alt="" id="logo" style="width: 30% !important;cursor: pointer;" id="first_logo" />
            <div style="display: flex;flex-direction: column;justify-content: flex-start;align-items: center;width: 100%;position: relative;" id="replacable_content">
                <p style="opacity: 0.7;" id="message">Enter your registered email address and we will send you a link to the reset password page.</p>
                <input type="text" name="email" class="form-control" style="width: 50%;margin-bottom: 15px;" id="email">
                <button class="std_btn" id="reset">Send reset link</button>
                <div class="loading_resetting">
                    <div>
                        <img src="{{ asset('myasset/img/carrier/loading3.gif') }}" width="25%"> 
                    </div>
                </div>
            </div>
        </div>
        
    </div>


	<script src="{{asset('myasset/js/jquery-min.js')}}"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
	<script type="text/javascript">
		$('#logo').click(function(){
			window.location.replace("{{ url('/') }}");
		});

        $('#forgot').click(function(){

            window.location.replace("{{ url('/forgot') }}");
        });

        $('#reset').click(function(){

            var url = '{{ url("/forgotreset") }}';
            var token = '{{ csrf_token() }}';
            var email = $('#email').val();

            $('.loading_resetting').show('fade');

            $.post(url,{_token:token,email:email},function(result){

                if(result == '418'){

                    var str = "We would like to apologize because the email specified is not registered within our system.";

                    $('#message').html(str);

                }else{

                    $('#replacable_content').html('<p>We have sent the link to your email. Check your email now, thank you.</p>');

                }

                $('.loading_resetting').hide('fade');

            });

        });
	</script>
</body>
</html>