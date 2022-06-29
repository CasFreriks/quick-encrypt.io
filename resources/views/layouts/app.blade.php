<!DOCTYPE html>
<html lang="nl">
<head>
    <script>
        document.querySelector('html').classList.remove('no-js');
        document.querySelector('html').classList.add('js');
    </script>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset( 'assets/favicons/apple-touch-icon.png' ) }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset( 'assets/favicons/favicon-32x32.png' ) }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset( 'assets/favicons/favicon-16x16.png' ) }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | Foursites</title>
    <link href="{{ mix('css/style.css') }}" rel="stylesheet">
    <link href="{{ mix('css/fonts.css') }}" rel="stylesheet">
</head>
<body>
<!--[if lt IE 11]><p class="browserupgrade">
    You are using an outdated browser. Please<a href="http://browsehappy.com/">upgrade your browser</a>to improve your experience.
</p><![endif]-->

<div class="body-wrapper body-wrapper--login">
    @yield('content')
</div><!-- /.body-wrapper -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{{ mix('js/index.js') }}"></script>
</body>

</html>
