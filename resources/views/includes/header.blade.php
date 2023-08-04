

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">




        <h1 class="logo"><a href="{{route('front.home')}}">أختيار طفلي</a></h1>


        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li>
                    <a @if( \Illuminate\Support\Facades\Route::currentRouteNamed('front.home'))
                       class="active" @endif href="{{route('front.home')}}">الصفحة الرئيسية</a></li>
                <li><a @if( \Illuminate\Support\Facades\Route::currentRouteNamed('user.nurseries'))  class="active" @endif  href="{{route('user.nurseries')}}">الحضانات</a></li>
                @if(\Illuminate\Support\Facades\Auth::check() AND \Illuminate\Support\Facades\Auth::user()->owner == 1)
                    <li><a @if( \Illuminate\Support\Facades\Route::currentRouteNamed('owner.subscriptions'))  class="active" @endif  href="{{route('owner.subscriptions')}}">الأشتراكات</a></li>
                @endif

                @if(\Illuminate\Support\Facades\Auth::check() AND \Illuminate\Support\Facades\Auth::user()->owner == 0)
                    <li><a @if( \Illuminate\Support\Facades\Route::currentRouteNamed('user.subscriptions'))
                           class="active" @endif  href="{{route('user.subscriptions')}}">الأشتراكات</a></li>

                @endif

                @if(\App\Models\About::count() > 0)
                <li><a @if( \Illuminate\Support\Facades\Route::currentRouteNamed('front.about'))  class="active" @endif  href="{{route('front.about')}}">من نحن</a></li>
                @endif
                <li><a @if( \Illuminate\Support\Facades\Route::currentRouteNamed('front.contact'))  class="active" @endif  href="{{route('front.contact')}}">تواصل معنا</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->




     @if(\Illuminate\Support\Facades\Auth::check())
            <div class="dropdown">
                <a class="user-btn dropdown-toggle" href="#" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    {{\Illuminate\Support\Facades\Auth::user()->f_name}}
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">



                    @if(\Illuminate\Support\Facades\Auth::user()->owner == 1)
                        <li><a class="dropdown-item" href="{{route('owner.balance')}}"><i class="bi bi-currency-dollar"></i>الرصيد  </a></li>
                        <li><a class="dropdown-item" href="{{route('owner.nurseries')}}"><i class="bi bi-house-fill"></i> حضانتي  </a></li>
                    @else
                    <li><a class="dropdown-item" href="{{route('user.favourites')}}"><i class="bi bi-bookmark-heart-fill"></i>مفضلتي  </a></li>
                    <li><a class="dropdown-item" href="{{route('user.payments')}}"><i class="bi bi-cash"></i>مدفوعاتي  </a></li>
                    @endif

                    <li><a class="dropdown-item" href="{{route('user.edit.profile')}}"><i class="bi bi-pencil-square"></i>تعديل ملفي الشخصي  </a></li>
                    <li><a class="dropdown-item" href="{{route('front.logout')}}"><i class="bi bi-power"></i> تسجيل الخروج  </a></li>
                </ul>
            </div>
    @else
            <div class="dropdown login_drop">
                <button class="get-started-btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    تسجيل دخول
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="{{route('front.login')}}">مستخدم</a></li>
                    <li><a class="dropdown-item" href="{{route('owner.front.login')}}">صاحب حضانة</a></li>
                </ul>
            </div>
    @endif

    </div>
</header><!-- End Header -->
