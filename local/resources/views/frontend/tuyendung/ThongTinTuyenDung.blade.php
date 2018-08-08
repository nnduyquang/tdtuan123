<style>
    #title_menu {
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

<div class="container-fluid main-font" id="title_menu" style="background:url('{{URL::to('images/bg/sl-bg1.jpg')}}')">
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

    #fe_h_ttct a {
        color: white;
        padding: 10px 20px;
        border-radius: 3px;
        background: linear-gradient(-90deg, #0a6287, #0d95e8);
        transition: .3s;
    }

    #fe_h_ttct a:hover {
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
            <div class="col-md-9 animated fadeIn slower">
                <div class="title">
                    {{ $data['getDetailTuyenDung']->title}}
                </div>
                <div class="content">
                    {!! $data['getDetailTuyenDung']->content !!}
                </div>
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
