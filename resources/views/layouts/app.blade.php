<!doctype html>
<html lang="en" class="h-full bg-white">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | Quick-encrypt.io</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo.png') }}">

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <script src="https://unpkg.com/alpinejs" defer></script>
    <script src="{{ mix('js/tailwindUI.js') }}" ></script>

</head>
<body class="h-full">
    @yield('content')



</body>
</html>
