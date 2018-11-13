<style>

    div#footer {
        background-image: url('{{URL::asset("images/bg/special_bg.png")}}');
        font-family: 'Fira Sans Condensed', sans-serif;
        color: white;
    }

    div#copy_right {
        background-color: #055699;
        color: white;
        text-align: center;
        font-size: 14px;
        padding-top: 6px;
        padding-bottom: 6px;
    }

    div#footer h5 {
        position: relative;
        border-bottom: 1px solid #6c757d;
        padding-bottom: 18px;
        margin-bottom: 20px;
    }

    div#footer h5:before {
        position: absolute;
        content: '';
        bottom: -1px;
        left: 0;
        height: 1px;
        width: 86px;
        background-color: #22b9fa;
    }

    div#footer ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    div#footer ul li{
       margin-bottom: 20px;
    }

    div#footer ul li a div#img-hd {
        width: 63px;
        height: 46px;
        overflow: hidden;
        border: 2px solid white;
        /*background-color: rgba(255,255,255,0.2);*/
        margin-right: 10px;
    }

    div#footer ul li a div img {
        height: 100%;
        width: auto;


    }

    div#footer ul li a span{
        text-align: right;
        font-size: 14px;
        color: white;

    }

    div#ftl_tintuc h6{
        font-size: 15px;
        color: #ffffff;
        font-weight: 500;
        padding-bottom: 6px;

    }

    div#ftl_tintuc p{
        font-size: 12px;
        color: #e5e5e5;
        font-weight: 500;

    }

    ul#ft_tuyendung li a{
        position: relative;
        color: white;
        font-size: 14px;
        transition: .3s;
    }

    ul#ft_tuyendung li a:hover{
        padding-left: 10px;
        color: #4fc8fc;
    }

    ul#ft_tuyendung li:before{

    }

    #ft_thongtincty a{
        font-size: 14px;
        color: white;
    }
</style>

<div class="container-fluid p-0" id="footer">
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-md-4 mb-4">
                <h5> HOẠT ĐỘNG CÔNG TY </h5>
                <ul>
                    <li><a href="" class="d-flex align-items-center">
                            <div id="img-hd">
                                <img src="http://batdongsantuan123.vn/wp-content/uploads/2017/11/23157462_881179868703496_3275079133793583096_o-690x420.jpg"
                                     alt="">
                            </div>
                            <div id="ftl_tintuc">
                                <h6>Giải thể thao TUẤN 123</h6>
                                <p>Hoạt động số 1 tại công ty bất động sản tuấn 123</p>
                            </div>
                        </a>
                    </li>
                    <li><a href="" class="d-flex align-items-center">
                            <div id="img-hd">
                                <img src="http://tuyendungtuan123.vn/wp-content/uploads/2018/04/13221435_218673518524785_4806659665805182702_o.jpg"
                                     alt="">
                            </div>
                            <div id="ftl_tintuc">
                                <h6>Giải Bóng Đá Chuyên Nghiệp TUẤN 123</h6>
                                <p>Hoạt động số 1 tại công ty bất động sản tuấn 123</p>
                            </div>
                        </a>
                    </li>
                    <li><a href="" class="d-flex align-items-center">
                            <div id="img-hd">
                                <img src="http://tuyendungtuan123.vn/wp-content/uploads/2018/03/received_773151879536315.jpeg"
                                     alt="">
                            </div>
                            <div id="ftl_tintuc">
                                <h6>Chinh phục Marina Bay Sands</h6>
                                <p>Hoạt động số 1 tại công ty bất động sản tuấn 123</p>
                            </div>
                        </a>
                    </li>
                    <li><a href="" class="d-flex align-items-center">
                            <div id="img-hd">
                                <img src="http://tuyendungtuan123.vn/wp-content/uploads/2018/03/FB_IMG_1500278148188.jpg"
                                     alt="">
                            </div>
                            <div id="ftl_tintuc">
                                <h6>Đi bộ từ thiện 2017</h6>
                                <p>Hoạt động số 1 tại công ty bất động sản tuấn 123</p>
                            </div>
                        </a>
                    </li>

                    <li><a href="" class="d-flex align-items-center justify-content-end">
                        <span>Xem thêm tại đây..!</span>
                    </a>
                    </li>
                </ul>
            </div>


            <div class="col-md-4 mb-4">
                <h5>TUYỂN DỤNG</h5>
                <ul id="ft_tuyendung">
                    <li><a href=""><i class="fas fa-angle-right"></i> Vị trí nhân viên kinh doanh BĐS...</a></li>
                    <li><a href=""><i class="fas fa-angle-right"></i> Vị trí trợ lý trưởng bộ phận...</a></li>
                    <li><a href=""><i class="fas fa-angle-right"></i> Vị trí trợ lý tổng giám đốc...</a></li>
                    <li><a href=""><i class="fas fa-angle-right"></i> Vị trí nhân viên hỗ trợ...</a></li>
                    <li><a href=""><i class="fas fa-angle-right"></i> Vị trí nhân văn phòng...</a></li>
                </ul>
            </div>

            <div class="col-md-4" id="ft_thongtincty">
                <h5>THÔNG TIN CHÚNG TÔI</h5>
                <h6 style="font-size: 19px;margin-bottom: 20px">CÔNG TY CỔ PHẦN BẤT ĐỘNG SẢN TUẤN 123</h6>
                <ul>
                    {{--<li><a href=""><i class="far fa-envelope"></i> congtycophantuan123@gmail.com</a></li>--}}
                    <li><a href=""><i class="fas fa-phone"></i> 035 473 5562 Thu Nhàn</a></li>
                    <li><a href=""><i class="fas fa-phone"></i> 0984 929 097 - 0908 074 446 Phạm Thanh Tuân</a></li>
                    <li><a href=""><i class="far fa-envelope"></i> Email: thunhan260196@gmail.com</a></li>
                    <li><a href=""><i class="fas fa-map-marker-alt"></i> TP.HỒ CHÍ MINH: 202B Hoàng Văn Thụ Phường 9 Quận Phú Nhuận TP.HCM. </a></li>
                    <li><a href=""><i class="fas fa-map-marker-alt"></i> HÀ NỘI: 109 Trường Chinh - Đống Đa - Hà Nội. </a></li>
                    <li><img src="http://online.gov.vn/PublicImages/2015/08/27/11/20150827110756-dathongbao.png" alt="" style="width: 68%;height: auto;"></li>

                </ul>
            </div>
        </div>
    </div>

    <div id="copy_right">
        <p>Copyright © 2018 BĐS TUẤN 123</p>
    </div>
</div>