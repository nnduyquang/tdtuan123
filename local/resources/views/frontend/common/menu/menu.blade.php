<style>
    #fe_h_welcome {
        background-color: #0594d2;
    }

    .sc-nw a i {
        margin-right: 10px;
        transition: .3s;
    }

    .sc-nw a i.fa-facebook-f:hover {
        color: #0594d2;
    }

    .sc-nw a i.fa-youtube:hover {
        color: #f01802;
    }

    .sc-nw a {
        color: white;
    }

    .sc-nw a:hover {
        text-decoration: none;
    }

    div#menu_top {
        /*position: absolute;*/
        /*z-index: 10;*/
        /*top: 100%;*/
        /*width: 100%;*/
        background-color: rgba(255, 255, 255, 1);
        transition: .3s;
    }

    div#menu_top .logo-bdstuan123 {
        height: 86px;
        width: auto;
    }

    div.menu-content ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    div.menu-content ul li {
        display: inline-flex;
        margin-right: -2px;
    }

    div.menu-content ul li a {
        color: #0594d2;
        padding: 35px 16px;
        transition: .3s;
    }

    div.menu-content ul li a:hover {
        text-decoration: none;
        background-color: #0594d2;
        color: white;
    }

    div.menu-content ul li a.active {
        text-decoration: none;
        background-color: #0594d2;
        color: white;
    }

    .slogan-cty p {
        color: #0594d2;
        font-size: 26px;
        font-weight: 600;
    }
</style>
<div class="container-fluid position-relative p-0" id="fe_h_welcome">
    <div class="container d-md-block d-sm-none d-none">
        <div class="row">
            <div class="col-md-12 pt-2 pb-1 pb-1 d-flex justify-content-between align-items-center">
                <p class="text-light main-font" style="font-size: 14px">
                    Welcome to BẤT ĐỘNG SẢN TUẤN 123
                </p>

                <div class="main-font text-light sc-nw">
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-youtube"></i></a>
                    <a href=""><i class="fas fa-envelope"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div id="menu_top" class="shadow-sm" style="">
        <div class="container">
            <div class="row">
                <div class="col-md-12 d-lg-flex justify-content-lg-between">

                    <div class="d-flex align-items-center">
                        <img src="{{URL::asset('images/logo/cong-ty-bds-tuan-123.png')}}" alt=""
                             class="logo-bdstuan123 align-self-center">
                        <div class="main-font slogan-cty">
                            <p class="pb-1" style="font-size: 22px">TUYỂN DỤNG NHÂN VIÊN BẤT ĐỘNG SẢN TUẤN 123</p>
                            <span class="mr-3 text-danger fe-l-master-slogan">MÔI GIỚI BĐS - NGƯỜI BÁN HÀNG ĐỈNH CAO</span>
                        </div>
                    </div>

                    <div class="main-font d-lg-flex d-md-none d-sm-none d-none align-self-center menu-content">
                        <ul>
                            <li><a class="{{ request()->is('/') ? 'active' : '/' }}" id="tl_tc"
                                   href="{{URL::asset('')}}">TRANG CHỦ</a></li>
                            <li><a class="{{ request()->is('gioi-thieu-tuan-123.html') ? 'active' : '' }}"
                                   href="{{URL::asset('gioi-thieu-tuan-123.html')}}">GIỚI THIỆU</a></li>
                            <li>
                                <a class="{{ (request()->is('hoat-dong.html') || request()->is('hoat-dong/*')) ? 'active' : '' }}"
                                   href="{{URL::asset('hoat-dong.html')}}">HOẠT ĐỘNG</a></li>
                            <li>
                                <a class="{{ (request()->is('tuyen-dung.html') || request()->is('tuyen-dung/*')) ? 'active' : '' }}"
                                   href="{{URL::asset('tuyen-dung.html')}}">TUYỂN DỤNG</a></li>
                            <li><a class="{{ request()->is('lien-he.html') ? 'active' : '' }}"
                                   href="{{URL::asset('lien-he.html')}}">LIÊN HỆ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>