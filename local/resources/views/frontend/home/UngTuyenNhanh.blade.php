<style>
    #fe_h_UngTuyenNhanh {
        background-image: url('http://demo.templatepath.com/justice/demo/img/bg/bg3.jpg');
        background-position: center center;
        -webkit-background-size: cover;
        background-size: cover;
        padding-top: 50px;
        padding-bottom: 50px;
        position: relative;
        background-attachment: fixed;
    }

    #fe_h_UngTuyenNhanh:before {
        content: '';
        background-color: rgba(00, 00, 00, 0.5);
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    #fe_h_UngTuyenNhanh h5 {
        font-size: 32px;
    }

    #fe_h_UngTuyenNhanh p {
        color: #eff0f0;
        padding-top: 30px;
        line-height: 22px;
    }

    #fe_h_UngTuyenNhanh input[type=text]{
        margin-top: 30px;
        width: 100%;
        border-radius: 3px;
        border: none;
        padding: 10px 20px;
        margin: auto;
        margin-bottom: 20px;

    }

    #fe_h_UngTuyenNhanh #btnSendMail{
        font-size: 18px;
        padding: 10px 20px;
        border-radius: 3px;
        margin-top: 30px;
        color: white;
        background: linear-gradient(-90deg, #0a6287, #0d95e8);
    }



</style>

<div class="container-fluid main-font" id="fe_h_UngTuyenNhanh">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center bg-transparent">
                <h5 class="text-white">FORM ỨNG TUYỂN NHANH</h5>

                <p class="text-white pl-lg-5 pr-lg-5 pb-4"></p>

                <div class="row">
                    <div class="col-md-4">
                        <div class="ip-name input-group">
                            <input class="form-control input-text" placeholder="Tên Của Bạn" name="name" type="text"
                                   value="">
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ip-phone input-group">
                            <input class="form-control input-text" placeholder="Số Điện Thoại" name="phone" type="text"
                                   value="">
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ip-email input-group">
                            <input class="form-control input-text" placeholder="Email" name="email" type="text" value="">
                            <div class="invalid-feedback">
                                Please choose a Email.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="ip-contentMail input-group">
                    <textarea class="form-control input-area p-3 mb-5" placeholder="Vị trí ứng tuyển, và sơ lược bản thân" name="contentMail" cols="50"
                              rows="6"></textarea>
                            <div class="invalid-feedback">
                                Please choose a Email.
                            </div>
                        </div>


                    </div>
                    <div class="col-md-12">
                        <div class="button-group">
                            <button id="btnSendMail" type="button" class="btn btn-contact">Gửi Liên Hệ<i
                                        class="fa fa-spinner fa-spin fa-3x fa-fw loadingSending" style="
    font-size: 15px;display: none"></i><i
                                        class="fa fa-check-circle successSending" style="display: none"
                                        aria-hidden="true"></i></button>
                            <span style="display: none">Chúng tôi đã nhận được mail và sẽ phản hồi quý khách trong 24h. Xin cảm ơn.</span>
                        </div>
                        {{--<a href="">ỨNG TUYỂN</a>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>