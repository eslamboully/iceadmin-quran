@extends('frontmodule::layouts.master')

@section('content')
    <section>
        <div class="gap black-layer opc75">
            <div class="fixed-bg" style="background-image: url({{ url('images/config/'.$config['religious_links_background']) }});"></div>
            <div class="container">
                <div class="pg-tp-wrp text-center">
                    <div class="pg-tp-inr">
                        <h1 itemprop="headline">@lang('front.scientists')</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="" title="" itemprop="url">@lang('front.home')</a></li>
                            <li class="breadcrumb-item active">@lang('front.scientists')</li>
                        </ol>
                    </div>
                </div><!-- Page Top Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="gap">
            <div class="container">
                <div class="team-sec remove-ext7">
                    <div class="row">
                        @foreach($scientists as $team)
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="team-bx text-center">
                                    <div class="team-thmb brd-rd5"><a href="{{ route('front.scholar',['id' => $team->id,'title' => str_replace(' ','-',$team->name)]) }}" title="" itemprop="url"><img src="{{ url('images/team/'.$team->photo) }}" style="width: 350px;height: 484px" alt="team-img1-1.jpg" itemprop="image"></a></div>
                                    <div class="team-inf brd-rd5">
                                        <div class="scl1">
                                        </div>
                                        <h5 itemprop="headline"><a href="{{ route('front.scholar',['id' => $team->id,'title' => str_replace(' ','-',$team->name)]) }}" title="" itemprop="url">{{ $team->name }}</a></h5>
                                        <span>{{ $team->job_title }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div><!-- Team Sec -->
            </div>
        </div>
    </section>
@endsection
