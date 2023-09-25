@extends('frontend.master')
@section('content')
        <!-- start section -->
        <section class="fix-background" style="background-image:url('{{ asset('front/images/our-team-bg2.jpg')}}');">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 text-center margin-7-rem-bottom z-index-0">
                        <div class="tilt-box" data-tilt-options='{ "maxTilt": 20, "perspective": 1000, "easing": "cubic-bezier(.03,.98,.52,.99)", "scale": 1, "speed": 500, "transition": true, "reset": true, "glare": false, "maxGlare": 1 }'>
                            <div class="margin-20px-bottom d-block"><span class="alt-font font-weight-500 text-white text-uppercase text-small letter-spacing-1px bg-extra-dark-gray d-inline-block padding-20px-lr padding-5px-tb">We are litho highly creative team</span></div>
                            <span class="text-extra-big alt-font text-uppercase text-extra-dark-gray font-weight-700 letter-spacing-minus-5px image-mask cover-background xs-letter-spacing-minus-1px" style="background-image: url('{{ asset('front/images/fancy-text-img-01.jpg') }}')">together</span>
                        </div>
                    </div>
                    <div class="down-section text-center margin-35px-bottom sm-no-margin-bottom"><a href="#down-section" class="section-link bg-white d-inline-block"><i class="feather icon-feather-arrow-down icon-extra-small text-gradient-sky-blue-pink box-shadow-small padding-15px-all xs-padding-10px-all border-radius-100"></i></a></div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <section class="one-third-screen border-radius-5px position-relative py-0 margin-seven-lr xl-margin-three-lr md-margin-2-half-rem-lr sm-no-margin wow animate__fadeIn">
            <div class="container position-relative z-index-2">
                <div class="row align-items-center justify-content-center one-third-screen">
                    <div class="col-12 text-center">
                        <a href="https://www.youtube.com/watch?v=g0f_BRYJLJE" class="popup-youtube video-icon-box video-icon-double-large">
                            <span>
                                <span class="video-icon bg-extra-dark-gray">
                                    <i class="icon-simple-line-control-play text-white"></i>
                                    <span class="video-icon-sonar">
                                        <span class="video-icon-sonar-bfr bg-extra-dark-gray opacity-7"></span>
                                        <span class="video-icon-sonar-afr bg-extra-dark-gray"></span>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>  
            <!-- start slider -->
            <div class="swiper-container position-absolute top-0px" data-slider-options='{ "loop": true, "slidesPerView": 1, "effect": "fade", "keyboard": { "enabled": true, "onlyInViewport": true }, "autoplay": { "delay": 5000, "disableOnInteraction": false }, "fadeEffect": { "crossFade": true } }'>
                <div class="swiper-wrapper">
                    <!-- start slider item -->
                    <div class="swiper-slide cover-background" style="background-image:url('{{ asset('front/images/contact-us-modern-01.jpg') }}');"></div><!-- end slider item -->
                    <!-- start slider item -->
                    <div class="swiper-slide cover-background" style="background-image:url('{{ asset('front/images/contact-us-modern-02.jpg') }}');"></div><!-- end slider item -->
                    <!-- start slider item -->
                    <div class="swiper-slide cover-background" style="background-image:url('{{ asset('front/images/contact-us-modern-03.jpg') }}');"></div><!-- end slider item -->
                </div>
            </div>
            <!-- end slider -->
        </section>
        <!-- start section -->
        <section id="down-section" class="padding-100px-top md-padding-70px-top md-padding-40px-bottom sm-padding-50px-top xs-padding-20px-top sm-padding-25px-bottom">
            <div class="container-fluid padding-seven-lr xl-padding-three-lr md-padding-2-half-rem-lr xs-padding-15px-lr">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 justify-content-center">
                    <!-- start team item -->
                    <div class="col team-style-02 text-center">
                        <figure>
                            <div class="team-member-image border-radius-5px overflow-hidden">
                                <img alt="" src="{{ asset('front/images/our-team-member-01.jpg')}}">
                                <div class="team-member-details bg-transparent-gradient-fast-blue-purple align-items-center justify-content-center d-flex flex-column padding-2-half-rem-lr">
                                    <div class="text-white opacity-7 w-85 sm-w-95">Lorem ipsum is simply dummy text of the printing typesetting industry</div>
                                    <div class="social-icon w-100 position-absolute bottom-40px left-0px">
                                        <a href="https://www.facebook.com/" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-facebook-f"></i></a>
                                        <a href="https://http://www.dribbble.com/" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-dribbble"></i></a>
                                        <a href="https://twitter.com/" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-twitter"></i></a>
                                        <a href="http://www.instagram.com/" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <figcaption class="team-member-position text-center padding-35px-tb sm-padding-25px-tb">
                                <div class="text-extra-dark-gray alt-font line-height-18px text-medium text-uppercase font-weight-500">Jemmy Watson</div>
                                <span class="text-small text-uppercase">Graphic designer</span>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- end team item -->
                    <!-- start team item -->
                    <div class="col team-style-02 text-center">
                        <figure>
                            <div class="team-member-image border-radius-5px overflow-hidden">
                                <img alt="" src="{{ asset('front/images/our-team-member-02.jpg')}}">
                                <div class="team-member-details bg-transparent-gradient-fast-blue-purple align-items-center justify-content-center d-flex flex-column padding-2-half-rem-lr">
                                    <div class="text-white opacity-7 w-85 sm-w-95">Lorem ipsum is simply dummy text of the printing typesetting industry</div>
                                    <div class="social-icon w-100 position-absolute bottom-40px left-0px">
                                        <a href="https://www.facebook.com/" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-facebook-f"></i></a>
                                        <a href="https://http://www.dribbble.com/" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-dribbble"></i></a>
                                        <a href="https://twitter.com/" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-twitter"></i></a>
                                        <a href="http://www.instagram.com/" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <figcaption class="team-member-position text-center padding-35px-tb sm-padding-25px-tb">
                                <div class="text-extra-dark-gray alt-font line-height-18px text-medium text-uppercase font-weight-500">Anna Sethesia</div>
                                <span class="text-small text-uppercase">Development head</span>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- end team item -->
                    <!-- start team item -->
                    <div class="col team-style-02 text-center">
                        <figure>
                            <div class="team-member-image border-radius-5px overflow-hidden">
                                <img alt="" src="{{ asset('front/images/our-team-member-03.jpg')}}">
                                <div class="team-member-details bg-transparent-gradient-fast-blue-purple align-items-center justify-content-center d-flex flex-column padding-2-half-rem-lr">
                                    <div class="text-white opacity-7 w-85 sm-w-95">Lorem ipsum is simply dummy text of the printing typesetting industry</div>
                                    <div class="social-icon w-100 position-absolute bottom-40px left-0px">
                                        <a href="https://www.facebook.com/" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-facebook-f"></i></a>
                                        <a href="https://http://www.dribbble.com/" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-dribbble"></i></a>
                                        <a href="https://twitter.com/" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-twitter"></i></a>
                                        <a href="http://www.instagram.com/" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <figcaption class="team-member-position text-center padding-35px-tb sm-padding-25px-tb">
                                <div class="text-extra-dark-gray alt-font line-height-18px text-medium text-uppercase font-weight-500">Gail Forcewind</div>
                                <span class="text-small text-uppercase">Project manager</span>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- end team item -->
                    <!-- start team item -->
                    <div class="col team-style-02 text-center">
                        <figure>
                            <div class="team-member-image border-radius-5px overflow-hidden">
                                <img alt="" src="{{ asset('front/images/our-team-member-04.jpg')}}">
                                <div class="team-member-details bg-transparent-gradient-fast-blue-purple align-items-center justify-content-center d-flex flex-column padding-2-half-rem-lr">
                                    <div class="text-white opacity-7 w-85 sm-w-95">Lorem ipsum is simply dummy text of the printing typesetting industry</div>
                                    <div class="social-icon w-100 position-absolute bottom-40px left-0px">
                                        <a href="https://www.facebook.com/" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-facebook-f"></i></a>
                                        <a href="https://http://www.dribbble.com/" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-dribbble"></i></a>
                                        <a href="https://twitter.com/" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-twitter"></i></a>
                                        <a href="http://www.instagram.com/" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <figcaption class="team-member-position text-center padding-35px-tb sm-padding-25px-tb">
                                <div class="text-extra-dark-gray alt-font line-height-18px text-medium text-uppercase font-weight-500">Nick Bocker</div>
                                <span class="text-small text-uppercase">Head of developer</span>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- end team item -->
                    <!-- start team item -->
                    <div class="col team-style-02 text-center">
                        <figure>
                            <div class="team-member-image border-radius-5px overflow-hidden">
                                <img alt="" src="{{ asset('front/images/our-team-member-05.jpg')}}">
                                <div class="team-member-details bg-transparent-gradient-fast-blue-purple align-items-center justify-content-center d-flex flex-column padding-2-half-rem-lr">
                                    <div class="text-white opacity-7 w-85 sm-w-95">Lorem ipsum is simply dummy text of the printing typesetting industry</div>
                                    <div class="social-icon w-100 position-absolute bottom-40px left-0px">
                                        <a href="https://www.facebook.com/" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-facebook-f"></i></a>
                                        <a href="https://http://www.dribbble.com/" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-dribbble"></i></a>
                                        <a href="https://twitter.com/" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-twitter"></i></a>
                                        <a href="http://www.instagram.com/" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <figcaption class="team-member-position text-center padding-35px-tb sm-padding-25px-tb">
                                <div class="text-extra-dark-gray alt-font line-height-18px text-medium text-uppercase font-weight-500">Monty Franklin</div>
                                <span class="text-small text-uppercase">Junior developer</span>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- end team item -->
                    <!-- start team item -->
                    <div class="col team-style-02 text-center">
                        <figure>
                            <div class="team-member-image border-radius-5px overflow-hidden">
                                <img alt="" src="{{ asset('front/images/our-team-member-06.jpg')}}">
                                <div class="team-member-details bg-transparent-gradient-fast-blue-purple align-items-center justify-content-center d-flex flex-column padding-2-half-rem-lr">
                                    <div class="text-white opacity-7 w-85 sm-w-95">Lorem ipsum is simply dummy text of the printing typesetting industry</div>
                                    <div class="social-icon w-100 position-absolute bottom-40px left-0px">
                                        <a href="https://www.facebook.com/" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-facebook-f"></i></a>
                                        <a href="https://http://www.dribbble.com/" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-dribbble"></i></a>
                                        <a href="https://twitter.com/" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-twitter"></i></a>
                                        <a href="http://www.instagram.com/" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <figcaption class="team-member-position text-center padding-35px-tb sm-padding-25px-tb">
                                <div class="text-extra-dark-gray alt-font line-height-18px text-medium text-uppercase font-weight-500">Bryan Melendez</div>
                                <span class="text-small text-uppercase">Product manager</span>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- end team item -->
                    <!-- start team item -->
                    <div class="col team-style-02 text-center">
                        <figure>
                            <div class="team-member-image border-radius-5px overflow-hidden">
                                <img alt="" src="{{ asset('front/images/our-team-member-07.jpg')}}">
                                <div class="team-member-details bg-transparent-gradient-fast-blue-purple align-items-center justify-content-center d-flex flex-column padding-2-half-rem-lr">
                                    <div class="text-white opacity-7 w-85 sm-w-95">Lorem ipsum is simply dummy text of the printing typesetting industry</div>
                                    <div class="social-icon w-100 position-absolute bottom-40px left-0px">
                                        <a href="https://www.facebook.com/" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-facebook-f"></i></a>
                                        <a href="https://http://www.dribbble.com/" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-dribbble"></i></a>
                                        <a href="https://twitter.com/" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-twitter"></i></a>
                                        <a href="http://www.instagram.com/" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <figcaption class="team-member-position text-center padding-35px-tb sm-padding-25px-tb">
                                <div class="text-extra-dark-gray alt-font line-height-18px text-medium text-uppercase font-weight-500">Laura Charette</div>
                                <span class="text-small text-uppercase">Financial manager</span>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- end team item -->
                    <!-- start team item -->
                    <div class="col team-style-02 text-center">
                        <figure>
                            <div class="team-member-image border-radius-5px overflow-hidden">
                                <img alt="" src="{{ asset('front/images/our-team-member-08.jpg')}}">
                                <div class="team-member-details bg-transparent-gradient-fast-blue-purple align-items-center justify-content-center d-flex flex-column padding-2-half-rem-lr">
                                    <div class="text-white opacity-7 w-85 sm-w-95">Lorem ipsum is simply dummy text of the printing typesetting industry</div>
                                    <div class="social-icon w-100 position-absolute bottom-40px left-0px">
                                        <a href="https://www.facebook.com/" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-facebook-f"></i></a>
                                        <a href="https://http://www.dribbble.com/" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-dribbble"></i></a>
                                        <a href="https://twitter.com/" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-twitter"></i></a>
                                        <a href="http://www.instagram.com/" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <figcaption class="team-member-position text-center padding-35px-tb sm-padding-25px-tb">
                                <div class="text-extra-dark-gray alt-font line-height-18px text-medium text-uppercase font-weight-500">Jemas Dossan</div>
                                <span class="text-small text-uppercase">Project manager</span>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- end team item -->                    
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="py-0 padding-seven-lr xl-padding-three-lr md-padding-2-half-rem-lr sm-no-padding-lr wow animate__fadeIn">
            <div class="bg-gradient-light-orange-light-pink border-radius-5px overflow-hidden padding-9-rem-top md-padding-6-rem-top">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-12 col-xl-5 col-lg-6 offset-xl-1 col-md-8 order-lg-2 padding-100px-bottom md-padding-6-rem-bottom text-center text-lg-start wow animate__fadeIn" data-wow-delay="0.4s">
                            <span class="alt-font font-weight-500 text-large text-extra-dark-gray text-decoration-line-bottom d-inline-block margin-35px-bottom">Awesomeness and creative people</span>
                            <h4 class="alt-font font-weight-500 text-extra-dark-gray letter-spacing-minus-1-half margin-45px-bottom">Teamwork is the ability work together toward a <span class="font-weight-600">common vision</span></h4>
                            <a href="#position-open" class="btn btn-large btn-expand-ltr text-white section-link">Join the people<span class="bg-extra-dark-gray"></span></a>
                        </div>
                        <div class="col-12 col-lg-6 order-lg-1 text-center align-self-end wow animate__fadeIn" data-wow-delay="0.2s">
                            <img src="{{ asset('front/images/our-team-01.png')}}" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
      
@endsection