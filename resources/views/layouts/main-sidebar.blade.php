<!-- main-sidebar -->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar sidebar-scroll">
    <div class="main-sidebar-header active text-center">
                <span style="font-weight: 600;text-align: center;font-style: italic">

                </span>
    </div>
    <div class="main-sidemenu">
        <br>
        <ul class="side-menu">

            <li class="slide">
                <a class="side-menu__item" href="{{ route('home') }}"><i class="fas fa-home side-menu__icon icon-side"></i><span class="side-menu__label">الصفحة الرئيسية</span></a>
            </li>
            <hr>


                <li class="slide">
                    <a class="side-menu__item" href="{{route('contacts')}}">
                        <i class="fas fa-phone side-menu__icon icon-side"></i>
                        <span class="side-menu__label">جهات الاتصال</span>
                        <span class="badge badge-success side-badge">{{\App\Models\Contact::where('seen',0)->count()}}</span>
                    </a>
                </li>
                <hr>


                <li class="slide">
                    <a class="side-menu__item" href="{{route('social')}}">
                        <i class="fas fa-share-alt side-menu__icon icon-side"></i>
                        <span class="side-menu__label">التواصل الاجتماعي</span>

                    </a>
                </li>
                <hr>



                <li class="slide">
                    <a class="side-menu__item" href="{{route('meta')}}">
                        <i class="fas fa-tools side-menu__icon icon-side"></i>
                        <span class="side-menu__label">اعدادات الموقع</span>
                    </a>
                </li>


        </ul>
    </div>
</aside>
<!-- main-sidebar -->
