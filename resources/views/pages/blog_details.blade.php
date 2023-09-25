@extends('frontend.master')
@section('content')
<style>
    .tag-cloud span{
        display: inline-block;
    text-align: center;
    font-size: 13px;
    line-height: 20px;
    margin: 0 6px 10px 0;
    padding: 5px 18px 6px;
    border-radius: 8px;
    border: 1px solid #606060;
    }
</style>

@foreach($blogs as $blog)
<section class="blog-right-side-bar">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8 right-sidebar md-margin-60px-bottom sm-margin-40px-bottom">
                <div class="row">
                    <div class="col-12 blog-details-text last-paragraph-no-margin margin-6-rem-bottom">
                        <ul class="list-unstyled margin-2-rem-bottom">
                            <li class="d-inline-block align-middle margin-25px-right"><i class="feather icon-feather-calendar text-fast-blue margin-10px-right"></i><a href="blog-grid.html">{{ $blog->date }}</a></li>
                            {{-- <li class="d-inline-block align-middle margin-25px-right"><i class="feather icon-feather-folder text-fast-blue margin-10px-right"></i><a href="blog-grid.html">Creative</a></li> --}}
                            <li class="d-inline-block align-middle"><i class="feather icon-feather-user text-fast-blue margin-10px-right"></i>By <a href="blog-grid.html">{{ $blog->by }}</a></li>
                        </ul>
                        <div class="col-12 col-md-10 text-center text-md-start sm-margin-10px-bottom px-0">
                            <div class="tag-cloud">
                                @if($blog->t1)
                           <span>{{ $blog->t1 }}</span>  
                           @endif
                           @if($blog->t2)
                           <span>{{ $blog->t2 }}</span>  
                           @endif
                           @if($blog->t3)
                           <span>{{ $blog->t3 }}</span>  
                           @endif
                           @if($blog->t4)
                           <span>{{ $blog->t4 }}</span>  
                           @endif
                           @if($blog->t5)
                           <span>{{ $blog->t5 }}</span>  
                           @endif
                           @if($blog->t6)
                           <span>{{ $blog->t6 }}</span>  
                           @endif
                           @if($blog->t7)
                           <span>{{ $blog->t7 }}</span>  
                           @endif
                           @if($blog->t8)
                           <span>{{ $blog->t8 }}</span>  
                           @endif
                                
                            </div>
                        </div>
                        <h5 class="alt-font font-weight-500 text-extra-dark-gray margin-4-half-rem-bottom pt-5">Asia-North Europe rates sinking again as GRIs 'run out of steam</h5>
                        <img src="{{ asset('assets/blog/'.$blog->image) }}" alt="" class="w-100 border-radius-6px margin-4-half-rem-bottom">
                      
                        
                       <p>{!! $blog->text_blog !!}</p>
                       @if($blog->subtitle)
                       <h5 class="alt-font font-weight-500 text-extra-dark-gray margin-4-half-rem-bottom pt-5">{{ $blog->subtitle }}</h5>
                       @endif
                       <p>{!! $blog->description !!}</p>
                 
                       <a href="{{ $blog->url }}" class="btn btn-large btn-dark-gray btn-round-edge d-table d-lg-inline-block lg-margin-15px-bottom md-margin-auto-lr">Visit Website</a>
                 
                    </div>

              
                    
                    <section class="padding-100px-tb md-padding-75px-tb sm-padding-50px-tb wow animate__fadeIn">
                        <div class="container">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-12 col-xl-3 col-lg-4 col-md-5 col-sm-6 text-center text-sm-end xs-margin-20px-bottom">
                                    <span class="alt-font font-weight-500 text-extra-large text-extra-dark-gray d-block letter-spacing-minus-1-half">Connect with social media</span>
                                </div>
                                <div class="col-12 col-md-2 d-none d-md-block">
                                    <span class="w-100 h-1px d-block bg-medium-gray"></span>
                                </div>
                                <div class="col-12 col-xl-3 col-lg-4 col-md-5 col-sm-6 text-center text-sm-start elements-social social-icon-style-09 mx-auto">
                                    <ul class="small-icon">
                                      
                                        <li class="wow animate__fadeIn" data-wow-delay="0.2s"><a class="facebook" href="{{ app('contact')->fb }}" target="_blank"><i class="fab fa-facebook-f"></i><span></span></a></li>
                                        {{-- <li class="wow animate__fadeIn" data-wow-delay="0.3s"><a class="twitter" href="http://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i><span></span></a></li> --}}
                                        <li class="wow animate__fadeIn" data-wow-delay="0.4s"><a class="instagram" href="{{ app('contact')->insta }}" target="_blank"><i class="fab fa-instagram"></i><span></span></a></li>
                                        <li class="wow animate__fadeIn" data-wow-delay="0.5s"><a class="linkedin" href="{{ app('contact')->link }}" target="_blank"><i class="fab fa-linkedin-in"></i><span></span></a></li>
                                        {{-- <li class="wow animate__fadeIn" data-wow-delay="0.6s"><a class="behance" href="http://www.behance.com/" target="_blank"><i class="fab fa-behance"></i><span></span></a></li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>  
                </div>
            </div>
            <!-- start sidebar -->
            <aside class="col-12 col-xl-3 offset-xl-1 col-lg-4 col-md-7 blog-sidebar lg-padding-4-rem-left md-padding-15px-left">
                <div class="d-inline-block w-100 margin-5-rem-bottom">
                    <span class="alt-font font-weight-500 text-large text-extra-dark-gray d-block margin-25px-bottom">Search posts</span>
                    <form id="search-form" role="search" method="get" action="{{ route('seacrhBlog') }}">
                    @csrf
                        <div class="position-relative">
                            <input class="search-input medium-input border-color-medium-gray border-radius-4px mb-0"  name="query" placeholder="Enter your keywords..."  value="" type="text" autocomplete="off" />
                            <button type="submit" class="bg-transparent btn text-fast-blue position-absolute right-5px top-8px text-medium md-top-8px sm-top-10px search-button"><i class="feather icon-feather-search ms-0"></i></button>
                        </div> 
                    </form>
                </div>
                <div class="border-all border-color-medium-gray border-radius-4px padding-40px-all text-center margin-5-rem-bottom xs-margin-35px-bottom">
                    <a href="about-me.html"><img src="images/avtar29.jpg" alt="" class="rounded-circle margin-5px-bottom w-100px d-block mx-auto"/></a>
                    <a href="blog-grid.html" class="text-extra-dark-gray alt-font font-weight-500 margin-20px-top d-inline-block text-medium">Baconi Group</a>
                    {{-- <span class="text-medium d-block line-height-18px margin-20px-bottom">Co-founder</span> --}}
                    <p>{{ app('contact')->desc }}</p>
                    <div class="social-icon-style-02 text-center">
                        <ul class="extra-small-icon">
                            <li class="mx-0"><a class="facebook" href="{{ app('contact')->fb }}" target="_blank"><i class="fab fa-facebook-f"></i><span></span></a></li>
                            <li class="mx-0"><a class="dribbble" href="{{ app('contact')->link }} target="_blank"><i class="fab fa-linkedin"></i><span></span></a></li>
                            {{-- <li class="mx-0"><a class="twitter" href="http://twitter.com/" target="_blank"><i class="fab fa-twitter"></i><span></span></a></li> --}}
                            <li class="mx-0"><a class="instagram" href="{{ app('contact')->insta }}" target="_blank"><i class="fab fa-instagram"></i><span></span></a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="margin-5-rem-bottom xs-margin-35px-bottom wow animate__fadeIn">
                    <span class="alt-font font-weight-500 text-large text-extra-dark-gray d-block margin-35px-bottom">Services</span>
                    <ul class="list-style-07 list-unstyled">
                        @foreach($services as $service)
                        <li><a href="{{ route('servicePage') }}">{{ $service->title_tab1 }}</a></li>
                        <li><a href="{{ route('servicePage') }}">{{ $service->title_tab2 }}
</a></li>
                        <li><a href="{{ route('servicePage') }}">{{ $service->title_tab3 }}</a></li>
                     @endforeach
                    </ul>
                </div>
                <div class="margin-5-rem-bottom xs-margin-35px-bottom wow animate__fadeIn">
                    <span class="alt-font font-weight-500 text-large text-extra-dark-gray d-block margin-35px-bottom">Recent posts</span>
                    <ul class="latest-post-sidebar position-relative">
                        
                        @foreach($blogs as $b)
                        <li class="d-flex wow animate__fadeIn" data-wow-delay="0.6s">
                            <figure class="flex-shrink-0">
                                <a href="{{ route('blogDetailPage',$b->id) }}"><img class="border-radius-3px" src="{{ asset('assets/blog/'.$b->image) }}" alt=""></a>
                            </figure>
                            <div class="media-body flex-grow-1">
                                <a href="{{ route('blogDetailPage',$b->id) }}" class="font-weight-500 text-extra-dark-gray d-inline-block margin-five-bottom md-margin-two-bottom">{{ $blog->title }}</a>
                                <span class="text-medium d-block line-height-22px">{!! Illuminate\Support\Str::limit( $b->text_blog  , 30 )!!}</span>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
                
            </aside>
            <!-- end sidebar -->
        </div>
    </div>
</section>
@endforeach
<!-- end blog content section -->
<!-- start section -->

<section class="bg-light-gray">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-5 col-md-6 text-center margin-5-rem-bottom wow animate__fadeIn">
              
                <h5 class="alt-font font-weight-500 text-extra-dark-gray letter-spacing-minus-1px">Related posts</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-12 blog-content">
                <ul class="blog-clean blog-wrapper grid grid-loading grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large">
                    <li class="grid-sizer"></li>
                    <!-- start blog item -->
                    @foreach($latest_blogs as $blog)
                    <li class="grid-item wow animate__fadeIn">
                        <div class="blog-post text-center border-radius-6px bg-white box-shadow box-shadow-large-hover">
                            <div class="blog-post-image bg-gradient-fast-blue-purple">
                                <a href="{{ route('blogDetailPage',$blog->id) }}"><img src="{{ asset('assets/blog/'.$blog->image) }}" alt="">
                                    <div class="blog-rounded-icon bg-white border-color-white absolute-middle-center">
                                        <i class="feather icon-feather-arrow-right text-extra-dark-gray icon-extra-small"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="post-details padding-30px-all xl-padding-25px-lr">
                                <a href="{{ route('blogDetailPage',$blog->id) }}" class="post-author text-medium text-uppercase">{{ $blog->date }}</a>
                                <a href="{{ route('blogDetailPage',$blog->id) }}" class="text-extra-dark-gray font-weight-500 alt-font d-block">Containerised batteries a major maritime innovation: AYK Energy</a>
                            </div>
                        </div>
                    </li>
                    <!-- end blog item -->
                    @endforeach
                    <!-- end blog item -->
                </ul>
            </div>
        </div>
    </div>
</section>



    @endsection