<style>
    div#fe_td_ViTriKhac h5 {
        font-family: 'Lalezar', cursive;
        font-size: 25px;
        position: relative;
    }

    div#fe_td_ViTriKhac h6 {
        font-size: 19px;
        position: relative;
        padding-bottom: 10px;
        text-transform: uppercase;
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

    .fe-td-vitrikhac {
        width: 80%;
        margin: auto;
    }

    .fe-td-vitrikhac a {
        width: 80%;
    }

    .fe-td-vitrikhac span {
        font-size: 12px;
        position: relative;
    }

    .fe-td-vitrikhac span:before {

    }

    .fe-td-vitrikhac p {
        color: #2a2a2a;
        line-height: 22px;
    }

    .fe-td-vitrikhac img {
        width: 100%;
        height: auto;
        margin: auto;
        border-radius: 3px;
    }

    .fe-td-vitrikhac a.btn-vitri {
        padding: 8px;
        background: linear-gradient(-90deg, #bb0c03, #ff1c10);
        color: yellow;
        border-radius: 3px;
    }

    .fe-td-vitrikhac .vtri-tdung{
        width: 100%;
        height: 168px;
        background-position: center center;
        -webkit-background-size: cover;
        background-size: cover;
        background-repeat: no-repeat;
    }
    .fe-td-vitrikhac .desc{
        width: 100%;
        height:58px;
        line-height: 1.25;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>

<div class="container-fluid main-font" id="fe_td_ViTriKhac">
    <div class="container">
        <div class="row pt-5 pb-4">
            <div class="col-md-12 text-center mb-5">
                <h5>VỊ TRÍ TUYỂN DỤNG</h5>
                <p class="pt-4">Công ty BĐS Tuấn 123 cần tuyển chiến binh với các vị trí sau</p>
            </div>

            <div id="owl-2" class="col-md-12 owl-carousel mb-5 owl-theme">
                @foreach($data['allTuyenDung'] as $key=>$item)
                    <div class="fe-td-vitrikhac d-flex flex-column">
                        <div class="vtri-tdung" style="background-image:url('{{ URL::asset($item->image)}}');">

                        </div>

                        <div class="pt-3 mb-3">
                            <h6>{{$item->title}}</h6>
                            {{--<span>Posted April3, 2018</span>--}}

                            <p class="desc pt-3 pb-3 border-light border-top">{!! $item->description !!}
                            </p>
                        </div>
                        <div class="text-center mb-3">
                            <a class="btn-vitri" href="{{URL::to('tuyen-dung/'.$item->path)}}">XEM CHI TIẾT</a>
                            <a class="btn-vitri"
                               href="https://docs.google.com/forms/d/1p4uWoNZubk1vqnXIJwHvk0dTx_N4WzZsim2Zrzzzvks/viewform?edit_requested=true">ỨNG
                                TUYỂN NGAY
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

