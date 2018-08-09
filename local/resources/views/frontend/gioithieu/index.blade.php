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
        div#title_bar h5{
            font-size: 20px;
            font-family: 'Lalezar', cursive;
        }

        div#title_bar h5 a{
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
        #fe_gt_content h5{
            position: relative;
            font-size: 22px;
            font-weight: 600;
            width: fit-content;
            font-family: 'Lalezar', cursive;

        }

        #fe_gt_content p{
            line-height: 20px;
        }

        #fe_gt_content h5:before{
            position: absolute;
            content: '';
            height: 1px;
            width: 38%;
            background-color: #0d95e8;
            bottom: -1px;

        }
    </style>

    <div class="container-fluid main-font pt-3 pb-5" id="fe_gt_content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="pb-3 pt-5 border-bottom mb-4">GIỚI THIỆU VỀ CÔNG TY</h5>

                            <p>Công ty Bất động sản Tuấn 123 hiện đang là đơn vị chuyên Mua, Bán,
                                Cho thuê nhà, đất thổ cư trên toàn Hà Nội. Với đội ngũ Chuyên viên
                                kinh doanh và Quản lý giàu kinh nghiệm, năng động. Chế độ đãi ngộ tốt nhất.</p>

                            <br>

                            <p>TUẤN 123, không chăm sóc nhưng luôn luôn bảo vệ người mua, người mua có quyền được
                                biết mình sắp mua bất động sản ở đâu ? như thế nào ? và của ai ? </p>
                            {{--<img src="{{URL::asset('images/bg/danhhieu.png')}}" alt="" style="width: 80%;height: auto">--}}
                            <br>

                            {{--<h6 style="font-size: 20px;font-weight: 600">BẢNG CỬU CHƯƠNG</h6>--}}

                            <p>
                                9 Điều tinh túy được đúc kết lại để giúp anh em Môi giới Tuấn 123 có bản lĩnh, sẵn sàng có lời nói và hành động ra tiền.
                                <br>

                                1. Kiến thức Olympia.​ <br>

                                2. Bán cái mình có.<br>

                                3. Biết truy vấn đến cùng.<br>

                                4. Muốn xe đạp à đòi xe máy.<br>

                                5. Luôn nghi ngờ à xử lý nghi ngờ.<br>

                                6. Ký hợp đồng phải đọc kỹ trước khi ký.<br>

                                7. Chính nhân quân tử, được cho đi là niềm vui.<br>

                                8. Kiềng 3 chân: Ông chủ nhà – Ông môi giới – Ông khách mua.<br>

                                9. Biết né đòn, biết đá bóng, biết đưa về thế mạnh của mình.</p>

                            <br>

                            <p>
                                <span class="text-primary">CÔNG TY TNHH BẤT ĐỘNG SẢN TUẤN 123</span> <br>
                                <span class="text-primary"> Địa chỉ: </span> Số 109 Trường Chinh, Đống Đa, Hà Nội. <br>
                                <span class="text-primary"> Trụ sở miền Nam:</span> 202B Hoàng Văn Thụ Phường 9 Quận Phú Nhuận TP.HCM. <br>

                                <span class="text-danger">Hotline:</span> 0984.929.097 – 0906.037.688 - 0962.383.611 -  0962.038.484 <br>
                            </p>

                        </div>
                        <div class="col-md-6 pt-5">
                            <img class="border shadow-sm" src="{{URL::asset('images/bg/28279146_835846503254010_2229504394337144951_n.jpg')}}" alt="" style="width: 100%;height: auto;padding: 2px;">
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
            font-family: 'Lalezar', cursive;
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
                <div class="col-md-12 text-center pt-5 pb-5">
                    <h4 class="pl-lg-5 pr-lg-5 p-sm-2 animated fadeInLeft">CẦN MỘT CÔNG VIỆC CHỦ ĐỘNG THỜI GIAN HÃY LIÊN HỆ VỚI CHÚNG
                        TÔI!</h4>
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



        })


    </script>

    <script>



    </script>



@stop
