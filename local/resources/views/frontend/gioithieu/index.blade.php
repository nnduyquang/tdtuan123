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
            background-image: url('images/bg/about-us-bg.jpg');
            -webkit-background-size: cover;
            background-size: cover;
            /*background-attachment: fixed;*/
            background-position: center 10%;
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
            font-size: 20px;
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
                    <h5 class="pt-5">GIỚI THIỆU CÔNG TY</h5>
                    <p class="pb-5">MỘT SỐ HOẠT ĐỘNG VÀ THÔNG TIN CÔNG TY.</p>
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
                    <h5><a href="{{URL::asset('/')}}">TRANG CHỦ</a> > GIỚI THIỆU</h5>
                </div>
            </div>
        </div>
    </div>

    <style>
        #fe_gt_content h5 {
            position: relative;
            font-size: 20px;
            font-weight: 600;
            width: fit-content;
            font-family: 'Lalezar', cursive;

        }

        #fe_gt_content p {
            line-height: 20px;
        }

        #fe_gt_content h5:before {
            position: absolute;
            content: '';
            height: 1px;
            width: 38%;
            background-color: #0d95e8;
            bottom: -1px;

        }

        .borderwrapcon .giai-thuong {
            width: 38%;
            height: auto;
            float: right;
            padding-left: 20px;
        }

        .borderwrapcon ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .borderwrapcon ul li {

            padding-bottom: 8px;
        }

        .borderwrapcon ul li:before {
            content: '+';
            margin-right: 5px;
        }

        .borderwrapcon a.ut_ngay {
            padding: 8px 16px;
            background: linear-gradient(-90deg, #0a6287, #0d95e8);
            color: white;
        }

        .borderwrapcon iframe {
            width: 600px;
            height: auto;
        }

        .embed-responsive {
            width: 68%;
            height: auto;
            margin: auto;
        }

        @media screen and (max-width: 1000px) and (min-width: 220px) {

            .borderwrapcon .giai-thuong {
                width: 90%;
                height: auto;
                float: none;
                padding-left: 20px;
            }

            .embed-responsive {
                width: 86%;
                height: auto;
            }

        }

    </style>

    <div class="container-fluid main-font pt-3 pb-5" id="fe_gt_content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pt-4">
                    <div class="borderwrapcon">
                        {!! $data['content'] !!}
                    </div>
                </div>
            </div>
        </div>


        @include('frontend.common.contact_middle')


        <style>
            div#fe_gt_slogan {
                background-image: url('images/bg/twitter.jpg');
                -webkit-background-size: cover;
                background-size: cover;
                background-position: center center;
            }

            div#fe_gt_slogan h5 {
                font-size: 20px;
                font-weight: 600;
                font-family: 'Lalezar', cursive;
                position: relative;
                width: fit-content;
                margin: auto;
            }

            div#fe_gt_slogan p {
                font-size: 19px;
                font-weight: normal;
                position: relative;
                width: fit-content;
                margin: auto;
            }

            div#fe_gt_slogan h5:before {
                position: absolute;
                content: '';
                height: 1px;
                width: 38%;
                background-color: #0d95e8;
                bottom: -1px;
                left: 50%;
                transform: translateX(-50%);
            }
        </style>

        <div class="container-fluid main-font" id="fe_gt_slogan">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center pt-5 mt-5 mb-5">
                        <h5 class="pt-5 pb-2 border-bottom">PHƯƠNG CHÂM LÀM VIỆC</h5>

                        <p class="pt-3 pb-5 mb-5">Vừa làm vừa chơi - thảnh thơi như dân môi giới.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('java-scripts')
    <script type="text/javascript">

        $(document).ready(function () {


        })


    </script>

    <script>


    </script>



@stop
