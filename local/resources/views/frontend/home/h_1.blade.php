<div id="h_1" class="shadow-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-5">
            </div>
            @foreach($data['actionCompany'] as $key=>$item)
            <div class="col-md-4 p-1 mb-3">
                <div class="shadow-sm bg-white position-relative">
                <div class="content-middle">
                    {{ Html::image($item->image,'',array('style'=>'width: 100%;height: auto;')) }}
                </div>
                    <h6 class="p-3">{{$item->title}}</h6>
                    <p class="pl-3 pr-3 pb-5">{{$item->description}}</p>
                    <a href="{{URL::to('hoat-dong/'.$item->path)}}" class="btn-xemthem">XEM THÊM</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>