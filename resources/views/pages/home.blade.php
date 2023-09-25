@extends('frontend.master')
@section('content')
<!-- start revolution slider -->

<section class="p-0 example home-startup bg-dark-slate-blue">
    <article class="content">
        <div id="rev_slider_26_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="mask-showcase" data-source="gallery">
            <!-- Start revolution slider 5.4.1 fullscreen mode -->
            <div id="rev_slider_26_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
                <ul> 
                    <!-- start slide 01 -->
                    @foreach($sliders as $slider)
                    <li  data-transition="zoomout" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="1500"  data-thumb="http://works.themepunch.com/revolution_5_3/wp-content/"  data-rotate="0"  data-saveperformance="off"  data-title="01" data-param1="01" data-description="">
                        <!-- main image -->
                        <img src="{{ asset('assets/home/'.$slider->background) }}" alt="" data-bgcolor="#262b32" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>

                        <div class="overlay-bg bg-extra-dark-gray" style="opacity: 0.5;"></div> 

                        <!-- main text layer -->
                        <div class="tp-caption tp-resizeme alt-font text-white font-weight-600 text-center"
                         
                             data-frames='[{"delay":200,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[-100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                             data-type="text"
                             data-whitespace="nowrap"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                             data-y="['middle','middle','middle','middle']" data-voffset="['-50','-50','-115','-65']" 
                             data-width="auto"
                             data-height="auto"
                             data-fontsize="['70','53','60','35']"
                             data-lineheight="['70','59','70','39']"
                             data-letterspacing="['-2','-1','-1','-1']"
                             data-responsive="off"
                             data-responsive_offset="off"
                             data-paddingtop="['0','0','0','0']"
                             data-paddingbottom="['15','8','8','8']"
                             data-paddingright="['0','0','0','0']"
                             data-paddingleft="['0','0','0','0']"
                             style="text-shadow: 0 0 20px rgba(0,0,0,0.3);">{{ $slider->title}}</div>

                        <!-- small text layer -->
                        <div class="tp-caption tp-resizeme alt-font text-white font-weight-300 text-center"
                             id="slide-411-layer-02" 
                             data-frames='[{"delay":1200,"speed":1000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[-100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                             data-type="text"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                             data-y="['middle','middle','middle','middle']" data-voffset="['65','100','-5','15']" 
                             data-width="auto"
                             data-height="auto"
                             data-fontsize="['19','16','19','14']"
                             data-lineheight="['28','14','23','20']"
                             data-letterspacing="['0.5','0.5','0.5','0.5']"
                             data-responsive="off"
                             data-responsive_offset="on">{{ $slider->subtitle}}</div> 

                        <!-- btn layer -->
                        <a class="tp-caption tp-resizeme rs-btn btn btn-rounded d-flex align-items-center justify-content-center"
                           href="{{ $slider->url }}"
                           id="slide-411-layer-03" 
                           data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                           data-y="['middle','middle','middle','middle']" data-voffset="['152','130','82','80']"
                           data-whitespace="nowrap"
                           data-type="button"
                           data-responsive="off"
                           data-responsive_offset="off"
                           data-frames='[{"delay":1200,"speed":1000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[-100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                           data-textAlign="['center','center','center','center']"
                           data-paddingtop="['8','8','8','8']"
                           data-paddingbottom="['8','8','8','8']"
                           data-paddingright="['7','7','7','7']"
                           data-paddingleft="['34','34','34','34']"
                           style="background-color: #2C58A7; color: #fff; font-size: 15px;">{{ $slider->link }}
                            <div style="display: flex; justify-content: center; align-items: center; width: 38px; height: 38px; border-radius: 50%; background: #2C58A7; margin-left: 19px;">

                                <i class="feather icon-feather-arrow-right icon-very-small right-icon"  style="color: #2C58A7; font-size: 12px; line-height: 15px; margin-top: 2px; margin-left: 3px;"></i>
                            </div>
                        </a>         
                    </li>
                    @endforeach
                    <!-- end slide 01 -->
                    <!-- start slide 02 -->
                    {{-- <li data-index="rs-74" data-transition="zoomout" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="1500"  data-thumb="http://works.themepunch.com/revolution_5_3/wp-content/"  data-rotate="0"  data-saveperformance="off"  data-title="02" data-param1="02" data-description="">
                        <!-- main image -->
                        <img src="{{ asset('front/images/home-startup-slider-bg-02.jpg')}}" alt="" data-bgcolor="#262b32" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>

                        <div class="overlay-bg bg-extra-dark-gray" style="opacity: 0.5;"></div> 

                        <!-- main text layer -->
                        <div class="tp-caption tp-resizeme alt-font text-white font-weight-600 text-center"
                             id="slide-411-layer-04" 
                             data-frames='[{"delay":200,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[-100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                             data-type="text"
                             data-whitespace="nowrap"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                             data-y="['middle','middle','middle','middle']" data-voffset="['-50','-50','-115','-65']" 
                             data-width="auto"
                             data-height="auto"
                             data-fontsize="['70','53','60','35']"
                             data-lineheight="['70','59','70','39']"
                             data-letterspacing="['-2','-1','-1','-1']"
                             data-responsive="off"
                             data-responsive_offset="off"
                             data-paddingtop="['0','0','0','0']"
                             data-paddingbottom="['15','8','8','8']"
                             data-paddingright="['0','0','0','0']"
                             data-paddingleft="['0','0','0','0']"
                             style="text-shadow: 0 0 20px rgba(0,0,0,0.3);">Combine thinking<br> and technical</div>

                        <!-- small text layer -->
                        <div class="tp-caption tp-resizeme alt-font text-white font-weight-300 text-center"
                             id="slide-411-layer-05" 
                             data-frames='[{"delay":1200,"speed":1000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[-100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                             data-type="text"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                             data-y="['middle','middle','middle','middle']" data-voffset="['65','100','-5','15']" 
                             data-width="auto"
                             data-height="auto"
                             data-fontsize="['19','13','19','14']"
                             data-lineheight="['28','14','23','20']"
                             data-letterspacing="['0.5','0.5','0.5','0.5']"
                             data-responsive="off"
                             data-responsive_offset="on">The best way to promote your business</div> 

                        <!-- btn layer -->
                        <a class="tp-caption tp-resizeme rs-btn btn btn-rounded d-flex align-items-center justify-content-center"
                           href="contact-us-classic.html"
                           id="slide-411-layer-03" 
                           data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                           data-y="['middle','middle','middle','middle']" data-voffset="['152','130','82','80']"
                           data-whitespace="nowrap"
                           data-type="button"
                           data-responsive="off"
                           data-responsive_offset="off"
                           data-frames='[{"delay":1200,"speed":1000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[-100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                           data-textAlign="['center','center','center','center']"
                           data-paddingtop="['8','8','8','8']"
                           data-paddingbottom="['8','8','8','8']"
                           data-paddingright="['7','7','7','7']"
                           data-paddingleft="['34','34','34','34']"
                           style="background-color: #2C58A7; color: #fff; font-size: 15px;">Get started now 
                            <div style="display: flex; justify-content: center; align-items: center; width: 38px; height: 38px; border-radius: 50%; background: #2C58A7; margin-left: 19px;">

                                <i class="feather icon-feather-arrow-right icon-very-small right-icon"  style="color: #2C58A7; font-size: 12px; line-height: 15px; margin-top: 2px; margin-left: 3px;"></i>
                            </div>
                        </a>       
                    </li> --}}
                    <!-- end slide 02 -->
                    <!-- start slide 03 -->
                    {{-- <li data-index="rs-75" data-transition="zoomout" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="1500"  data-thumb="http://works.themepunch.com/revolution_5_3/wp-content/"  data-rotate="0"  data-saveperformance="off"  data-title="03" data-param1="03" data-description="">
                        <!-- main image -->
                        <img src="{{ asset('front/images/home-startup-slider-bg-03.jpg')}}" alt="" data-bgcolor="#262b32" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>

                        <div class="overlay-bg bg-extra-dark-gray" style="opacity: 0.5;"></div> 

                        <!-- main text layer -->
                        <div class="tp-caption tp-resizeme alt-font text-white font-weight-600 text-center"
                             id="slide-411-layer-07" 
                             data-frames='[{"delay":200,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[-100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                             data-type="text"
                             data-whitespace="nowrap"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                             data-y="['middle','middle','middle','middle']" data-voffset="['-50','-50','-115','-65']" 
                             data-width="auto"
                             data-height="auto"
                             data-fontsize="['70','53','60','35']"
                             data-lineheight="['70','59','70','39']"
                             data-letterspacing="['-2','-1','-1','-1']"
                             data-responsive="off"
                             data-responsive_offset="off"
                             data-paddingtop="['0','0','0','0']"
                             data-paddingbottom="['15','8','8','8']"
                             data-paddingright="['0','0','0','0']"
                             data-paddingleft="['0','0','0','0']"
                             style="text-shadow: 0 0 20px rgba(0,0,0,0.3);">Delivering creative<br> digital products</div>

                        <!-- small text layer -->
                        <div class="tp-caption tp-resizeme alt-font text-white font-weight-300 text-center"
                             id="slide-411-layer-08" 
                             data-frames='[{"delay":1200,"speed":1000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[-100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                             data-type="text"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                             data-y="['middle','middle','middle','middle']" data-voffset="['65','100','-5','15']" 
                             data-width="auto"
                             data-height="auto"
                             data-fontsize="['19','13','19','14']"
                             data-lineheight="['28','14','23','20']"
                             data-letterspacing="['0.5','0.5','0.5','0.5']"
                             data-responsive="off"
                             data-responsive_offset="on">The best way to promote your business</div> 

                        <!-- btn layer -->
                        <a class="tp-caption tp-resizeme rs-btn btn btn-rounded d-flex align-items-center justify-content-center"
                           href="contact-us-classic.html"
                           id="slide-411-layer-03" 
                           data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                           data-y="['middle','middle','middle','middle']" data-voffset="['152','130','82','80']"
                           data-whitespace="nowrap"
                           data-type="button"
                           data-responsive="off"
                           data-responsive_offset="off"
                           data-frames='[{"delay":1200,"speed":1000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[-100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                           data-textAlign="['center','center','center','center']"
                           data-paddingtop="['8','8','8','8']"
                           data-paddingbottom="['8','8','8','8']"
                           data-paddingright="['7','7','7','7']"
                           data-paddingleft="['34','34','34','34']"
                           style="background-color: #2C58A7; color: #fff; font-size: 15px;">Get started now 
                            <div style="display: flex; justify-content: center; align-items: center; width: 38px; height: 38px; border-radius: 50%; background: #2C58A7; margin-left: 19px;">

                                <i class="feather icon-feather-arrow-right icon-very-small right-icon"  style="color: #2C58A7; font-size: 12px; line-height: 15px; margin-top: 2px; margin-left: 3px;"></i>
                            </div>
                        </a>       
                    </li> --}}
                    <!-- end slide 01 -->
                </ul>
            </div>
        </div>
    </article>
