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
                <h5>LIÊN HỆ</h5>
                <h6><a href="">TRANG CHỦ</a> > LIÊN HỆ</h6>
            </div>
        </div>
    </div>
</div>

<div id="contact_info">
    <div class="container">
        <div class="col-md-12 pb-5">
                    <div class="contact_top">
                        <h3 class="title">Địa chỉ liên hệ</h3>
                        <hr>
                        <h4 class="title">{{$data['companyName']}} </h4>
                        <ul>
                            <li><i class="far fa-building"></i>Địa Chỉ:</li>
                            <li><i class="fas fa-phone"></i>Điện Thoại: </li>
                            <li><i class="far fa-envelope"></i>Email:</li>
                        </ul>
                    </div>
        </div>
        <div class="col-md-12">

            <iframe width="100%" height="450" frameborder="0" style="border:0"
                    src="https://www.google.com/maps/embed/v1/place?q=157%20Nguy%E1%BB%85n%20Th%C6%B0%E1%BB%A3ng%20Hi%E1%BB%81n%2C%20P.6%20Qu%E1%BA%ADn%20B%C3%ACnh%20Th%E1%BA%A1nh%2C%20TPHCM&key=AIzaSyCz9f8H5wjJIac5LrePbowoDN8Vp2FEEZ8" allowfullscreen></iframe>
        </div>
    </div>
</div>
@include('frontend.home.UngTuyenNhanh')