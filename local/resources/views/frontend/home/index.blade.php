@extends('frontend.layout.master')
@section('title')
    TUYÊN DỤNG - TUẤN 123 BẤT ĐỘNG SẢN TUẤN 123
@stop
@section('description')
    Trở thành một phần của BĐS Tuấn 123 để tận hưởng công việc theo cách của riêng bạn,
    Công ty Bất động sản Tuấn 123 hiện đang là đơn vị chuyên Mua, Bán, Cho thuê nhà, đất thổ cư trên toàn Hà Nội.
    Với đội ngũ Chuyên viên kinh doanh và Quản lý giàu kinh nghiệm, năng động. Chế độ đãi ngộ tốt nhất.
@stop
@section('styles')
    {{ Html::style('css/themes/default/default.css') }}
@stop
@section('slider')

    @include('frontend.home.slider')
    @include('frontend.home.h_1')
    {{--@include('frontend.home.h_1_copy')--}}
    @include('frontend.home.h_2')

@stop
@section('container')
    <style>
        #parallax_slogan {
            background-image: url('{{URL::asset('images/bg/bg-home-recruit.png')}}');
            -webkit-background-size: cover;
            background-size: cover;
            background-position: center center;
            background-attachment: fixed;
        }

        #parallax_slogan h4 {
            font-size: 26px;
            color: white;
            margin-bottom: 20px;
            text-shadow: 1px 1px 2px #002752;
            font-family: 'Lalezar', cursive;
        }

        #parallax_slogan button {
            font-size: 20px;
            color: white;
            padding: 10px 20px;
            border-radius: 3px;
            border: none;
            background: linear-gradient(-90deg, #0a6287, #0d95e8);
        }
    </style>

    <div class="container-fluid main-font" id="parallax_slogan">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center pt-5 pb-5">
                    <h4 class="pl-lg-5 pr-lg-5 p-sm-2 animated fadeInLeft">BẠN ĐANG KHAO KHÁT CỐNG HIẾN - HÃY LIÊN HỆ NGAY VỚI CHÚNG TÔI</h4>
                    <div class="row wow bounceIn">
                        <div class="col-md-4 mb-4">
                            <button class="animated fadeIn" href="">
                                <p>PHẠM THANH TUÂN<br>
                                    0984 929 097 - 0908 074 446</p></button>
                        </div>
                        <div class="col-md-4 mb-4">
                            <button class="animated fadeIn" href="">
                                <p>ÂN ĐỨC NHÂN <br>
                                    0906 037 688 - 0166 699 899</p></button>
                        </div>
                        <div class="col-md-4">
                            <button class="animated fadeIn" href="">
                                <p>TRẦN MINH TÙNG<br>
                                    0962 383 611 - 0963 185 377</p></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--@include('frontend.home.NhanVienTieuBieu')--}}
    {{--@include('frontend.home.CamNghiNhanVien')--}}
    @include('frontend.common.ViTriKhac')
    @include('frontend.home.UngTuyenNhanh')
@stop

@section('java-scripts')
    <script type="text/javascript">

        $(document).ready(function () {



            $('#owl_1').owlCarousel({
                animateOut: 'fadeOut',
                animateIn: 'fadeIn',
                autoplay: true,
                loop: true,
                nav: false,
                dots: false,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false,
                        loop: true,
                    },
                    600: {
                        items: 1,
                        nav: false,
                        loop: true,
                    },
                    1000: {
                        items: 1,
                        nav: false,
                        loop: true,
                    }
                }
            })

            var owl3 = $('#owl-3');
            owl3.owlCarousel({
                loop:true,
                margin:10,
                nav:false,
                dots:true,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                responsive:{
                    0:{
                        items:1,
                        dots:true,
                    },
                    600:{
                        items:2,
                        dots:true,
                    },
                    1000:{
                        items:3,
                        dots:true,
                    }
                }
            })

            var owl2 = $('#owl-2');
            owl2.owlCarousel({
                loop:true,
                margin:10,
                nav:false,
                dots:true,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                responsive:{
                    0:{
                        items:1,
                        dots:true,
                    },
                    600:{
                        items:2,
                        dots:true,
                    },
                    1000:{
                        items:3,
                        dots:true,
                    }
                }
            })

        });

        var owl = $('#owl_1');
        $('.customNextBtn').click(function () {
            owl.trigger('next.owl.carousel');
        })
        // Go to the previous item
        $('.customPrevBtn').click(function () {
            // With optional speed parameter
            // Parameters has to be in square bracket '[]'
            owl.trigger('prev.owl.carousel');
        })


    </script>



    <script>



        var waypoint = new Waypoint({
            element: document.getElementById('h_static'),
            handler: function () {
                var options1 = {
                    useEasing: true,
                    useGrouping: false,
                    separator: ',',
                    decimal: '.',
                    prefix: '',
                    suffix: '+'
                };
                var options2 = {
                    useEasing: true,
                    useGrouping: false,
                    separator: ',',
                    decimal: '.',
                    prefix: '',
                    suffix: '%'
                };
                var numHs1 = new CountUp("counter-number1", 0, 1000, 0, 2,options1);
                var numHs2 = new CountUp("counter-number2", 0, 500, 0, 2,options1);
                var numHs3 = new CountUp("counter-number3", 0, 2000, 0, 2.2, options1);
                var numHs4 = new CountUp("counter-number4", 0, 10, 0, 2,options1);
                numHs1.start();
                numHs2.start();
                numHs3.start();
                numHs4.start();
                waypoint.disable();
            },
            offset: '85%'
        })

    </script>



@stop
