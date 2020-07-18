@extends('frontmodule::layouts.master')

@section('content')
    <section>
        <div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="notgeneric125" data-source="gallery"
             style="background-color:transparent;padding:0px;">
            <div id="rev_slider_4_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
                <ul>
                    @foreach($sliders as $index=>$slider)
                        <li data-index="rs-{{ $index + 1 }}"
                        data-transition="random"
                        data-slotamount="default"
                        data-hideafterloop="0"
                        data-hideslideonmobile="off"
                        data-title="Slide Title"
                        data-easein="Power4.easeInOut"
                        data-easeout="Power4.easeInOut"
                        data-masterspeed="2000"
                        data-rotate="0"
                        data-fstransition="random"
                        data-fsmasterspeed="1500"
                        data-fsslotamount="7"
                        data-saveperformance="off"
                        data-param1=""
                        data-param2=""
                        data-param3=""
                        data-param4=""
                        data-param5=""
                        data-param6=""
                        data-param7=""
                        data-param8=""
                        data-param9=""
                        data-param10=""
                        data-description="">

                        <img src="{{ url('images/sliders/'.$slider->photo) }}"
                             alt="slide1.jpg"
                             data-bgposition="center center"
                             data-bgfit="cover"
                             data-bgrepeat="no-repeat"
                             data-bgparallax="10"
                             class="rev-slidebg"
                             data-no-retina>

                        <div class="tp-caption tp-resizeme"
                             id="slide-layer-1"
                             data-x="['center','center','center','center']"
                             data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']"
                             data-voffset="['-20','-90','-90','-60']"
                             data-fontsize="['75','60','45','30']"
                             data-lineheight="['95','60','55','40']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-type="text"
                             data-responsive_offset="on"
                             data-frames='[{"from":"y:-[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                             data-textAlign="['center','center','center','center']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             style="text-shadow: 0 3px 4px rgba(0,0,0,.19);letter-spacing: 0;color: #fff;font-weight:400;font-family: Playfair Display;">
                        </div>

                        <div class="tp-caption theme-clr tp-resizeme"
                             id="slide-layer-2"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['90','40','-15','-10']"
                             data-fontsize="['30','25','20','14']"
                             data-lineheight="['40','35','30','25']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-type="text"
                             data-responsive_offset="on"
                             data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                             data-textAlign="['center','center','center','center']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             style="text-shadow: 0 3px 4px rgba(0,0,0,.19);font-family: lato;color: #fff;letter-spacing: 0;">{{ strip_tags($slider->title) }}
                        </div>

                        <div class="tp-caption rev-btn theme-btn theme-bg brd   rd5" id="slide-layer-3"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['210','130','100','90']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-type="button"
                             data-actions='[{"event":"click","action":"simplelink","slide":"next","delay":"","target": "_self", "url": "#"}]'
                             data-responsive_offset="on"
                             data-responsive="on"
                             data-frames='[{"from":"y:-[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                             data-textAlign="['center','center','center','center']"
                             data-paddingtop="[16.5,16.5,10,10]"
                             data-paddingright="[45,45,25,25]"
                             data-paddingbottom="[16.5,16.5,10,10]"
                             data-paddingleft="[45,45,25,25]" style="cursor:pointer;display: inline-block;font-family: roboto slab;font-weight: 700;letter-spacing: 0;line-height: 30px;color: #fff;">@lang('front.read_more')
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section><!-- Slider Area -->
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
                                <a class="theme-btn theme-bg brd-rd5" href="{{ route('front.about_us') }}" title="" itemprop="url">@lang('front.read_more')</a>
                            </div>
                        </div>
                    </div>
                </div><!-- About Sec Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="gap white-layer opc75">
            <div class="fixed-bg" style="background-image: url({{ url('assets/front/images/pray-bg-1.jpg') }});"></div>
            <div class="container">
                <div class="sec-tl text-center">
                    <span class="theme-clr">@lang('front.salah_time')</span>
                    <h2 itemprop="headline">@lang('front.salah_tawkeet')</h2>
                </div>
                <div class="prayer-timing-wrp">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-lg-5">
                            <div class="timing-mockp"><img src="{{ url('') }}/assets/front/images/pray-img-1.png" alt="prayer-time-mockp.png" itemprop="image"></div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-lg-7">
                            <div class="timing-data">
                                <div class="cntry-selc">
{{--                                    <div class="selec-wrp brd-rd5">--}}
{{--                                        <select>--}}
{{--                                            <option>حدد الدولة</option>--}}
{{--                                            <option>الولايات المتحدة الأمريكية</option>--}}
{{--                                            <option>الهند</option>--}}
{{--                                            <option>باكستان</option>--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                    <div class="selec-wrp brd-rd5">--}}
{{--                                        <select>--}}
{{--                                            <option>اختر مدينة</option>--}}
{{--                                            <option>لاهور</option>--}}
{{--                                            <option>مولتان</option>--}}
{{--                                            <option>كراتشي</option>--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
                                </div>
                                <div class="prayer-timings text-center">
                                    <table>
                                        <thead><tr><th><span>@lang('front.salah_name')</span></th><th><span>@lang('front.azan_time')</span></th><th><span>@lang('front.salah_wakt')</span></th></tr></thead>
                                        <tbody>
                                        <tr><td><span>@lang('front.fagr')</span></td><td>{{ $config['fagr'] }}</td><td>{{ $config['time_fagr'] }}</td></tr>
                                        <tr><td><span>@lang('front.shorok')</span></td><td>{{ $config['elShoroq'] }}</td><td>{{ $config['time_elShoroq'] }}</td></tr>
                                        <tr><td><span>@lang('front.dohr')</span></td><td>{{ $config['elzohr'] }}</td><td>{{ $config['time_elzohr'] }}</td></tr>
                                        <tr><td><span>@lang('front.3asr')</span></td><td>{{ $config['elassr'] }}</td><td>{{ $config['time_elassr'] }}</td></tr>
                                        <tr><td><span>@lang('front.magreb')</span></td><td>{{ $config['elmogreb'] }}</td><td>{{ $config['time_elmogreb'] }}</td></tr>
                                        <tr><td><span>@lang('front.eisha')</span></td><td>{{ $config['eleshaa'] }}</td><td>{{ $config['time_eleshaa'] }}</td></tr>
                                        <tr><td><span>@lang('front.gomaa')</span></td><td>{{ $config['elgomaa'] }}</td><td>{{ $config['time_elgomaa'] }}</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- صلاة Timing Wrap -->
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
                                        <p itemprop="description">{{ \Illuminate\Support\Str::limit(strip_tags($my_ways->content),70) }}</p>
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
        <div class="gap black-layer opc75">
            <div class="fixed-bg" style="background-image: url({{ url('assets/front/images/blog.jpg') }});"></div>
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
                    <span class="theme-clr">@lang('front.blogs')</span>
                    <h2 itemprop="headline">@lang('front.recent_blogs')</h2>
                </div>
                <div class="remove-ext3">
                    <div class="row">
                        <div class="col-md-7 col-sm-12 col-lg-7">
                            @foreach($blogs as $blog)
                                <div class="post-bx lst brd-rd5">
                                <div class="post-thmb"><a href="{{ route('front.blog',['id'=> $blog->id,'title' => str_replace(' ','-',$blog->title)]) }}" title="" itemprop="url"><img src="{{ url('images/blog/'.$blog->photo) }}" style="width: 300px;height: 216px" alt="post-img1-1.jpg" itemprop="image"></a></div>
                                <div class="post-inf">
                                    <h5 itemprop="headline"><a href="{{ route('front.blog',['id'=> $blog->id,'title' => str_replace(' ','-',$blog->title)]) }}" title="" itemprop="url">{{ $blog->title }}</a></h5>
                                    <ul class="pst-mta">
                                        <li><i class="far fa-calendar-alt theme-clr"></i>{{ $blog->created_at->diffForHumans() }}</li>
                                        <li><i class="far fa-user theme-clr"></i><a href="#" title="" itemprop="url">{{ $blog->admin->name }}</a></li>
                                    </ul>
                                    <p itemprop="description">{!! strip_tags($blog->description) !!}</p>
                                    <a href="{{ route('front.blog',['id'=> $blog->id,'title' => str_replace(' ','-',$blog->title)]) }}" title="" itemprop="url">@lang('front.read_more')</a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="col-md-5 col-sm-12 col-lg-5">
                            @foreach($secondBlogs as $secondBlog)
                                <div class="event-bx brd-rd5" style="background-image: url({{ url('images/blog/'.$blog->photo) }});width: 470px;height: 140px">
                                <span class="theme-clr">{{ $blog->created_at->format('d') }}</span>
                                <h5 itemprop="headline"><a href="" title="" itemprop="url">{{ $secondBlog->title }}</a></h5>
                                <ul class="pst-mta">
                                    <li><i class="fas fa-map-marker-alt theme-clr"></i>{{ $secondBlog->categories()->first()->title }}</li>
                                    <li><i class="far fa-clock theme-clr"></i> {{ $secondBlog->created_at->diffForHumans() }}</li>
                                </ul>
                                <a href="" title="" itemprop="url">@lang('front.read_more')</a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="gap no-gap white-layer opc5">
            <div class="fixed-bg" style="background-image: url({{ url('assets/front/images/parallax3.jpg') }});"></div>
            <div class="dnt-sec-wrp">
                <div class="row mrg">
                    <div class="col-md-6 col-sm-12 col-lg-6">
                        <div class="dnt-img-wrp dnt-car owl-carousel">
                            <div class="img-thmb" style="background-image: url({{ url('assets/front/images/resources/car') }}-img1-1.jpg);"></div>
                            <div class="img-thmb" style="background-image: url({{ url('assets/front/images/resources/car') }}-img1-2.jpg);"></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-6">
                        <div class="dnt-wrp">
                            <div class="sec-tl">
                                <span class="theme-clr">جعل التبرع</span>
                                <h2 itemprop="headline">قم بتبرعك</h2>
                            </div>
                            <div class="dnt-lst">
                                <a class="brd-rd30" href="#" title="" itemprop="url">$100</a>
                                <a class="brd-rd30" href="#" title="" itemprop="url">$200</a>
                                <a class="brd-rd30" href="#" title="" itemprop="url">$300</a>
                                <a class="brd-rd30" href="#" title="" itemprop="url">أكثر من</a>
                            </div>
                            <form class="dnt-frm">
                                <div class="row mrg10">
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <input class="brd-rd5" type="text" placeholder="اسمك">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <input class="brd-rd5" type="email" placeholder="بريدك الالكتروني">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <input class="brd-rd5" type="text" placeholder="هاتفك">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <input class="brd-rd5" type="text" placeholder="عنوانك">
                                    </div>
                                </div>
                            </form>
                            <img src="{{ url('') }}/assets/front/images/pay-img.png" alt="pay-img.png" itemprop="image">
                            <div class="prg-wrp">
                                <h5 itemprop="headline">جمع الأموال للفقراء</h5>
                                <div class="progress brd-rd5"><div class="progress-bar w70 theme-bg"><span class="brd-rd50 theme-bg">70%</span></div></div>
                                <span>رفع: <i class="theme-clr">$400.00</i></span> <span>Goal: <i class="theme-clr">$650.00</i></span>
                            </div>
                            <a class="theme-btn theme-bg brd-rd5" href="#" title="" itemprop="url">تبرع الآن</a>
                        </div>
                    </div>
                </div>
            </div><!-- Donation Sec Wrap -->
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
                                <div class="team-thmb brd-rd5"><a href="" title="{{ route('front.scholar',['id' => $team->id,'title' => str_replace(' ','-',$team->name)]) }}" itemprop="url"><img src="{{ url('images/team/'.$team->photo) }}" style="width: 350px;height: 484px" alt="team-img1-1.jpg" itemprop="image"></a></div>
                                <div class="team-inf brd-rd5">
                                    <div class="scl1">
{{--                                        <a href="{{ $team->twitter }}" title="Twitter" itemprop="url" target="_blank"><i class="fab fa-twitter"></i></a>--}}
{{--                                        <a href="{{ $team->facebook }}" title="Facebook" itemprop="url" target="_blank"><i class="fab fa-facebook-f"></i></a>--}}
{{--                                        <a href="{{ $team->instagram }}" title="Instagram" itemprop="url" target="_blank"><i class="fab fa-instagram"></i></a>--}}
{{--                                        <a href="{{ $team->youtube }}" title="Youtube" itemprop="url" target="_blank"><i class="fab fa-youtube"></i></a>--}}
{{--                                        <a href="{{ $team->skype }}" title="skype" itemprop="url" target="_blank"><i class="fab fa-skype"></i></a>--}}
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
@endsection
