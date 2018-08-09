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

    #contact_info h3{
        font-family: 'Lalezar', cursive;
        font-size: 13px;
    }

    /*font-family: 'Lalezar', cursive;*/
</style>
<div class="container-fluid main-font" id="title_menu" style="background:url('{{URL::to('images/bg/sl-bg1.jpg')}}')">
    <div class="container">
        <div class="row">
            <div class="col-md-12 pt-4 pb-5">
                <h5>LIÊN HỆ</h5>
                <h6><a href="">TRANG CHỦ</a> > LIÊN HỆ</h6>
            </div>
        </div>
    </div>
</div>

<div id="contact_info" class="shadow-sm">
    <div class="container p-0">
        <div class="col-md-12">
                    <div class="contact_top">
                        <h3 class="title">THÔNG TIN LIÊN HỆ</h3>
                        <hr>
                    </div>
        </div>

    </div>
</div>

<style>
    div#contact_content ul{
        list-style-type: none;
        margin: 0;
        padding: 0;

    }

    div#contact_content ul li{
        height: 26px;
    }

    div#contact_content p{
        line-height: 22px;
    }

    div#contact_content .title{
        position: relative;
        text-transform: uppercase;
        font-weight: 600;
        font-size: 22px;
        width: fit-content;
        margin: auto;
    }

    div#contact_content .title:before{
        position: absolute;
        content: '';
        width: 38px;
        height: 3px;
        transform: skew(20deg);
        background-color: #0d95e8;
        bottom: 0;
        left: 30%;
    }

    div#contact_content .title:after{
        position: absolute;
        content: '';
        width: 68px;
        height: 3px;
        transform: skew(20deg);
        background-color: #2a2a2a;
        bottom: 0;
        left: calc(30% + 41px);
    }
</style>

<div class="container-fluid">
    <div class="container pt-3 pb-5" id="contact_content">
        <div class="row">
            <div class="col-md-12 pb-5 text-center">
                <h4 class="title pb-3">{{$data['companyName']}} </h4>
                <p class="main-font pt-3 pb-4"> Hãy trở thành một thành viên của CÔNG TY BẤT ĐỘNG SẢN TUẤN 123. <br>
                    Chúng tôi luôn chào đón những thành viên mới về với đại gia đình TUẤN 123.
                </p>
                <ul class="main-font">
                    <li><span class="text-primary"><i class="far fa-building"></i> ĐỊA CHỈ:</span> Số 109 Trường Chinh, Đống Đa, Hà Nội.</li>
                    <li><span class="text-primary"><i class="far fa-building"></i> TRỤ SỞ MIỀN NAM:</span> 202B Hoàng Văn Thụ Phường 9 Quận Phú Nhuận TP.HCM.</li>
                    <li><span class="text-primary"><i class="fas fa-phone-volume"></i> LÊ BÁ HIỂN:</span>  0962 038 484 - 0948 104 812.</li>
                    <li><span class="text-primary"><i class="fas fa-phone-volume"></i> PHẠM ANH TUÂN:</span>  0984 929 097 - 0908 074 446.</li>
                    <li><span class="text-primary"><i class="fas fa-phone-volume"></i> ÂN ĐỨC NHÂN:</span> 0906 037 688 - 0166 699 899.</li>
                    <li><span class="text-primary"><i class="fas fa-phone-volume"></i> TRẦN MINH TÙNG:</span> 0962 383 611 - 0983 185 377.</li>
                    <li><span class="text-primary"><i class="far fa-envelope"></i> Email:<span> Congtycophantuan123@gmail.com</li>
                </ul>
            </div>
            <div class="col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.1434219844!2d106.66764155075165!3d10.80032546166673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175292f37d2e2f5%3A0x35893e7d2ecf390d!2zMjAyYiBIb8OgbmcgVsSDbiBUaOG7pSwgUGjGsOG7nW5nIDksIFTDom4gQsOsbmgsIEjhu5MgQ2jDrSBNaW5oLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1533740884971" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
@include('frontend.home.UngTuyenNhanh')