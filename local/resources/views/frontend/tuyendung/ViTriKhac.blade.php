<style>
    div#fe_td_ViTriKhac h5 {
        font-size: 25px;
        position: relative;
    }

    div#fe_td_ViTriKhac h6 {
        font-size: 19px;
        position: relative;
        padding-bottom: 10px;
    }

    div#fe_td_ViTriKhac h5:before {
        position: absolute;
        content: '';
        height: 2px;
        width: 100px;
        background-color: #0d95e8;
        left: 50%;
        transform: translate(-50%, 0);
        bottom: -10px;
    }
    .fe-td-vitrikhac{
        width: 80%;
    }

    .fe-td-vitrikhac a{
        width: 80%;
    }

    .fe-td-vitrikhac span{
        font-size: 12px;
        position: relative;
    }

    .fe-td-vitrikhac span:before{

    }


    .fe-td-vitrikhac p{
        color: #2a2a2a;
        line-height: 22px;
    }

    .fe-td-vitrikhac img{
        width: 100%;
        height: auto;
        margin: auto;
        border-radius: 3px;
    }
</style>

<div class="container-fluid main-font" id="fe_td_ViTriKhac">
    <div class="container">
        <div class="row pt-5 pb-4">
            <div class="col-md-12 text-center mb-5">
                <h5>TUYỂN CÁC VỊ TRỊ KHÁC</h5>
                <p class="pt-4">Một số vị trí khác tại công ty Tuấn 123, Xem các vị trí tuyển dụng khác của công ty chúng tôi.</p>
            </div>

            <div id="owl-3" class="col-md-12 owl-carousel mb-5 owl-theme">
                @for ($i = 0; $i < 4; $i++)
                    <div class="fe-td-vitrikhac d-flex flex-column">
                        <img src="{{URL::asset('images/uploads/nhan_vien_kd.jpg')}}" alt="" >
                        <div class="pt-3 mb-3">
                            <h6>VỊ TRÍ TUYỂN DỤNG KHÁC</h6>
                            <span>Posted April3, 2018</span>

                            <p class="pt-3 pb-3 border-light border-top">Lorem ipsum dolor sit amet,
                                Atque consequuntur dignissimos eligendi enim illum, ipsum iusto.
                            </p>

                            <a href="">XEM CHI TIẾT...!</a>
                        </div>
                    </div>
                @endfor

            </div>
        </div>
    </div>
</div>