</section>
<!-- end revolution slider -->
<!-- start section -->
@foreach($homes as $home)
<section class="extra-big-section cover-background overflow-visible" style="background-image: url('{{ asset('front/images/home-startup-about-bg.jpg') }}');">
    <div class="container">
        <div class="row">
            <div class="col-12 overlap-section md-no-margin-top md-margin-70px-bottom sm-margin-50px-bottom">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-3 col-md-6 col-sm-8 md-margin-30px-bottom xs-margin-15px-bottom">
                        <!-- start feature box item-->
                        <div class="feature-box h-100 feature-box-left-icon-middle padding-3-rem-all bg-white box-shadow-small box-shadow-large-hover border-radius-4px overflow-hidden last-paragraph-no-margin lg-padding-2-half-rem-tb lg-padding-2-rem-lr md-padding-4-rem-all">
                            <div class="feature-box-icon margin-30px-right lg-margin-25px-right">
                                <a href="{{ route('aboutPage') }}">    <i class="line-icon-Cursor-Click2 icon-medium text-green"></i></a>
                            </div>
                            <div class="feature-box-content">
                                <a href="{{ route('aboutPage') }}"> 
                                <div class="text-slate-blue font-weight-500 text-large margin-5px-bottom">{{ $home->title1 }}</div>
                                <span>{{ $home->subtitle1 }}</span>
                            </div></a>
                        </div>
                        <!-- end feature box item-->
                    </div>
                    <div class="col-12 col-lg-3 col-md-6 col-sm-8 md-margin-30px-bottom xs-margin-15px-bottom">
                        <!-- start feature box item-->
                        <div class="feature-box h-100 feature-box-left-icon-middle padding-3-rem-all bg-white box-shadow-small box-shadow-large-hover border-radius-4px overflow-hidden last-paragraph-no-margin lg-padding-2-half-rem-tb lg-padding-2-rem-lr md-padding-4-rem-all">
                            <div class="feature-box-icon margin-30px-right lg-margin-25px-right">
                              <a href="{{ route('aboutPage') }}"> <i class="line-icon-Bakelite icon-medium text-green"></i></a> 
                            </div>
                            <div class="feature-box-content">
                                <a href="{{ route('aboutPage') }}"> 
                                <div class="text-slate-blue font-weight-500 text-large margin-5px-bottom">{{ $home->title2 }}</div>
                                <span>{{ $home->subtitle2 }}</span></a>
                            </div>
                        </div>
                        <!-- end feature box item-->
                    </div>
                    <div class="col-12 col-lg-3 col-md-6 col-sm-8">
                        <!-- start feature box item-->
                        <div class="feature-box h-100 feature-box-left-icon-middle padding-3-rem-all bg-white box-shadow-small box-shadow-large-hover border-radius-4px overflow-hidden last-paragraph-no-margin lg-padding-2-half-rem-tb lg-padding-2-rem-lr md-padding-4-rem-all">
                            <div class="feature-box-icon margin-30px-right lg-margin-25px-right">
                                <a href="{{ route('aboutPage') }}">     <i class="line-icon-Boy icon-medium text-green"></i></a>
                            </div>
                            <div class="feature-box-content">
                                <a href="{{ route('aboutPage') }}"> 
                                <div class="text-slate-blue font-weight-500 text-large margin-5px-bottom">{{ $home->title3 }}</div>
                                <span>{{ $home->subtitl32 }}</span>
                            </div></a>
                        </div>
                        <!-- end feature box item-->
                    </div>
                    <div class="col-12 col-lg-3 col-md-6 col-sm-8">
                        <!-- start feature box item-->
                        <div class="feature-box h-100 feature-box-left-icon-middle padding-3-rem-all bg-white box-shadow-small box-shadow-large-hover border-radius-4px overflow-hidden last-paragraph-no-margin lg-padding-2-half-rem-tb lg-padding-2-rem-lr md-padding-4-rem-all">
                            <div class="feature-box-icon margin-30px-right lg-margin-25px-right">
                                <a href="{{ route('aboutPage') }}">     <i class="line-icon-Boy icon-medium text-green"></i></a>
                            </div>
                            <div class="feature-box-content">
                                <a href="{{ route('aboutPage') }}">    <div class="text-slate-blue font-weight-500 text-large margin-5px-bottom">{{ $home->title4 }}</div>
                                <span>{{ $home->subtitle4 }}</span>
                            </div></a>
                        </div>
                        <!-- end feature box item-->
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-end">
            <div class="col-12 col-lg-3 col-md-6 order-1 text-center text-lg-end last-paragraph-no-margin md-margin-50px-bottom wow animate__fadeInLeft">
                <div class="title-large-2 text-green alt-font line-height-70px letter-spacing-minus-3px font-weight-600">{{ $home->counter1 }}</div>
                <span class="alt-font text-extra-dark-gray font-weight-500 text-uppercase letter-spacing-2px d-block margin-15px-bottom sm-margin-5px-bottom">{{ $home->title1_count }}</span>
                <p class="w-90 d-inline-block sm-w-60 xs-w-80">{{ $home->subtitle1_count }}</p>
            </div>
            <div class="col-12 col-lg-6 order-3 order-lg-2 text-center z-index-0 wow animate__fadeIn">
                <div class="tilt-box" data-tilt-options='{ "maxTilt": 20, "perspective": 1000, "easing": "cubic-bezier(.03,.98,.52,.99)", "scale": 1, "speed": 500, "transition": true, "reset": true, "glare": false, "maxGlare": 1 }'>
                    <span class="text-extra-big-2 alt-font text-uppercase text-green font-weight-600 letter-spacing-minus-10px image-mask cover-background" style="background-image: url('{{ asset('assets/home/'.$home->image_count) }}')">30</span>
                    <span class="alt-font text-extra-large text-extra-dark-gray letter-spacing-4px font-weight-600 text-uppercase margin-5px-top d-block">Years of experience</span>
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-6 order-2 text-center text-lg-start order-lg last-paragraph-no-margin md-margin-50px-bottom wow animate__fadeInRight">
                <div class="title-large-2 text-green alt-font line-height-70px letter-spacing-minus-3px font-weight-600" >{{ $home->counter2 }}</div>
                <span class="alt-font text-extra-dark-gray font-weight-500 text-uppercase letter-spacing-2px d-block margin-15px-bottom sm-margin-5px-bottom">{{ $home->title2_count }}</span>
                <p class="w-90 d-inline-block sm-w-60 xs-w-80">{{ $home->subtitle2_count }}</p>
            </div>                   
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="overflow-visible pt-md-0 pb-0">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center overlap-section wow animate__zoomIn">
                <img class="rounded-circle box-shadow-large w-170px h-170px border-all border-width-10px border-color-white" src="{{ asset('assets/home/'.$home->logo)}}" alt="">
            </div>
        </div>
    </div>
