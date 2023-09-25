<footer class="footer-dark bg-slate-blue">
    <div class="footer-top padding-six-top lg-padding-eight-tb md-padding-50px-tb">
        <div class="container">
            <div class="row">
                <!-- start footer column -->
                <div class="col-12 col-xl-3 col-sm-6 order-sm-1 order-xl-0 lg-margin-50px-bottom xs-margin-25px-bottom">
                    <a href="index-2.html" class="footer-logo margin-40px-bottom d-block"><img src="{{ asset('assets/'.app('contact')->logo) }}" data-at2x="{{ asset('assets/'.app('contact')->logo) }}" class="max-h-inherit"></a>
                    <span class="alt-font font-weight-300 margin-50px-bottom text-extra-large line-height-36px letter-spacing-minus-1-half d-inline-block w-85">{{ app('contact')->desc }}</span>
                </div>
                <!-- end footer column -->
                <!-- start footer column -->
                <div class="col-12 col-xl-2 offset-xl-1 col-sm-6 order-sm-3 order-xl-0 xs-margin-25px-bottom">
                    <span class="alt-font font-weight-500 d-block text-white text-uppercase letter-spacing-2px margin-20px-bottom xs-margin-10px-bottom">SiteMap</span>
                    <ul>
                        <li><a href="{{ route('aboutPage') }} class="text-white-hover">About</a></li>
                        <li><a href="{{ route('servicePage') }}" class="text-white-hover">Services</a></li>
                        <li><a href="{{ route('companiesPage') }}" class="text-white-hover">Companies</a></li>
                        <li><a href="{{ route('blogPage') }}" class="text-white-hover">Blog</a></li>
                       
                       

                        <li><a href="{{ route('contactPage') }}" class="text-white-hover">Contact</a></li>
                    </ul>
                </div>
                
                <!-- end footer column -->
                <!-- start footer column -->
                <div class="col-12 col-xl-2 offset-xl-1 col-sm-6 order-sm-4 order-xl-0 xs-margin-25px-bottom">
                    <span class="alt-font font-weight-500 d-block text-white text-uppercase letter-spacing-2px margin-20px-bottom xs-margin-10px-bottom">Services</span>
                    <ul>                           
                        <li><a href="{{ route('servicePage') }}" class="text-white-hover">Transportation and Logistics</a></li>
                        <li><a href="{{ route('servicePage') }}" class="text-white-hover">Protection & Indemnity</a></li>
                        <li><a href="{{ route('servicePage') }}" class="text-white-hover">Consultancy</a></li>
                       
                    </ul>
                </div>
                <!-- end footer column -->
                <!-- start footer column -->
                <div class="col-12 col-xl-2 offset-xl-1 col-sm-6 order-sm-2 order-xl-0 lg-margin-50px-bottom xs-no-margin-bottom">
                    <span class="alt-font font-weight-500 d-block text-white text-uppercase letter-spacing-2px margin-30px-bottom xs-margin-25px-bottom">Follow us</span>
                    <div class="social-icon-style-12">
                        <ul class="extra-small-icon light">
                            <li><a class="facebook" href="{{ app('contact')->fb }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            {{-- {{-- <li><a class="dribbble" href="http://www.dribbble.com/" target="_blank"><i class="fab fa-dribbble"></i></a></li> --}}
                            <li><a class="twitter" href="{{ app('contact')->link }}" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a class="instagram" href="{{ app('contact')->insta }}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- end footer column -->
            </div>
        </div>
    </div>
    <div class="footer-bottom padding-30px-tb border-top border-color-white-transparent">
        <div class="container"> 
            <div class="row align-items-center">
                <div class="col-12 col-md-3">
                 
                </div>
                <div class="col-12 col-md-6 text-center last-paragraph-no-margin sm-margin-20px-bottom">
                    <p>&copy;<?php echo date ('Y'); ?> Made by <a href="https://www.webneoo.com/" target="_blank">Webneoo</a></p>
                </div>
                <div class="col-12 col-md-3 text-center text-md-end">
                  
                </div>
            </div>
        </div>
    </div> 
</footer>