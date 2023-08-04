<!DOCTYPE html>
<html lang="ar">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{SiteDescription(1)}}">
    <meta name="keywords" content="{{SiteDescription(2)}}">
    <meta  name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- title -->
    <title> @yield('title')</title>


   <!-- <link rel="shortcut icon" type="image/png" href="{{asset('assets/front/img/favicon2.png')}}"> -->

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{asset('assets/front/css/all.min.css')}}">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/front/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/front/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('assets/front/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/front/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/front/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/front/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('assets/front/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('assets/front/css/style.css')}}" rel="stylesheet">

    <link href="{{asset('assets/front/css/mystyle.css')}}" rel="stylesheet">


    @yield('css')
</head>
<body>



@include('includes.header')


@yield('content')


@include('includes.footer')
