<!DOCTYPE html>
<html lang="{{getDefaultLang()}}">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="{{$KeyWords}}" name="keywords">
    <meta content="{{__('a.We specialize in web development and design. Contact us for all your website needs.')}}" name="description">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/front/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/front/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/front/favicon/favicon-16x16.png')}}">

    <meta property="og:title" content="TechSynergys">
    <meta property="og:description" content="{{__('a.We specialize in web development and design. Contact us for all your website needs.')}}">
    <meta property="og:image" content="{{ asset('assets/front/favicon/og.png') }}">
    <meta property="og:url" content="{{ Request::url() }}">
    <meta property="og:type" content="website">


    <link href="{{asset('assets/front/css/fonts.css')}}" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/front/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/front/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('assets/front/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/front/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/front/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/front/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('assets/front/css/sweetalert2.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/front/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/front/css/intlTelInput.css')}}" rel="stylesheet">
    @if(getDefaultLang() == 'ar')
        <link href="{{asset('assets/front/css/style_ar.css')}}" rel="stylesheet">
        <style>
            .navbar .dropdown ul {left: 14px;}
            @media (min-width: 768px) {

                #contact .contact-facebook {
                    border-left: 1px solid #ddd;
                }
            }
        </style>
    @else
        <style>
            .navbar .dropdown ul {right: 14px;}
            @media (min-width: 768px) {

                #contact .contact-facebook {
                    border-right: 1px solid #ddd;
                }
            }
        </style>
    @endif

    @yield('css')

</head>

<body>
