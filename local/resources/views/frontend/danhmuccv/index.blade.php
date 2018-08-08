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

    @include('frontend.danhmuccv.slider')
    @include('frontend.danhmuccv.title-bar')




@stop
@section('container')

    <div class="container-fluid main-font pt-5 pb-5" id="fe_danhmuccv_danhmucvitri">
        <div class="container">
            <div class="row">

                <div class="col-md-9">
                    <div class="row">
                        <div class="col-12 p-0">
                            <h5>CÁC VỊ TRÍ TUYỂN DỤNG</h5>
                        </div>
                        <div class="col-12">
                            @foreach( $data['allTuyenDung'] as$key=>$item)
                                <div class="row mb-3 d-flex align-items-center items-vitrituyendung">
                                    <div class="col-md-3">
                                        {{ Html::image($item->image,'',array('style'=>'')) }}
                                    </div>

                                    <div class="col-md-5 pl-2 border-right ">
                                        <h4>{{$item->title}}</h4>
                                        <p class="pb-2">{{$item->description}}</p>
                                    </div>
                                    <div class="col-md-4 d-flex flex-column flex-lg-row align-items-center">
                                        {{--<div class="mb-3">--}}
                                            {{--<h4 class="pr-lg-1 pr-sm-0">LƯƠNG:THỎA THUẬN</h4>--}}
                                            {{--<span>Posted April3, 2018</span>--}}
                                        {{--</div>--}}
                                        <div class="d-flex flex-column pl-1">
                                            <a href="{{URL::asset('/tuyen-dung-nv-bds.html')}}" class="text-center mr-1"
                                               style="line-height: 20px">CHI TIẾT</a>
                                            <a href="" class="text-center">ỨNG TUYỂN</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        {{--<div class="col-md-12 text-center ">--}}
                            {{--<button>XEM TẤT CẢ</button>--}}
                        {{--</div>--}}

                    </div>
                </div>

                <div class="col-md-3" id="fe_dm_tthd">
                    <h6 class="mb-3">HOẠT ĐỘNG <span style="color: #0d95e8">GẦN ĐÂY</span></h6>
                    @foreach( $data['actionCompany'] as$key=>$item)
                        <a href="">
                            <div class="items-tthd border p-0 position-relative">
                                {{ Html::image($item->image,'',array('style'=>'')) }}
                                <p>{{$item->title}}</p>
                            </div>
                        </a>
                    @endforeach
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
            font-size: 18px;
            color: white;
            padding: 10px 20px;
            border-radius: 3px;
            border: none;
            background: linear-gradient(-90deg, #0a6287, #0d95e8);
        }

        #parallax_slogan button p {
            line-height: 22px;
        }
    </style>

    <div class="container-fluid main-font" id="parallax_slogan">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center pt-5 pb-5">
                    <h4 class="pl-lg-5 pr-lg-5 p-sm-2 animated fadeInLeft">CẦN MỘT CÔNG VIỆC CHỦ ĐỘNG THỜI GIAN HÃY LIÊN
                        HỆ VỚI CHÚNG TÔI !</h4>


                    <div class="row">
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

    {{--@include('frontend.tuyendung.UngTuyenNhanh')--}}

    <style>
        div#fe_gt_slogan {
            background-image: url('images/bg/twitter.jpg');
            -webkit-background-size: cover;
            background-size: cover;
            background-position: center center;
        }

        div#fe_gt_slogan h5 {
            font-size: 22px;
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
@stop

@section('java-scripts')
    <script type="text/javascript">

        $(document).ready(function () {

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
                        items: 3,
                        dots: true,
                    }
                }
            })

        });

    </script>

    <script>


    </script>



@stop