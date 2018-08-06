<style>
    #title_menu {
        background-image: url('images/bg/sl-bg1.jpg');
        -webkit-background-size: cover;
        background-size: cover;
        background-position: center center;
        background-attachment: fixed;
        background-repeat: no-repeat;
        padding-top: 100px;
    }

    #title_menu h6 {
        padding-top: 10px;
        color: white;
    }

    #title_menu h5 {
        color: white;
        font-size: 26px;
        /*font-family: 'Lalezar', cursive;*/
    }

    #title_menu h6 a {
        color: white;
    }

    #fe_TD_info h5 {
        font-size: 22px;
    }
</style>

<div class="container-fluid main-font" id="title_menu">
    <div class="container">
        <div class="row">
            <div class="col-md-12 pt-4 pb-5">
                <h5>TUYỂN DỤNG NHÂN VIÊN KINH DOANH</h5>
                <h6><a href="">TRANG CHỦ</a> > TUYỂN DỤNG</h6>
            </div>
        </div>
    </div>
</div>

{{--<div class="container-fluid main-font" id="fe_TD_info">--}}
{{--<div class="container">--}}
{{--<div class="row mt-5 mb-5">--}}
{{--<div class="col-md-4 border border-dark">--}}
{{--<img class="p-2" src="{{URL::asset('images/uploads/tuyen-dung-nhan-vien-kinh-doanh.jpg')}}" alt="" style="width: 100%;height: auto;">--}}
{{--</div>--}}
{{--<div class="col-md-5">--}}
{{--<h5>TUYÊN NHÂN VIÊN KINH DOANH BẤT ĐỘNG SẢN</h5>--}}
{{--</div>--}}
{{--<div class="col-md-3"> right</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}

<style>
    .mr-td:before {
        content: '';
        position: absolute;
        width: 3px;
        height: 100%;
        background-color: #0d95e8;
        left: 0;
        top: -1px;
    }

    #fe_h_ttct h4 {
        font-size: 22px;
        /*font-weight: 600;*/
    }

    #fe_h_ttct h5 {
        font-size: 20px;
        /*font-weight: 600;*/

    }

    #fe_h_ttct a{
        color: white;
        padding: 10px 20px;
        border-radius: 3px;
        background: linear-gradient(-90deg, #0a6287, #0d95e8);
        transition: .3s;
    }

    #fe_h_ttct a:hover{
        color: white;
        padding: 10px 20px;
        border-radius: 3px;
        background: linear-gradient(-90deg, #0a6287, #0d95e8);
        transition: .3s;
    }


    #fe_h_ttct p {
        color: #878a8b;
        line-height: 19px;
    }

    #fe_h_ttthem p {
        font-size: 20px;
        padding-top: 10px;
        color: #015b8e;
        line-height: 23px;
    }


</style>

<div class="container-fluid main-font" id="fe_h_ttct">
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-md-4 p-3 position-relative animated zoomIn">
                <img src="http://demo.templatepath.com/justice/demo/img/content/ceo.jpg" alt=""
                     style="width: 100%;height: auto;">
                <div class="d-flex align-items-end"
                     style="border: 5px solid rgba(255,255,255,0.9);position: absolute;width: 86%;height: 90%;left: 7%;top: 4.5%;">
                    <div class="d-flex align-items-center justify-content-between"
                         style="width: 100%;height: auto;background:rgba(255,255,255,0.9);padding: 10px">
                        <img src="http://demo.templatepath.com/justice/demo/img/content/avatar2.jpg" alt=""
                             style="border-radius: 50%;width: 86px;height: 86px;border: 4px solid white">
                        <div class="pl-3">
                            <p class="pb-2" style="color: #878a8b;line-height: 19px">There are many variations of
                                passages of Lorem Ipsum available,</p>
                            <span class="font-weight-bold pl-3 position-relative mr-td">Mr TUYỂN DỤNG</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 animated fadeIn slower">
                <h4 class="pt-3 pb-3">TUYỂN NHÂN VIÊN KINH DOANH <span style="color:#0d95e8;"> BẤT ĐỘNG SẢN</span>
                </h4>

                <h5 class="pb-3">LƯƠNG: THỎA THUẬN</h5>

                <p class="pb-4">There are many variations of passages of Lorem Ipsum available,
                    but the majority have suffered humour, or randomised words which don't look</p>

                <p class="pb-4">humour, or randomised words which don't look even slightly believable.
                    If you aregoing to use a passage of Lorem Ipsum, you need to be sure there isn't.There are many
                    variations of
                    passages of Lorem Ipsum available, but the majority have suffered humour,</p>

                <p class="pb-3 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab architecto aspernatur,
                    aut consequatur debitis deserunt earum in laboriosam minus natus neque officiis possimus
                    quasi repellat reprehenderit,
                    saepe sint sit tempora...</p>

                <a href="">ỨNG TUYỂN VỊ TRÍ</a>

            </div>


            <style>
                #fe_TD_phucloi h4 {
                    position: relative;
                    /*width: fit-content;*/
                }

                #fe_TD_phucloi h4:before {
                    position: absolute;
                    content: '';
                    height: 1px;
                    width: 100%;
                    background-color: #0d95e8;
                    bottom: 8px;
                }
            </style>

            <div class="col-md-3" id="fe_TD_phucloi">
                <h4 class="pt-3 pb-3">PHÚC LỢI NHÂN VIÊN</h4>

                <div class="d-flex align-items-center mb-3 mt-3 animated bounceIn">
                    <img src="{{URL::asset('images/icon/globe.png')}}" alt="" style="width: 64px;height: auto;">
                    <div>
                        <p class="pl-3">
                            Chế độ du lịch công ty hàng năm cho nhân viên.
                        </p>

                    </div>
                </div>

                <div class="d-flex align-items-center mb-3 mt-3 animated bounceIn">
                    <img src="{{URL::asset('images/icon/insurance.png')}}" alt="" style="width: 64px;height: auto;">
                    <div>
                        <p class="pl-3">
                            Chế độ bảo hiểm y tế. <br>
                            Bảo hiễm xã hội.
                        </p>

                    </div>
                </div>


                <div class="d-flex align-items-center mb-3 mt-3 animated bounceIn">
                    <img src="{{URL::asset('images/icon/discount.png')}}" alt="" style="width: 64px;height: auto;">
                    <div>
                        <p class="pl-3">
                            Thưởng % cao cho mõi dự án BĐS.<br>
                        </p>

                    </div>
                </div>

                <div class="d-flex align-items-center mb-3 mt-3  animated bounceIn">
                    <img src="{{URL::asset('images/icon/lighthouse.png')}}" alt=""
                         style="width: 64px;height: auto;">
                    <div>
                        <p class="pl-3">
                            Giải thưởng truyền cảm hứng cho nhân viên tiêu biểu<br>
                        </p>

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
        font-size: 18px;
        color: white;
        padding: 10px 20px;
        border-radius: 3px;
        border: none;
        background: linear-gradient(-90deg, #0a6287, #0d95e8);
    }

    #parallax_slogan button p{
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