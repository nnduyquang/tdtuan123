<div id="h_1" class="shadow-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-5">
            </div>
            @foreach($data['actionCompany'] as $key=>$item)
                <div class="col-md-4 p-1 mb-3">
                    <div class="card one-product h-100 shadow-sm">
                        <div class="content-middle">
                            {{ Html::image($item->image,'',array('style'=>'width: 100%;height: auto;')) }}
                        </div>
                        <div class="card-body">
                            <div class="title">{{$item->title}}</div>
                            {{--<p class="pl-3 pr-3 pb-5">{{$item->description}}</p>--}}
                            <div class="description">{{$item->description}}</div>
                        </div>

                        <div class="card-footer">
                                <a href="{{URL::to('hoat-dong/'.$item->path)}}" class="btn-xemthem">XEM THÊM</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>