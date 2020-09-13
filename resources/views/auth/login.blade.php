<!DOCTYPE html>
<html lang="en">

<head>
    <title>SMANEV | Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="shortcut icon" href="{{asset('public/favicon.png')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/login/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/login/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/login/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/login/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/login/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/login/css/main.css')}}">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url('public/assets/login/images/img-01.jpg');">
            <div class="wrap-login100 p-t-30 p-b-30">
                <form class="login100-form validate-form" action="{{route('postlogin')}}" method="POST">
                    <div class="login100-form-avatar">
                        <img src="{{asset('public/assets/login/images/logo.png')}}" alt="AVATAR">
                    </div>
                    {{ csrf_field() }}
                    <span class="login100-form-title p-t-20 p-b-45">
                        Halaman login
                    </span>

                    <div class="wrap-input100 validate-input m-b-10" data-validate="Username is required">
                        <input class="input100" type="text" name="email" placeholder="Username">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-10" data-validate="Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn p-t-10">
                        <button class="login100-form-btn">
                            Masuk
                        </button>
                    </div>

                    <div class="text-center w-full p-t-25 p-b-230">
                        <a href="#" class="txt1">
                            Lupa username & password
                        </a><br>
                        <a href="{{route('home')}}">Beranda</a>
                    </div>
                    <div class="text-center w-full">
                        <a class="txt1" href="#">
                            Buat akun baru
                            <i class="fa fa-long-arrow-right"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>




    <!--===============================================================================================-->
    <script src="{{asset('public/assets/login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('public/assets/login/vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('public/assets/login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('public/assets/login/vendor/select2/select2.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('public/assets/login/js/main.js')}}"></script>

</body>

</html>