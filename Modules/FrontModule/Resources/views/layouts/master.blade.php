<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>بسم الله</title>

    <link rel="stylesheet" href="{{ url('') }}/assets/front/css/icons.min.css">
    <link rel="stylesheet" href="{{ url('') }}/assets/front/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('') }}/assets/front/css/plugins.min.css">
    <link rel="stylesheet" href="{{ url('') }}/assets/front/css/style.css">
    <link rel="stylesheet" href="{{ url('') }}/assets/front/css/responsive.css">
    @if(App()->getLocale() == 'ar')
        <link rel="stylesheet" href="{{ url('') }}/assets/front/css/rtl.css">
    @endif
    <link rel="stylesheet" href="{{ url('') }}/assets/front/css/custom.css">

    <!-- Color Scheme -->
    <!--    <

    -->
    <link rel="stylesheet" href="{{ url('') }}/assets/front/css/colors/color5.css" title="color5" /> <!-- Color5 -->

    <!-- Revolution Style -->
    <link rel="stylesheet" href="{{ url('') }}/assets/front/css/revolution/settings.css">
    <link rel="stylesheet" href="{{ url('') }}/assets/front/css/revolution/navigation.css">
</head>
<body itemscope>
<div class="preloader">
    <div class="loader-inner ball-scale-multiple">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div><!-- Preloader -->
