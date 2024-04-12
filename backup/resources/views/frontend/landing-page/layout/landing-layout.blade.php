<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/landing/images/favicon.png') }}">

    <!-- CSS
	============================================ -->
    @include('frontend.landing-page._partials.header-style')
</head>

<body>
    <div class="main-wrapper">
        @include('frontend.landing-page._partials.header')

        @yield('content')
        <!-- End Accordion Area  -->
        @include('frontend.landing-page._partials.footer')

    </div>
    <div class="rn-progress-parent">
        <svg class="rn-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- JS
============================================ -->
    @include('frontend.landing-page._partials.footer-script')
</body>


</html>