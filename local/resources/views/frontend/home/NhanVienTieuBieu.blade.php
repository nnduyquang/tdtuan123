<style>
    #fe_h_nvtieubieu h4 {
        position: relative;
        font-size: 25px;
        font-weight: 600;
        position: relative;
        width: fit-content;
        margin: auto;
        margin-bottom: 10px;
        /*color: #0d95e8;*/
    }

    #fe_h_nvtieubieu h4:before {
        position: absolute;
        content: '';
        height: 3px;
        width: 58px;
        bottom: 5px;
        background-color: red;
        left: 47%;
        transform: translate(-50%, 0%);
        -ms-transform: skewX(50deg); /* IE 9 */
        -webkit-transform: skewX(50deg); /* Safari */
        transform: skewX(50deg); /* Standard syntax */
    }

    #fe_h_nvtieubieu h4:after {
        position: absolute;
        content: '';
        bottom: 5px;
        height: 3px;
        width: 38px;
        left: 28%;
        -ms-transform: skewX(50deg); /* IE 9 */
        -webkit-transform: skewX(50deg); /* Safari */
        transform: skewX(50deg); /* Standard syntax */
        background-color: black;
    }

    #fe_h_nvtieubieu p {
        color: #6c757d;
    }

    .top-empl {
        padding: 0px 38px;
    }

    .top-employee-info {
        width: 100%;
        position: relative;
        margin: auto;
        background-color: white;
        padding-bottom: 30px;
        transition: .3s;
    }

    .top-employee-info:before {
        backface-visibility: hidden;
        background: #fff none repeat scroll 0 0;
        content: "";
        display: block;
        float: left;
        height: 73px;
        left: -1px;
        position: absolute;
        right: 0;
        top: -34px;
        transform: rotate(-7deg) skewX(-7deg);
        -webkit-transform: rotate(-7deg) skewX(-7deg);
        -ms-transform: rotate(-7deg) skewX(-7deg);
        -o-transform: rotate(-7deg) skewX(-7deg);
        width: 100.7%;
        z-index: 0;
        transition: .3s;
    }

    .top-employee-info p {
        position: relative;
        z-index: 9;
        margin-bottom: 30px;
    }

    .top-employee-info a {
        border: 1px solid #0d95e8;
        padding: 8px 26px;
        border-radius: 3px;
        color: #1b1e21;
        font-size: 14px;
        font-weight: 500;
        position: relative;
        z-index: 9;
        transition: .3s;
    }

    .top-empl:hover .top-employee-info,.top-empl:hover .top-employee-info:before{
        background-color: #1b1e21;
    }

    .top-empl:hover .top-employee-info a{
        color: white;
    }

    .top-employee-info a:hover{
        background: linear-gradient(-90deg, #0a6287, #0d95e8);
    }

    .top-employee-info span{
        color: #1b1e21;
    }

    .top-empl:hover .top-employee-info span{
        color: white;
    }
</style>

<div class="container-fluid main-font" id="fe_h_nvtieubieu">
    <div class="container">
        <div class="row pt-5 pb-5">
            <div class="col-md-12 text-center">
                <h4 class="pb-3">NHÂN VIÊN <span style="color: red">TIÊU BIỂU</span></h4>
                <p style="width: 86%;margin: auto;margin-bottom: 30px">Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit.
                    Aspernatur beatae commodi
                    deleniti fugiat labore nam quae ullam velit veniam voluptatem? At commodi dicta earum
                    et explicabo officia perspiciatis quo similique.</p>
            </div>

            <div class="col-md-4 mb-3 top-empl">
                <img src="http://demo.templatepath.com/justice/demo/img/attorney/f-1.png" alt=""
                     style="width: 100%;height: auto;margin: auto    ">
                <div class="top-employee-info text-center">
                    <p><span>Mss Bella</span> / Manager Assistance</p>
                    <a href="">XEM THÊM</a>
                </div>
            </div>

            <div class="col-md-4 mb-3 top-empl">
                <img src="http://demo.templatepath.com/justice/demo/img/attorney/f-2.png" alt=""
                     style="width: 100%;height: auto;margin: auto    ">
                <div class="top-employee-info text-center">
                    <p><span>Mr Quang</span> / Manager Assistance</p>
                    <a href="">XEM THÊM</a>
                </div>
            </div>

            <div class="col-md-4 top-empl">
                <img src="http://demo.templatepath.com/justice/demo/img/attorney/f-3.png" alt=""
                     style="width: 100%;height: auto;margin: auto    ">
                <div class="top-employee-info text-center">
                    <p><span>Mr TƯỚNG QUÂN</span> / Manager Assistance</p>
                    <a href="">XEM THÊM</a>
                </div>
            </div>
        </div>
    </div>
</div>