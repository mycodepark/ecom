<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Viscobox, Viscobox Mobilya Mağazası, Yatak, Baza, Başlık, Mobilya, Ev Eşyaları" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - {{ config('settings.site_title') }}</title>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
    @include('site.homepartials.styles')
</head>
<body>
@include('site.homepartials.header')
@include('site.homepartials.nav')
@yield('content')
@include('site.homepartials.footer')
@include('site.homepartials.scripts')
</body>
</html>
