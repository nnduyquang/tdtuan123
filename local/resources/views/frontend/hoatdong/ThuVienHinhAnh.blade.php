<style>
    #parallax_slogan {
        background-image: url('{{URL::asset('images/bg/bg-home-recruit.png')}}');
        -webkit-background-size: cover;
        background-size: cover;
        background-position: center center;
        background-attachment: fixed;
    }

    #parallax_slogan h5 {
        position: relative;
        font-size: 26px;
        color: white;
        margin-bottom: 20px;
        text-shadow: 1px 1px 2px #002752;
        font-family: 'Lalezar', cursive;
        width: fit-content;
        border-bottom: 2px solid white;
        padding-bottom: 6px;
    }

    #parallax_slogan h5:before {
        position: absolute;
        content: '';
        width: 86px;
        height: 5px;
        background: linear-gradient(-90deg, #0a6287, #0d95e8);
        bottom: -1px;
        left: -2px;
        transform: skew(20deg);
    }

    #parallax_slogan button {
        font-size: 20px;
        color: white;
        padding: 10px 20px;
        border-radius: 3px;
        border: none;
        background: linear-gradient(-90deg, #0a6287, #0d95e8);
    }
</style>

<div class="container-fluid main-font" id="parallax_slogan">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left pt-5 pb-5">
                <h5>THƯ VIỆN HÌNH ẢNH HOẠT ĐỘNG</h5>

                <div id="owl-3" class="col-md-12 owl-carousel mb-5 owl-theme">
                    @for ($i = 0; $i < 4; $i++)
                        <div class="fe-td-vitrikhac d-flex flex-column pt-3">
                            <a href="">
                                <img src="{{URL::asset('images/uploads/nhan_vien_kd.jpg')}}" alt="">
                            </a>
                        </div>
                    @endfor
                </div>

            </div>
        </div>
    </div>
</div>