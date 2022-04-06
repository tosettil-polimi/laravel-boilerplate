<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{__('strings.site_name')}} | @yield('title')</title>

    <!-- Robots tag -->
    {!! Robots::metaTag() !!}
    <meta name="keywords" content="@yield('keywords')">
    <meta name="description" content="@yield('description')">
    <meta name="author" content="tosettil.me">

    <meta property="og:locale" content="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{__('strings.site_name')}} | @yield('title')">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:site_name" content="{{__('strings.site_name')}} | @yield('title')">
    <meta property="og:url" content="{{Request::fullUrl()}}">
    <meta property="og:image" content="@yield('main_image')">
    <!-- Twitter card -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:description" content="@yield('description')">
    <meta name="twitter:title" content="{{__('strings.site_name')}} | @yield('title')">
    <meta name="twitter:site" content="{{Request::fullUrl()}}">
    <meta name="twitter:image" content="@yield('main_image')">

    <!-- Favicon -->
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <link rel="icon" href="#" type="image/x-icon">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ mix('css/mtconsulting.css') }}" >

    <!-- JQuery -->

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','{{ config('app.gtm_id') }}');</script>
    <!-- End Google Tag Manager -->
</head>