</section>
<!-- end section -->
@endforeach
@foreach($homes as $company)
<section class="padding-100px-tb bg-gradient-white-light-gray md-padding-75px-tb sm-padding-50px-tb">
    <div class="container">
        <div class="row align-items-center row-cols-1 row-cols-lg-4 row-cols-sm-2 client-logo-style-02">
            <!-- start client logo item -->
            
            <div class="col text-center md-margin-50px-bottom wow animate__fadeIn">
                <a href="{{ route('companiesPage') }}" class="client-logo"><img alt="" src="{{ asset('assets/company/'.$company->company1)}}"></a>
            </div>
            <div class="col text-center md-margin-50px-bottom wow animate__fadeIn">
                <a href="{{ route('companiesPage') }}" class="client-logo"><img alt="" src="{{ asset('assets/company/'.$company->company2)}}"></a>
            </div>
            <div class="col text-center md-margin-50px-bottom wow animate__fadeIn">
                <a href="{{ route('companiesPage') }}" class="client-logo"><img alt="" src="{{ asset('assets/company/'.$company->company3)}}"></a>
            </div>
            <div class="col text-center md-margin-50px-bottom wow animate__fadeIn">
                <a href="{{ route('companiesPage') }}" class="client-logo"><img alt="" src="{{ asset('assets/company/'.$company->company4)}}"></a>
            </div>
            <!-- end client logo item -->
          
           
         
           
        </div>
    </div>
