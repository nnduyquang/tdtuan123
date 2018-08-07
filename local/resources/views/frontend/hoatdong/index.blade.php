@extends('frontend.layout.master')
@section('title')
    GIỚI THIỆU - CÔNG TY CỔ PHẦN TUẤN 123 BẤT ĐỘNG SẢN TUẤN 123
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

    <style>
        div#fe_danhmuccv_banner {
            margin-top: 86px;
            background-image: url('images/bg/77c1ae02f6eb17b54efa.jpg');
            -webkit-background-size: cover;
            background-size: cover;
            /*background-attachment: fixed;*/
            background-position: center 70%;
        }

        div#fe_danhmuccv_banner h5 {
            font-size: 36px;
            color: white;
            font-family: 'Lalezar', cursive;
            text-shadow: 1px 1px 1px #2a2a2a;
        }

        div#fe_danhmuccv_banner p {
            font-size: 18px;
            color: white;
            text-shadow: 1px 1px 1px #2a2a2a;
        }

        div#fe_danhmuccv_danhmucvitri h5, div#fe_danhmuccv_danhmucvitri h6 {
            font-size: 22px;
            font-family: 'Lalezar', cursive;
            padding-bottom: 10px;
        }

        div#fe_danhmuccv_danhmucvitri h6 {
            position: relative;
        }

        div#fe_danhmuccv_danhmucvitri h6:before {
            position: absolute;
            content: '';
            height: 1px;
            width: 86px;
            background-color: #0d95e8;
            bottom: 0;
        }

        .items-vitrituyendung {
            border: 1px solid #6c757d;
            padding: 10px;
        }

        .items-vitrituyendung img {
            width: 100%;
            height: auto;
            border-radius: 3px;
        }

        .items-vitrituyendung h4 {
            font-weight: 600;
            padding-bottom: 6px;
        }

        .items-vitrituyendung a {
            color: white;
            border-radius: 3px;
            background: linear-gradient(-90deg, #0a6287, #0d95e8);
            transition: .3s;
            margin-bottom: 10px;
            padding: 8px 16px;
            width: 100%;
        }

        .items-vitrituyendung span {
            font-size: 14px;
        }

        #fe_danhmuccv_danhmucvitri button {
            cursor: pointer;
            border-radius: 3px;
            background: linear-gradient(-90deg, #0a6287, #0d95e8);
            padding: 10px 16px 8px 16px;
            border: none;
            color: white;
        }

        #fe_dm_tthd .items-tthd {
            width: 100%;
            height: auto;
            /*background-color: #0d95e8;*/
            margin-bottom: 20px;
            overflow: hidden;
            border-radius: 3px;
        }

        #fe_dm_tthd .items-tthd p {
            width: fit-content;
            position: absolute;
            top: 90%;
            left: 50%;
            transform: translate(-50%, -90%);
            color: white;
            font-family: 'Lalezar', cursive;
            text-shadow: 1px 1px 1px black;
            transition: .3s;
            max-width: 90%;
            text-overflow: ellipsis;
        }

        #fe_dm_tthd .items-tthd img {
            width: 100%;
            height: auto;
            transition: .3s;
        }

        #fe_dm_tthd .items-tthd:hover p {
            color: #0d95e8;
            text-shadow: 1px 1px 1px white;
        }

        #fe_dm_tthd .items-tthd:hover img {
            transform: scale(1.3);
            -webkit-filter: blur(2px); /* Safari 6.0 - 9.0 */
            filter: blur(2px);
        }

    </style>

    <div class="container-fluid main-font animated fadeIn shadow-sm" id="fe_danhmuccv_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pt-5 pb-5">
                    <h5 class="pt-5">HOẠT ĐỘNG CÔNG TY</h5>
                    <p class="pb-5">THÔNG TIN VỀ HOẠT ĐỘNG CÔNG TY BĐS TUẤN 123</p>
                </div>
            </div>
        </div>
    </div>

