<style>
    .customPrevBtn, .customNextBtn {
        cursor: pointer;
        position: absolute;
        top: 50%;
        font-size: 30px;
        transform: translate(-50%, 0%);
    }

    .customPrevBtn {
        padding: 0px 0px;
        width: 38px;
        height: 38px;
        text-align: center;
        line-height: 33px;
        border-radius: 50%;
        left: 26px;
        z-index: 10;
        background-color: rgba(255,255,255,0.8);
        color: #6c757d;
        text-shadow: 1px 1px 1px white;
    }

    .customNextBtn {
        padding: 0px 8px;
        z-index: 6;
        right: 0px;
        width: 38px;
        height: 38px;
        text-align: center;
        line-height: 33px;
        border-radius: 50%;
        background-color: rgba(255,255,255,0.8);
        color: #6c757d;
        text-shadow: 1px 1px 1px white;
    }

    #section0, #section1, #section2 {
        position: relative;
        overflow: hidden;
        min-height: 518px;
        max-height: 518px;
        -webkit-background-size: cover;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;
    }

    #section0 span{
        position: absolute;
        top:50%;
        left: 50%;
        transform: translate(-50%,-50%);
    }

    #section0{
        background-image: url('http://tuyendungtuan123.vn/wp-content/uploads/2018/03/FB_IMG_1500278148188.jpg');
    }
    #section1{
        background-image: url('http://tuyendungtuan123.vn/wp-content/uploads/2018/03/FB_IMG_1500278148188.jpg');
    }
    #section2{
        background-image: url('http://tuyendungtuan123.vn/wp-content/uploads/2018/03/FB_IMG_1500278148188.jpg');
    }

    #section0 img, #section1 img, #section2 img {

    }
</style>
<div class="container-fluid position-relative p-0" style="min-height: 518px">
    <div id="owl_1" class="owl-carousel">
        <div id="section0">
            <img src="http://tuyendungtuan123.vn/wp-content/uploads/2018/03/FB_IMG_1500278148188.jpg" alt="">
            <span style="color: white">THÔNG TIN SỐ 1</span>
        </div>
        <div id="section1">
            <img src="http://batdongsantuan123.vn/wp-content/uploads/2017/11/23157462_881179868703496_3275079133793583096_o-690x420.jpg" alt="">
        </div>
        <div id="section2">
            <img src="http://tuyendungtuan123.vn/wp-content/uploads/2018/03/received_773151879536315.jpeg" alt="">
        </div>
    </div>
    <div class="owl-nav">
        <div class="customPrevBtn"><i class="fas fa-angle-left"></i></div>
        <div class="customNextBtn"><i class="fas fa-angle-right"></i></div>
    </div>
</div>