</section>
@endforeach
<!-- start section -->
@foreach($homes as $serv)
<section>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-xl-5 col-lg-6 col-md-10 md-margin-50px-bottom">
                <div class="col-12 p-0 margin-3-rem-bottom wow animate__fadeIn">
                    <span class="alt-font font-weight-500 text-green text-extra-medium d-block margin-20px-bottom sm-margin-10px-bottom">{{ $serv->subtitle_section1 }}</span>
                    <h5 class="alt-font font-weight-600 text-extra-dark-gray d-inline-block w-90 lg-w-80 sm-w-100">{{ $serv->title_section1 }}</h5>
                </div>
                <div class="col-12 p-0">
                    <!-- start progress item -->
                    <div class="col-12 p-0 process-step-style-02 wow animate__fadeIn" data-wow-delay="0.2s">
                        <div class="process-step-item">
                            <div class="process-step-icon-wrap">
                                <div class="process-step-icon text-center border-all border-color-green border-width-2px bg-green alt-font font-weight-500">1</div>
                                <span class="process-step-item-box-bfr bg-medium-gray"></span>
                            </div>
                            <div class="process-content last-paragraph-no-margin">
                                {{-- <span class="alt-font d-block font-weight-500 text-extra-dark-gray margin-5px-bottom"></span> --}}
                                <p class="w-80 xs-w-100 alt-font d-block font-weight-500 text-extra-dark-gray margin-5px-bottom">{{ $serv->text_consultancy }}</p>                
                            </div>
                        </div>
                    </div>
                    <!-- end progress item -->
                    <!-- start progress item -->
                    <div class="col-12 p-0 process-step-style-02 wow animate__fadeIn" data-wow-delay="0.4s">
                        <div class="process-step-item">
                            <div class="process-step-icon-wrap">
                                <div class="process-step-icon text-center border-all border-color-green border-width-2px bg-green alt-font font-weight-500">2</div>
                                <span class="process-step-item-box-bfr bg-medium-gray"></span>
                            </div>
                            <div class="process-content last-paragraph-no-margin">
                                {{-- <span class="alt-font d-block font-weight-500 text-extra-dark-gray margin-5px-bottom">Pixel perfect design and code</span> --}}
                                <p class="w-80 xs-w-100 alt-font d-block font-weight-500 text-extra-dark-gray margin-5px-bottom">{{ $serv->text2_section1}}</p>                
                            </div>
                        </div>
                    </div>
                    <!-- end progress item -->
                    <!-- start progress item -->
                    <div class="col-12 p-0 process-step-style-02 wow animate__fadeIn" data-wow-delay="0.6s">
                        <div class="process-step-item">
                            <div class="process-step-icon-wrap">
                                <div class="process-step-icon text-center border-all border-color-green border-width-2px bg-green alt-font font-weight-500">3</div>
                            </div>
                            <div class="process-content last-paragraph-no-margin">
                                {{-- <span class="alt-font d-block font-weight-500 text-extra-dark-gray margin-5px-bottom">Beautifully handcrafted templates</span> --}}
                                <p class="w-80 xs-w-100 alt-font d-block font-weight-500 text-extra-dark-gray margin-5px-bottom">{{ $serv->text3_section1 }}</p>                
                            </div>
                        </div>
                    </div>
                    <!-- end progress item -->
                       <!-- start progress item -->
                       <div class="col-12 p-0 process-step-style-02 wow animate__fadeIn" data-wow-delay="0.6s">
                        <div class="process-step-item">
                            <div class="process-step-icon-wrap">
                                <div class="process-step-icon text-center border-all border-color-green border-width-2px bg-green alt-font font-weight-500">4</div>
                            </div>
                            <div class="process-content last-paragraph-no-margin">
                                {{-- <span class="alt-font d-block font-weight-500 text-extra-dark-gray margin-5px-bottom">Beautifully handcrafted templates</span> --}}
                                <p class="w-80 xs-w-100 alt-font d-block font-weight-500 text-extra-dark-gray margin-5px-bottom">
                                    {{ $serv->text4_section1}}</p>                
                            </div>
                        </div>
                    </div>
                    <!-- end progress item -->
                </div>
            </div>
            <div class="col-12 col-lg-6 offset-xl-1 wow animate__fadeInRight">
                <div class="outside-box-right position-relative">
                    <img src="{{ asset('assets/home/'.$serv->image_section1) }}" class="overflow-hidden" alt=""  style="width:80%"/>
                </div>
            </div>
        </div>
    </div>
