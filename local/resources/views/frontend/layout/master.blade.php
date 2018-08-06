<!DOCTYPE Html>
<Html lang="en-US" class="lang-en_US" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<meta http-equiv="content-type" content="text/Html;charset=UTF-8"/>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans+Condensed|Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Baloo|Lalezar|Sigmar+One" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('js/OwlCarousel/dist/assets/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('js/OwlCarousel/dist/assets/owl.theme.default.min.css')}}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="@yield('keyword')">
    <meta name="description" content="@yield('description')">
    <meta name="viewport" content="width=device-width">
    {{ Html::style('css/core.common.css') }}
    {{ Html::style('css/animate.css') }}
    {{ Html::style('css/core.frontend.css') }}
    {{ Html::style('css/frontend.css') }}
    @yield('styles')
    <link rel="shortcut icon" href="images/icon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/icon/favicon.ico" type="image/x-icon">
</head>

<style>
    .main-font{
        font-family: 'Fira Sans Condensed', sans-serif;
    }

    #fe_h_welcome{
        background-color: #055699;
    }

    .sc-nw a i{
        margin-right: 10px;
        transition: .3s;
    }

    .sc-nw a i.fa-facebook-f:hover{
        color: #0594d2;
    }

    .sc-nw a i.fa-youtube:hover{
        color: #f01802;
    }

    .sc-nw a {
        color: white;
    }
    .sc-nw a:hover {
        text-decoration: none;
    }

    div#menu_top{
        position: absolute;
        z-index: 10;
        top: 100%;
        width: 100%;
        background-color: rgba(255,255,255,0.9);
        transition: .3s;
    }

    div#menu_top .logo-bdstuan123{
        height: 86px;
        width: auto;
    }

    div.menu-content ul{
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    div.menu-content ul li {
        display: inline-flex;
        margin-right: -2px;
    }

    div.menu-content ul li a{
        color: #055699;
        padding: 35px 16px;
        transition: .3s;
    }

    div.menu-content ul li a:hover{
        text-decoration: none;
        background-color: #055699;
        color: white;
    }

    div.menu-content ul li a.active{
        text-decoration: none;
        background-color: #055699;
        color: white;
    }

    .slogan-cty p{
        color: #055699;
        font-size: 26px;
        font-weight: 600;
    }

</style>
<body>
<header id="header">

</header>

<div class="container-fluid position-relative p-0" id="fe_h_welcome">
    <div class="container">
        <div class="row">
            <div class="col-md-12 pt-2 pb-1 d-flex justify-content-between align-items-center">
                <p class="text-light main-font" style="font-size: 14px">
                    Welcome to BĐS TUẤN 123
                </p>

                <div class="main-font text-light sc-nw">
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-youtube"></i></a>
                    <a href=""><i class="fas fa-envelope"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div id="menu_top" class="shadow-sm">
        <div class="container p-0">
            <div class="row">
                <div class="col-md-12 d-lg-flex justify-content-lg-between">

                    <div class="d-flex align-items-center">
                    <img src="{{URL::asset('images/logo/cong-ty-bds-tuan-123.png')}}" alt="" class="logo-bdstuan123 align-self-center">
                        <div class="main-font slogan-cty">
                            <p class="pb-1">TUYỂN DỤNG NHÂN VIÊN BĐS TUẤN 123</p>
                            <span class="mr-3 text-danger">MÔI GIỚI BĐS - NGƯỜI BÁN HÀNG ĐỈNH CAO</span>
                        </div>
                    </div>

                    <div class="main-font d-lg-flex d-md-none d-sm-none d-none align-self-center menu-content">
                        <ul>
                            <li><a class="{{ request()->is('/') ? 'active' : '' }}" id="tl_tc"  href="{{URL::asset('/')}}">TRANG CHỦ</a></li>
                            <li><a class="tablinks" href="">GIỚI THIỆU</a></li>
                            <li><a class="tablinks" href="">HOẠT ĐỘNG</a></li>
                            <li><a class="{{ (request()->is('tuyen-dung.html') || request()->is('tuyen-dung-nv-bds.html')) ? 'active' : '' }}"   href="{{URL::asset('tuyen-dung.html')}}">TUYỂN DỤNG</a></li>
                            <li><a class="tablinks" href="">LIÊN HỆ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div id="blurrMe">
    @yield('slider')
    @yield('container')
</div>

<div class="footer">
    @include('frontend.common.footer')

</div>
{{ Html::script('js/core.common.js') }}
{{ Html::script('js/noframework.waypoints.min.js') }}
{{ Html::script('js/CountUp.js') }}
{{ Html::script('js/core.frontend.js') }}
{{ Html::script('js/scripts.js') }}
<script src="{{URL::asset('js/OwlCarousel/dist/owl.carousel.min.js')}}"></script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script>
    function openCity(evt) {

    }
</script>
{{--@yield('scripts')--}}

<div class="callback d-lg-none d-md-none">
    <div class="phone_animation">
        <div class="phone_animation_circle"></div>
        <div class="phone_animation_circle_fill"></div>
        <a href="tel:0962599482" class="phone_animation_circle_fill_img"><i class="fas fa-phone"
                                                                            aria-hidden="true"></i></a>
    </div>
</div>
<div class="callback d-none d-md-block" style="right: 150px;bottom: -30px;left:inherit">
    <div class="phone_animation">
        <div class="phone_animation_circle"></div>
        <div class="phone_animation_circle_fill"></div>
        <a href="tel:0962599482" class="phone_animation_circle_fill_img"><i class="fas fa-phone"
                                                                            aria-hidden="true"></i></a>
    </div>
</div>
<div class="mess_desk_bot d-none d-md-block" style="position: fixed;bottom:40px;right: 0px;">
    <a href="tel:0962599482" style="display: block;width: 260px;height: 56px;background: url({{URL::to('images/nenhot.png')}}) no-repeat;text-align: center;padding-top: 10px;color:#fff;font-size: 20px;font-family: 'roboto-bold'">
    </a>
</div>


</body>
@yield('java-scripts')
</Html>