@extends('frontmodule::layouts.master')

@section('content')
    <section>
        <div class="gap black-layer opc75">
            <div class="fixed-bg" style="background-image: url({{ url('images/config/'.$config['religious_links_background']) }});"></div>
            <div class="container">
                <div class="pg-tp-wrp text-center">
                    <div class="pg-tp-inr">
                        <h1 itemprop="headline">{{ $blog->title }}</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="" title="" itemprop="url">@lang('front.home')</a></li>
{{--                            <li class="breadcrumb-item active">@lang('front.blog')</li>--}}
                            <li class="breadcrumb-item active">{{ $blog->title }}</li>
                        </ol>
                    </div>
                </div><!-- Page Top Wrap -->
            </div>
        </div>
    </section>

    <section>
        <div class="gap">
            <div class="container">
                <div class="blog-detail-wrp">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="blog-detail">
                                <div class="blog-detail-inf brd-rd5">
                                    <img src="{{ asset('images/blog/'.$blog->photo) }}" alt="blog-detail-img.jpg" itemprop="image">
                                    <div class="blog-detail-inf-inr">
                                        <ul class="pst-mta">
{{--                                            <li><i class="far fa-calendar-alt theme-clr"></i>Aug 14, 2018</li>--}}
{{--                                            <li><i class="far fa-user theme-clr"></i>Walter Jack</li>--}}
{{--                                            <li><i class="far fa-clock theme-clr"></i>9:00AM - 4:00PM</li>--}}
                                        </ul>
                                    </div>
                                </div>
                                <div class="blog-detail-desc">
                                    <p itemprop="description">{!! $blog->description !!}</p>
                                    <div class="pst-shr-tgs">
                                        <div class="scl1 float-left">
{{--                                            <span>Share This:</span>--}}
{{--                                            <a href="#" title="Twitter" itemprop="url" target="_blank"><i class="fab fa-twitter"></i></a>--}}
{{--                                            <a href="#" title="Facebook" itemprop="url" target="_blank"><i class="fab fa-facebook-f"></i></a>--}}
{{--                                            <a href="#" title="Linkedin" itemprop="url" target="_blank"><i class="fab fa-linkedin-in"></i></a>--}}
{{--                                            <a href="#" title="Google Plus" itemprop="url" target="_blank"><i class="fab fa-google-plus-g"></i></a>--}}
{{--                                            <a href="#" title="Youtube" itemprop="url" target="_blank"><i class="fab fa-youtube"></i></a>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- تفاصيل المدونة Wrap -->
            </div>
        </div>
    </section>
@endsection