</section>
@endforeach
@foreach($homes as $service)
<section class="bg-light-gray">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center margin-seven-bottom">
                <h5 class="alt-font font-weight-600 text-extra-dark-gray d-inline-block letter-spacing-minus-1-half">Our Services</h5>

            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-9 col-lg-12 position-relative">
                <div class="swiper-container black-move" data-slider-options='{ "slidesPerView": 1, "loop": true, "spaceBetween": 30, "autoplay": { "delay": 3000, "disableOnInteraction": false }, "navigation": { "nextEl": ".swiper-button-next-nav", "prevEl": ".swiper-button-previous-nav" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "992": { "slidesPerView": 2 } }, "effect": "slide" }'>
                    <div class="swiper-wrapper">
                        <!-- start services item -->
                        <div class="swiper-slide">
                            <div class="row m-0 h-100">
                                <div class="col-12 col-sm-6 cover-background xs-h-200px" style="background: url('{{ asset('assets/home/'.$service->image1_service) }}');"></div>
                                <div class="col-12 col-sm-6 d-flex padding-4-rem-all bg-white lg-padding-2-half-rem-all xs-padding-4-rem-all">
                                    <div class="align-self-center">
                                        <span class="alt-font font-weight-500 text-uppercase text-slate-blue margin-10px-bottom d-block">{{ $service->title1_service }}</span>
                                        <p>{{ $service->p1_service }}</p>
                                        <a href="{{ route('servicePage') }}" class="btn btn-fancy btn-very-small btn-slate-blue"> Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end services item -->
                     
                        <div class="swiper-slide">
                            <div class="row m-0 h-100">
                                <div class="col-12 col-sm-6 cover-background xs-h-200px" style="background: url('{{ asset('assets/home/'.$service->image2_service) }}');"></div>
                                <div class="col-12 col-sm-6 d-flex padding-4-rem-all bg-white lg-padding-2-half-rem-all xs-padding-4-rem-all">
                                    <div class="align-self-center">
                                        <span class="alt-font font-weight-500 text-uppercase text-slate-blue margin-10px-bottom d-block">{{ $service->title2_service }}</span>
                                        {{-- <p>Lorem ipsum dolor amet consectetur adipiscing eiusmod tempor.</p> --}}
                                      <p>  {{ $service->p2_service }}</p>
                                        <a href="{{ route('servicePage') }}" class="btn btn-fancy btn-very-small btn-slate-blue">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="row m-0 h-100">
                                <div class="col-12 col-sm-6 cover-background xs-h-200px" style="background: url('{{ asset('assets/home/'.$service->image3_service) }}');"></div>
                                <div class="col-12 col-sm-6 d-flex padding-4-rem-all bg-white lg-padding-2-half-rem-all xs-padding-4-rem-all">
                                    <div class="align-self-center">
                                        <span class="alt-font font-weight-500 text-uppercase text-slate-blue margin-10px-bottom d-block">{{ $service->title3_service }}</span>
                                        <p>  {{ $service->p3_service }}</p>
                                        <a href="{{ route('servicePage') }}" class="btn btn-fancy btn-very-small btn-slate-blue">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end services item -->
                    </div>
                </div>
                <!-- start slider navigation -->
                {{-- <div class="swiper-button-previous-nav swiper-button-prev light slider-navigation-style-07 rounded-circle box-shadow-double-large"><i class="feather icon-feather-arrow-left"></i></div>
                <div class="swiper-button-next-nav swiper-button-next light slider-navigation-style-07 rounded-circle box-shadow-double-large"><i class="feather icon-feather-arrow-right"></i></div> --}}
                <!-- end slider navigation -->
            </div>
        </div>
    </div>
