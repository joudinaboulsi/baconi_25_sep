@extends('frontend.master')
@section('content')
<div class="slider-blog-banner swiper-container black-move" data-slider-options='{ "loop": true, "centeredSlides": true, "slidesPerView": "1", "speed": 1000, "pagination": { "el": ".swiper-pagination", "clickable": true }, "autoplay": { "delay": 2000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "navigation": { "nextEl": ".swiper-button-next-nav", "prevEl": ".swiper-button-previous-nav" }, "breakpoints": { "992": { "slidesPerView": "auto" } }, "effect": "slide" }'>
    <div class="swiper-wrapper">
        @foreach($sliders as $slider)
        <!-- start slider item -->
        <div class="swiper-slide w-55"><img src="{{ asset('assets/company/'.$slider->image) }}" class="w-100" alt=""/></div>
        <!-- end slider item -->
       @endforeach
    </div>
    <!-- start slider pagination -->
    <!--<div class="swiper-pagination"></div>-->
    <!-- end slider pagination -->
    <!-- start slider navigation -->
    <div class="swiper-button-previous-nav swiper-button-prev rounded-circle slider-navigation-style-07 box-shadow-large bg-white"><i class="feather icon-feather-arrow-left text-extra-dark-gray"></i></div>
    <div class="swiper-button-next-nav swiper-button-next rounded-circle slider-navigation-style-07 box-shadow-large bg-white"><i class="feather icon-feather-arrow-right text-extra-dark-gray"></i></div>
    <!-- end slider navigation -->
</div>  
</section>
<!-- end section -->
<!-- start section -->
@foreach($companies as $company)
<section class="wow animate__fadeIn">
<div class="container">
    <div class="row align-items-center justify-content-center">
        <div class="col-8 col-lg-3 offset-lg-1 col-md-5 col-sm-6 md-margin-50px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
            <img src="{{ asset('assets/company/'.$company->image) }}" alt="" width="300"/>
        </div>
        <div class="col-12 col-lg-6 offset-lg-1 text-center text-lg-start last-paragraph-no-margin wow animate__fadeIn" data-wow-delay="0.4s">
            {{-- <h5 class="alt-font text-extra-dark-gray font-weight-500 letter-spacing-minus-1px">Early bird coffee identity</h5> --}}
            <p class="w-100 md-w-80 text-center text-lg-start md-margin-auto-lr">
                {!! $company->text !!}</p>
       
            <a href="mailto:{{ $company->link }}" class="btn btn-fancy btn-large btn-gradient-tan-geraldine btn-round-edge-small margin-25px-top">{{ $company->link }}</a>
        </div>
        <div class="col-12 col-md-12 text-center d-flex flex-row align-items-center margin-4-rem-tb ">
            <span class="w-100 h-1px bg-medium-gray"></span>
            <img src="{{ asset('assets/company/'.$company->logo) }}" width="100" alt=""/>
            <span class="w-100 h-1px bg-medium-gray"></span>
        </div>
       
    </div>

    <div class="row align-items-center justify-content-center">
        <div class="col-8 col-lg-3 offset-lg-1 col-md-5 col-sm-6 md-margin-50px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
            <img src="{{ asset('assets/company/'.$company->image1) }}"  width="300"/>
        </div>
        <div class="col-12 col-lg-6 offset-lg-1 text-center text-lg-start last-paragraph-no-margin wow animate__fadeIn" data-wow-delay="0.4s">
            {{-- <h5 class="alt-font text-extra-dark-gray font-weight-500 letter-spacing-minus-1px">Early bird coffee identity</h5> --}}
            <p class="w-100 md-w-80 text-center text-lg-start md-margin-auto-lr">

                {!! $company->text1 !!}
            </p>
           
            <a href="mailto:{{ $company->link1 }}" class="btn btn-fancy btn-large btn-gradient-tan-geraldine btn-round-edge-small margin-25px-top"> {{ $company->link1 }}</a>
        </div>
        <div class="col-12 col-md-12 text-center d-flex flex-row align-items-center margin-4-rem-tb wow animate__fadeIn">
            <span class="w-100 h-1px bg-medium-gray"></span>
            <img src="{{ asset('assets/company/'.$company->logo1) }}" width="100" alt=""/>
            <span class="w-100 h-1px bg-medium-gray"></span>
        </div>
       
    </div>



    <div class="row align-items-center justify-content-center">
        <div class="col-8 col-lg-3 offset-lg-1 col-md-5 col-sm-6 md-margin-50px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
            <img src="{{ asset('assets/company/'.$company->image2) }}"   alt=""/>
        </div>
        <div class="col-12 col-lg-6 offset-lg-1 text-center text-lg-start last-paragraph-no-margin wow animate__fadeIn" data-wow-delay="0.4s">
            {{-- <h5 class="alt-font text-extra-dark-gray font-weight-500 letter-spacing-minus-1px">Early bird coffee identity</h5> --}}
            <p class="w-100 md-w-80 text-center text-lg-start md-margin-auto-lr">

                {!! $company->text2 !!}
            </p>
           
            <a href="mailto:{{ $company->link2 }}" class="btn btn-fancy btn-large btn-gradient-tan-geraldine btn-round-edge-small margin-25px-top"> {{ $company->link2 }}</a>
        </div>
        <div class="col-12 col-md-12 text-center d-flex flex-row align-items-center margin-4-rem-tb wow animate__fadeIn">
            <span class="w-100 h-1px bg-medium-gray"></span>
            <img src="{{ asset('assets/company/'.$company->logo2) }}" width="100" alt=""/>
            <span class="w-100 h-1px bg-medium-gray"></span>
        </div>
       
    </div>

    <div class="row align-items-center justify-content-center">
        <div class="col-8 col-lg-3 offset-lg-1 col-md-5 col-sm-6 md-margin-50px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
            <img src="{{ asset('assets/company/'.$company->image3) }}"   alt=""/>
        </div>
        <div class="col-12 col-lg-6 offset-lg-1 text-center text-lg-start last-paragraph-no-margin wow animate__fadeIn" data-wow-delay="0.4s">
            {{-- <h5 class="alt-font text-extra-dark-gray font-weight-500 letter-spacing-minus-1px">Early bird coffee identity</h5> --}}
            <p class="w-100 md-w-80 text-center text-lg-start md-margin-auto-lr">

                {!! $company->text3 !!}
            </p>
           
            <a href="mailto:{{ $company->link3 }}" class="btn btn-fancy btn-large btn-gradient-tan-geraldine btn-round-edge-small margin-25px-top"> {{ $company->link3 }}</a>
        </div>
        <div class="col-12 col-md-12 text-center d-flex flex-row align-items-center margin-4-rem-tb wow animate__fadeIn">
            <span class="w-100 h-1px bg-medium-gray"></span>
            <img src="{{ asset('assets/company/'.$company->logo3) }}" width="100" alt=""/>
            <span class="w-100 h-1px bg-medium-gray"></span>
        </div>
       
    </div>
</div>
</section>

@endforeach
@endsection