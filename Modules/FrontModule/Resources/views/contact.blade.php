@extends('frontmodule::layouts.master')

@section('content')
    <section>
        <div class="gap black-layer opc75">
            <div class="fixed-bg" style="background-image: url({{ url('images/config/'.$config['religious_links_background']) }});"></div>
            <div class="container">
                <div class="pg-tp-wrp text-center">
                    <div class="pg-tp-inr">
                        <h1 itemprop="headline">@lang('front.contact')</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('front.index') }}" title="" itemprop="url">@lang('front.home')</a></li>
                            <li class="breadcrumb-item active">@lang('front.contact')</li>
                        </ol>
                    </div>
                </div><!-- Page Top Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="gap">
            <div class="container">
                <div class="sec-tl اتصل-cont text-center">
                    <span class="theme-clr">@lang('front.call_us')</span>
                    <h2 itemprop="headline">@lang('front.contact')</h2>
                </div>
                <div class="cnt-frm text-center">
                    <form>
                        <div class="row mrg10">
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <input class="brd-rd5" type="text" placeholder="@lang('front.name')">
                            </div>
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <input class="brd-rd5" type="email" placeholder="@lang('front.email')">
                            </div>
                            <div class="col-md-4 col-sm-12 col-lg-4">
                                <input class="brd-rd5" type="text" placeholder="@lang('front.phone')">
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <textarea class="brd-rd5" placeholder="@lang('front.message')"></textarea>
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <button type="submit" class="theme-btn theme-bg brd-rd5">@lang('front.sent')</button>
                            </div>
                        </div>
                    </form>
                </div>
{{--                <div class="cnt-mp brd-rd5" id="cnt-mp"></div>--}}
                <div class="cnt-inf-wrp">
                    <div class="row">
                        <div class="col-md-7 col-sm-12 col-lg-7">
                            <div class="sec-tl">
                                <span class="theme-clr">@lang('front.get_info')</span>
                                <h3 itemprop="headline">@lang('front.more_details')</h3>
                            </div>
                            <ul class="cnt-inf-lst">
                                <li><i class="fas fa-envelope theme-clr"></i> <strong>@lang('front.email')</strong><a href="#" title="" itemprop="url">{{ $config['email'] }}</a></li>
                                <li><i class="fas fa-phone theme-clr"></i> <strong>@lang('front.phone')</strong><span>{{ $config['phone'] }}</span></li>
                                <li><i class="fas fa-map-marker-alt theme-clr"></i> <strong>@lang('front.address')</strong><span>{{ $config['address'] }}</span></li>
                            </ul>
                        </div>
                        <div class="col-md-5 col-sm-12 col-lg-5">
                            <div class="cnt-img brd-rd5"><img src="{{ url('images/config/'.$config['photo_about']) }}" alt="cnt-img.jpg" itemprop="image"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