</section>
@endforeach

<section>
    <div class="container">
        <div class="row justify-content-center wow animate__fadeIn">
            <div class="col-12 col-lg-8 col-sm-10 text-center margin-5-rem-bottom md-margin-3-rem-bottom xs-margin-5-rem-bottom">
                {{-- <span class="alt-font text-green text-extra-medium d-block margin-20px-bottom font-weight-500 sm-margin-10px-bottom">Amazing design services</span> --}}
                <h3 class="alt-font font-weight-600 text-extra-dark-gray d-inline-block">Latest from our blog</h3>
            </div>
        </div>
            {{-- <div class="col-12 col-lg-6 offset-lg-1 wow animate__fadeIn" data-wow-duration="0.3">
                <div class="row row-cols-1 row-cols-sm-2">
                    <!-- start feature box item -->
                    <div class="col text-center text-sm-start xs-margin-30px-bottom">
                        <div class="last-paragraph-no-margin">
                            <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray xs-margin-5px-bottom">Build perfect websites</span>
                            <p class="w-85 lg-w-100 xs-w-75 mx-auto mx-sm-0">Lorem ipsum dolor consectetur adipiscing elit eiusmod tempor elit eiusmod tempor.</p>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col text-center text-sm-start">
                        <div class="last-paragraph-no-margin">
                            <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray xs-margin-5px-bottom">Unique experiences</span>
                            <p class="w-85 lg-w-100 xs-w-75 mx-auto mx-sm-0">Lorem ipsum dolor consectetur adipiscing elit eiusmod tempor elit eiusmod tempor.</p>
                        </div>
                    </div>
                    <!-- end feature box item -->
                </div>
            </div> --}}
        </div>
        <div class="row justify-content-center">
            <div class="col-12 margin-8-rem-top md-margin-6-rem-top">
                <div class="outside-box-right">
                    <!-- start slider -->
                    <div class="swiper-container white-move" data-slider-options='{"loop": true, "slidesPerView": 1, "spaceBetween": 30, "autoplay": { "delay": 3000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 } } }'>
                        <div class="swiper-wrapper">

                            @foreach($blogs as $blog)
                            <!-- start interactive banner item -->
                            <div class="swiper-slide interactive-banners-style-07">
                                <div class="interactive-banners-box bg-dark-slate-blue border-radius-6px">
                                    <div class="interactive-banners-box-image">
                                        <img src="{{ asset('assets/blog/'.$blog->image) }}" alt="" height=""/>
                                        <div class="overlay-bg bg-gradient-dark-slate-blue-transparent"></div>
                                    </div>
                                    <div class="fancy-text-content padding-65px-lr md-padding-55px-lr xs-padding-30px-lr">
                                        {{-- <div class="text-white opacity-6 margin-10px-bottom">High quality services</div> --}}
                                        <div class="alt-font text-extra-large text-white margin-15px-bottom w-60 lg-w-90 sm-w-50 xs-w-90 md-margin-5px-bottom">{{ $blog->title }}</div>
                                        <a href="{{ route('blogDetailPage',$blog->id) }}" class="btn btn-fancy btn-very-small btn-green btn-round-edge margin-15px-top">View information</a>
                                    </div>
                                </div>
                            </div>
                            <!-- end interactive banner item -->
                           @endforeach
                          
                        </div>
                    </div>
                    <!-- end slider -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
