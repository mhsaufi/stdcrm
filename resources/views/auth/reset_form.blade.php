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

    </style>    
</head>
<body>

    <div class="main_container">

        <div class="child_container">
            <img src="{{asset('myasset/img/logo.png')}}" alt="" id="logo" style="width: 30% !important;cursor: pointer;margin-bottom: 3%;"/>
            <div style="display: flex;flex-direction: column;justify-content: flex-start;align-items: center;width: 100%;" id="replacable_content">
                <p style="opacity: 0.7;" id="message">Enter your new password.</p>
                <input type="password" name="password" class="form-control" style="width: 30%;margin-bottom: 15px;" id="password">
                <p style="opacity: 0.7;" id="aa">Re-enter your new password.</p>
                <input type="password" name="password1" class="form-control" style="width: 30%;margin-bottom: 15px;" id="password1">
                <button class="std_btn" id="reset">Reset Password</button>
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

            var url = '{{ url("/updatepw") }}';
            var token = '{{ csrf_token() }}';
            var pw1 = $('#password').val();
            var pw2 = $('#password1').val();
            var user = '{{ $info["id"] }}';

            if(pw1.length >= 8){

                if(pw1 == pw2){

                    $.post(url,{_token:token,pw1:pw1,user:user},function(result){


                            var login = '{{ route("login") }}';

                            $('#replacable_content').html('<p>Your password has been successfully updated. Login <a href="' +  + '">here</a>');

                    });

                }else{

                    var str = "<span style='color: red;font-weight:bold'>Password did not match</span>";

                    $('#message').html(str);

                }
            }else{

                var str = "<span style='color: red;font-weight:bold'>Password must be at least 8 character</span>";

                $('#message').html(str);

            }

            

            
        });
    </script>
</body>
</html>