
<style>

    #fe_h_slider{
        margin-top: 86px;
    }

    .customPrevBtn, .customNextBtn {
        cursor: pointer;
        position: absolute;
        top: 50%;
        font-size: 30px;
        transform: translate(0%,-50%);
    }

    .customPrevBtn {
        padding: 0px 0px;
        width: 38px;
        height: 38px;
        text-align: center;
        line-height: 38px;
        border-radius: 50%;
        left: 10px;
        z-index: 10;
        background-color: rgba(255, 255, 255, 0.8);
        color: #6c757d;
        text-shadow: 1px 1px 1px white;
    }

    .customNextBtn {
        padding: 0px 8px;
        z-index: 6;
        right: 10px;
        width: 38px;
        height: 38px;
        text-align: center;
        line-height: 38px;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.8);
        color: #6c757d;
        text-shadow: 1px 1px 1px white;
    }

    #section0, #section1, #section2 {
        position: relative;
        -webkit-background-size: cover;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;
    }

    .ung-tuyen {
        text-align: right;
        position: absolute;
        top: 50%;
        right: 8%;
        transform: translate(0%, -50%);
        padding-left: 20px;
    }

    .ung-tuyen h4 {
        line-height: 38px;
        font-size: 38px;
        color: white;
        font-family: 'Lalezar', cursive;
        text-shadow: 1px 1px 1px black;
    }

    .ung-tuyen h4 span {
        line-height: 38px;
        font-size: 33px;
        color: white;
        /*font-family: 'Lalezar', cursive;*/
        text-shadow: 1px 1px 1px black;
    }

    .ung-tuyen p {
        padding-top: 8px;
        color: white;
        font-size: 18px;
        line-height: 22px;
        text-shadow: 1px 1px 1px black;
        font-family: 'Lalezar', cursive;
    }
        .ung-tuyen a {
        margin-top: 30px;
        border-radius: 3px;
        background: linear-gradient(-90deg, #0a6287, #0d95e8);
        color: white;
        padding: 16px 28px;
    }


    #section0 {
        background-image: url('http://tuyendungtuan123.vn/wp-content/uploads/2018/03/FB_IMG_1500278148188.jpg');
    }

    #section1 {
        background-image: url('http://batdongsantuan123.vn/wp-content/uploads/2017/11/23157462_881179868703496_3275079133793583096_o-690x420.jpg');
    }

    #section2 {
        background-image: url('http://tuyendungtuan123.vn/wp-content/uploads/2018/03/received_773151879536315.jpeg');
    }

    @media screen and (max-width: 1000px) and (min-width: 320px) {
        div#fe_h_slider{
            margin-top: 86px;
        }

        .fe-h-utvt{
            display: none;
        }

        .ung-tuyen h4{
            font-size: 26px;
            line-height: 22px;
        }

        .ung-tuyen h4 span{
            font-size: 24px;
        }

        p.p-tnv{
            display: none;
        }
    }

</style>
<div class="container-fluid main-font position-relative p-0" id="fe_h_slider">
    <div id="owl_1" class="owl-carousel">
        <div id="section0">
            <img src="{{URL::asset('images/tintuc/3.jpg')}}" alt="">

            <div class="ung-tuyen">
                <h4 class="animated fadeInRight"><SPAN>TUYỂN <br> NHÂN VIÊN
                    KINH DOANH</SPAN>
                    <br>BẤT ĐỘNG SẢN</h4>

                {{--<p class="mb-5 animated fadeInDown slow p-tnv">Trở thành một phần của chúng tôi, Để trải nghiệm một công việc theo cách riêng. <br>--}}
                    {{--Tận hưởng cuộc sống, tận hưởng công việc theo cách riêng của bạn.--}}
                    {{--</p>--}}
                <p class="mb-5 animated fadeInDown slow p-tnv">Công ty Bất động sản Tuấn 123. <br>

                </p>
                <div class="animated bounceInDown slow">
                <a target="_blank" class="fe-h-utvt" href="https://docs.google.com/forms/d/e/1FAIpQLSdJS1IdtV5DQTGe__1ErcjXRdLwkhOenv_x90FELiTHiRYaWw/viewform">ỨNG TUYỂN VỊ TRÍ</a>
                </div>
            </div>

        </div>
        <div id="section1">

            <img src="{{URL::asset('images/tintuc/2.jpg')}}" alt="">

            <div class="ung-tuyen">
                <h4 class="animated fadeInRight"><SPAN>TUYỂN <br> NHÂN VIÊN
                    KINH DOANH</SPAN>
                    <br>BẤT ĐỘNG SẢN</h4>
                {{--<p class="mb-5 animated fadeInDown slow p-tnv">Trở thành một phần của chúng tôi, Để trải nghiệm một công việc theo cách riêng. <br>--}}
                {{--Tận hưởng cuộc sống, tận hưởng công việc theo cách riêng của bạn.--}}
                {{--</p>--}}
                <p class="mb-5 animated fadeInDown slow p-tnv">Công ty Bất động sản Tuấn 123. <br>

                </p>
                <a target="_blank" class="animated fadeInDown slow fe-h-utvt" href="https://docs.google.com/forms/d/e/1FAIpQLSdJS1IdtV5DQTGe__1ErcjXRdLwkhOenv_x90FELiTHiRYaWw/viewform">ỨNG TUYỂN VỊ TRÍ</a>
            </div>

        </div>
        <div id="section2">
            <img src="{{URL::asset('images/tintuc/1.jpg')}}" alt="">

            <div class="ung-tuyen">
                <h4 class="animated fadeInRight"><SPAN>TUYỂN <br> NHÂN VIÊN
                    KINH DOANH</SPAN>
                    <br>BẤT ĐỘNG SẢN</h4>
                {{--<p class="mb-5 animated fadeInDown slow p-tnv">Trở thành một phần của chúng tôi, Để trải nghiệm một công việc theo cách riêng. <br>--}}
                {{--Tận hưởng cuộc sống, tận hưởng công việc theo cách riêng của bạn.--}}
                {{--</p>--}}
                <p class="mb-5 animated fadeInDown slow p-tnv">Công ty Bất động sản Tuấn 123.<br>

                </p>
                <a target="_blank" class="animated fadeInDown slow fe-h-utvt" href="https://docs.google.com/forms/d/e/1FAIpQLSdJS1IdtV5DQTGe__1ErcjXRdLwkhOenv_x90FELiTHiRYaWw/viewform">ỨNG TUYỂN VỊ TRÍ</a>
            </div>

        </div>
    </div>
    {{--<div class="owl-nav">--}}
        {{--<div class="customPrevBtn"><i class="fas fa-angle-left"></i></div>--}}
        {{--<div class="customNextBtn"><i class="fas fa-angle-right"></i></div>--}}
    {{--</div>--}}
</div>