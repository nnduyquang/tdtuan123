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
                    <li><span class="text-primary"><i class="far fa-building"></i> ĐỊA CHỈ:</span> Địa chỉ: Số 109 Trường Chinh, Đống Đa, Hà Nội.</li>
                    <li><span class="text-primary"><i class="far fa-building"></i> TRỤ SỞ MIỀN NAM:</span> 202B Hoàng Văn Thụ Phường 9 Quận Phú Nhuận TP.HCM.</li>
                    <li><span class="text-primary"><i class="fas fa-phone-volume"></i> PHẠM ANH TUÂN:</span>  0984 929 097 - 0908 074 446.</li>
                    <li><span class="text-primary"><i class="fas fa-phone-volume"></i> ÂN ĐỨC NHÂN:</span> 0906 037 688 - 0166 699 899.</li>
                    <li><span class="text-primary"><i class="fas fa-phone-volume"></i> TRẦN MINH TÙNG:</span> 0962 383 611 - 0963 185 377.</li>
                    <li><span class="text-primary"><i class="far fa-envelope"></i> Email:<span> Congtycophantuan123@gmail.com</li>
                </ul>
            </div>
            <div class="col-md-12">
                <iframe width="100%" height="450" frameborder="0" style="border:0"
                        src="https://www.google.com/maps/embed/v1/place?q=157%20Nguy%E1%BB%85n%20Th%C6%B0%E1%BB%A3ng%20Hi%E1%BB%81n%2C%20P.6%20Qu%E1%BA%ADn%20B%C3%ACnh%20Th%E1%BA%A1nh%2C%20TPHCM&key=AIzaSyCz9f8H5wjJIac5LrePbowoDN8Vp2FEEZ8" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
@include('frontend.home.UngTuyenNhanh')