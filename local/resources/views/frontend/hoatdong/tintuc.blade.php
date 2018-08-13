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

    a.xem-tat-ca-hd {
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
                    @foreach($data['actionCompanyNew'] as $key=>$item)
                        <div class="card col-md-6 mb-4" id="">
                            <div class="img-overlay">
                                <a href="{{URL::to('hoat-dong/'.$item->path)}}">
                                    {{ Html::image($item->image,'',array('style'=>'width: 100%;height: auto;')) }}
                                </a>
                            </div>
                            <div class="card-body">
                                <h6 class="pt-3 pb-3">{{$item->title}}</h6>
                                <p class="card-text"> {{$item->description}}</p>
                            </div>
                            <div class="card-footer pt-3">
                                <a href="{{URL::to('hoat-dong/'.$item->path)}}">Xem thêm...!</a>
                            </div>
                        </div>
                    @endforeach
                    {{--<div class="col-md-12 text-center pt-4">--}}
                        {{--<a class="xem-tat-ca-hd" href="">XEM TẤT CẢ</a>--}}
                    {{--</div>--}}
                </div>
            </div>
            <div class="col-md-4" id="fe_hd_right">
                @foreach($data['actionCompanyOld'] as $key=>$item)
                <div class="d-flex align-items-center mb-4">
                    <div class="img-overlay">
                        {{ Html::image($item->image,'',array('align'=>'middle')) }}
                    </div>
                    <div class="pl-3">
                        <a href="{{URL::to('hoat-dong/'.$item->path)}}">
                            <h6 class="pb-2">{{$item->title}}s</h6>
                            <p>{{$item->description}}</p>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>