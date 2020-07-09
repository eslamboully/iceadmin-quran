<!DOCTYPE html>
<html>

<head>
    <title>login page</title>
      <!-- meta data -->
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{url('assets/admin')}}/static/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="{{url('assets/admin')}}/static/css/font-awesome.css">
    <link rel="stylesheet" href="{{url('assets/admin')}}/static/css/style.css">
    <link rel="stylesheet" href="{{url('assets/admin')}}/static/css/hover-min.css">
    @if(request('lang') == 'ar')
        <link rel="stylesheet" href="{{url('assets/admin')}}/static/css/styleArabic.css">
    @endif
</head>
<body class="hold-transition login-page">
    <header style="background-color: #99C300">Aboab el quran :: change lang => <a href="?lang={{ request('lang') == 'ar' ? 'en' : 'ar' }}">{{ request('lang') == 'ar' ? 'en' : 'ar' }}</a></header>
<div class="container" >
        <div class="d-flex justify-content-center">
            <div class="user_card">
                <div class="d-flex justify-content-center">
                    <div class="brand_logo_container" style="background-color: #99C300">
                      <!--logo text or image-->
                              <p class="text-logo">ابواب القران</p>
{{--                        <img src="{{ url('assets/front/img/logo2.png') }}" style="background-color: white;" class="brand_logo" alt="Logo">--}}
                    </div>
                </div>
                <div class="d-flex justify-content-center form_container">
                    <form method="post" action="{{ url('admin-panel/login') }}">
                        @csrf
                        <div class="input-group">
                            <div class="input-group-append">
                                <span class="input-group-text" style="background-color: #99C300"><i class="fa fa-user"></i></span>
                            </div>
                            <input type="text" name="email" class="form-control input_user" value="" placeholder="{{ request('lang') == 'ar' ? 'البريد الالكتروني' : 'enter your email' }}">
                        </div>
                        <div class="input-group">
                            <div class="input-group-append">
                                <span class="input-group-text" style="background-color: #99C300"><i class="fa fa-key"></i></span>
                            </div>
                            <input type="password" name="password"  class="form-control input_pass" value="" placeholder="{{ request('lang') == 'ar' ? 'كلمة المرور' : 'enter password' }}">
                        </div>

                        </div>
                        <div class="d-flex justify-content-center mt-3 mb--3 login_container">
                            <button name="button" class="btn login_btn " style="background-color: #99C300">{{ request('lang') == 'ar' ? 'تسجيل الدخول' : 'Log in' }}</button>
                        </div>
                        </form>
                @if (count($errors) > 0)
                  @foreach ($errors->all() as $item)
                    <div class="error">
                   <i class="fa fa-times-circle" aria-hidden="true"></i><span>{{$item}}</span>
                </div>
                  @endforeach
                @endif

            </div>
        </div>
    </div>
<!-- /.login-box -->

    <footer>{{ request('lang') == 'ar' ? '© جميع الحقوق محفوظة ' : 'All Copy Right Reserved' }}</footer>

    <script src="{{url('assets/admin')}}/static/js/bootstrap.min.js"></script>
    <script src="{{url('assets/admin')}}/static/js/jquery-3.3.1.min.js"></script>
</body>
</html>
