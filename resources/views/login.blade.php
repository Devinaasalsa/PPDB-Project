
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login PPDB</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets2/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/css/pages/auth.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/img/icon.png') }}">

</head>

<body>
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                @if (Session::get('notAllowed'))
    <div class="alert alert-danger">
        {{ Session::get('notAllowed') }}
    </div>
    @endif
    
                <div id="auth-left">
                    <div class="auth-logo d-flex" style="align-items:center">
                        <img src="{{ asset('assets/img/logo.png') }}"alt="Logo" srcset="" style="width: 40px; height:40px">
                        <h5 style="margin-left: 15px; margin-bottom:0px">PPDB 2023 - 2024</h5>
                    </div>
                    <h1 class="auth-title">Log in.</h1>

                    <form class="user" method="POST" action="{{ route('login.auth') }}">
                        @csrf
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        @if (Session::get('error'))
                        <div class="alert alert-danger">
                            {{ Session::get('error') }}
                        </div>
                        @endif
                        
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="email" name="email" id="email" class="form-control form-control-xl" placeholder="Username">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" name="password"placeholder="Password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>

                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-3">Log in</button>
                    </form>
                    <div class="text-center mt-5 fs-5">
                        <p class="text-gray-600">Belum punya akun? </p>
                            <a href="/daftar"
                                class="font-bold">Daftar disini.</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>
        </div>

    </div>
</body>

</html>