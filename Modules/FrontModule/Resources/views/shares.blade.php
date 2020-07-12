@extends('frontmodule::layouts.master')

@section('content')
    <section>
        <div class="gap black-layer opc75">
            <div class="fixed-bg" style="background-image: url({{ url('images/config/'.$config['religious_links_background']) }});"></div>
            <div class="container">
                <div class="pg-tp-wrp text-center">
                    <div class="pg-tp-inr">
                        <h1 itemprop="headline">@lang('front.shares')</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="" title="" itemprop="url">@lang('front.home')</a></li>
                            <li class="breadcrumb-item active">@lang('front.shares')</li>
                        </ol>
                    </div>
                </div><!-- Page Top Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="gap">
            <div class="container">
                <div class="cause-sec remove-ext5">
                    <div class="row">
                        @foreach($shares as $share)
                            <div class="col-md-4 col-sm-6 col-lg-4">
                            <div class="cause-bx brd-rd5">
                                <div class="cause-thmb"><a href="{{ route('front.share',['id' => $share->id,'title' => str_replace(' ','-',$share->job_title)]) }}" title="" itemprop="url"><img style="width: 370px;height: 207px" src="{{ url('images/testimonials/'.$share->photo) }}" alt="cause-img1.jpg" itemprop="image"></a></div>
                                <div class="cause-inf">
                                    <h5 itemprop="headline"><a href="{{ route('front.share',['id' => $share->id,'title' => str_replace(' ','-',$share->job_title)]) }}" title="" itemprop="url">{{ $share->job_title }}</a></h5>
                                    <ul class="pst-mta">
                                        <li><i class="far fa-calendar-alt theme-clr"></i> {{ $share->created_at->format('d-m-Y') }}</li>
                                        <li><i class="far fa-user theme-clr"></i> {{ $share->name }}</li>
                                    </ul>
                                    <p itemprop="description">{{ \Illuminate\Support\Str::limit(strip_tags($share->quote),50) }}</p>
{{--                                    <div class="prg-wrp">--}}
{{--                                        <div class="progress brd-rd5"><div class="progress-bar w70 theme-bg"><span class="brd-rd50 theme-bg">70%</span></div></div>--}}
{{--                                        <span class="float-left">Raised: <i class="theme-clr">$50,400</i></span> <span class="float-right">Goal: <i class="theme-clr">$250,500</i></span>--}}
{{--                                    </div>--}}
                                    <div class="btns-wrp">
                                        <a class="theme-btn mini theme-bg brd-rd5" href="{{ route('front.share',['id' => $share->id,'title' => str_replace(' ','-',$share->job_title)]) }}" title="" itemprop="url">Donate Now</a>
                                        <a class="theme-btn mini green-bg brd-rd5" href="{{ route('front.share',['id' => $share->id,'title' => str_replace(' ','-',$share->job_title)]) }}" title="" itemprop="url">View Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div><!-- Causes Sec -->
                <div class="pagination-wrap text-center">
                    <ul class="pagination">
                        {{ $shares->links() }}
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
