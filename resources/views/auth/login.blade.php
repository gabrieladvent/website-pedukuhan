<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Weru | Login</title>
    <link href="{{ asset('assets/img/icon.png') }}" rel="icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="{{ asset('assets/css/login-style.css') }}">
</head>

<body>
    @if ($errors->any())
        <div class="errors ps-5 pe-5">
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @elseif(session('success'))
    <div class="success ps-5 pe-5">
        <div class="success-message">
            <p>{{ session('success') }}</p>
        </div>
    </div>
    @endif
    <div class="login-reg-panel">
        <div class="login-info-box">
            <h2>Have an account?</h2>
            <p>Only admins have active accounts</p>
            <label id="label-register" for="log-reg-show">Login</label>
            <input type="radio" name="active-log-panel" id="log-reg-show" checked="checked">
        </div>

        <div class="register-info-box">
            <h2>Don't have an account?</h2>
            <p>Only people who have permission from the admin are allowed to register</p>
            <label id="label-login" for="log-login-show">Register</label>
            <input type="radio" name="active-log-panel" id="log-login-show">
        </div>

        <div class="white-panel">
            <div class="login-show">
                <h2>LOGIN</h2>
                <h3>Admin Panel <i class="fa-solid fa-key"></i></h3>
                <form action="{{ route('prosesLogin') }}" method="POST">
                    @csrf
                    <input type="text" placeholder="Username" name="email">
                    <input type="password" placeholder="Password" name="password">
                    <button type="submit">Login</button>
                </form>
                <div class="row">
                    <div class="col">
                        <a href="#" id="goBackLink"><i class="fa-regular fa-hand-point-left"></i> Kembali</a>
                    </div>
                </div>
            </div>
            <div class="register-show">
                <h2>REGISTER</h2>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <input type="text" placeholder="First Name" name="first_name" required>
                        </div>
                        <div class="col">
                            <input type="text" placeholder="Last Name" name="last_name" required>
                        </div>
                    </div>
                    <input type="text" placeholder="Username" name="username" required>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="new-password" placeholder="Password">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                        required autocomplete="new-password" placeholder="Konfirmasi Password">
                    <button type="submit">Register</button>
                </form>
                <div class="row">
                    <div class="col">
                        <a href="#" id="goBackLink"><i class="fa-regular fa-hand-point-left"></i> Kembali</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/login-js.js') }}"></script>
</body>

</html>
