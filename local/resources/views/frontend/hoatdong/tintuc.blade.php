<style>

    #fe_gt_content {
        background-color: #f1f1f1;
    }

    #fe_gt_content .img-overlay {
        width: 100%;
        max-height: 222px;
        overflow: hidden;
    }

    #fe_gt_content h6 {
        font-size: 20px;
    }

    #fe_gt_content h5 {
        position: relative;
        font-size: 20px;
        font-weight: 600;
        width: fit-content;
        font-family: 'Lalezar', cursive;

    }

    #fe_gt_content p {
        line-height: 20px;
        color: #737777;
    }

    #fe_gt_content h5:before {
        position: absolute;
        content: '';
        height: 1px;
        width: 38%;
        background-color: #0d95e8;
        bottom: -1px;

    }

    div#fe_hd_right .img-overlay {
        width: 186px;
        height: 70px;
        overflow: hidden;
        /*border: 2px solid white;*/
    }

    div#fe_hd_right .img-overlay img {
        width: 100%;
        height: auto;
    }

    div#fe_hd_right h6 {
        font-size: 16px;
    }

    div#fe_hd_right p {
        font-size: 14px;
    }

    div#fe_hd_right a {
        color: #1b1e21;
    }

    a.xem-tat-ca-hd{
        padding: 10px 20px;
        border-radius: 3px;
        color: white;
        background: linear-gradient(-90deg, #0a6287, #0d95e8);
    }
</style>

<div class="container-fluid main-font pb-5 pt-3" id="fe_gt_content">
    <div class="container">
        <div class="row pt-5 pb-3">

            <div class="col-md-8">
                <div class="row">
                    <div class="card col-md-6 mb-4" id="">
                        <div class="img-overlay">
                            <a href="sanpham-chitiet.html">
                                <img src="{{URL::asset('images/tintuc/7745cb86936f72312b7e.jpg')}}" alt=""
                                     style="width: 100%;height: auto;">
                            </a>
                        </div>
                        <div class="card-body">
                            <h6 class="pt-3 pb-3">THAM QUAN ĐẤT NƯỚC SINHGAPORE ĐẢO QUỐC SƯ TỬ</h6>
                            <p class="card-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Assumenda
                                temporibus voluptatum? Animi blanditiis debitis exercita...!</p>
                        </div>
                        <div class="card-footer pt-3">
                            <a href="">READ MORE...!</a>
                        </div>

                    </div>

                    <div class="card col-md-6 mb-4" id="">
                        <div class="img-overlay">
                            <img src="{{URL::asset('images/tintuc/52cf330a6be38abdd3f2.jpg')}}" alt=""
                                 style="width: 100%;height: auto;">
                        </div>
                        <div class="card-body">
                            <h6 class="pt-3 pb-3">CHƯƠNG TRÌNH CHẠY BỘ THỂ THAO 2017</h6>
                            <p class="card-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Assumenda
                                temporibus voluptatum? Animi blanditiis debitis exercita...!</p>
                        </div>
                        <div class="card-footer pt-3">
                            <a href="">READ MORE...!</a>
                        </div>

                    </div>

                    <div class="col-md-12 text-center pt-4">
                        <a class="xem-tat-ca-hd" href="">XEM TẤT CẢ</a>
                    </div>
                </div>
            </div>


            <div class="col-md-4" id="fe_hd_right">
                <div class="d-flex align-items-center mb-4">
                    <div class="img-overlay">
                        <img src="{{URL::asset('images/tintuc/77c1ae02f6eb17b54efa.jpg')}}" alt="" align="middle">
                    </div>
                    <div class="pl-3">
                        <a href="">
                            <h6 class="pb-2">Cùng chinh phục Marina Bay Sands</h6>
                            <p>I am text block. Click edit button to change this text lorem ipsum…</p>
                        </a>
                    </div>
                </div>

                <div class="d-flex align-items-center mb-4">
                    <div class="img-overlay">
                        <img src="{{URL::asset('images/tintuc/52cf330a6be38abdd3f2.jpg')}}" alt="" align="middle">
                    </div>
                    <div class="pl-3">
                        <a href="">
                            <h6 class="pb-2">Đi bộ từ thiện 2017</h6>
                            <p>I am text block. Click edit button to change this text lorem ipsum…</p>
                        </a>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-4">
                    <div class="img-overlay">
                        <img src="{{URL::asset('images/tintuc/5.jpg')}}" alt="" align="middle">
                    </div>
                    <div class="pl-3">
                        <a href="">
                            <h6 class="pb-2">Đội bóng đá nữ Tuấn 123</h6>
                            <p>I am text block. Click edit button to change this text lorem ipsum…</p>
                        </a>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-4">

                    <div class="img-overlay">
                        <img src="{{URL::asset('images/tintuc/77c1ae02f6eb17b54efa.jpg')}}" alt="" align="middle">
                    </div>
                    <div class="pl-3">
                        <a href="">
                            <h6 class="pb-2">Cùng chinh phục Marina Bay Sands</h6>
                            <p>I am text block. Click edit button to change this text lorem ipsum…</p>
                        </a>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>