@stop
@section('container')

    <style>
        div#title_bar h5 {
            font-size: 20px;
            font-family: 'Lalezar', cursive;
        }

        div#title_bar h5 a {
            color: black;
        }
    </style>

    <div class="container-fluid pt-4 pb-3 border-bottom shadow-sm " id="title_bar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h5><a href="{{URL::asset('/')}}">TRANG CHỦ</a> > HOẠT ĐỘNG</h5>
                </div>
            </div>
        </div>
    </div>

    <style>

        #fe_gt_content {
            background-color: #f1f1f1;
        }

        #fe_gt_content .img-overlay {
            width: 100%;
            max-height: 222px;
            overflow: hidden;
        }

        #fe_gt_content h6 {
            font-size: 20px;
        }

        #fe_gt_content h5 {
            position: relative;
            font-size: 20px;
            font-weight: 600;
            width: fit-content;
            font-family: 'Lalezar', cursive;

        }

        #fe_gt_content p {
            line-height: 20px;
            color: #737777;
        }

        #fe_gt_content h5:before {
            position: absolute;
            content: '';
            height: 1px;
            width: 38%;
            background-color: #0d95e8;
            bottom: -1px;

        }

        div#fe_hd_right .img-overlay {
            width: 186px;
            height: 70px;
            overflow: hidden;
            /*border: 2px solid white;*/
        }

        div#fe_hd_right .img-overlay img {
            width: 100%;
            height: auto;
        }

        div#fe_hd_right h6 {
            font-size: 16px;
        }

        div#fe_hd_right p {
            font-size: 14px;
        }

        div#fe_hd_right a {
            color: #1b1e21;
        }
    </style>

    <div class="container-fluid main-font pb-5 pt-3" id="fe_gt_content">
        <div class="container">
            <div class="row pt-5 pb-3">

                <div class="card col-md-4 mb-4" id="">
                    <div class="img-overlay">
                        <a href="sanpham-chitiet.html">
                            <img src="{{URL::asset('images/tintuc/7745cb86936f72312b7e.jpg')}}" alt=""
                                 style="width: 100%;height: auto;">
                        </a>
                    </div>
                    <div class="card-body">
                        <h6 class="pt-3 pb-3">THAM QUAN ĐẤT NƯỚC SINHGAPORE ĐẢO QUỐC SƯ TỬ</h6>
                        <p class="card-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda
                            temporibus voluptatum? Animi blanditiis debitis exercita...!</p>
                    </div>
                    <div class="card-footer pt-3">
                        <a href="">READ MORE...!</a>
                    </div>

                </div>

                <div class="card col-md-4 mb-4" id="">
                    <div class="img-overlay">
                        <img src="{{URL::asset('images/tintuc/52cf330a6be38abdd3f2.jpg')}}" alt=""
                             style="width: 100%;height: auto;">
                    </div>
                    <div class="card-body">
                        <h6 class="pt-3 pb-3">CHƯƠNG TRÌNH CHẠY BỘ THỂ THAO 2017</h6>
                        <p class="card-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda
                            temporibus voluptatum? Animi blanditiis debitis exercita...!</p>
                    </div>
                    <div class="card-footer pt-3">
                        <a href="">READ MORE...!</a>
                    </div>

                </div>


                <div class="col-md-4" id="fe_hd_right">
                    <div class="d-flex align-items-center mb-4">
                        <div class="img-overlay">
                            <img src="{{URL::asset('images/tintuc/77c1ae02f6eb17b54efa.jpg')}}" alt="" align="middle">
                        </div>
                        <div class="pl-3">
                            <a href="">
                                <h6 class="pb-2">Cùng chinh phục Marina Bay Sands</h6>
                                <p>I am text block. Click edit button to change this text lorem ipsum…</p>
                            </a>
                        </div>
                    </div>

                    <div class="d-flex align-items-center mb-4">
                        <div class="img-overlay">
                            <img src="{{URL::asset('images/tintuc/52cf330a6be38abdd3f2.jpg')}}" alt="" align="middle">
                        </div>
                        <div class="pl-3">
                            <a href="">
                                <h6 class="pb-2">Đi bộ từ thiện 2017</h6>
                                <p>I am text block. Click edit button to change this text lorem ipsum…</p>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <div class="img-overlay">
                            <img src="{{URL::asset('images/tintuc/5.jpg')}}" alt="" align="middle">
                        </div>
                        <div class="pl-3">
                            <a href="">
                                <h6 class="pb-2">Đội bóng đá nữ Tuấn 123</h6>
                                <p>I am text block. Click edit button to change this text lorem ipsum…</p>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4">

                        <div class="img-overlay">
                            <img src="{{URL::asset('images/tintuc/77c1ae02f6eb17b54efa.jpg')}}" alt="" align="middle">
                        </div>
                        <div class="pl-3">
                            <a href="">
                                <h6 class="pb-2">Cùng chinh phục Marina Bay Sands</h6>
                                <p>I am text block. Click edit button to change this text lorem ipsum…</p>
                            </a>
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

        #parallax_slogan h5 {
            position: relative;
            font-size: 26px;
            color: white;
            margin-bottom: 20px;
            text-shadow: 1px 1px 2px #002752;
            font-family: 'Lalezar', cursive;
            width: fit-content;
            border-bottom: 2px solid white;
            padding-bottom: 6px;
        }

        #parallax_slogan h5:before {
            position: absolute;
            content: '';
            width: 86px;
            height: 5px;
            background-color: #0d95e8;
            bottom: -1px;
            left: -2px;
            transform: skew(20deg);
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
                <div class="col-md-12 text-left pt-5 pb-5">
                    <h5>THƯ VIỆN HÌNH ẢNH HOẠT ĐỘNG</h5>

                    <div id="owl-3" class="col-md-12 owl-carousel mb-5 owl-theme">
                        @for ($i = 0; $i < 4; $i++)
                            <div class="fe-td-vitrikhac d-flex flex-column pt-3">
                                <a href="">
                                <img src="{{URL::asset('images/uploads/nhan_vien_kd.jpg')}}" alt="" >
                                </a>
                            </div>
                        @endfor
                    </div>

                </div>
            </div>
        </div>
    </div>


    <style>
        div#fe_gt_slogan {
            background-image: url('images/bg/twitter.jpg');
            -webkit-background-size: cover;
            background-size: cover;
            background-position: center center;
        }

        div#fe_gt_slogan h5 {
            font-size: 25px;
            font-weight: 600;
            font-family: 'Lalezar', cursive;
            position: relative;
            width: fit-content;
            /*margin: auto;*/
        }

        div#fe_gt_slogan h6{
            font-size: 20px;
            font-weight: normal;
            font-family: 'Lalezar', cursive;
        }

        div#fe_gt_slogan p {
            font-size: 16px;
            font-weight: normal;
            position: relative;
            width: fit-content;
            /*margin: auto;*/
        }

        div#fe_gt_slogan h5:before {
            position: absolute;
            content: '';
            height: 3px;
            width: 38%;
            background-color: #0d95e8;
            bottom: -1px;
            left: -2px;
            transform: skew(20deg);
        }
    </style>

    <div class="container-fluid main-font pb-5" id="fe_gt_slogan">
        <div class="container">
            <div class="row pb-4">
                <div class="col-md-12 text-left mb-3">
                    <h5 class="pt-5 pb-2 border-bottom">HOẠT ĐỘNG <span class="text-primary">THƯỜNG NIÊN</span></h5>
                    {{--<p class="pt-3 pb-5 mb-5">Vừa làm vừa chơi - thảnh thơi như dân môi giới.</p>--}}
                </div>

                <div class="col-md-4 d-flex flex-column">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-suitcase text-primary fa-2x"></i>
                        <h6 class="pl-3">DU LỊCH CÔNG TY HÀNG NĂM</h6>
                    </div>
                    <p class="pt-3">Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. Facilis, sed, voluptas.</p>

                    <div class="d-flex align-items-center pt-4">
                        <i class="fas fa-futbol text-primary fa-2x"></i>
                        <h6 class="pl-3">CÂU LẠC BỘ BÓNG ĐÁ NAM VÀ NỮ</h6>
                    </div>
                    <p class="pt-3">Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. Facilis, sed, voluptas.</p>
                </div>

                <div class="col-md-4">

                    <div class="d-flex align-items-center">
                        <i class="fas fa-walking text-primary fa-2x"></i>
                        <h6 class="pl-3">CHẠY BỘ THỂ THAO</h6>
                    </div>
                    <p class="pt-3">Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. Facilis, sed, voluptas.</p>

                    <div class="d-flex align-items-center pt-4">
                        <i class="fas fa-award text-primary fa-2x"></i>
                        <h6 class="pl-3">GIẢI THƯỞNG NGƯỜI ĐỨNG ĐẦU</h6>
                    </div>
                    <p class="pt-3">Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. Facilis, sed, voluptas.</p>

                </div>

                <div class="col-md-4">
                    <img src="{{URL::asset('images/bg/nhatrang.tuan123.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
@stop

@section('java-scripts')
    <script type="text/javascript">

        $(document).ready(function () {

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
                        items:4,
                        dots:true,
                    }
                }
            })

        })


    </script>

    <script>


    </script>



@stop
