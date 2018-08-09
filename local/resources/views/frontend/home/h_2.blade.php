<div id="h_2">
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-md-4 p-3 position-relative">
                <img src="http://demo.templatepath.com/justice/demo/img/content/ceo.jpg" alt=""
                     style="width: 100%;height: auto;">
                <div class="d-flex align-items-end img-mr-dung"
                     style="border: 5px solid rgba(255,255,255,0.9);position: absolute;width: 86%;height: 80%;left: 7%;top: 4.5%;">
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
            <div class="col-md-8">
                <h4 class="pt-3 pb-3">THÔNG TIN VỀ <span style="color:#0d95e8;"> CÔNG TY TUẤN 123</span></h4>
                <div class="description">
                    {!! $data['getIntroduce'] !!}
                </div>


                <div class="row pt-4 statistics">
                    <div class="col-md-12" id="h_static">
                        {{--<h4 class="pt-3 pb-4">THÔNG TIN <span style="color:#0d95e8;">THÊM</span></h4>--}}
                    </div>
                    <div class="col-md-3 mb-2 col-sm-6 col-6 text-center">
                        <img src="{{URL::asset('images/icon/user.png')}}" alt=""
                             style="width: 64px;height: auto;margin: auto">
                        <p><span id="counter-number1" class="" style="color: red">1000+</span> HỒ SƠ</p>
                    </div>
                    <div class="col-md-3 mb-2 col-sm-6 col-6 text-center">
                        <img src="{{URL::asset('images/icon/apartments.png')}}" alt=""
                             style="width: 64px;height: auto;margin: auto">
                        <p><span style="color: red" id="counter-number2">500+</span> DỰ ÁN</p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-6 text-center">
                        <img src="{{URL::asset('images/icon/target.png')}}" alt=""
                             style="width: 64px;height: auto;margin: auto;">
                        <p><span style="color: red" id="counter-number3">2000+</span> NHÂN VIÊN</p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-6 text-center">
                        <img src="{{URL::asset('images/icon/winner.png')}}" alt=""
                             style="width: 64px;height: auto;margin: auto">
                        <p><span style="color: red" id="counter-number4">10+</span> GIẢI THƯỞNG</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>