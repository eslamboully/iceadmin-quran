@extends('frontmodule::layouts.master')

@section('content')
    <section>
        <div class="gap black-layer opc75">
            <div class="fixed-bg" style="background-image: url({{ url('images/config/'.$config['religious_links_background']) }});"></div>
            <div class="container">
                <div class="pg-tp-wrp text-center">
                    <div class="pg-tp-inr">
                        <h1 itemprop="headline">{{ $service->title }}</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="" title="" itemprop="url">@lang('front.home')</a></li>
                            <li class="breadcrumb-item active">{{ $service->title }}</li>
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
                                <p itemprop="description">{!! $service->description !!}</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-lg-3">
                            <div class="sidebar-wrp">
                                <div class="widget">
                                    <h5 itemprop="headline">@lang('front.other_service')</h5>
                                    <ul class="cat-lst">
                                        @foreach($services as $serv)
                                            <li><a href="{{ route('front.service',['id' => $serv->id,'title' => str_replace(' ','-',$serv->title)]) }}" title="" itemprop="url">{{ $serv->title }}</a></li>
                                        @endforeach
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
                </div><!-- Service Detail Wrap -->
            </div>
        </div>
    </section>
@endsection
