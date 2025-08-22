<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WooDHosT</title>
    <link rel="stylesheet" href="{{ asset('themes/WooDHosT/assets/css/app.css') }}">
</head>
<body>
<header>
    <img src="{{ asset('themes/WooDHosT/assets/images/logo.png') }}" alt="Logo" height="40">
    WooD HosT
</header>

<div class="content">
    @yield('content')
</div>

@include('themes.WooDHosT::layouts.footer')
<script src="{{ asset('themes/WooDHosT/assets/js/app.js') }}"></script>
</body>
</html>
