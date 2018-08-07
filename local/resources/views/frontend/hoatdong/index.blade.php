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

@include('frontend.hoatdong.slider')
@include('frontend.hoatdong.title-bar')
@stop
@section('container')

    @include('frontend.hoatdong.tintuc')
    @include('frontend.hoatdong.ThuVienHinhAnh')
    @include('frontend.hoatdong.HoatDongThuongNien')

@stop

@section('java-scripts')
    <script type="text/javascript">

        $(document).ready(function () {

            //owl carousel phần slide hình ảnh hoạt động

            var owl3 = $('#owl-3');
            owl3.owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                dots: true,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1,
                        dots: true,
                    },
                    600: {
                        items: 2,
                        dots: true,
                    },
                    1000: {
                        items: 4,
                        dots: true,
                    }
                }
            })

        })

    </script>

    <script>

    </script>

@stop
