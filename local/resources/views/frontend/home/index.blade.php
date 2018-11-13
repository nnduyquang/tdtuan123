@extends('frontend.layout.master')
@section('title')
    BẤT ĐỘNG SẢN TUẤN 123 - TUYỂN DỤNG
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
    @include('frontend.common.m-slider')
    @include('frontend.home.h_1')
    @include('frontend.home.h_2')

@stop
@section('container')

    @include('frontend.common.contact_middle')
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
                var numHs2 = new CountUp("counter-number2", 0, 3000, 0, 2,options1);
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
