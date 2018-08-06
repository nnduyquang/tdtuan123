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
                <div class="col-md-4 p-3 position-relative">
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
                        <div class="col-md-12">
                            {{--<h4 class="pt-3 pb-4">THÔNG TIN <span style="color:#0d95e8;">THÊM</span></h4>--}}
                        </div>
                        <div class="col-md-3 col-sm-6 col-6 text-center d-flex flex-column">
                            <img src="{{URL::asset('images/icon/user.png')}}" alt=""
                                 style="width: 64px;height: auto;margin: auto">
                            <p><span style="color: red">1000+</span> HỒ SƠ</p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-6 text-center d-flex flex-column">
                            <img src="{{URL::asset('images/icon/apartments.png')}}" alt=""
                                 style="width: 64px;height: auto;margin: auto">
                            <p><span style="color: red">500+</span> DỰ ÁN</p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-6 text-center d-flex flex-column">
                            <img src="{{URL::asset('images/icon/target.png')}}" alt=""
                                 style="width: 64px;height: auto;margin: auto">
                            <p><span style="color: red">2000+</span> NHÂN VIÊN</p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-6 text-center d-flex flex-column">
                            <img src="{{URL::asset('images/icon/winner.png')}}" alt=""
                                 style="width: 64px;height: auto;margin: auto">
                            <p><span style="color: red">10+</span> GIẢI THƯỞNG</p>
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
        }

        #parallax_slogan a {
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
                <div class="col-md-12 text-center p-5">
                    <h4>CẦN MỘT CÔNG VIỆC CHỦ ĐỘNG THỜI GIAN HÃY LIÊN HỆ VỚI CHÚNG TÔI!</h4>
                    <a href="">GỌI NGAY 0965.35.05.75</a>
                </div>
            </div>
        </div>
    </div>

    <style>
        #fe_h_nvtieubieu h4 {
            position: relative;
            font-size: 25px;
            font-weight: 600;
            position: relative;
            width: fit-content;
            margin: auto;
            margin-bottom: 10px;
            /*color: #0d95e8;*/
        }

        #fe_h_nvtieubieu h4:before {
            position: absolute;
            content: '';
            height: 3px;
            width: 58px;
            bottom: 5px;
            background-color: red;
            left: 47%;
            transform: translate(-50%,0%);
            -ms-transform: skewX(50deg); /* IE 9 */
            -webkit-transform: skewX(50deg); /* Safari */
            transform: skewX(50deg); /* Standard syntax */
        }

        #fe_h_nvtieubieu h4:after {
            position: absolute;
            content: '';
            bottom: 5px;
            height: 3px;
            width: 38px;
            left: 28%;
            -ms-transform: skewX(50deg); /* IE 9 */
            -webkit-transform: skewX(50deg); /* Safari */
            transform: skewX(50deg); /* Standard syntax */
            background-color: black;
        }

        #fe_h_nvtieubieu p {
            color: #6c757d;
        }

        .top-empl{
            padding:0px 38px;
        }

        .top-employee-info{
            position: relative;
            margin: auto;
            background-color: white;
            padding-bottom: 30px;
            transition: .3s;
        }

        .top-employee-info:before{
            backface-visibility: hidden;
            background: #fff none repeat scroll 0 0;
            content: "";
            display: block;
            float: left;
            height: 73px;
            left: -2px;
            position: absolute;
            right: 0;
            top: -34px;
            transform: rotate(-7deg) skewX(-7deg);
            -webkit-transform: rotate(-7deg) skewX(-7deg);
            -ms-transform: rotate(-7deg) skewX(-7deg);
            -o-transform: rotate(-7deg) skewX(-7deg);
            width: 101%;
            z-index: 0;
        }

        .top-employee-info p{
            position: relative;
            z-index: 9;
            margin-bottom: 30px;
        }

        .top-employee-info a{
            border: 1px solid #0d95e8;
            padding: 8px 26px;
            border-radius: 3px;
            color: #1b1e21;
            font-size: 14px;
            font-weight: 500;
        }

        .top-empl:hover{
            background-color: #1b1e21;
        }
    </style>

    <div class="container-fluid main-font" id="fe_h_nvtieubieu">
        <div class="container">
            <div class="row pt-5 pb-5">
                <div class="col-md-12 text-center">
                    <h4 class="pb-3">NHÂN VIÊN <span style="color: red">TIÊU BIỂU</span></h4>
                    <p style="width: 86%;margin: auto;margin-bottom: 30px">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Aspernatur beatae commodi
                        deleniti fugiat labore nam quae ullam velit veniam voluptatem? At commodi dicta earum
                        et explicabo officia perspiciatis quo similique.</p>
                </div>

                <div class="col-md-4 d-flex flex-column top-empl">
                    <img src="http://demo.templatepath.com/justice/demo/img/attorney/f-1.png" alt="" style="width: 100%;height: auto;margin: auto    ">
                    <div class="top-employee-info text-center">
                        <p>Mss PHU QUÂN / Manager Assistance</p>
                        <a href="">XEM THÊM</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('java-scripts')
    <script type="text/javascript">

        $(document).ready(function () {
            $('.owl-carousel').owlCarousel({
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
        });

        var owl = $('.owl-carousel');
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

@stop
