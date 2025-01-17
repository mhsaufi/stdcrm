<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Save The Date | Sign In</title>

    <link rel="stylesheet" type="text/css" href="{{asset('myasset/loginvendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="icon" href="{{asset('myasset/img/tab-icon2.png')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('myasset/css/animate-std.css')}}">

         <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WM6WPDB');</script>
    <!-- End Google Tag Manager -->
    <style>
        a:hover {
            text-decoration: none;
        }
        .login-banner {
            margin-top: 15%;
            padding: 1% 0;
            box-shadow: 0 0 10px #888;
            min-height: 100%;
            background: rgba(255,255,255,0.9);
            display: flex;
            flex-direction: column;
            transition: margin-top 0.5s;
        }

        .form_container {
            display: flex;
            /*flex-direction: row;*/
            flex-flow: row wrap-reverse;
            justify-content: center;
        }

        .empty_col {
            width: 100px;
        }

        .form_col {
            width: 500px;
        }

        .logo_col {
            width: 500px;
        }

        @media (max-width: 1200px){
            .login-banner {
                margin-top: 0;
                padding: 10% 0;
                box-shadow: 0 0 0 #fff;
                min-height: 100%;
                background: rgba(255,255,255,0.6);
                display: flex;
                flex-direction: column;
            }

            .form_container {
                display: flex;
                /*flex-direction: row;*/
                flex-flow: row wrap-reverse;
                justify-content: center;
            }

            .empty_col {
                width: 0px;
                transition: width 0.5s;
            }

            .form_col {
                width: 500px;
                /*background: blue;*/
                padding: 0;
                transition: width 0.5s;
            }

            .std-login-form {
                padding: 1% 10px!important;
                margin-left: 0!important;
                border-right: none!important;
            }

            .logo_col {
                width: 500px;
                transition: width 0.5s;
            }

            .pattern{
                background-image: none!important;
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center; 
                min-height: 100vh!important;
            }

            .std-login-banner {
                display: flex;
                flex-direction: column;
                justify-content: center;align-items: center;
                padding: 20px 20px;
                margin-left: 0!important;
            }

            .std-login-banner-desc {
                padding-top: 20px;
                padding-left: 0!important;
                text-align: center;
            }
        }

        @media (max-width: 480px){
            .login-banner {
                margin-top: 0;
                padding: 10% 0;
                box-shadow: 0 0 0 #fff;
                min-height: 100%;
                background: rgba(255,255,255,0.6);
                display: flex;
                flex-direction: column;
            }

            .form_container {
                display: flex;
                /*flex-direction: row;*/
                flex-flow: row wrap-reverse;
                justify-content: flex-start;
            }

            .empty_col {
                transition: width 0.5s;
                width: 100%;
            }

            .form_col {
                width: 100%;
                /*background: blue;*/
                padding: 0;
                transition: width 0.5s;
            }

            .std-login-form {
                padding: 1% 10px!important;
                margin-left: 0!important;
            }

            .logo_col {
                width: 100%;
                transition: width 0.5s;
            }

            .pattern{
                background-image: url("{{asset('myasset/img/IMG_7092.jpg')}}");
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center; 
                min-height: 100vh!important;
            }

            .std-login-banner {
                display: flex;
                flex-direction: column;
                justify-content: center;align-items: center;
                padding: 20px 20px;
                margin-left: 0!important;
            }

            .std-login-banner-desc {
                padding-top: 20px;
                padding-left: 0!important;
                text-align: center;
            }
        }

        .pattern{
            background-image: url("{{asset('myasset/img/IMG_7092.jpg')}}");
            background-repeat: no-repeat;
            background-size: cover;
            height: 250px !important;
        }

        .std-login-form {
            padding: 20px 20px;
            margin-left: 100px;
            padding-right: 80px;
            border-right: 0.09em solid #968e90;
        }
        .std-login-form > input {
            border-radius: 15px;
        }
        .std-login-btn {
            padding: 5px 25px;
            border: none;
            border-radius: 3px;
            color: white;
            background: #FFA726;
            float: right;
            cursor: pointer;
        }
        .std-login-btn:hover {
            background: #FFB74D;
        }
        .std-login-banner {
            display: flex;
            flex-direction: column;
            justify-content: center;align-items: center;
            padding: 20px 20px;
            margin-left: 10px;
        }
        .std-login-banner-desc {
            padding-top: 20px;
            padding-left: 20px;
        }
        .std-name {
            font-weight: bold;
            font-style: italic;
            color: #CC0066;
        }
        .invalid-feedbacks {
            color: red;
            font-weight: bold;
            font-size: 0.8em;
        }

        #forgot {
            opacity: 0.4;
            cursor: pointer;
            font-size: 13px;
            font-weight: bold;
        }

        #forgot:hover {
            color: #CC0066;
            opacity: 1;
        }
    </style>    
</head>
<body class="pattern">
    <div class="login-banner animated fadeIn faster">
        <div class="form_container animated zoomIn fast">
            <div class="empty_col"></div>
            <div class="form_col">
                <div class="std-login-form animated fadeInLeft fast">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        @if ($errors->has('email'))
                            <span class="invalid-feedbacks" role="alert">
                                Invalid email and password combination
                            </span>
                        @else
                            <label></label>
                        @endif
                        <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}"  placeholder="Email" />

                        @if ($errors->has('password'))
                            <label class="invalid-feedback" role="alert">
                                {{ $errors->first('password') }}
                            </label>
                        @else
                            <label></label>
                        @endif
                        <input type="password" name="password" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="password" /><br>

                        <span id="forgot">Forgot password ?</span>
                            <button class="std-login-btn" type="submit">Sign In</button>
                    </form>
                </div>
            </div>
            <div class="logo_col animated fadeInRight fast">
                <div class="std-login-banner">
                    <img src="{{asset('myasset/img/logo.png')}}" alt="" id="logo" style="width: 50% !important;cursor: pointer;"/>
                    <br>
                    <div class="std-login-banner-desc">
                        <p>It's free! <a href="{{ route('register') }}">Create an account </a> and have your wedding ceremony fully organized. <span class="std-name">Save The Date</span> is your best deal 
                            for your reception arrangement. 
                        </p>
                    </div>
                </div>
            </div>
            <div class="empty_col"></div>
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
    </script>
</body>
</html>