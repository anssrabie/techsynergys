<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
        <div class="social-links text-center">
            <a data-bs-toggle="tooltip" title="Phone" href="tel:{{$Phone->link}}" target="_blank"><i class="bi bi-telephone"></i></a>
            <a data-bs-toggle="tooltip" title="Facebook" href="{{$Facebook->link}}" target="_blank"><i class="bi bi-facebook"></i></a>
            <a data-bs-toggle="tooltip" title="Telegram" href="{{$Telegram->link}}" target="_blank"><i class="bi bi-telegram"></i></a>
            <a data-bs-toggle="tooltip" title="Email" href="mailto:{{$Email->link}}" target="_blank"><i class="bi bi-envelope"></i></a>
            <a data-bs-toggle="tooltip" title="WhatsApp" href="{{$Whats->link}}" target="_blank"><i class="bi bi-whatsapp"></i></a>
            <a data-bs-toggle="tooltip" title="Instagram" href="{{$Instagram->link}}" target="_blank"><i class="bi bi-instagram"></i></a>
        </div>
        <div class="copyright">
            &copy; {{__('a.Copyright')}} <strong>TechSynergys</strong>. {{__('a.All Rights Reserved')}} 2020 - {{date('Y')}}
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<!-- Uncomment below i you want to use a preloader -->
 <div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="{{asset('assets/front/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/front/vendor/purecounter/purecounter_vanilla.js')}}"></script>
<script src="{{asset('assets/front/vendor/aos/aos.js')}}"></script>
<script src="{{asset('assets/front/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/front/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('assets/front/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/front/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/front/vendor/waypoints/noframework.waypoints.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('assets/front/js/main.js')}}"></script>
<script src="{{asset('assets/front/js/sweetalert2.min.js')}}"></script>
<script src="{{asset('assets/front/js/intlTelInput.min.js')}}"></script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.min.js"></script>--}}

<script>


    var phone_number = window.intlTelInput(document.querySelector("#phone_number"), {
        separateDialCode: true,
        initialCountry: "auto",
        geoIpLookup: callback => {
            fetch("https://ipapi.co/json")
                .then(res => res.json())
                .then(data => callback(data.country_code))
                .catch(() => callback("us"));
        },
        hiddenInput: "full",
        utilsScript: "{{asset('assets/front/js/utils.js')}}"
    });


    $(document).on('click', '.send_contact', function (e) {

        e.preventDefault();
        var spinner = document.getElementById("spinner");
        var full_number = phone_number.getNumber(intlTelInputUtils.numberFormat.E164);
        var numberType = phone_number.getSelectedCountryData();
        var region = numberType['iso2'];
        var _token = $("input[name='_token']").val();
        var name = $("#name").val();
        var email = $("#email").val();
        var subject = $("#subject").val();
        var message = $("#message").val();

        $.ajax({

            url: "{{ route('post.contact') }}",
            type:'POST',
            data: {
                _token:_token,
                name:name,
                email:email,
                subject:subject,
                message:message,
                whats:full_number,
                region:region,
            },

            beforeSend: function(){
               // $(".loading").show();
                spinner.classList.remove("d-none"); // Display the spinner
            },
            complete: function(){
              //  $(".loading").hide();
                spinner.classList.add("d-none");
            },

            success: function(data) {

                if($.isEmptyObject(data.error)){

                    if(data.status == true){

                        $(".name_err").empty();
                        $(".email_err").empty();
                        $(".subject_err").empty();
                        $(".message_err").empty();
                        $(".whats_err").empty();

                      //  document.getElementById("cform").reset();
                      //   $(".sent-message").show();
                        $(".send_contact").attr("disabled", true);

                        Swal.fire({
                            title: '{{__('a.Your message was sent successfully')}}',
                            text: '{{__('a.We will contact you shortly. Thank you!')}}',
                            icon: 'success',
                            confirmButtonText: '{{__('a.ok')}}',
                            confirmButtonColor: '#18d26e',
                        })

                    }
                }else{
                    $(".name_err").empty();
                    $(".email_err").empty();
                    $(".subject_err").empty();
                    $(".message_err").empty();
                    $(".whats_err").empty();
                    printErrorMsg(data.error);
                }
            }

        });

    });

    function printErrorMsg (msg) {
        $.each( msg, function( key, value ) {
            console.log(value);
            $('.'+key+'_err').text(value);
        });

    }


    // ToolTip
    var tooltipTriggerList = [].slice.call(
        document.querySelectorAll('[data-bs-toggle="tooltip"]')
    );
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });


</script>



</body>

</html>
