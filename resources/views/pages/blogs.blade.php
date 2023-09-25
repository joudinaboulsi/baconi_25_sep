@extends('frontend.master')
@section('content')
<section class="half-section parallax" data-parallax-background-ratio="0.5" style="background-image:url('{{ asset('front/images/portfolio-bg2.jpg') }}');">
    <div class="container">
        <div class="row align-items-stretch justify-content-center extra-small-screen">
            <div class="col-12 col-xl-6 col-lg-7 col-md-8 page-title-extra-small text-center d-flex justify-content-center flex-column">
                {{-- <h1 class="alt-font text-gradient-sky-blue-pink margin-15px-bottom d-inline-block">Blog side image layout</h1> --}}
                <h2 class="text-extra-dark-gray alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom">Latest from our blog</h2>
            </div>
        </div>
    </div>
</section>
<!-- end page title -->
<!-- start section --> 
<section class="bg-light-gray pt-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-9 col-md-12 col-xl-10 blog-content">
                <div class="blog-list blog-side-image">
              @foreach($blogs as $blog)
                    <div class="blog-post bg-white box-shadow-medium margin-30px-bottom wow animate__fadeIn">
                        <div class="d-flex flex-column flex-md-row align-items-center">
                            <div class="blog-post-image sm-margin-25px-bottom">
                                <a href="{{route('blogDetailPage',$blog->id)}}" title=""><img src="{{ asset('assets/blog/'.$blog->image) }}" alt="" /></a>
                            </div>
                            <div class="post-details padding-4-half-rem-lr md-padding-2-half-rem-lr sm-no-padding">
                                <a href="blog-masonry.html" class="alt-font text-small text-fast-blue font-weight-500 text-uppercase d-inline-block margin-15px-bottom sm-margin-10px-bottom">{{ $blog->date }}</a>
                                <a href="{{route('blogDetailPage',$blog->id)}}" class="alt-font font-weight-500 text-extra-large text-extra-dark-gray d-block margin-20px-bottom sm-margin-10px-bottom">{{ $blog->title }}</a>
                                <p class="margin-seventeen-bottom sm-margin-25px-bottom">{!! $blog->text_blog !!}</p>
                                <div class="alt-font text-extra-small text-uppercase d-flex align-items-center sm-margin-10px-bottom">
                                    <img class="avtar-image" src="images/avtar15.jpg" alt="">
                                    <span>
                                        <span class="d-inline-block">By <a href="{{route('blogDetailPage',$blog->id)}}" class="text-extra-dark-gray">{{ $blog->by }}</a></span>
                                        <span class="separator bg-medium-gray"></span>
                                        {{-- <span class="d-inline-block">In <a href="blog-masonry.html" class="text-extra-dark-gray">Modern</a></span> --}}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- start pagination -->
                {{-- <div class="col-12 d-flex justify-content-center margin-7-half-rem-top sm-margin-5-half-rem-top wow animate__fadeIn">
                    <ul class="pagination pagination-style-01 text-small font-weight-500 align-items-center">
                        <li class="page-item"><a class="page-link" href="#"><i class="feather icon-feather-arrow-left icon-extra-small d-xs-none"></i></a></li>
                        <li class="page-item"><a class="page-link" href="#">01</a></li>
                        <li class="page-item active"><a class="page-link" href="#">02</a></li>
                        <li class="page-item"><a class="page-link" href="#">03</a></li>
                        <li class="page-item"><a class="page-link" href="#">04</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="feather icon-feather-arrow-right icon-extra-small  d-xs-none"></i></a></li>
                    </ul>
                </div> --}}
                <!-- end pagination -->
            </div>
        </div>
    </div>
</section>
@endsection