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
@include('frontend.gioithieu.banner-title')
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
            background: linear-gradient(-90deg, #bb0c03, #ff1c10);
            color: yellow;
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

    <div class="container-fluid pt-4 pb-3 border-bottom shadow-sm " id="title_bar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h5><a href="{{URL::asset('/')}}">TRANG CHỦ</a> > GIỚI THIỆU</h5>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid p-0 main-font pt-3" id="fe_gt_content">
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


        <div class="container-fluid main-font p-0" id="fe_gt_slogan">
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

@stop
