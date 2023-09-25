@extends('frontend.master')
@section('content')
@foreach ($abouts as $about)
    

   <!-- start page title -->
   <section class="parallax" data-parallax-background-ratio="0.5" style="background-image:url('{{ asset('assets/about/'. $about->background)}}');">
    <div class="opacity-extra-medium bg-extra-dark-gray"></div>
    <div class="container">
        <div class="row align-items-stretch justify-content-center small-screen">
            <div class="col-12 position-relative page-title-extra-small text-center d-flex align-items-center justify-content-center flex-column">
                <h1 class="alt-font text-white opacity-6 margin-20px-bottom">{{ $about->title_page }}</h1>
                <h2 class="text-white alt-font font-weight-500 w-55 md-w-65 sm-w-80 center-col xs-w-100 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom">{{ $about->subtitle_page }}</h2>
            </div>
            <div class="down-section text-center"><a href="#about" class="section-link">
         </a></div>
        </div>
    </div>
</section>
<!-- end page title -->
<!-- start section -->
<section id="about" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 pe-lg-0 d-flex md-margin-30px-bottom">
                <div class="w-100 md-h-700px sm-h-550px xs-h-450px cover-background" style="background-image:url('{{ asset('assets/about/'.$about->image)}}'); height:800px"></div>
            </div>
            <div class="col-12 col-lg-6 col-md-6 ps-lg-0 d-flex sm-margin-30px-bottom">
                <div class="justify-content-center w-100 d-flex flex-column bg-fast-blue padding-5-half-rem-lr lg-padding-3-rem-lr md-padding-4-rem-all">
               
                    <span class="text-extra-large alt-font font-weight-500 text-white margin-20px-bottom d-block">{{ $about->title_section1 }}</span>
                    <p class="text-white opacity-7">{!! $about->text_section1 !!}</p>
                  

                    </p>
                </div>
            </div>
          
        </div>
    </div>
</section>

<!-- end section -->
<!-- start section -->
<section class="wow animate__fadeIn">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-lg-10 col-sm-8 text-center margin-5-rem-bottom md-margin-3-rem-bottom">
                <h3 class="text-extra-dark-gray alt-font font-weight-600">{{ $about->title_section2 }}</h3>
                {{-- <span class="text-extra-medium margin-15px-bottom alt-font d-block w-100">Principles</span> --}}
                <h6 class="alt-font text-extra-dark-gray font-weight-500 margin-2-rem-bottom sm-w-100">{!! $about->text_section2 !!}</h6>
            </div>
            @endforeach
        </div>

        <div class="row row-cols-1 row-cols-md-4 row-cols-sm-2 client-logo-style-01 align-items-center margin-5-half-rem-top sm-margin-5-rem-top">
         @foreach($principles as $p)
            <div class="col text-center margin-30px-bottom sm-margin-15px-bottom wow animate__fadeIn" >
                <div class="client-box padding-15px-all border border-color-dark-gray">
                <img class="client-box-image" src="{{ asset('assets/about/'.$p->image) }}" alt="" />
                </div>
            </div>
            <!-- end client item -->
         @endforeach
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->

<section class="bg-light-gray wow animate__fadeIn">
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($abouts as $about)
            <div class="col-12 col-lg-6 col-sm-8 text-center margin-5-rem-bottom md-margin-3-rem-bottom">
                <h3 class="text-extra-dark-gray alt-font font-weight-600">{{ $about->title_section3 }}</h3>

            

                <h6 class="alt-font text-extra-dark-gray font-weight-500 margin-2-rem-bottom sm-w-100">{{ $about->text_section3  }}</h6>
            </div>
            @endforeach
        </div>
      
        <div class="row justify-content-center">
            @foreach($memberships as $m)
            <div class="col-12 col-lg-3 col-md-9 margin-30px-bottom xs-margin-15px-bottom">
                <div class="feature-box h-100 feature-box-left-icon border-radius-5px bg-white box-shadow-small feature-box-dark-hover overflow-hidden padding-4-rem-all">
                    <div class="feature-box-icon">
                     <img src="{{ asset('assets/about/'.$m->image) }}" alt="" srcset="">
                    </div>
                   
                    <div class="feature-box-overlay bg-gradient-fast-blue-purple"></div>
                </div>
            </div>
       
         @endforeach
        </div>
    </div>