@foreach($homes as $video)
<section class="big-section position-relative wow animate__fadeIn">
    <div class="opacity-full bg-gradient-fast-blue-purple"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-7 col-lg-8 col-md-10 position-relative text-center padding-five-tb">
                <h3 class="alt-font text-white font-weight-600 margin-35px-bottom">{{ $video->title_video }}</h3>
                <p class="text-white opacity-7 alt-font text-large w-80 mx-auto line-height-32px margin-45px-bottom sm-w-100">{{ $video->subtitle_video }}</p>
               
            </div>
            <div class="col-12 col-lg-8 position-relative md-margin-50px-bottom wow animate__fadeIn animate__animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
            <a href="{{asset('assets/home/'. $video->video) }}" class="popup-youtube absolute-middle-center video-icon-box video-icon-large pt-6">
                <span>
                    <span class="video-icon bg-white box-shadow-extra-large">
                        <i class="icon-simple-line-control-play text-neon-orange"></i>
                        <span class="video-icon-sonar">
                            <span class="video-icon-sonar-bfr bg-white opacity-7"></span>
                        </span>
                    </span>
                </span>
            </a>
        </div></div>
    </div>
    <div class="bg-video-wrapper">
        <iframe allow="autoplay" src="{{asset('assets/home/'. $video->video) }}" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
