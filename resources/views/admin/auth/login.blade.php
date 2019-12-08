<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/main.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/font-awesome/4.7.0/css/font-awesome.min.css') }}"/>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('storage/'.config('settings.site_favicon')) }}">
    
    <title>Giriş - {{ config('settings.site_title') }}</title>
</head>
<body>
<section class="material-half-bg">
    <div class="cover"></div>
</section>
<section class="login-content">
    <div class="logo">
        <img src="{{ asset('storage/'.config('settings.site_logo')) }}" id="logoImg" style="width: 200px; height: auto;">
    </div>
    <div class="login-box">
        <form class="login-form" action="{{ route('admin.login.post') }}" method="POST" role="form">
            @csrf
            <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>Giriş Yap</h3>
            <div class="form-group">
                <label class="control-label" for="email">Mail Adresi</label>
                <input class="form-control" type="email" id="email" name="email" placeholder="Mail adresi" autofocus value="{{ old('email') }}">
            </div>
            <div class="form-group">
                <label class="control-label" for="password">Şifre</label>
                <input class="form-control" type="password" id="password" name="password" placeholder="Şifre">
            </div>
            <div class="form-group">
                <div class="utility">
                    <div class="animated-checkbox">
                        <label>
                            <input type="checkbox" name="remember"><span class="label-text">Beni Hatırla</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group btn-container">
                <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-sign-in fa-lg fa-fw"></i>Giriş Yap</button>
            </div>
        </form>
    </div>
</section>
<script src="{{ asset('backend/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('backend/js/popper.min.js') }}"></script>
<script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('backend/js/main.js') }}"></script>
<script src="{{ asset('backend/js/plugins/pace.min.js') }}"></script>
</body>
</html>
