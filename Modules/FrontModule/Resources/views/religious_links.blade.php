@extends('frontmodule::layouts.master')

@section('content')
    <section>
        <div class="gap black-layer opc75">
            <div class="fixed-bg" style="background-image: url({{ url('images/config/'.$config['religious_links_background']) }});"></div>
            <div class="container">
                <div class="pg-tp-wrp text-center">
                    <div class="pg-tp-inr">
                        <h1 itemprop="headline">@lang('front.religious_links')</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('front.index') }}" title="" itemprop="url">@lang('front.home')</a></li>
                            <li class="breadcrumb-item active">@lang('front.religious_links')</li>
                        </ol>
                    </div>
                </div><!-- Page Top Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="gap">
            <div class="container">
                <div class="service-detail-wrp">
                    <div class="row">
                        <div class="col-md-9 col-sm-12 col-lg-9">
                            <div class="service-detail-desc">
                                <img src="{{ url('images/config/'.$config['religious_links_photo']) }}" alt="service-detail-img1.jpg" itemprop="image">
                                <p itemprop="description">{!! $config['religious_links'] !!}</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-lg-3">
                            <div class="sidebar-wrp">
                                <div class="widget">
                                    <h5 itemprop="headline">@lang('front.other_pages')</h5>
                                    <ul class="cat-lst">
{{--                                        <li><a href="#" title="" itemprop="url">@lang('front.relegion_link')</a></li>--}}
                                        <li><a href="#" title="" itemprop="url">@lang('front.your_share')</a></li>
                                        <li><a href="#" title="" itemprop="url">@lang('front.questions')</a></li>
                                        <li><a href="#" title="" itemprop="url">@lang('front.about_us')</a></li>
                                        <li><a href="#" title="" itemprop="url">@lang('front.contact')</a></li>
                                    </ul>
                                </div>
                                <div class="widget">
                                    <h5 itemprop="headline">@lang('front.recent_re_blogs')</h5>
                                    <div class="ltst-car lst-caus text-center owl-carousel">
                                        @foreach($recent_blogs as $blog)
                                            <div class="lst-cas">
                                                <img class="brd-rd5" src="{{ url('images/blog/'.$blog->photo) }}" style="width:255px;height:160px;" alt="lst-cas-img1.jpg" itemprop="image">
                                                <h6 itemprop="headline"><a href="#" title="" itemprop="url">{{ $blog->title }}</a></h6>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div><!-- Sidebar Wrap -->
                        </div>
                    </div>
                </div><!-- تفاصيل الخدمة Wrap -->
            </div>
        </div>
    </section>
@endsection
