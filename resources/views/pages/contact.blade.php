@extends('frontend.master')
@section('content')

@foreach($contact as $c)
     <!-- start banner section -->
     <section class="py-0 parallax overlap-height" data-parallax-background-ratio="0.5" style="background-image: url('{{ asset('assets/contact/'.$c->background) }}');">
        <div class="opacity-light bg-medium-slate-blue"></div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 position-relative text-center one-fourth-screen d-flex flex-column justify-content-center sm-h-350px">
                <span class="text-uppercase text-small alt-font letter-spacing-5px text-white d-inline-block margin-20px-bottom font-weight-500 sm-margin-10px-bottom">{{ $c->title_header }}</span>
                <h2 class="alt-font text-white font-weight-600 text-uppercase d-block mb-0">Contact us</h2>
            </div>
        </div>
    </section>
    <!-- end banner section -->
    <!-- start section -->
    <section class="overflow-visible pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 text-center overlap-section">
                    <div class="overlap-section-inner">
                        <img class="rounded-circle sm-w-30 xs-w-40 border-all border-width-12px border-color-white box-shadow-extra-large" src="{{ asset('assets/contact/'.$c->logo_contact)}}" alt=""/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
<section class="big-section bg-light-gray wow animate__fadeIn">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center margin-five-bottom">
                <h6 class="alt-font text-extra-dark-gray font-weight-500 wow animate__fadeIn">{{ $c->title_page }}</h6>
            </div>
        </div>
        <div class="row border-top border-width-1px border-color-medium-gray">
            <div class="col-12 p-0 tab-style-07">
                <!-- start tab navigation -->
                <ul class="nav nav-tabs justify-content-center text-center text-uppercase font-weight-500 alt-font margin-10-rem-bottom lg-margin-8-rem-bottom border-bottom border-color-medium-gray md-margin-6-rem-bottom">
                    <li class="nav-item"><a data-bs-toggle="tab" href="#turnaroundconsulting" class="nav-link active"> Get In Touch </a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#strategicplanning">career</a></li>
                    {{-- <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#investmentplanning">Investment planning</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#expensereporting">Expense reporting</a></li> --}}
                </ul>
                <!-- end tab navigation -->
            </div>
        </div>
        <div class="container">
            <div class="tab-content">
                <!-- start tab item -->
                <div id="turnaroundconsulting" class="tab-pane fade in active show">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-10">
                            <div class="row justify-content-center">
                                <div class="col-12 col-xl-6 col-lg-7 text-center margin-4-half-rem-bottom md-margin-3-rem-bottom">
                                    
                                    <h4 class="alt-font font-weight-600 text-extra-dark-gray">{{ $c->title_contact }}</h4>
                                    <span class="alt-font letter-spacing-minus-1-half text-extra-medium d-block margin-5px-bottom">{{ $c->subtitle_contact }}</span>
                                </div>
                                <div class="col-12">
                                    <!-- start contact form -->
                                    <form action="{{ route('sendData') }}" method="post">
                                        @csrf
                                        <div class="row row-cols-1 row-cols-md-2">
                                            <div class="col margin-4-rem-bottom sm-margin-25px-bottom">
                                                <input class="medium-input bg-white margin-25px-bottom required" type="text" name="name" placeholder="Your name">
                                                <input class="medium-input bg-white margin-25px-bottom required" type="email" name="email" placeholder="Your email address">
                                                <input class="medium-input bg-white mb-0" type="tel" name="phone" placeholder="Your mobile">
                                            </div>
                                            <div class="col margin-4-rem-bottom sm-margin-10px-bottom">
                                                <textarea class="medium-textarea h-200px bg-white" name="message" placeholder="Your message"></textarea>
                                            </div>
                                            {{-- <div class="col text-start sm-margin-30px-bottom">
                                                <input type="checkbox" name="terms_condition" id="terms_condition" value="1" class="terms-condition d-inline-block align-top w-auto mb-0 margin-5px-top margin-10px-right">
                                                <label for="terms_condition" class="text-small d-inline-block align-top w-85">I accept the terms & conditions and I understand that my data will be hold securely in accordance with the <a href="privacy.html" target="_blank" class="text-decoration-underline text-extra-dark-gray">privacy policy</a>.</label>
                                            </div> --}}
                                            <div class="col text-start sm-margin-30px-bottom">
                                                <input type="hidden" name="redirect" value="">
                                                <button class="btn btn-medium btn-gradient-light-purple-light-orange mb-0 submit" type="submit">Send Message</button>
                                            </div>
                                        </div>
                                        <div class="form-results d-none"></div>
                                    </form>
                                    <!-- end contact form -->
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- end tab item -->
                <!-- start tab item -->
                <div id="strategicplanning" class="tab-pane fade">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-10">
                            <div class="row justify-content-center">
                                <div class="col-12 col-xl-6 col-lg-7 text-center margin-4-half-rem-bottom md-margin-3-rem-bottom">

                                    <h4 class="alt-font font-weight-600 text-extra-dark-gray">{{ $c->title_career }}</h4>
                                    <span class="alt-font letter-spacing-minus-1-half text-extra-medium d-block margin-5px-bottom">{{ $c->subtitle_career }}</span>
                                </div>
                                <div class="col-12">
                                    <!-- start contact form -->
                                    <form action="{{ route('sendDataCareer') }}" method="post">
                                        <div class="row row-cols-1 row-cols-md-2">
                                            <div class="col margin-4-rem-bottom sm-margin-25px-bottom">
                                                <input class="medium-input bg-white margin-25px-bottom required" type="text" name="name" placeholder="Your name">
                                                <input class="medium-input bg-white margin-25px-bottom required" type="email" name="email" placeholder="Your email address">
                                               
                                                <input class="medium-input bg-white margin-25px-bottom" type="tel" name="phone" placeholder="Your mobile">
                                                <input class="medium-input bg-whiterequired mb-0" type="file" name="file" placeholder="Your email address">
                                            </div>
                                            <div class="col margin-4-rem-bottom sm-margin-10px-bottom">
                                                <textarea class="medium-textarea h-200px bg-white" name="message" placeholder="Your message"></textarea>
                                            </div>
                                            {{-- <div class="col text-start sm-margin-30px-bottom">
                                                <input type="checkbox" name="terms_condition" id="terms_condition" value="1" class="terms-condition d-inline-block align-top w-auto mb-0 margin-5px-top margin-10px-right">
                                                <label for="terms_condition" class="text-small d-inline-block align-top w-85">I accept the terms & conditions and I understand that my data will be hold securely in accordance with the <a href="privacy.html" target="_blank" class="text-decoration-underline text-extra-dark-gray">privacy policy</a>.</label>
                                            </div> --}}
                                            <div class="col text-start sm-margin-30px-bottom">
                                                <input type="hidden" name="redirect" value="">
                                                <button class="btn btn-medium btn-gradient-light-purple-light-orange mb-0 submit" type="submit">Send Message</button>
                                            </div>
                                        </div>
                                        <div class="form-results d-none"></div>
                                    </form>
                                    <!-- end contact form -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end tab item -->
           
            </div>
        </div>
    </div>
</section>

        <!-- start section -->
        <section class="bg-extra-dark-gray fancy-box-background big-section cover-background" style="background-image: url('{{ asset('assets/contact/'.$c->image_address) }}');">
            <div class="opacity-very-light opacity-0-half z-index-minus-1 bg-gradient-sky-blue-pink"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-7 col-md-9 text-center margin-5-half-rem-bottom sm-margin-3-half-rem-bottom">
                        <span class="alt-font text-extra-medium text-white opacity-8 margin-10px-bottom d-block">{{ $c->title_address }}</span>
                        <h4 class="alt-font text-white font-weight-600">{{ $c->subtitle_address  }}</h4>
                    </div>
                </div>
                <div class="row align-items-center justify-content-center">
                    <!-- start fancy text box item -->
                    <div class="col-12 col-lg-4 col-md-6 col-sm-8 fancy-box-item md-margin-30px-bottom xs-margin-15px-bottom">
                        {{-- <div class="bg-banner-image cover-background" style="background-image: url('{{ asset('front/images/contact-us-classic-bg-1.jpg') }}');"><div class="opacity-medium bg-gradient-sky-blue-pink"></div></div> --}}
                        <div class="feature-box feature-box-left-icon-middle feature-box-dark-hover padding-4-rem-lr padding-3-rem-tb bg-white border-radius-5px overflow-hidden lg-padding-3-rem-lr">
                            <div class="feature-box-icon margin-15px-right">
                                <img src="{{ asset('assets/contact/'.$c->icon_lb) }}" class="w-35px d-block" alt="contact us img flag-01" />
                            </div>
                            <div class="feature-box-content">
                                <span class="alt-font d-block font-weight-500 text-extra-dark-gray">{{ $c->title1 }}</span>
                            </div>
                            <div class="bg-medium-gray margin-20px-tb w-100 h-1px"></div>
                            <p class="margin-10px-bottom w-85 lg-w-100 sm-w-75 xs-w-85">{{ $c->location1 }}</p>
                            @if($c->phone1)
                            <span class="d-block font-weight-500 margin-10px-top text-extra-dark-gray line-height-20px w-100">Phone: {{ $c->phone1 }}</span>
                           @endif
                            <a href="mailto:{{ $c->email1 }}" class="text-fast-blue text-decoration-underline">{{ $c->email1 }}</a>
                            <div class="feature-box-overlay bg-extra-dark-gray"></div>
                        </div>
                    </div>
                    <!-- end fancy text box item -->
                    <!-- start fancy text box item -->
                    <div class="col-12 col-lg-4 col-md-6 col-sm-8 fancy-box-item md-margin-30px-bottom xs-margin-15px-bottom">
                        {{-- <div class="bg-banner-image cover-background" style="background-image: url({{ asset('front/images/contact-us-classic-02.jpg')}})"><div class="opacity-medium bg-gradient-sky-blue-pink"></div></div> --}}
                        <div class="feature-box feature-box-left-icon-middle feature-box-dark-hover padding-4-rem-lr padding-3-rem-tb bg-white border-radius-5px overflow-hidden lg-padding-3-rem-lr">
                            <div class="feature-box-icon margin-15px-right">
                                <img src="{{ asset('assets/contact/'.$c->icon_cyprus)}}" class="w-35px d-block" alt="contact us img flag-02" />
                            </div>
                            <div class="feature-box-content">
                                <span class="alt-font d-block font-weight-500 text-extra-dark-gray">{{ $c->title2 }}</span>
                            </div>
                            <div class="bg-medium-gray margin-20px-tb w-100 h-1px"></div>
                            <p class="margin-10px-bottom w-85 lg-w-100 sm-w-75 xs-w-85">{{ $c->location2 }}</p>
                            @if($c->phone2)
                            <span class="d-block font-weight-500 margin-10px-top text-extra-dark-gray line-height-20px w-100">Phone: {{ $c->phone2}}</span>
                           @endif
                            <a href="{{ $c->email2 }}" class="text-fast-blue text-decoration-underline"></a>{{ $c->email2 }}
                            <div class="feature-box-overlay bg-extra-dark-gray"></div>
                        </div>
                    </div>
                    <!-- end fancy text box item -->
                    <!-- start fancy text box item -->
                    <div class="col-12 col-lg-4 col-md-6 col-sm-8 fancy-box-item">
                        {{-- <div class="bg-banner-image cover-background" style="background-image: url(images/contact-us-classic-03.jpg)"><div class="opacity-medium bg-gradient-sky-blue-pink"></div></div> --}}
                        <div class="feature-box feature-box-left-icon-middle feature-box-dark-hover padding-4-rem-lr padding-3-rem-tb bg-white border-radius-5px overflow-hidden lg-padding-3-rem-lr">
                            <div class="feature-box-icon margin-15px-right">
                                <img src="{{ asset('assets/contact/'.$c->icon_jordan)}}" class="w-35px d-block" alt="contact us img flag-03" />
                            </div>
                            <div class="feature-box-content">
                                <span class="alt-font d-block font-weight-500 text-extra-dark-gray">{{ $c->title3 }}
                                </span>
                            </div>
                            <div class="bg-medium-gray margin-20px-tb w-100 h-1px"></div>
                            <p class="margin-10px-bottom w-85 lg-w-100 sm-w-75 xs-w-85">{{ $c->location3 }}</p>
                            @if($c->phone3)
                            <span class="d-block font-weight-500 margin-10px-top text-extra-dark-gray line-height-20px w-100">Phone: {{ $c->phone3}}</span>
                           @endif
                            <a href="mailto:{{ $c->email3 }}" class="text-fast-blue text-decoration-underline">{{ $c->email3 }}</a>
                            <div class="feature-box-overlay bg-extra-dark-gray"></div>
                        </div>
                    </div>
                    <!-- end fancy text box item -->
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="padding-100px-tb md-padding-75px-tb sm-padding-50px-tb wow animate__fadeIn">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-xl-3 col-lg-4 col-md-5 col-sm-6 text-center text-sm-end xs-margin-20px-bottom">
                        <span class="alt-font font-weight-500 text-extra-large text-extra-dark-gray d-block letter-spacing-minus-1-half">Connect with social media</span>
                    </div>
                    <div class="col-12 col-md-2 d-none d-md-block">
                        <span class="w-100 h-1px d-block bg-medium-gray"></span>
                    </div>
                    <div class="col-12 col-xl-3 col-lg-4 col-md-5 col-sm-6 social-icon-style-02 text-center text-sm-start">
                        <ul class="small-icon">
                            @if(app('contact')->fb )
                            <li><a class="facebook text-extra-dark-gray text-sm-start" href="{{ app('contact')->fb }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                          @endif
                        @if(app('contact')->insta)
                          
                            {{-- <li><a class="twitter text-extra-dark-gray text-sm-start" href="http://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li> --}}
                            <li><a class="instagram text-extra-dark-gray text-sm-start" href="{{ app('contact')->insta }}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                           @endif
                           @if(app('contact')->link)
                           
                           
                            <li><a class="linkedin text-extra-dark-gray text-sm-start" href="{{ app('contact')->link }}" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
          @endif
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        
        @endforeach
        <!-- end section -->
        <!-- start section -->
        <section class="p-0 wow animate__fadeIn">
            <div class="container-fluid">
                <div class="row">
                    <div class="col h-600px p-0 md-h-450px xs-h-300px">
                        {{-- <iframe class="w-100 h-100 filter-grayscale-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.843821917424!2d144.956054!3d-37.817127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1427947693651"></iframe> --}}
                        <section  class="w-100 h-100 filter-grayscale-100" id="google-map" class="gmap"></section>
                   
                    </div>

                </div>
            </div>
        </section>

      
        <!-- end section -->

        <script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyBBWmuzra9J1f1PyeLLxEdjUy5gHzHQNyc"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.gmap.js') }}"></script>
        
        <script type="text/javascript">
            $('#google-map').gMap({
                address: 'Jordan Star National Park',
                maptype: 'ROADMAP',
                zoom: 6,
                markers: [
                    {
                        address: "Beirut",
                        html: "Beirut, Lebanon"
                    },
                    {
                        address: "Tripoli lebanon",
                        html: "Tripoli, Lebanon"
                    },
                    {
                        address: "Amman",
                        html: "Amman, Jordan"
                    },
                    {
                        address: "Aqaba",
                        html: "Aqaba, Jordan"
                    },
                    {
                        address: "Nicosia",
                        html: "Nicosia, Cyprus"
                    }
                ],
                scrollwheel: true,
                controls: {
                    panControl: true,
                    zoomControl: true,
                    mapTypeControl: false,
                    scaleControl: false,
                    streetViewControl: false,
                    overviewMapControl: false
                }
            });
        </script>
      
@endsection