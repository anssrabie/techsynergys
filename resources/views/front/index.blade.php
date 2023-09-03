@extends('front.layouts.site')
@section('title', 'TechSynergys')
@section('content')

    <!-- ======= hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

                <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active" style="background-image: url({{asset('assets/front/img/hero-carousel/1.webp')}})">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">{{__('a.Attractive and professional website design')}}</h2>
                                <p class="animate__animated animate__fadeInUp">{{__('a.Professional website design requires a lot of care, dedication, and attention to detail, and we guarantee to provide you with exceptional service in this field through a specialized and dedicated team that offers the best services to our clients.')}}</p>
                                <a href="#contact" class="btn-get-started scrollto animate__animated animate__fadeInUp">{{__('a.contact')}}</a>
                            </div>
                        </div>
                    </div>



                    <div class="carousel-item " style="background-image: url({{asset('assets/front/img/hero-carousel/4.webp')}})">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">{{(__('a.Unique website design with a professional touch'))}}</h2>
                                <p class="animate__animated animate__fadeInUp">{{__('a.We aim to provide professional website design services with a unique and attractive style that reflects your brand identity, catches the eye, and generates interest, through the use of the latest technologies and tools in the field of website design.')}}</p>
                                <a href="#contact" class="btn-get-started scrollto animate__animated animate__fadeInUp">{{__('a.contact')}}</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url({{asset('assets/front/img/hero-carousel/5.webp')}})">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">{{__('a.We design websites at reasonable prices and in a short time')}}</h2>
                                <p class="animate__animated animate__fadeInUp">{{__('a.Professional website design at a low cost and in a short time is an ideal choice for individuals and companies who want to have an attractive and effective website without having to pay high costs or wait for a long time')}}</p>
                                <a href="#contact" class="btn-get-started scrollto animate__animated animate__fadeInUp">{{__('a.contact')}}</a>
                            </div>
                        </div>
                    </div>



                    <div class="carousel-item" style="background-image:url({{asset('assets/front/img/hero-carousel/2.webp')}})">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">{{__('a.Create your own website with a professional and unique style')}}</h2>
                                <p class="animate__animated animate__fadeInUp">{{__('a.Beautiful design requires attention to detail and coordination between colors, fonts, images, and graphics, which leads to creating a website that is characterized by harmony, beauty, and magnificence.')}}</p>
                                <a href="#contact" class="btn-get-started scrollto animate__animated animate__fadeInUp">{{__('a.contact')}}</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url({{asset('assets/front/img/hero-carousel/3.webp')}})">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">{{(__('a.Start your own web design and development journey'))}}</h2>
                                <p class="animate__animated animate__fadeInUp">{{__('a.Professional website design at a low cost and in a short time requires attention to detail and high quality, which we guarantee through a specialized and dedicated team that offers the best services to our clients.')}}</p>
                                <a href="#contact" class="btn-get-started scrollto animate__animated animate__fadeInUp">{{__('a.contact')}}</a>
                            </div>
                        </div>
                    </div>



                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

            </div>
        </div>
    </section>
    <!-- End Hero Section -->


    <main id="main">


        <!-- ======= About Us Section ======= -->
        <section id="about">
            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h3>{{__('a.about us')}}</h3>

                </header>

                <div class="row about-cols">

                    <div class="col-md-12" data-aos="fade-right" data-aos-delay="100">
                        <ul>
                        <li><p>{{__('a.We are a team of professionals specialized in web design and development, combining creativity, excellence, and flexibility to achieve our clients\' goals. We believe in the importance of designing and developing websites in an innovative and effective way, where responsive design is one of the most important techniques that should be used in web design.')}}</p></li>
                        <li><p>{{__('a.Our mission is to provide innovative and efficient website design and development services that help our clients achieve their goals and enhance user experience, through continuous innovation and dedication to delivering high-quality services.')}}</p></li>
                        <li><p>{{__('a.We are working on implementing a comprehensive plan to achieve our vision, by developing the necessary tools and skills to provide high-quality website design and development services, as well as building strong relationships with our clients and enhancing their experience, by leveraging the latest technologies and innovations in the field of website design and development.')}}</p></li>
                        <li><p>{{__('a.We believe that technology can make a significant difference in the world, and therefore our vision is to provide innovative and efficient website design and development services that help businesses grow and enhance user experience. We achieve this through continuous innovation and dedication to achieving our clients\' goals.')}}</p></li>
                        </ul>

                    </div>

                    <div class="col-md-4 d-none" data-aos="fade-left" data-aos-delay="100">
                        <div class="about-col">
                            <img src="{{asset('assets/front/img/pp.webp')}}">
                        </div>
                    </div>


                </div>

            </div>
        </section><!-- End About Us Section -->



        <!-- ======= Call To Action Section ======= -->
        <section id="call-to-action">
            <div class="container text-center" data-aos="zoom-in" data-aos-delay="100">
                <div class="row counters">

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="35" data-purecounter-duration="1" class="purecounter"></span>
                        <p>{{__('a.Clients')}}</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="66" data-purecounter-duration="1" class="purecounter"></span>
                        <p>{{__('a.Projects')}}</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="9" data-purecounter-duration="1" class="purecounter"></span>
                        <p>{{__('a.Years of Experience')}}</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="845762" data-purecounter-duration="3" class="purecounter"></span>
                        <p>{{__('a.Hours Of Support')}}</p>
                    </div>



                </div>
            </div>
        </section><!-- End Call To Action Section -->





        <!-- ======= Portfolio Section ======= -->
            @include('front.includes.portfolio')
        <!-- End Portfolio Section -->


        <!-- ======= Contact Section ======= -->
        <section id="contact" class="section-bg">
            <div class="container" >

                <div class="section-header">
                    <h3>{{__('a.contact')}}</h3>
                    <p>{{__('a.Leave your message and we will contact you as soon as possible.')}}</p>
                </div>

                <div class="row contact-info">


                    <div class="col-md-3">
                        <div class="contact-address">
                            <i class="bi bi-phone"></i>
                            <h3>{{__('a.phone number')}}</h3>
                            <p><a target="_blank" href="tel:{{$Phone->link}}">+{{$Phone->link}}</a></p>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="contact-phone">
                            <i class="bi bi-whatsapp"></i>
                            <h3>{{__('a.WhatsApp')}}</h3>
                            <p><a target="_blank" href="{{$Whats->link}}">+{{$Whats->name}}</a></p>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="contact-facebook">
                            <i class="bi bi-facebook"></i>
                            <h3>{{__('a.facebook')}}</h3>
                            <p><a target="_blank" href="{{$Facebook->link}}">{{$Facebook->name}}</a></p>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="contact-email">
                            <i class="bi bi-envelope"></i>
                            <h3>{{__('a.email address')}}</h3>
                            <p><a target="_blank" href="mailto:{{$Email->link}}">{{$Email->link}}</a></p>
                        </div>
                    </div>

                </div>

            @include('front.includes.contact')

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
