@extends('frontmodule::layouts.master')

@section('content')
    <section>
        <div class="gap black-layer opc75">
            <div class="fixed-bg" style="background-image: url({{ url('images/config/'.$config['religious_links_background']) }});"></div>
            <div class="container">
                <div class="pg-tp-wrp text-center">
                    <div class="pg-tp-inr">
                        <h1 itemprop="headline">@lang('front.about_us')</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('front.index') }}" title="" itemprop="url">@lang('front.home')</a></li>
                            <li class="breadcrumb-item active">@lang('front.about_us')</li>
                        </ol>
                    </div>
                </div><!-- Page Top Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="gap">
            <div class="container">
                <div class="abt-sec-wrp">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <div class="abt-vdo brd-rd5">
                                <img src="{{ url('images/config/'.$config['photo_about']) }}" style="width: 570px;height: 445px" alt="abt-img.jpg" itemprop="image">
                                <a href="{{ $config['about_video'] }}" title="Click To Play" data-fancybox itemprop="url"><i class="flaticon-play-button"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <div class="abt-desc">
                                <div class="sec-tl">
                                    <span class="theme-clr">@lang('front.our_history')</span>
                                    <h2 itemprop="headline">@lang('front.islam_center')</h2>
                                </div>
                                <p itemprop="description">{{ strip_tags($config['about']) }}</p>
                                <a class="theme-btn theme-bg brd-rd5" href="#" title="" itemprop="url">@lang('front.read_more')</a>
                            </div>
                        </div>
                    </div>
                </div><!-- About Sec Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="gap">
            <div class="container">
                <div class="sec-tl text-center">
                    <span class="theme-clr">@lang('front.5edma_human')</span>
                    <h2 itemprop="headline">@lang('front.our_services')</h2>
                </div>
                <div class="serv-wrp remove-ext3">
                    <div class="row">
                        @php $ourWaysArr = ['open-book','grave','mosque','begging'] @endphp
                        @foreach($our_ways as $index=>$my_ways)
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="serv-bx text-center">
                                    <i class="flaticon-{{ $ourWaysArr[$index] }} theme-clr"></i>
                                    <h5 itemprop="headline"><a href="" title="" itemprop="url">{{ $my_ways->title }}</a></h5>
                                    <div class="srv-inf theme-bg brd-rd10">
                                        <p itemprop="description">{{ \Illuminate\Support\Str::limit(strip_tags($my_ways->content),40) }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div><!-- Services Wrap -->
                <div class="view-more text-center">
                    <a class="theme-btn theme-bg brd-rd5" href="" title="" itemprop="url">@lang('front.read_more')</a>
                </div><!-- عرض المزيد -->
            </div>
        </div>
    </section>
    <section>
        <div class="gap">
            <div class="container">
                <div class="sec-tl text-center">
                    <span class="theme-clr">@lang('front.follow_us')</span>
                    <h2 itemprop="headline">@lang('front.islam_mans')</h2>
                </div>
                <div class="team-sec remove-ext7">
                    <div class="row">
                        @foreach($teams as $team)
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="team-bx text-center">
                                    <div class="team-thmb brd-rd5"><a href="" title="" itemprop="url"><img src="{{ url('images/team/'.$team->photo) }}" style="width: 350px;height: 484px" alt="team-img1-1.jpg" itemprop="image"></a></div>
                                    <div class="team-inf brd-rd5">
                                        <div class="scl1">
{{--                                            <a href="{{ $team->twitter }}" title="Twitter" itemprop="url" target="_blank"><i class="fab fa-twitter"></i></a>--}}
{{--                                            <a href="{{ $team->facebook }}" title="Facebook" itemprop="url" target="_blank"><i class="fab fa-facebook-f"></i></a>--}}
{{--                                            <a href="{{ $team->instagram }}" title="Instagram" itemprop="url" target="_blank"><i class="fab fa-instagram"></i></a>--}}
{{--                                            <a href="{{ $team->youtube }}" title="Youtube" itemprop="url" target="_blank"><i class="fab fa-youtube"></i></a>--}}
{{--                                            <a href="{{ $team->skype }}" title="skype" itemprop="url" target="_blank"><i class="fab fa-skype"></i></a>--}}
                                        </div>
                                        <h5 itemprop="headline"><a href="{{ route('front.scholar',['id' => $team->id,'title' => str_replace(' ','-',$team->name)]) }}" title="" itemprop="url">{{ $team->name }}</a></h5>
                                        <span>{{ $team->job_title }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div><!-- Team Sec -->
                <div class="view-more text-center">
                    <a class="theme-btn theme-bg brd-rd5" href="{{ route('front.scientists') }}" title="" itemprop="url">@lang('front.read_more')</a>
                </div><!-- عرض المزيد -->
            </div>
        </div>
    </section>
    <section>
        <div class="gap black-layer opc75">
            <div class="fixed-bg" style="background-image: url({{ url('assets/front/images/parallax2.jpg') }});"></div>
            <div class="container">
                <div class="sec-tl text-center">
                    {{--                    <span class="theme-clr">حول اساسي</span>--}}
                    <h2 itemprop="headline">@lang('front.arkan_islam')</h2>
                </div>
                <div class="remove-ext3">
                    <ul class="plrs-wrp text-center">
                        <li>
                            <div class="plr-bx">
                                <i class="flaticon-clicker brd-rd50"></i>
                                <h5 itemprop="headline">@lang('front.shahada')</h5>
                                <span class="theme-clr">(@lang('front.iman'))</span>
                            </div>
                        </li>
                        <li>
                            <div class="plr-bx">
                                <i class="flaticon-muslim-man-praying brd-rd50"></i>
                                <h5 itemprop="headline">@lang('front.salah')</h5>
                                <span class="theme-clr">(@lang('front.sala'))</span>
                            </div>
                        </li>
                        <li>
                            <div class="plr-bx">
                                <i class="flaticon-islamic-ramadan brd-rd50"></i>
                                <h5 itemprop="headline">@lang('front.seyam')</h5>
                                <span class="theme-clr">(@lang('front.seyam'))</span>
                            </div>
                        </li>
                        <li>
                            <div class="plr-bx">
                                <i class="flaticon-money brd-rd50"></i>
                                <h5 itemprop="headline">@lang('front.zakah')</h5>
                                <span class="theme-clr">(@lang('front.tasadum'))</span>
                            </div>
                        </li>
                        <li>
                            <div class="plr-bx">
                                <i class="flaticon-kaaba-building brd-rd50"></i>
                                <h5 itemprop="headline">@lang('front.hag')</h5>
                                <span class="theme-clr">(@lang('front.hag'))</span>
                            </div>
                        </li>
                    </ul><!-- Pillars Wrap -->
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="gap">
            <div class="container">
                <div class="sec-tl text-center">
                    <span class="theme-clr">@lang('front.some_beautiful_word')</span>
                    <h2 itemprop="headline">@lang('front.testimonials')</h2>
                </div>
                <div class="testi-wrp text-center">
                    <div class="testi-inr testi-car owl-carousel">
                        @foreach($testimonials as $testimonial)
                            <div class="testi-bx">
                            <div class="testi-desc">
                                <p itemprop="description">{{ strip_tags($testimonial->quote) }}</p>
                            </div>
                            <div class="testi-inf">
                                <img class="brd-rd50" src="{{ url('images/testimonials/'.$testimonial->photo) }}" style="height: 100px" alt="testi-img1.jpg" itemprop="image">
                                <h6 itemprop="headline">{{ $testimonial->name }}</h6>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div><!-- Testimonials Wrap -->
            </div>
        </div>
    </section>
@endsection
