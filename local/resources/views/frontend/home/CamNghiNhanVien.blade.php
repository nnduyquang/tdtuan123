<style>

    #fe_h_CamNghiNhanVien {
        background-color: #deeeee;
    }

    #fe_h_CamNghiNhanVien h6 {
        font-size: 26px;
        color: #2a2a2a;
        padding-top: 38px;
        padding-bottom: 16px;
    }
    #owl-3 img{
        width: 68px;
        height: 68px;
        border-radius: 50%;
    }
    #owl-3 p{
        font-size: 14px;
        line-height: 18px;
        color: #6c757d;
        padding-bottom: 30px;
    }
</style>

<div class="container-fluid main-font" id="fe_h_CamNghiNhanVien">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center pb-5">
                <h6>NHÂN VIÊN CHÚNG TÔI NÓI GÌ</h6>
                <p>there are many variations of passages of lorem ipsum available,</p>
            </div>


            <div id="owl-3" class="col-md-12 owl-carousel mb-5 owl-theme">

                @for ($i = 0; $i < 4; $i++)
                    <div class="d-flex">
                        <img src="http://demo.templatepath.com/justice/demo/img/content/avatar2.jpg" alt="">
                        <div class="pl-3">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Atque consequuntur dignissimos eligendi enim illum, ipsum iusto.
                                Molestias quas sint tenetur?</p>

                            <span>Mr TƯỚNG QUÂN</span>
                        </div>
                    </div>
                @endfor

            </div>

        </div>
    </div>
</div>
</div>

