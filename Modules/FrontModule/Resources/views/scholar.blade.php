@extends('frontmodule::layouts.master')

@section('content')
    <section>
        <div class="gap black-layer opc75">
            <div class="fixed-bg" style="background-image: url({{ url('images/config/'.$config['religious_links_background']) }});"></div>
            <div class="container">
                <div class="pg-tp-wrp text-center">
                    <div class="pg-tp-inr">
                        <h1 itemprop="headline">{{ $scientist->name }}</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="" title="" itemprop="url">@lang('front.home')</a></li>
                            <li class="breadcrumb-item "><a href="{{ route('front.scientists') }}" title="" itemprop="url">@lang('front.scientists')</a></li>
                            <li class="breadcrumb-item active">{{ $scientist->name }}</li>
                        </ol>
                    </div>
                </div><!-- Page Top Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="gap">
            <div class="container">
                <div class="team-detail-wrp">
                    <img src="{{ url('images/team/'.$scientist->photo) }}" alt="">
                    <div class="team-detail-desc">
                        <h4 itemprop="headline">{{ $scientist->name }}</h4>
                        <p itemprop="description">{!! $scientist->description !!}</p>
                    </div>
                </div>
                <div class="team-detail-inr">
                    <div class="row">

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
