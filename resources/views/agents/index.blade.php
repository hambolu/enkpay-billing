<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/Login-Form-Clean.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
</head>

<body style="background: #673E66;height: 80;">
    <div class="container">
        @if (session('error'))
    <div class="col-sm-12">
        <div class="alert  alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
        </div>
    </div>
@endif
        <section class="login-clean" style="color: var(--bs-gray-100);background: rgba(241,247,252,0);text-align: center;"><img class="bounce animated" src="{{asset('assets/img/clipboard-image.png')}}" style="height: 84px;margin-bottom: 49px;margin-top: -32px;">
            <form method="post" action="{{route('users')}}" style="margin-bottom: 25px;box-shadow: 1px 4px 20px rgba(0,0,0,0.19);border-radius: 10px;">
                @csrf
                <h2 class="visually-hidden">Login Form</h2>
                <h1 style="background: rgba(255,255,255,0);border-width: 88px;height: 44px;width: 248px;font-size: 28px;color: #673E66;margin-bottom: 19px;margin-top: 13px;">AGENT LOGIN</h1>
                <div class="illustration"></div>
                <div class="mb-3"><input class="form-control" type="text" name="phone" placeholder="Email or Phone number"></div>
                <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password" style="height: 42px;"></div>
                <div class="mb-3"><button class="btn btn-primary d-block w-100" data-bss-hover-animate="pulse" type="submit" style="background: #673E66;padding: 13px;margin-top: 46px;">Log In</button></div><a class="forgot" href="forgot-password.html">Forgot your password?</a>
            </form><small style="margin-top: 8px;text-align: right;"><br><strong>© 2022 Enkwave Dynamic Technologies</strong><br></small>
        </section>
    </div>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/bs-init.js')}}"></script>
</body>

</html>