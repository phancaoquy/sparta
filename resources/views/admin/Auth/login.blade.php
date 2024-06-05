<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | Sparta Admin</title>

    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <link href="{{ asset('admin/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>
                img
            </div>
            <h3>Welcome to Sparta</h3>

            <p>Login in</p>

            <form class="m-t" role="form" action="{{ route('admin.login') }}" method="POST">
                @csrf
                <div class="form-group text-left">
                    <input type="text" name="email" class="form-control" placeholder="Email">
                    @if ($errors->has('email'))
                        <span class="error-message">* {{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="form-group text-left">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    @if ($errors->has('password'))
                        <span class="error-message">* {{ $errors->first('password') }}</span>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                <a href="#"><small>Forgot password?</small></a>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a>
            </form>
            <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="{{ asset('admin/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>

</body>

</html>
