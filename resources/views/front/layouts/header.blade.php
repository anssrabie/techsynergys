<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/front/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/front/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/front/favicon/favicon-16x16.png')}}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700"
          rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/front/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/front/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('assets/front/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/front/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/front/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/front/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('assets/front/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.css">
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
