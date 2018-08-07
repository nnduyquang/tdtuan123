<style>
    div#fe_gt_slogan {
        background-image: url('images/bg/twitter.jpg');
        -webkit-background-size: cover;
        background-size: cover;
        background-position: center center;
    }

    div#fe_gt_slogan h5 {
        font-size: 25px;
        font-weight: 600;
        font-family: 'Lalezar', cursive;
        position: relative;
        width: fit-content;
        /*margin: auto;*/
    }

    div#fe_gt_slogan h6 {
        font-size: 20px;
        font-weight: normal;
        font-family: 'Lalezar', cursive;
    }

    div#fe_gt_slogan p {
        font-size: 16px;
        font-weight: normal;
        position: relative;
        width: fit-content;
        /*margin: auto;*/
    }

    div#fe_gt_slogan h5:before {
        position: absolute;
        content: '';
        height: 3px;
        width: 38%;
        background-color: #0d95e8;
        bottom: -1px;
        left: -2px;
        transform: skew(20deg);
    }
</style>

<div class="container-fluid main-font pb-5" id="fe_gt_slogan">
    <div class="container">
        <div class="row pb-4">
            <div class="col-md-12 text-left mb-3">
                <h5 class="pt-5 pb-2 border-bottom">HOẠT ĐỘNG <span class="text-primary">THƯỜNG NIÊN</span></h5>
                {{--<p class="pt-3 pb-5 mb-5">Vừa làm vừa chơi - thảnh thơi như dân môi giới.</p>--}}
            </div>


            <div class="col-md-4 d-flex flex-column">
                <div class="d-flex align-items-center">
                    <i class="fas fa-suitcase text-primary fa-2x"></i>
                    <h6 class="pl-3">DU LỊCH CÔNG TY HÀNG NĂM</h6>
                </div>
                <p class="pt-3">Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Facilis, sed, voluptas.</p>

                <div class="d-flex align-items-center pt-4">
                    <i class="fas fa-futbol text-primary fa-2x"></i>
                    <h6 class="pl-3">CÂU LẠC BỘ BÓNG ĐÁ NAM VÀ NỮ</h6>
                </div>
                <p class="pt-3">Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Facilis, sed, voluptas.</p>
            </div>

            <div class="col-md-4">

                <div class="d-flex align-items-center">
                    <i class="fas fa-walking text-primary fa-2x"></i>
                    <h6 class="pl-3">CHẠY BỘ THỂ THAO</h6>
                </div>
                <p class="pt-3">Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Facilis, sed, voluptas.</p>

                <div class="d-flex align-items-center pt-4">
                    <i class="fas fa-award text-primary fa-2x"></i>
                    <h6 class="pl-3">GIẢI THƯỞNG NGƯỜI ĐỨNG ĐẦU</h6>
                </div>
                <p class="pt-3">Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Facilis, sed, voluptas.</p>

            </div>

            <div class="col-md-4">
                <img src="{{URL::asset('images/bg/nhatrang.tuan123.jpg')}}" alt="">
            </div>
        </div>
    </div>
</div>