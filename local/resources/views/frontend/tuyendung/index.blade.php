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

@include('frontend.tuyendung.ThongTinTuyenDung')
@include('frontend.common.contact_middle')
@include('frontend.common.ViTriKhac')
    {{--@include('frontend.tuyendung.UngTuyenNhanh')--}}

@stop
@section('container')
@stop

@section('java-scripts')
    <script type="text/javascript">

        $(document).ready(function () {

            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            $('#tl-tdc').addClass(" "+"active");

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

    </script>

    <script>


    </script>



@stop