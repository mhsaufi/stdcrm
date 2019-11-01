<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SaveTheDate | LOGIN</title>

    <link rel="stylesheet" type="text/css" href="{{asset('myasset/loginvendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="icon" href="{{asset('myasset/img/tab-icon2.png')}}">
    <style>
        a:hover {
            text-decoration: none;
        }


        @media (max-width: 480px){

        }

        .big_container {
            width: 100%;
            max-height: 100vh!important;
            padding: 10% 30%;
        }

        .inside_container {
            height: 60vh!important;
            width: 100%;
            /*background: pink;*/
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }

        .form_admin {
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            height: 40%;
            /*background: blue;*/
        }

        .inside_container > div {
            width: 50%;
        }

        .login_button {
            width: 100%;
            border-radius: 5px;
            height: 20%;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            align-items: center;
            background: #2ecc71;
            color: white;
            letter-spacing: 1px;
            cursor: pointer;
            border:none;
        }

        .login_button:hover {
            opacity: 0.9;
        }
    </style>    
</head>
<body class="pattern">
<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="big_container">
        <div class="inside_container">
            <div><img src="{{asset('myasset/img/logo.png')}}" alt="" id="logo" style="width: 70% !important;cursor: pointer;"/></div>

            <div>
                <div class="form_admin">
                    
                    <input type="text" name="email" id="admin_email" class="form-control" placeholder="Enter email">

                    <input type="password" name="password" id="admin_password" class="form-control" placeholder="">

                    <button class="login_button" type="submit"><span>SIGN IN</span></button>
                    
                </div>
            </div>
                
        </div>
    </div>
</form>

    <script src="{{asset('myasset/js/jquery-min.js')}}"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script type="text/javascript">
        $('#logo').click(function(){
            window.location.replace("{{ url('/') }}");
        });

        $('#forgot').click(function(){

            window.location.replace("{{ url('/forgot') }}");
        });
    </script>
</body>
</html>