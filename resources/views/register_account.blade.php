<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('assets/img/fav.png') }}">
    <title>My Crypto</title>
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/adminbootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
    <div class="main-wrapper account-wrapper">
        <div class="account-page">
            <div class="container w3-display-middle">

                <form action="http://dreamguys.co.in/preclinic/template/index.html" class="form-signin">
                    <div class="account-logo">
                        <a href="{{ url('/') }}"><img src="{{ url('assets/img/logo_transparent.png') }}"
                                alt="Coin Me Logo"></a>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Name<span class="text-danger">*</span></label>
                                <input class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                               <label>Email<span class="text-danger">*</span></label>
                                <input class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                               <label>Account Number<span class="text-danger">*</span></label>
                                <input class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                               <label>Password<span class="text-danger">*</span></label>
                                <input class="form-control" type="password">
                            </div>
                        </div>
                    </div>
                   
                   
                    <div class="form-group checkbox">
                        <label>
                            <input type="checkbox"> I have read and agree the Terms & Conditions
                        </label>
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-primary account-btn" type="submit">Signup</button>
                    </div>
                    <div class="text-center login-link">
                        Already have an account? <a href="{{ url('/login') }}">Login</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <script src="{{ url('assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ url('assets/js/popper.min.js') }}"></script>
    <script src="{{ url('assets/js/adminbootstrap.min.js') }}"></script>
    <script src="{{ url('assets/js/adminapp.js') }}"></script>
    <script src="{{ url('assets/js/jquery.slimscroll.js') }}"></script>
</body>

</html>
