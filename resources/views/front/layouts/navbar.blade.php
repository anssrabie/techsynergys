<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid">

        <div class="row justify-content-center align-items-center">
            <div class="col-xl-11 d-flex align-items-center justify-content-between">
                <h1 class="logo"><a href="{{route('front.home')}}"><img src="{{asset('assets/front/img/logo.png')}}" class="img-fluid"></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a class="nav-link scrollto active" href="#hero">{{__('a.home')}}</a></li>
                        <li><a class="nav-link scrollto" href="#about">{{__('a.about us')}}</a></li>
                        <li><a class="nav-link scrollto " href="#portfolio">{{__('a.Our Projects')}}</a></li>
                        <li><a class="nav-link scrollto" href="#contact">{{__('a.contact')}}</a></li>
                        <li class="dropdown"><a href="javascript:void(0)"><span>@if(getDefaultLang() == 'ar') عربى @else EN @endif</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <li><a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        @if($localeCode == 'ar')
                                            <span class="arab_nav">عربى</span>
                                        @else
                                            <span class="eng_nav">English</span>
                                        @endif
                                    </a></li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav><!-- .navbar -->
            </div>
        </div>

    </div>
</header><!-- End Header -->