</section>

<!-- end section -->
<!-- start section -->
<section class="wow animate__fadeIn">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 md-margin-50px-bottom wow animate__fadeIn">
                <!-- start slider -->
                <div class="swiper-container white-move border-all border-width-12px border-color-white box-shadow-large border-radius-8px" data-slider-options='{ "slidesPerView": 1, "loop": true, "navigation": { "nextEl": ".swiper-button-next-nav", "prevEl": ".swiper-button-previous-nav" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
                    <div class="swiper-wrapper">
                        @foreach($sliders as $slider)
                        <!-- start slider item --><div class="swiper-slide"><img src="{{ asset('assets/about/'.$slider->image)}}" alt=""></div><!-- end slider item -->
                      @endforeach
                    </div>  
                    <!-- start slider navigation -->
                    <div class="swiper-button-next-nav swiper-button-next slider-navigation-style-01 light"><i class="feather icon-feather-arrow-right" aria-hidden="true"></i></div>
                    <div class="swiper-button-previous-nav swiper-button-prev slider-navigation-style-01 light"><i class="feather icon-feather-arrow-left" aria-hidden="true"></i></div>
                    <!-- end slider navigation -->
                </div>
                <!-- end slider -->
            </div>
            @foreach ($abouts as $about)
            <div class="col-12 col-lg-5 offset-lg-1 wow animate__fadeIn" data-wow-delay="0.2s">
                <h5 class="alt-font text-extra-dark-gray font-weight-500">{{ $about->title_section4 }}</h5>
               <p>{!! $about->text_section4 !!}</p>
            </div>
        </div>
    </div>
</section>



<section class="big-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 text-center margin-4-half-rem-bottom sm-margin-3-rem-bottom">
                <h3 class="text-extra-dark-gray alt-font font-weight-600">{{ $about->title_team }}</h3>

                {{-- <h5 class="alt-font text-extra-dark-gray font-weight-500">Creative people</h5> --}}
            </div>
        </div>
        @endforeach
        <div class="row">
            <div class="col">
                <div class="swiper-container black-move swiper-pagination-bottom" data-slider-options='{ "loop": true, "slidesPerView": 1, "spaceBetween": 30, "observer": true, "observeParents": true, "autoplay": { "delay": 4500, "disableOnInteraction": false }, "pagination": { "el": ".swiper-pagination", "clickable": true, "dynamicBullets": true }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 4 }, "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 } } }'>
                    <div class="swiper-wrapper">
                   @foreach($team as $t)
                        <div class="swiper-slide">
                            <div class="team-style-01 text-center">
                                <figure class="border-radius-5px">
                                    <div class="team-member-image">
                                        <img alt="" src="{{ asset('assets/about/'.$t->image)}}">
                                        <div class="team-overlay bg-transparent-gradient-sky-blue-pink border-radius-5px"></div>
                                    </div>
                                    <figcaption class="align-items-center justify-content-center d-flex flex-column padding-20px-lr padding-30px-tb">
                                        <span class="team-title d-block alt-font text-white">{{ $t->name }}</span>
                                        <span class="team-sub-title text-small d-block text-white text-uppercase">{{ $t->position }}</span>
                                        <div class="social-icon w-100 position-absolute bottom-30px left-0px">
                                            <a href="https://www.facebook.com/" target="_blank" class="text-white"><i class="fab fa-facebook-f"></i></a>
                                            <a href="https://www.instagram.com/" target="_blank" class="text-white"><i class="fab fa-instagram"></i></a>
                                            <a href="https://twitter.com/" target="_blank" class="text-white"><i class="fab fa-twitter"></i></a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                      @endforeach
                    </div>
                    <!-- start slider pagination -->
                    <div class="swiper-pagination"></div>
                    <!-- end slider pagination -->
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end section -->
@endsection