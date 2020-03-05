<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <title>
        Login
    </title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('public/assets/cars/vendors/base/vendors.bundle.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/cars/demo/default/base/style.bundle.css')}}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('public/assets/css/shared/style.css')}}">
    <!-- endinject -->
   <link rel="shortcut icon" href="{{asset('public/assets/images/1.png')}}" />
    <style>
        input,input:focus, input:active, input:hover, input:visited{
            -webkit-box-shadow: 2px 2px 8px 1px rgba(0,0,0,0.36)!important; 
            box-shadow: 2px 2px 8px 1px rgba(0,0,0,0.36)!important;
            background:white !important;
            color:black !important;
            font-size: x-large !important;
        }
        input::placeholder{
            color:black !important;
            opacity:0.1 !important;
        }
        .m-login__title{
            font-size: 38px !important;
           
            color: #000000 !important;
            font-weight: bolder;
        
        }
        #m_login_signin_submit{
            background: white !important;
            color: black !important;
            font-size: x-large !important;
            font-weight: bolder !important;
        }
        *{
            font-family: 'proxima-nova', sans-serif !important;
        }
        #m_login_signin_submit{
            -webkit-box-shadow: 2px 2px 8px 1px rgba(0,0,0,0.36)!important; 
            box-shadow: 2px 2px 8px 1px rgba(0,0,0,0.36)!important;
            border-color: #d8d8d8 !important;

        }
        .m-login.m-login--2 .m-login__wrapper .m-login__container .m-login__form {
            margin: 2rem auto;
        }
    </style>
  </head>
  <body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
    <!-- begin:: Page -->
    <div class="m-grid m-grid--hor m-grid--root m-page">
        <div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--singin m-login--2 m-login-2--skin-1" id="m_login" style="background-image: url({{asset('public/assets/cars/app/media/img//bg/bg-1.jpg')}});">
            <div class="m-grid__item m-grid__item--fluid	m-login__wrapper">
                <div class="m-login__container">
                    <div class="m-login__logo">
                        <a href="#">
                            <img src={{asset('public/assets/cars/app/media/img//logos/logo-1.png')}}>
                        </a>
                    </div>
                    <div class="m-login__signin">
                        <div class="m-login__head">
                            <h2 class="m-login__title" style="color:#8700de;">
                                Vehicle Retail System
                            </h2>
                        </div>
                    <form class="m-login__form m-form" action="{{url('/login')}}" method="post"  id="login-form">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group m-form__group">
                                <input class="form-control m-input login-input "   type="text" placeholder="Username" name="name" autocomplete="on">
                            </div>
                            <div class="form-group m-form__group">
                                <input class="form-control m-input m-login__form-input--last login-input" type="password" placeholder="password" name="password">
                            </div>

                            <div class="m-login__form-action">
                                <button id="m_login_signin_submit" type="submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom   m-login__btn m-login__btn--primary">
                                    Sign In
                                </button>
                            </div>
                        </form>
                    </div>



                </div>
            </div>
        </div>
    </div>

    <!-- start: plugins js -->
    <script src="{{asset('public/assets/cars/vendors/base/vendors.bundle.js')}}"></script>
    <script src="{{asset('public/assets/cars/demo/default/base/scripts.bundle.js')}}"></script>
    <script src="{{asset('public/assets/cars/snippets/pages/user/login.js')}}"></script>
    {{-- end: plugin js --}}
    {{-- start : login js --}}
    <script src="{{asset('public/assets/cars/customjs/login.js')}}"></script>
    {{-- end : login js --}}
  </body>
</html>
