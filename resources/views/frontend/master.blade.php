<!doctype html>
<html class="no-js" lang="en">
    
<!-- Mirrored from lithohtml.themezaa.com/home-startup.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Sep 2023 12:24:34 GMT -->
<head>
    {!! SEO::generate() !!}
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="author" content="Webneoo">
       
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
     

    
    
    
    
        <!-- favicon icon -->
        <link rel="shortcut icon" href="images/favicon.png">
        <link rel="apple-touch-icon" href="{{asset('front/images/apple-touch-icon-57x57.png')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{asset('front/images/apple-touch-icon-72x72.png')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{asset('front/images/apple-touch-icon-114x114.png')}}">
        <!-- style sheets and font icons  -->
        <link rel="stylesheet" type="text/css" href="{{asset('front/css/font-icons.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('front/css/theme-vendors.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('front/css/style.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('front/css/responsive.css')}}" />
        <!-- revolution slider -->
        <link rel="stylesheet" type="text/css" href="{{asset('front/revolution/css/settings.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('front/revolution/css/layers.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('front/revolution/css/navigation.css')}}">
        <style>
            .theme-demos .all-demo a, .theme-demos .buy-theme a{
                display: none
            }
        </style>
    </head>
    <body data-mobile-nav-style="classic">
        <!-- start header -->
        <header>
        @include('frontend.header')
        </header>
        <!-- end header -->
        <!-- start revolution slider -->
         @yield('content')
        <!-- start footer -->
        @include('frontend.footer')
        <!-- end footer -->
        <!-- start scroll to top -->
        <a class="scroll-top-arrow" href="javascript:void(0);"><i class="feather icon-feather-arrow-up"></i></a>
        <!-- end scroll to top -->
        <!-- javascript -->
        <script type="text/javascript" src="{{asset('front/js/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/js/theme-vendors.min.js')}}"></script>
        <!-- revolution js files -->
        <script type="text/javascript" src="{{asset('front/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
        
        <script type="text/javascript" src="{{asset('front/js/main.js')}}"></script>


        <!-- slider revolution 5.0 extensions (load extensions only on local file systems ! the following part can be removed on server for on demand loading) --> 
        <script type="text/javascript" src="{{asset('front/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>

        <script type="text/javascript">
var revapi263,
        tpj;
(function () {
    if (tpj === undefined) {
        tpj = jQuery;
        if ("off" == "on")
            tpj.noConflict();
    }
    if (!/loaded|interactive|complete/.test(document.readyState))
        document.addEventListener("DOMContentLoaded", onLoad);
    else
        onLoad();
    function onLoad() {
        if (tpj("#rev_slider_26_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_26_1");
        } else {
            var revOffset = tpj(window).width() <= 991 ? '73px' : '';
            revapi263 = tpj("#rev_slider_26_1").show().revolution({
                sliderType: "standard",
                jsFileLocation: "revolution/js/",
                sliderLayout: "fullscreen",
                dottedOverlay: "none",
                delay: 4500,
                navigation: {
                    keyboardNavigation: "on",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    mouseScrollReverse: "default",
                    onHoverStop: "off",
                    touch: {
                        touchenabled: "on",
                        touchOnDesktop: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                    arrows: {
                        enable: true,
                        style: 'ares',
                        tmp: '',
                        rtl: false,
                        hide_onleave: false,
                        hide_onmobile: true,
                        hide_under: 767,
                        hide_over: 9999,
                        hide_delay: 0,
                        hide_delay_mobile: 0,

                        left: {
                            container: 'slider',
                            h_align: 'left',
                            v_align: 'center',
                            h_offset: 60,
                            v_offset: 0
                        },

                        right: {
                            container: 'slider',
                            h_align: 'right',
                            v_align: 'center',
                            h_offset: 60,
                            v_offset: 0
                        }
                    },
                    bullets: {
                        enable: true,
                        style: 'zeus',
                        direction: 'horizontal',
                        rtl: false,

                        container: 'slider',
                        h_align: 'center',
                        v_align: 'bottom',
                        h_offset: 0,
                        v_offset: 30,
                        space: 7,

                        hide_onleave: false,
                        hide_onmobile: false,
                        hide_under: 0,
                        hide_over: 767,
                        hide_delay: 200,
                        hide_delay_mobile: 1200
                    },
                },
                responsiveLevels: [1240, 1025, 778, 480],
                visibilityLevels: [1920, 1500, 1025, 768],
                gridwidth: [1200, 991, 778, 480],
                gridheight: [1025, 1366, 1025, 868],
                lazyType: "none",
                shadow: 0,
                spinner: "spinner4",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "on",
                fullScreenAutoWidth: "on",
                fullScreenAlignForce: "off",
                fullScreenOffsetContainer: "",
                fullScreenOffset: revOffset,
                disableProgressBar: "on",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLimit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }
        ; /* END OF revapi call */
    }
    ; /* END OF ON LOAD FUNCTION */
}()); /* END OF WRAPPING FUNCTION */
        </script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-93NGDNYKNY"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'G-93NGDNYKNY');
        </script>


    </body>

<!-- Mirrored from lithohtml.themezaa.com/home-startup.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Sep 2023 12:27:59 GMT -->
</html>