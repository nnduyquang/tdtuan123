
<style>

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
        position: absolute;
        top: 50%;
        left: 8%;
        transform: translate(0%, -50%);
        padding-left: 20px;
    }

    .ung-tuyen h4 {
        line-height: 38px;
        font-size: 48px;
        color: white;
        font-family: 'Lalezar', cursive;
        text-shadow: 1px 1px 1px black;
    }

    .ung-tuyen h4 span {
        line-height: 38px;
        font-size: 38px;
        color: white;
        /*font-family: 'Lalezar', cursive;*/
        text-shadow: 1px 1px 1px black;
    }

    .ung-tuyen p {
        padding-top: 8px;
        color: white;
        font-size: 18px;
        line-height: 18px;
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

</style>
<div class="container-fluid main-font position-relative p-0">
    <div id="owl_1" class="owl-carousel">
        <div id="section0">
            <img src="{{URL::asset('images/bg/bg1.jpg')}}" alt="">

            <div class="ung-tuyen">
                <h4 class="animated fadeInLeft"><SPAN>TUYỂN NHÂN VIÊN</SPAN> <br>
                    KINH DOANH BĐS</h4>
                <p class="mb-5 animated fadeInDown slow">Trở thành một phần của chúng tôi, Để trải nghiệm một công việc theo cách riêng. <br>
                    Tận hưởng cuộc sống, tận hưởng công việc theo cách riêng của bạn.
                    </p>

                <a class="animated fadeInDown slow" href="">ỨNG TUYỂN VỊ TRÍ</a>
            </div>

        </div>
        <div id="section1">

            <img src="{{URL::asset('images/bg/bg1.jpg')}}" alt="">

            <div class="ung-tuyen">

                <h4><SPAN>TUYỂN NHÂN VIÊN</SPAN> <br>
                    KINH DOANH BĐS</h4>

                <p class="mb-5 animated fadeInDown slow">Trở thành một phần của chúng tôi, Để trải nghiệm một công việc theo cách riêng. <br>
                    Tận hưởng cuộc sống, tận hưởng công việc theo cách riêng của bạn.
                </p>

                <a href="">ỨNG TUYỂN VỊ TRÍ</a>
            </div>
        </div>
        <div id="section2">
            <img src="{{URL::asset('images/bg/bg1.jpg')}}" alt="">

            <div class="ung-tuyen">
                <h4><SPAN>TUYỂN NHÂN VIÊN</SPAN> <br>
                    KINH DOANH BĐS</h4>

                <p class="mb-5 animated fadeInDown slow">Trở thành một phần của chúng tôi, Để trải nghiệm một công việc theo cách riêng. <br>
                    Tận hưởng cuộc sống, tận hưởng công việc theo cách riêng của bạn.
                </p>

                <a href="">ỨNG TUYỂN VỊ TRÍ</a>
            </div>
        </div>
    </div>
    {{--<div class="owl-nav">--}}
        {{--<div class="customPrevBtn"><i class="fas fa-angle-left"></i></div>--}}
        {{--<div class="customNextBtn"><i class="fas fa-angle-right"></i></div>--}}
    {{--</div>--}}
</div>