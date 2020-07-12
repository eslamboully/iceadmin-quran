@extends('frontmodule::layouts.master')

@section('content')
    <section>
        <div class="gap black-layer opc75">
            <div class="fixed-bg" style="background-image: url({{ url('images/config/'.$config['religious_links_background']) }});"></div>
            <div class="container">
                <div class="pg-tp-wrp text-center">
                    <div class="pg-tp-inr">
                        <h1 itemprop="headline">@lang('front.questions')</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="" title="" itemprop="url">@lang('front.home')</a></li>
                            <li class="breadcrumb-item active">@lang('front.questions')</li>
                        </ol>
                    </div>
                </div><!-- Page Top Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="gap">
            <div class="container">
                <div class="event-sec remove-ext5">
                    <div class="row">
                        @foreach($questions as $question)
                            <div class="col-md-4 col-sm-6 col-lg-4">
                            <div class="event-bx2 brd-rd5">
                                <div class="event-thmb">
                                    <ul class="countdown text-center">
                                        <li>
                                            <span class="days">85</span>
                                            <p class="days_ref">days</p>
                                        </li>
                                        <li>
                                            <span class="hours">12</span>
                                            <p class="hours_ref">hours</p>
                                        </li>
                                        <li>
                                            <span class="minutes">19</span>
                                            <p class="minutes_ref">minutes</p>
                                        </li>
                                        <li>
                                            <span class="seconds">54</span>
                                            <p class="seconds_ref">seconds</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="event-inf">
                                    <h5 itemprop="headline"><a href="{{ route('front.question',['id' => $question->id,'title' => str_replace(' ','-',$question->title)]) }}" title="" itemprop="url">{{ $question->title }}</a></h5>
                                    <ul class="pst-mta">
                                        <li><i class="fas fa-eye" style="color: #faaa89"></i>{{ $question->number }}</li>
                                        <li><i class="far fa-clock theme-clr"></i> {{ $question->created_at->diffForHumans() }}</li>
                                    </ul>
                                    <p itemprop="description">{{ \Illuminate\Support\Str::limit(strip_tags($question->content),100) }}</p>
                                    <a href="{{ route('front.question',['id' => $question->id,'title' => str_replace(' ','-',$question->title)]) }}" title="" itemprop="url">@lang('front.questions_more')</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div><!-- أحداث Sec -->
                <div class="pagination-wrap text-center">
                    <ul class="pagination">
                        {{ $questions->links() }}
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
