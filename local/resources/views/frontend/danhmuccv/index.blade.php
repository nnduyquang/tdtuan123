@extends('frontend.layout.master')
@section('title')
    TUYỂN DỤNG NHÂN VIÊN BẤT ĐỘNG SẢN
@stop
@section('description')
    Trở thành một phần của BĐS Tuấn 123 để tận hưởng công việc theo cách của riêng bạn,
    Công ty Bất động sản Tuấn 123 hiện đang là đơn vị chuyên Mua, Bán, Cho thuê nhà, đất thổ cư trên toàn Hà Nội.
    Với đội ngũ Chuyên viên kinh doanh và Quản lý giàu kinh nghiệm, năng động. Chế độ đãi ngộ tốt nhất.
@stop

@section('slider')

    <style>
        div#fe_danhmuccv_banner{
            margin-top: 86px;
            background-image: url('images/bg/bg8.jpg');
            -webkit-background-size: cover;
            background-size: cover;
            background-attachment: fixed;
            background-position: center 10%;
        }

        div#fe_danhmuccv_banner h5{
            font-size: 36px;
            color: white;
            font-family: 'Lalezar', cursive;
            text-shadow: 1px 1px 1px #2a2a2a;
        }

        div#fe_danhmuccv_banner p{
            font-size: 18px;
            color: white;
            text-shadow: 1px 1px 1px #2a2a2a;
        }
    </style>

    <div class="container-fluid main-font" id="fe_danhmuccv_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pt-5 pb-5">
                    <h5 class="pt-5">DANH MỤC TUYỂN DỤNG</h5>
                    <p class="pb-5">Danh mục các vị trí của chúng tôi.</p>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid main-font pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>thông tin tuyển dụng</p>
                </div>
            </div>
        </div>
    </div>

    {{--@include('frontend.tuyendung.UngTuyenNhanh')--}}

@stop
@section('container')
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
                        items:3,
                        dots:true,
                    }
                }
            })

        });

    </script>

    <script>


    </script>



@stop