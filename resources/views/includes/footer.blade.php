<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">


                <div class="col-lg-4 col-md-6 footer-links">
                    <h4>روابط مفيدة</h4>
                    <ul>
                        <li><i class="bx bx-chevron-left"></i> <a href="{{route('front.home')}}">الصفحة الرئيسية</a></li>
                        <li><i class="bx bx-chevron-left"></i> <a href="{{route('user.nurseries')}}">الحضانات</a></li>
                        <li><i class="bx bx-chevron-left"></i> <a href="{{route('front.contact')}}">تواصل معنا</a></li>
                        @if(\App\Models\About::count() > 0)
                        <li><i class="bx bx-chevron-left"></i> <a href="{{route('front.about')}}">من نحن</a></li>
                        @endif
                        @if(!empty(\App\Models\Page::find(1)->text))
                        <li><i class="bx bx-chevron-left"></i> <a href="{{route('front.terms')}}">شروط الخدمة</a></li>
                        @endif
                        @if(!empty(\App\Models\Page::find(2)->text))
                        <li><i class="bx bx-chevron-left"></i> <a href="{{route('front.privacy')}}">سياسة الخصوصية</a></li>
                        @endif
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-links">
                    <h4>صفحات التواصل الأجتماعي</h4>
@if(!social(1) and !social(2) and !social(3)  and !social(4)  and !social(5) and !social(6))
    لا يوجد صفحات تواصل الاجتماعي الان
@endif

                    <ul>
                        @if(social(1))
                        <li><i class="bx bx-chevron-left"></i> <a href="#">فيسبوك</a></li>
                        @endif

                        @if(social(2))
                        <li><i class="bx bx-chevron-left"></i> <a href="#">تويتر</a></li>
                        @endif

                        @if(social(3))
                        <li><i class="bx bx-chevron-left"></i> <a href="#">أنستجرام</a></li>
                        @endif

                        @if(social(4))
                        <li><i class="bx bx-chevron-left"></i> <a href="#">لينكد ان</a></li>
                        @endif

                        @if(social(5))
                        <li><i class="bx bx-chevron-left"></i> <a href="#">تيليجرام</a></li>
                        @endif

                        @if(social(6))
                        <li><i class="bx bx-chevron-left"></i> <a href="#">واتساب</a></li>
                        @endif

                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>اشترك في صحيفتنا الإخبارية</h4>
                    <p>سيتم مراسلتك بكل جديد عن موقعنا عبر البريد الألكتروني الخاص بك</p>
                    <form>
                        @csrf
                        <input id="email" type="email" name="email">
                        <input type="submit" class="btn-submit btn-submit-subscribe" value="أشترك">
                    </form>
                    <span class="text-danger text-center email_err"></span>
                    <span class="text-success text-center email_success" style="display: none">مبروك !... تم الأشتراك بنجاح</span>
                </div>

            </div>
        </div>
    </div>


</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('assets/front/vendor/purecounter/purecounter.js')}}"></script>
<script src="{{asset('assets/front/vendor/aos/aos.js')}}"></script>
<script src="{{asset('assets/front/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/front/vendor/swiper/swiper-bundle.min.js')}}"></script>


<!-- Template Main JS File -->
<script src="{{asset('assets/front/js/main.js')}}"></script>
<script src="{{asset('assets/front/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/front/js/popper.min.js')}}"></script>



<script type="text/javascript">

    $(document).ready(function() {

        $(".btn-submit-subscribe").click(function(e){

            e.preventDefault();


            var _token = $("input[name='_token']").val();
            var email = $("#email").val();


            $.ajax({

                url: "{{ route('email.subscribe') }}",

                type:'POST',

                data: {_token:_token, email:email},

                success: function(data) {


                    if($.isEmptyObject(data.error)){

                        $(".email_err").hide();
                        $(".email_success").show();


                    }else{

                        printErrorMsg(data.error);

                    }

                }

            });

        });


        function printErrorMsg (msg) {

            $.each( msg, function( key, value ) {

                console.log(key);
                $(".email_success").hide();
                $(".email_err").show();
                $('.'+key+'_err').text(value);

            });

        }

    });


</script>

@yield('js')

</body>

</html>
