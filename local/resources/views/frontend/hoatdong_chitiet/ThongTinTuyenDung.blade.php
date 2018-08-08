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

<div class="container-fluid main-font" id="title_menu" style="background:url('{{URL::to('images/bg/sl-bg1.jpg')}}')">
    <div class="container">
        <div class="row">
            <div class="col-md-12 pt-4 pb-5">
                <h5>HOẠT ĐỘNG CÔNG TY</h5>
                <h6><a href="/">TRANG CHỦ</a> > HOẠT ĐỘNG</h6>
            </div>
        </div>
    </div>
</div>


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

    #fe_h_ttct span {
        font-size: 13px;
        color: #0d95e8;
    }

    #fe_h_ttct h5 {
        font-size: 20px;
        /*font-weight: 600;*/

    }

    #fe_h_ttct > a {
        color: white;
        padding: 10px 20px;
        border-radius: 3px;
        background: linear-gradient(-90deg, #0a6287, #0d95e8);
        transition: .3s;
    }

    #fe_h_ttct > a:hover {
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
                    {{ $data['getDetailHoatDong']->title}}
                </div>
                <div class="content">
                    {!! $data['getDetailHoatDong']->content !!}
                </div>
            </div>


            <style>
                #fe_TD_phucloi h4 {
                    position: relative;
                    font-family: 'Lalezar', cursive;
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

                #fe_TD_phucloi a {
                    font-size: 16px;
                    color: #2a2a2a;
                }

            </style>

            <div class="col-md-3" id="fe_TD_phucloi">
                <h4 class="pt-3 pb-3">HOẠT ĐỘNG KHÁC</h4>
                @foreach($data['other'] as $key=>$item)
                    <div class="d-flex align-items-center mb-3 mt-3 animated bounceIn">
                        {{ Html::image($item->image,'',array('style'=>'width: 64px;height: auto;')) }}
                        <div>
                            <p class="pl-3">
                                <a href="{{URL::to('hoat-dong/'.$item->path)}}">{{$item->title}}</a>
                            </p>

                        </div>
                    </div>
                @endforeach
                
            </div>

        </div>
    </div>
</div>

<style>
    #fe_hdct_CungChuyenMuc h5 {
        font-family: 'Lalezar', cursive;
        font-size: 22px;
        position: relative;
    }

    #fe_hdct_CungChuyenMuc h6 {
        font-weight: 600;
    }

    #fe_hdct_CungChuyenMuc a {
        color: #2a2a2a;
    }
</style>

<div class="container-fluid" id="fe_hdct_CungChuyenMuc">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h5 class="pb-4">TIN CÙNG CHUYÊN MỤC</h5>
            </div>

            <div class="col-md-12 pb-4">
                <div class="row">
                    @for ($i = 0; $i < 4; $i++)
                        <div class="col-md-3 fe-td-vitrikhac d-flex flex-column">

                            <img src="{{URL::asset('https://img-ovh-cloud.zszywka.pl/0/0170/5932-marina-bay-sands-singapur.jpg')}}"
                                 alt="">
                            <div class="pt-3 mb-3">
                                <a href="">
                                    <h6>TIN TỨC HOẠT ĐỘNG KHÁC</h6>
                                    <span>Posted April3, 2018</span>
                                    {{--<p class="pt-3"></p>--}}
                                    {{--<a class="mt-3" href="">XEM THÊM</a>--}}
                                </a>
                            </div>

                        </div>
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