</section>
@endforeach
<section class="bg-light-gray">
    <div class="container">
        <div class="row justify-content-center wow animate__fadeIn">
            <div class="col-12 col-xl-4 col-lg-5 col-sm-6 text-center margin-3-half-rem-bottom md-margin-2-rem-bottom">
                {{-- <span class="alt-font font-weight-500 text-green text-extra-medium d-block margin-20px-bottom sm-margin-10px-bottom">Latest blogs</span> --}}
                <h5 class="alt-font font-weight-600 text-extra-dark-gray d-inline-block letter-spacing-minus-1-half">Check our latest posts</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-12 blog-content sm-no-padding-lr">
                <ul class="blog-masonry blog-wrapper grid grid-loading grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-double-extra-large">
                    <li class="grid-sizer"></li>
                    <!-- start blog item -->
                    <li class="grid-item wow animate__fadeIn">
                        <div class="blog-post border-radius-5px bg-white">
                            <div class="d-flex align-items-center font-weight-500 padding-30px-lr padding-15px-tb">
                                <a href="blog-masonry.html" class="text-small me-auto text-slate-blue text-green-hover">24 February 2020</a>
                                <a href="blog-post-layout-01.html" class="blog-like text-extra-small text-green-hover"><i class="far fa-heart"></i><span>28</span></a>
                                <a href="blog-post-layout-01.html" class="blog-comment text-extra-small text-green-hover"><i class="far fa-comment"></i><span>52</span></a>
                            </div>
                            <div class="blog-post-image">
                                <a href="blog-post-layout-01.html" title=""><img src="{{ asset('front/images/home-startup-blog-img-01.jpg')}}" alt=""></a>
                                <div class="alt-font blog-category"><a href="blog-masonry.html" class="text-uppercase text-green text-extra-dark-gray-hover">Fashion</a></div>
                            </div>
                            <div class="post-details padding-3-rem-lr padding-2-half-rem-tb lg-padding-2-rem-all md-padding-2-half-rem-tb md-padding-3-rem-lr">
                                <a href="blog-post-layout-01.html" class="alt-font font-weight-500 text-extra-medium text-extra-dark-gray text-green-hover d-block margin-15px-bottom">Recognizing the need is the primary condition design</a>
                                <p>Lorem ipsum is simply dummy text of printing and typesetting industry lorem ipsum been dummy...</p>
                            </div>
                        </div>
                    </li>
                    <!-- end blog item -->
                    <!-- start blog item -->
                    <li class="grid-item wow animate__fadeIn" data-wow-delay="0.2s">
                        <div class="blog-post border-radius-5px bg-white">
                            <div class="d-flex align-items-center font-weight-500 padding-30px-lr padding-15px-tb">
                                <a href="blog-masonry.html" class="text-small me-auto text-slate-blue text-green-hover">10 February 2020</a>
                                <a href="blog-post-layout-02.html" class="blog-like text-extra-small text-green-hover"><i class="far fa-heart"></i><span>28</span></a>
                                <a href="blog-post-layout-02.html" class="blog-comment text-extra-small text-green-hover"><i class="far fa-comment"></i><span>40</span></a>
                            </div>
                            <div class="blog-post-image">
                                <a href="blog-post-layout-02.html" title=""><img src="{{ asset('front/images/home-startup-blog-img-02.jpg') }}" alt=""></a>
                                <div class="alt-font blog-category"><a href="blog-masonry.html" class="text-uppercase text-green text-extra-dark-gray-hover">Lifestyle</a></div>
                            </div>
                            <div class="post-details padding-3-rem-lr padding-2-half-rem-tb lg-padding-2-rem-all md-padding-2-half-rem-tb md-padding-3-rem-lr">
                                <a href="blog-post-layout-02.html" class="alt-font font-weight-500 text-extra-medium text-extra-dark-gray text-green-hover d-block margin-15px-bottom">Computers are to design as microwaves are to cooking</a>
                                <p>Lorem ipsum is simply dummy text of printing and typesetting industry lorem ipsum been dummy...</p>
                            </div>
                        </div>
                    </li>
                    <!-- end blog item -->
                    <!-- start blog item -->
                    <li class="grid-item wow animate__fadeIn" data-wow-delay="0.4s">
                        <div class="blog-post border-radius-5px bg-white">
                            <div class="d-flex align-items-center font-weight-500 padding-30px-lr padding-15px-tb">
                                <a href="blog-masonry.html" class="text-small me-auto text-slate-blue text-green-hover">18 January 2020</a>
                                <a href="blog-post-layout-03.html" class="blog-like text-extra-small text-green-hover"><i class="far fa-heart"></i><span>30</span></a>
                                <a href="blog-post-layout-03.html" class="blog-comment text-extra-small text-green-hover"><i class="far fa-comment"></i><span>42</span></a>
                            </div>
                            <div class="blog-post-image">
                                <a href="blog-post-layout-03.html" title=""><img src="{{ asset('front/images/home-startup-blog-img-03.jpg')}}" alt=""></a>
                                <div class="alt-font blog-category"><a href="blog-masonry.html" class="text-uppercase text-green text-extra-dark-gray-hover">Design</a></div>
                            </div>
                            <div class="post-details padding-3-rem-lr padding-2-half-rem-tb lg-padding-2-rem-all md-padding-2-half-rem-tb md-padding-3-rem-lr">
                                <a href="blog-post-layout-03.html" class="alt-font font-weight-500 text-extra-medium text-extra-dark-gray text-green-hover d-block margin-15px-bottom">Fashion and interior design are one and the same</a>
                                <p>Lorem ipsum is simply dummy text of printing and typesetting industry lorem ipsum been dummy...</p>
                            </div>
                        </div>
                    </li>
                    <!-- end blog item -->
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end section -->

<section class="big-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-7 col-lg-8 col-md-10 text-center">
              
                <h2 class="alt-font font-weight-500 text-extra-dark-gray letter-spacing-minus-2px margin-50px-bottom md-margin-40px-bottom">
                    Get in Touch
                    
                  </h2>
                <span class="alt-font font-weight-500 text-extra-dark-gray text-uppercase letter-spacing-2px opacity-5 d-block margin-30px-bottom md-margin-20px-bottom">  Achieve better results with BACONI GROUP HOLDING</span>
               
                <a href="{{ route('contactPage') }}" class="btn btn-fancy btn-large btn-gradient-tan-geraldine btn-round-edge-small">Contact </a>
            </div>
        </div>
    </div>
</section>
@endsection