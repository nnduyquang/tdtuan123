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
        div#fe_danhmuccv_banner {
            margin-top: 86px;
            background-image: url('images/bg/bg8.jpg');
            -webkit-background-size: cover;
            background-size: cover;
            background-attachment: fixed;
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

        #fe_dm_tthd .items-tthd{
            width: 100%;
            height: auto;
            /*background-color: #0d95e8;*/
            margin-bottom: 20px;
            overflow: hidden;
            border-radius: 3px;
        }

        #fe_dm_tthd .items-tthd p{
            width: fit-content;
            position: absolute;
            top: 90%;
            left: 50%;
            transform: translate(-50%,-90%);
            color: white;
            font-family: 'Lalezar', cursive;
            text-shadow: 1px 1px 1px black;
            transition: .3s;
            max-width: 90%;
            text-overflow:ellipsis ;
        }

        #fe_dm_tthd .items-tthd img{
            width: 100%;
            height: auto;
            transition: .3s;
        }

        #fe_dm_tthd .items-tthd:hover p{
            color: #0d95e8;
            text-shadow: 1px 1px 1px white;
        }

        #fe_dm_tthd .items-tthd:hover img{
          transform: scale(1.3);
            -webkit-filter: blur(2px); /* Safari 6.0 - 9.0 */
            filter: blur(2px);
        }

    </style>

    <div class="container-fluid main-font animated fadeIn" id="fe_danhmuccv_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pt-5 pb-5">
                    <h5 class="pt-5">DANH MỤC TUYỂN DỤNG</h5>
                    <p class="pb-5">Danh mục các vị trí tuyển dụng của chúng tôi.</p>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid main-font pt-5 pb-5" id="fe_danhmuccv_danhmucvitri">
        <div class="container">
            <div class="row">

                <div class="col-md-9">
                    <div class="row">
                        <div class="col-12 p-0">
                            <h5>TRANG CHỦ > CÁC VỊ TRÍ TUYỂN DỤNG</h5>
                        </div>
                        <div class="col-12">
                            @for ($i = 0; $i < 4; $i++)
                                <div class="row mb-3 d-flex align-items-center items-vitrituyendung">
                                    <div class="col-md-3">
                                        <img src="{{URL::asset('/images/uploads/nhan_vien_kd.jpg')}}" alt="">
                                    </div>

                                    <div class="col-md-5 pl-2 border-right ">
                                        <h4>NHÂN VIÊN KINH DOANH BẤT ĐỘNG SẢN</h4>
                                        <p class="pb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Accusamus aperiam doloremque excepturi, in minus modi nobis
                                            .</p>
                                    </div>
                                    <div class="col-md-4 d-flex flex-column flex-lg-row align-items-center">
                                        <div class="mb-3">
                                            <h4 class="pr-lg-1 pr-sm-0">LƯƠNG:THỎA THUẬN</h4>
                                            <span>Posted April3, 2018</span>
                                        </div>
                                        <div class="d-flex flex-column pl-1">
                                            <a href="{{URL::asset('/tuyen-dung-nv-bds.html')}}" class="text-center mr-1" style="line-height: 20px">CHI TIẾT</a>
                                            <a href="" class="text-center">ỨNG TUYỂN</a>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>

                        <div class="col-md-12 text-center ">
                            <button>XEM TẤT CẢ</button>
                        </div>

                    </div>
                </div>

                <div class="col-md-3" id="fe_dm_tthd">
                    <h6 class="mb-3">HOẠT ĐỘNG <span style="color: #0d95e8">GẦN ĐÂY</span></h6>
                    @for ($i = 0; $i < 4; $i++)
                        <a href="">
                        <div class="items-tthd border p-0 position-relative">
                            <img src="{{URL::asset('images/bg/bg1.jpg')}}" alt="" style="">
                            <p>DU LỊCH SINGAPORE</p>
                        </div>
                        </a>
                    @endfor
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

@stop
@section('container')
    <style>
        div#fe_gt_slogan{
            background-image: url('images/bg/twitter.jpg');
            -webkit-background-size: cover;
            background-size: cover;
            background-position: center center;
        }

        div#fe_gt_slogan h5{
            font-size: 22px;
            font-weight: 600;
            font-family: 'Lalezar', cursive;
            position: relative;
            width: fit-content;
            margin: auto;
        }

        div#fe_gt_slogan p{
            font-size: 19px;
            font-weight: normal;
            position: relative;
            width: fit-content;
            margin: auto;
        }

        div#fe_gt_slogan h5:before{
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