<main>
    <header class="style1">
        <div class="topbar">
            <div class="container">
                <ul class="float-right tp-lnks">
                    <li>
                        <i class="fas fa-envelope theme-clr"></i>
                        <a href="#" title="" itemprop="url">
                            {{ $config['email'] }}
                        </a>
                    </li>
                    <li>
                        <i class="flaticon-phone-volume theme-clr"></i>
                        {{ $config['phone'] }}
                    </li>
{{--                    <li>--}}
{{--                        <i class="fas fa-user-circle theme-clr"></i>--}}
{{--                        <a href="#" title="" itemprop="url" data-toggle="modal" data-target="#login-model">--}}
{{--                            تسجيل الدخول--}}
{{--                        </a>--}}
{{--                    </li>--}}
                    {{-- godzilla --}}
{{--                    <li>--}}
{{--                        <i class="fa fa-globe theme-clr"></i>--}}
{{--                        @if(App()->getLocale() == 'ar')--}}
{{--                            <a href="">الانجليزية</a>--}}
{{--                        @else--}}
{{--                            <a href="">Arabic</a>--}}
{{--                        @endif--}}
{{--                    </li>--}}
                        <li>
                            <i class="fa fa-globe theme-clr"></i>
                            @if(App()->getLocale() == 'ar')
                                <a rel="alternate" hreflang="en" href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}">
                                    الانجليزية
                                </a>
                            @else
                                <a rel="alternate" hreflang="ar" href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}">
                                    Arabic
                                </a>
                            @endif
                        </li>
                </ul>
                <div class="scl1 float-left">
                    <span>@lang('front.follow_us'):</span>
                    <a href="{{ $config['tw_link'] }}" title="Twitter" itemprop="url" target="_blank">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="{{ $config['fb_link'] }}" title="Facebook" itemprop="url" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="{{ $config['youtube'] }}" title="Youtube" itemprop="url" target="_blank">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="{{ $config['instgram'] }}" title="Instagram" itemprop="url" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="{{ $config['telegram'] }}" title="Telegram" itemprop="url" target="_blank">
                        <i class="fab fa-telegram"></i>
                    </a>
                </div>
            </div>
        </div><!-- Topbar -->
        <div class="logo-menu-sec">
            <div class="container">
                <div class="logo"><a href="{{ route('front.index') }}" title="Logo" itemprop="url"><img src="{{ url('images/config/'.$config['logo']) }}" style="width: 216px;height: 102px" alt="logo1.png" itemprop="image"></a></div><!-- Logo -->
                <nav>
                    <div>
                        <ul>
                            @foreach($categories as $category)
                                    <li class="menu-item-has-children">
                                        <a href="#" title="" itemprop="url">
                                            <img src="{{ url('images/service/'.$category->photo) }}" alt="...">
                                            {{ $category->title }}
                                        </a>
                                        <i class="fas fa-angle-down"></i>
                                        <ul>
                                            @foreach($category->service()->get() as $service)
                                            <li>
                                                <a href="#" title="" itemprop="url">
                                                    {{ $service->title }}
                                                </a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </li>
                            @endforeach
                            <li>
                                <a href="{{ route('front.religious_link') }}" title="" itemprop="url">
                                    <img src="{{ url('assets/front/images/icons/4.png') }}" alt="...">
                                    @lang('front.relegion_link')
                                </a>
                            </li>
                            <li>
                                <a href="#" title="" itemprop="url">
                                    <img src="{{ url('assets/front/images/icons/03.png') }}" alt="...">
                                    @lang('front.your_share')
                                </a>
                            </li>
                            <li>
                                <a href="#" title="" itemprop="url">
                                    <img src="{{ url('assets/front/images/icons/01.png') }}" alt="...">
                                    @lang('front.questions')
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('front.about_us') }}" title="" itemprop="url">
                                    <img src="{{ url('assets/front/images/icons/05.png') }}" alt="...">
                                    @lang('front.about_us')
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('front.contact') }}" title="" itemprop="url">
                                    <img src="{{ url('assets/front/images/icons/06.png') }}" alt="...">
                                    @lang('front.contact')
                                </a>
                            </li>
                        </ul>
                        <a class="srch-btn" href="#" title="" itemprop="url">
                            <i class="fas fa-search"></i>
                        </a>
                    </div>
                </nav>
            </div>
        </div><!-- Logo Menu Sec -->
    </header><!-- Header -->
    <div class="header-search">
                <span class="srch-cls-btn brd-rd5">
                    <i class="fas fa-times"></i>
                </span>
        <form>
            <input type="text" placeholder="@lang('front.search')...">
            <button type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div><!-- Header Search -->
    <div class="rspn-hdr">
        <div class="rspn-mdbr">
            <ul class="rspn-scil">
                <li>
                    <a href="{{ $config['tw_link'] }}" title="Twitter" itemprop="url" target="_blank">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ $config['fb_link'] }}" title="Facebook" itemprop="url" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ $config['telegram'] }}" title="Telegram" itemprop="url" target="_blank">
                        <i class="fab fa-telegram"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ $config['youtube'] }}" title="Youtube" itemprop="url" target="_blank">
                        <i class="fab fa-youtube"></i>
                    </a>
                </li>
            </ul>
            <form class="rspn-srch">
                <input type="text" placeholder="@lang('front.contact_message')" />
                <button type="submit">
                    <i class="fa fa-search"></i>
                </button>
            </form>
        </div>
        <div class="lg-mn">
            <div class="logo">
                <a href="{{ route('front.index') }}" title="Logo" itemprop="url">
                    <img src="{{ url('images/config/'.$config['logo']) }}" alt="logo2.png" itemprop="image">
                </a>
            </div>
            <div class="rspn-cnt">
                        <span>
                            <i class="fas fa-envelope theme-clr"></i>
                            <a href="#" title="" itemprop="url">{{ $config['email'] }}</a>
                        </span>
                        <span>
                            <i class="flaticon-phone-volume theme-clr"></i>
                            {{ $config['phone'] }}
                        </span>
            </div>
            <span class="rspn-mnu-btn">
                        <i class="fa fa-list-ul"></i>
                    </span>
        </div>
        <div class="rsnp-mnu">
                    <span class="rspn-mnu-cls">
                        <i class="fa fa-times"></i>
                    </span>
            <ul>
                <li>
                    <a href="#" title="" itemprop="url">@lang('front.home')</a>
                </li>
                @foreach($categories as $category)
                    <li class="menu-item-has-children">
                        <a href="#" title="" itemprop="url">
{{--                            <img src="{{ url('images/service/'.$category->photo) }}" alt="...">--}}
                            {{ $category->title }}
                        </a>
                        <ul>
                            @foreach($category->service()->get() as $service)
                                <li>
                                    <a href="#" title="" itemprop="url">
                                        {{ $service->title }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
                <li>
                    <a href="#" title="" itemprop="url">
                        @lang('front.relegion_link')
                    </a>
                </li>
                <li>
                    <a href="#" title="" itemprop="url">
                        @lang('front.your_share')
                    </a>
                </li>
                <li>
                    <a href="#" title="" itemprop="url">
                        @lang('front.questions')
                    </a>
                </li>
            </ul>
        </div><!-- Responsive Menu -->
    </div><!-- Responsive Header -->

    @yield('content')

    <footer>
        <div class="gap no-gap">
            <div class="container">
                <div class="footer-data brd-rd20 overlap-220">
                    <div class="footer-data-inr">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-lg-3">
                                <div class="widget">
                                    <h5 itemprop="headline">@lang('front.info_about')</h5>
                                    <p itemprop="description">{{ \Illuminate\Support\Str::limit(strip_tags($config['about']),100) }}</p>
{{--                                    <div class="loc-mp brd-rd5" id="loc-mp"></div>--}}
{{--                                    <span><i class="fas fa-map-marker-alt theme-clr"></i>تجدنا على الخريطة</span>--}}
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-lg-3">
                                <div class="widget">
                                    <h5 itemprop="headline">@lang('front.recent_blogs')</h5>
                                    <div class="rcnt-wrp">
                                        @foreach($blogs as $blog)
                                            <div class="rcnt-bx">
                                            <a class="brd-rd5" href="" title="" itemprop="url"><img src="{{ url('images/blog/'.$blog->photo) }}" style="width: 68px;height: 66px" alt="rcnt-img1.jpg" itemprop="image"></a>
                                            <div class="rcnt-inf">
                                                <h6 itemprop="headline"><a href="" title="" itemprop="url">{{ $blog->title }}</a></h6>
                                                <span class="theme-clr"><i class="far fa-calendar-alt"></i>{{ $blog->created_at->format('Y-M-d') }}</span>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-lg-3">
                                <div class="widget">
                                    <h5 itemprop="headline">@lang('front.contact_info')</h5>
                                    <ul class="cnt-inf">
                                        <li><i class="far fa-envelope theme-clr"></i><a href="#" title="" itemprop="url">{{ $config['email'] }}</a></li>
                                        <li><i class="fas fa-phone theme-clr"></i><span>{{ $config['phone'] }}</span></li>
                                        <li><i class="fas fa-map-marker-alt theme-clr"></i>{{ $config['address'] }}</li>
                                        <li><i class="fas fa-fax theme-clr"></i>{{ $config['whatsapp'] }}</li>
                                    </ul>
                                    <div class="scl1">
                                        <a href="{{ $config['tw_link'] }}" title="Twitter" itemprop="url" target="_blank"><i class="fab fa-twitter"></i></a>
                                        <a href="{{ $config['fb_link'] }}" title="Facebook" itemprop="url" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        <a href="{{ $config['youtube'] }}" title="Youtube" itemprop="url" target="_blank"><i class="fab fa-youtube"></i></a>
                                        <a href="{{ $config['instgram'] }}" title="Instagram" itemprop="url" target="_blank"><i class="fab fa-instagram"></i></a>
                                        <a href="{{ $config['telegram'] }}" title="Youtube" itemprop="url" target="_blank"><i class="fab fa-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-lg-3">
                                <div class="widget">
                                    <h5 itemprop="headline">@lang('front.fast_contact')</h5>
                                    <form>
                                        <div class="row mrg10">
                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                <input class="brd-rd5" type="text" placeholder="@lang('front.name')">
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                <input class="brd-rd5" type="email" placeholder="@lang('front.email')">
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                <textarea class="brd-rd5" placeholder="@lang('front.message')"></textarea>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                <button class="brd-rd5 theme-btn theme-bg">@lang('front.sent')</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cpy-rgt text-center"><p itemprop="description"><a href="#" title="" itemprop="url" target="_blank">@lang('front.abouab')</a> &copy; 2020 / @lang('front.copy_rights')</p></div>
                </div>
            </div>
        </div>
    </footer>
    <section>
        <div class="gap theme-bg bottom-spac50 top-spac270">
            <div class="container">
                <div class="newsletter-wrp">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 col-lg-4">
                            <h4 itemprop="headline">@lang('front.subscripe_message')</h4>
                        </div>
                        <div class="col-md-8 col-sm-12 col-lg-8">
                            <form class="newsletter brd-rd30">
                                <input type="email" placeholder="@lang('front.email')">
                                <button type="submit" class="green-bg theme-btn">@lang('front.open_account_now')</button>
                            </form>
                        </div>
                    </div>
                </div><!-- Newsletter Wrap -->
            </div>
        </div>
    </section>
    <div class="sidepanel">
        <span><i class="fa fa-cog fa-spin"></i></span>
        <div class="color-picker">
            <h3>Choose Your Color</h3>
            <a class="color applied" onclick="setActiveStyleSheet('color'); return false;"></a>
            <a class="color2" onclick="setActiveStyleSheet('color2'); return false;"></a>
            <a class="color3" onclick="setActiveStyleSheet('color3'); return false;"></a>
            <a class="color4" onclick="setActiveStyleSheet('color4'); return false;"></a>
        </div><!-- Color Picker -->
    </div><!-- Side Panel -->
</main><!-- Main Wrapper -->

<!-- Modal -->
<div class="modal fade" id="login-model" role="dialog" aria-labelledby="login-model" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Login">
                    تسجيل الدخول
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="الاسم">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" placeholder="البريد الالكترونى">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="البلد">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn">تسجيل</button>
            </div>
        </div>
    </div>
</div>

<script src="{{ url('') }}/assets/front/js/jquery.min.js"></script>
<script src="{{ url('') }}/assets/front/js/bootstrap.min.js"></script>
<script src="{{ url('') }}/assets/front/js/plugins.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA4XGd9qpQIEkbfL6QpR6qk2jQ9S9_5Uww"></script>
<script src="{{ url('') }}/assets/front/js/google-map-int.js"></script>
<script src="{{ url('') }}/assets/front/js/custom-scripts.js"></script>

<!-- Revolution JS Files -->
<script src="{{ url('') }}/assets/front/js/revolution/jquery.themepunch.tools.min.js"></script>
<script src="{{ url('') }}/assets/front/js/revolution/jquery.themepunch.revolution.min.js"></script>

<!-- Slider Revolution 5.0 Extensions -->
<script src="{{ url('') }}/assets/front/js/revolution/extensions/revolution.extension.actions.min.js"></script>
<script src="{{ url('') }}/assets/front/js/revolution/extensions/revolution.extension.carousel.min.js"></script>
<script src="{{ url('') }}/assets/front/js/revolution/extensions/revolution.extension.kenburn.min.js"></script>
<script src="{{ url('') }}/assets/front/js/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="{{ url('') }}/assets/front/js/revolution/extensions/revolution.extension.migration.min.js"></script>
<script src="{{ url('') }}/assets/front/js/revolution/extensions/revolution.extension.navigation.min.js"></script>
<script src="{{ url('') }}/assets/front/js/revolution/extensions/revolution.extension.parallax.min.js"></script>
<script src="{{ url('') }}/assets/front/js/revolution/extensions/revolution.extension.slideanims.min.js"></script>
<script src="{{ url('') }}/assets/front/js/revolution/extensions/revolution.extension.video.min.js"></script>
<script src="{{ url('') }}/assets/front/js/revolution/revolution-init.js"></script>
<script src="{{ url('') }}/assets/front/js/script.js"></script>
</body>
</html>
