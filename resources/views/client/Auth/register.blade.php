<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biolife - Organic Food</title>
    <link href="https://fonts.googleapis.com/css?family=Cairo:400,600,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400i,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&amp;display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('client/assets/images/favicon.png') }}" />

    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <style>
        
    </style>
</head>

<body>
    <!-- Login 8 - Bootstrap Brain Component -->
    <section class="d-flex align-items-center justify-content-center overflow-hidden">
        <div class="vh-100 vw-100 row justify-content-center">
            <div class="col-12 col-xxl-11">
                <div class="card border-light-subtle shadow-sm">
                    <div class="row">
                        {{-- Thumb --}}
                        <div class="col-12 col-md-6 d-none d-md-block">
                            <img class="img-fluid rounded-start object-fit-cover" loading="lazy"
                                src="{{ asset('client/assets/images/form-img.jpg') }}" alt="Welcome back to Sparta!">
                        </div>
                        {{-- Form --}}
                        <div class="col-12 col-md-6 d-flex align-items-start justify-content-center form-side">
                            <div class="col-12 col-lg-6 col-xl-7">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-5">
                                                <div class="text-center mb-4">
                                                    <a href="#!">
                                                        <img src="{{ asset('client/assets/images/logo.png') }}"
                                                            alt="Sparta Logo" width="220" height="47">
                                                    </a>
                                                </div>
                                                <h4 class="text-center">Welcome to Sparta!</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="d-flex gap-3 flex-column">
                                                <a href="#!" class="btn btn-lg btn-outline-dark">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-google"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
                                                    </svg>
                                                    <span class="ms-2 fs-6">Log in with Google</span>
                                                </a>
                                            </div>
                                            <p class="text-center mt-4 mb-5">Or Register Now</p>
                                        </div>
                                    </div>
                                    <form action="{{ route('client.store') }}" method="POST">
                                        @csrf
                                        <div class="row gy-3 overflow-hidden">
                                            <div class="col-12">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" name="name"
                                                        id="name" placeholder="Fullname">
                                                    <label for="name" class="form-label">Fullname</label>
                                                    @if ($errors->has('name'))
                                                        <span class="error-message">*
                                                            {{ $errors->first('name') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" name="email"
                                                        id="email" placeholder="name@example.com">
                                                    <label for="email" class="form-label">Email</label>
                                                    @if ($errors->has('email'))
                                                        <span class="error-message">*
                                                            {{ $errors->first('email') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-floating mb-3">
                                                    <input type="password" class="form-control" name="password"
                                                        id="password" value="" placeholder="Password">
                                                    <label for="password" class="form-label">Password</label>
                                                    @if ($errors->has('password'))
                                                        <span class="error-message">*
                                                            {{ $errors->first('password') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-floating mb-3">
                                                    <input type="password" class="form-control" name="confirmPassword"
                                                        id="cpassword" value="" placeholder="Confirm Password">
                                                    <label for="confirmPassword" class="form-label">Confirm
                                                        Password</label>
                                                    @if ($errors->has('confirmPassword'))
                                                        <span class="error-message">*
                                                            {{ $errors->first('confirmPassword') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button class="btn btn-dark btn-lg" type="submit">Register</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="row">
                                        <div class="col-12">
                                            <div
                                                class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-center mt-5">
                                                <span>Already have an account?</span>
                                                <a href="{{ route('client.login') }}" class="link-secondary text-decoration-none">Login now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
