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
    @include('frontend.home.middle')

@stop
@section('container')
    <style>
        .mr-td:before {
            content: '';
            position: absolute;
            width: 3px;
            height: 100%;
            background-color: #0d95e8;
            left: 0;
            top: -1px;
        }

        #fe_h_ttct h4 {
            font-size: 22px;
            font-weight: 600;
        }

        #fe_h_ttct p {
            color: #878a8b;
            line-height: 19px;
        }

        #fe_h_ttthem p {
            font-size: 20px;
            padding-top: 10px;
            color: #015b8e;
            line-height: 23px;
        }


    </style>

    <div class="container-fluid main-font" id="fe_h_ttct">
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-md-4 p-3 position-relative wow fadeInLeft" data-wow-delay="500ms">
                    <img src="http://demo.templatepath.com/justice/demo/img/content/ceo.jpg" alt=""
                         style="width: 100%;height: auto;">
                    <div class="d-flex align-items-end"
                         style="border: 5px solid rgba(255,255,255,0.9);position: absolute;width: 86%;height: 90%;left: 7%;top: 4.5%;">
                        <div class="d-flex align-items-center justify-content-between"
                             style="width: 100%;height: auto;background:rgba(255,255,255,0.9);padding: 10px">
                            <img src="http://demo.templatepath.com/justice/demo/img/content/avatar2.jpg" alt=""
                                 style="border-radius: 50%;width: 86px;height: 86px;border: 4px solid white">
                            <div class="pl-3">
                                <p class="pb-2" style="color: #878a8b;line-height: 19px">There are many variations of
                                    passages of Lorem Ipsum available,</p>
                                <span class="font-weight-bold pl-3 position-relative mr-td">Mr TUYỂN DỤNG</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <h4 class="pt-3 pb-3">THÔNG TIN VỀ <span style="color:#0d95e8;"> CHÚNG TÔI</span></h4>
                    <p class="pb-4">There are many variations of passages of Lorem Ipsum available,
                        but the majority have suffered humour, or randomised words which don't look</p>

                    <p class="pb-4">humour, or randomised words which don't look even slightly believable.
                        If you aregoing to use a passage of Lorem Ipsum, you need to be sure there isn't.There are many
                        variations of
                        passages of Lorem Ipsum available, but the majority have suffered humour,</p>

                    <p class="pb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab architecto aspernatur,
                        aut consequatur debitis deserunt earum in laboriosam minus natus neque officiis possimus
                        quasi repellat reprehenderit,
                        saepe sint sit tempora...<a class="pr-2 text-right" href="">xem chi tiết !</a></p>


                    <div class="row pt-4" id="fe_h_ttthem">
                        <div class="col-md-12" id="h_static">
                            {{--<h4 class="pt-3 pb-4">THÔNG TIN <span style="color:#0d95e8;">THÊM</span></h4>--}}
                        </div>
                        <div class="col-md-3 mb-2 col-sm-6 col-6 text-center">
                            <img src="{{URL::asset('images/icon/user.png')}}" alt=""
                                 style="width: 64px;height: auto;margin: auto">
                            <p><span id="counter-number1" class="" style="color: red">1000+</span> HỒ SƠ</p>
                        </div>
                        <div class="col-md-3 mb-2 col-sm-6 col-6 text-center">
                            <img src="{{URL::asset('images/icon/apartments.png')}}" alt=""
                                 style="width: 64px;height: auto;margin: auto">
                            <p><span style="color: red" id="counter-number2">500+</span> DỰ ÁN</p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-6 text-center">
                            <img src="{{URL::asset('images/icon/target.png')}}" alt=""
                                 style="width: 64px;height: auto;margin: auto;">
                            <p><span style="color: red" id="counter-number3">2000+</span> NHÂN VIÊN</p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-6 text-center">
                            <img src="{{URL::asset('images/icon/winner.png')}}" alt=""
                                 style="width: 64px;height: auto;margin: auto">
                            <p><span style="color: red" id="counter-number4">10+</span> GIẢI THƯỞNG</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                    <h4 class="pl-lg-5 pr-lg-5 p-sm-2 animated fadeInLeft">CẦN MỘT CÔNG VIỆC CHỦ ĐỘNG THỜI GIAN HÃY LIÊN HỆ VỚI CHÚNG
                        TÔI!</h4>
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

    @include('frontend.home.NhanVienTieuBieu')
    @include('frontend.home.CamNghiNhanVien')
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
