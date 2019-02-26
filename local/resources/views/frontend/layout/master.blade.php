<!DOCTYPE Html>
<Html lang="en-US" class="lang-en_US" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<meta http-equiv="content-type" content="text/Html;charset=UTF-8"/>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans+Condensed|Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Baloo|Lalezar|Sigmar+One" rel="stylesheet">
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
    .main-font {
        font-family: 'Fira Sans Condensed', sans-serif;
    }

    .sticky {
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 99;
    }

    @media screen and (max-width: 1000px) and (min-width: 320px) {

        .fe-l-master-slogan {
            display: none;
        }

        .slogan-cty p {
            line-height: 33px;
        }

    }

</style>
<body>
<header id="header">

</header>


<div id="blurrMe">
    @include('frontend.common.menu.menu')
    @include('frontend.common.menu.m-menu')
    @yield('slider')
    @yield('container')
</div>
@include('frontend.common.menu.m-sidebar')
<div class="footer">
    @include('frontend.common.footer')
</div>
{{ Html::script('js/core.common.js') }}
{{ Html::script('js/ulti.js') }}
{{ Html::script('js/core.frontend.js') }}
{{ Html::script('js/scripts.js') }}
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script>

    new WOW().init()

</script>
{{--@yield('scripts')--}}
@php
    $dataPhone=explode("-",$listFrontendCommon['configPhone']);
@endphp

<div id="phone1">
    <div class="callback d-lg-none d-md-none">
        <div class="phone_animation">
            <div class="phone_animation_circle"></div>
            <div class="phone_animation_circle_fill"></div>
            <a href="tel:0354375562" class="phone_animation_circle_fill_img"><i class="fas fa-phone"
                                                                                       aria-hidden="true"></i></a>
        </div>
    </div>
    <div class="callback d-none d-md-block" style="right: 167px;bottom: -30px;left:inherit">
        <div class="phone_animation">
            <div class="phone_animation_circle"></div>
            <div class="phone_animation_circle_fill"></div>
            <a href="tel:0354375562" class="phone_animation_circle_fill_img"><i class="fas fa-phone"
                                                                                       aria-hidden="true"></i></a>
        </div>
    </div>
    <div class="callback d-none d-md-block" style="right: 167px;bottom: -30px;left:inherit">
        <div class="phone_animation">
            <div class="phone_animation_circle"></div>
            <div class="phone_animation_circle_fill"></div>
            <a href="tel:0354375562" class="phone_animation_circle_fill_img"><i class="fas fa-phone"
                                                                                       aria-hidden="true"></i></a>
        </div>
    </div>
    <div class="mess_desk_bot d-none d-md-block">
        <a href="tel:0984929097" class="hotline-master"> 0984 929 097
        </a>
    </div>
    <div class="apply-hot-mobile d-lg-none d-md-none">
        <a target="_blank"
           href="https://docs.google.com/forms/d/1p4uWoNZubk1vqnXIJwHvk0dTx_N4WzZsim2Zrzzzvks/viewform?edit_requested=true">ỨNG
            TUYỂN NHANH</a>
    </div>
    <div class="apply-hot-desktop d-none d-md-block">
        <a target="_blank"
           href="https://docs.google.com/forms/d/1p4uWoNZubk1vqnXIJwHvk0dTx_N4WzZsim2Zrzzzvks/viewform?edit_requested=true">ỨNG
            TUYỂN NHANH</a>
    </div>
</div>

{{--<div id="phone4">--}}
    {{--<div class="callback d-lg-none d-md-none">--}}
        {{--<div class="phone_animation">--}}
            {{--<div class="phone_animation_circle"></div>--}}
            {{--<div class="phone_animation_circle_fill"></div>--}}
            {{--<a href="tel:{{$dataPhone[0]}}" class="phone_animation_circle_fill_img"><i class="fas fa-phone"--}}
                                                                                       {{--aria-hidden="true"></i></a>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="callback d-none d-md-block" style="left: 49%;bottom: -30px;">--}}
        {{--<div class="phone_animation">--}}
            {{--<div class="phone_animation_circle"></div>--}}
            {{--<div class="phone_animation_circle_fill"></div>--}}
            {{--<a href="tel:{{$dataPhone[0]}}" class="phone_animation_circle_fill_img"><i class="fas fa-phone"--}}
                                                                                       {{--aria-hidden="true"></i></a>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="callback d-none d-md-block" style="left: 49%;bottom: -30px;">--}}
        {{--<div class="phone_animation">--}}
            {{--<div class="phone_animation_circle"></div>--}}
            {{--<div class="phone_animation_circle_fill"></div>--}}
            {{--<a href="tel:{{$dataPhone[0]}}" class="phone_animation_circle_fill_img"><i class="fas fa-phone"--}}
                                                                                       {{--aria-hidden="true"></i></a>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="mess_desk_bot d-none d-md-block">--}}
        {{--<a href="tel:{{$dataPhone[0]}}" class="hotline-master"> 035 437 5562--}}
        {{--</a>--}}
    {{--</div>--}}
{{--</div>--}}


</body>
<script>
    window.onscroll = function() {myFunction()};

    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop+50;

    function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
        }
    }
</script>
@yield('java-scripts')

</Html>