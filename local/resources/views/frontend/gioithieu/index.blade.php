@extends('frontend.layout.master')
@section('title')
    GIỚI THIỆU - CÔNG TY CỔ PHẦN TUẤN 123 BẤT ĐỘNG SẢN TUẤN 123
@stop
@section('description')
    Trở thành một phần của BĐS Tuấn 123 để tận hưởng công việc theo cách của riêng bạn,
    Công ty Bất động sản Tuấn 123 hiện đang là đơn vị chuyên Mua, Bán, Cho thuê nhà, đất thổ cư trên toàn Hà Nội.
    Với đội ngũ Chuyên viên kinh doanh và Quản lý giàu kinh nghiệm, năng động. Chế độ đãi ngộ tốt nhất.
@stop
@section('styles')
    {{ Html::style('css/themes/default/default.css') }}
@stop
@section('slider')

    <style>
        div#fe_danhmuccv_banner {
            margin-top: 86px;
            background-image: url('images/bg/about-us-bg.jpg');
            -webkit-background-size: cover;
            background-size: cover;
            /*background-attachment: fixed;*/
            background-position: center 10%;
        }

        div#fe_danhmuccv_banner h5 {
            font-size: 36px;
            color: white;
            font-family: 'Lalezar', cursive;
            text-shadow: 1px 1px 1px #2a2a2a;
        }

        div#fe_danhmuccv_banner p {
            font-size: 18px;
            color: white;
            text-shadow: 1px 1px 1px #2a2a2a;
        }

        div#fe_danhmuccv_danhmucvitri h5, div#fe_danhmuccv_danhmucvitri h6 {
            font-size: 20px;
            font-family: 'Lalezar', cursive;
            padding-bottom: 10px;
        }

        div#fe_danhmuccv_danhmucvitri h6 {
            position: relative;
        }

        div#fe_danhmuccv_danhmucvitri h6:before {
            position: absolute;
            content: '';
            height: 1px;
            width: 86px;
            background-color: #0d95e8;
            bottom: 0;
        }

        .items-vitrituyendung {
            border: 1px solid #6c757d;
            padding: 10px;
        }

        .items-vitrituyendung img {
            width: 100%;
            height: auto;
            border-radius: 3px;
        }

        .items-vitrituyendung h4 {
            font-weight: 600;
            padding-bottom: 6px;
        }

        .items-vitrituyendung a {
            color: white;
            border-radius: 3px;
            background: linear-gradient(-90deg, #0a6287, #0d95e8);
            transition: .3s;
            margin-bottom: 10px;
            padding: 8px 16px;
            width: 100%;
        }

        .items-vitrituyendung span {
            font-size: 14px;
        }

        #fe_danhmuccv_danhmucvitri button {
            cursor: pointer;
            border-radius: 3px;
            background: linear-gradient(-90deg, #0a6287, #0d95e8);
            padding: 10px 16px 8px 16px;
            border: none;
            color: white;
        }

        #fe_dm_tthd .items-tthd {
            width: 100%;
            height: auto;
            /*background-color: #0d95e8;*/
            margin-bottom: 20px;
            overflow: hidden;
            border-radius: 3px;
        }

        #fe_dm_tthd .items-tthd p {
            width: fit-content;
            position: absolute;
            top: 90%;
            left: 50%;
            transform: translate(-50%, -90%);
            color: white;
            font-family: 'Lalezar', cursive;
            text-shadow: 1px 1px 1px black;
            transition: .3s;
            max-width: 90%;
            text-overflow: ellipsis;
        }

        #fe_dm_tthd .items-tthd img {
            width: 100%;
            height: auto;
            transition: .3s;
        }

        #fe_dm_tthd .items-tthd:hover p {
            color: #0d95e8;
            text-shadow: 1px 1px 1px white;
        }

        #fe_dm_tthd .items-tthd:hover img {
            transform: scale(1.3);
            -webkit-filter: blur(2px); /* Safari 6.0 - 9.0 */
            filter: blur(2px);
        }

    </style>

    <div class="container-fluid main-font animated fadeIn shadow-sm" id="fe_danhmuccv_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pt-5 pb-5">
                    <h5 class="pt-5">GIỚI THIỆU CÔNG TY</h5>
                    <p class="pb-5">MỘT SỐ HOẠT ĐỘNG VÀ THÔNG TIN CÔNG TY.</p>
                </div>
            </div>
        </div>
    </div>

@stop
@section('container')

    <style>
        div#title_bar h5 {
            font-size: 20px;
            font-family: 'Lalezar', cursive;
        }

        div#title_bar h5 a {
            color: black;
        }
    </style>

    <div class="container-fluid pt-4 pb-3 border-bottom shadow-sm " id="title_bar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h5><a href="{{URL::asset('/')}}">TRANG CHỦ</a> > GIỚI THIỆU</h5>
                </div>
            </div>
        </div>
    </div>

    <style>
        #fe_gt_content h5 {
            position: relative;
            font-size: 20px;
            font-weight: 600;
            width: fit-content;
            font-family: 'Lalezar', cursive;

        }

        #fe_gt_content p {
            line-height: 20px;
        }

        #fe_gt_content h5:before {
            position: absolute;
            content: '';
            height: 1px;
            width: 38%;
            background-color: #0d95e8;
            bottom: -1px;

        }

        .borderwrapcon .giai-thuong {
            width: 38%;
            height: auto;
            float: right;
            padding-left: 20px;
        }

        .borderwrapcon ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .borderwrapcon ul li {

            padding-bottom: 8px;
        }

        .borderwrapcon ul li:before {
            content: '+';
            margin-right: 5px;
        }

        .borderwrapcon a.ut_ngay {
            padding: 8px 16px;
            background: linear-gradient(-90deg, #0a6287, #0d95e8);
            color: white;
        }

        .borderwrapcon iframe{
            width: 600px;
            height: auto;
        }

        @media screen and (max-width: 1000px) and (min-width: 220px) {



        }

    </style>

    <div class="container-fluid main-font pt-3 pb-5" id="fe_gt_content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pt-4">
                    {{--<div class="row">--}}
                    {{--<div class="col-md-6">--}}
                    {{--<h5 class="pb-3 pt-5 border-bottom mb-4">GIỚI THIỆU VỀ CÔNG TY</h5>--}}

                    {{--<p>Công ty Bất động sản Tuấn 123 hiện đang là đơn vị chuyên Mua, Bán,--}}
                    {{--Cho thuê nhà, đất thổ cư trên toàn Hà Nội. Với đội ngũ Chuyên viên--}}
                    {{--kinh doanh và Quản lý giàu kinh nghiệm, năng động. Chế độ đãi ngộ tốt nhất.</p>--}}

                    {{--<br>--}}

                    {{--<p>TUẤN 123, không chăm sóc nhưng luôn luôn bảo vệ người mua, người mua có quyền được--}}
                    {{--biết mình sắp mua bất động sản ở đâu ? như thế nào ? và của ai ? </p>--}}
                    {{--<img src="{{URL::asset('images/bg/danhhieu.png')}}" alt="" style="width: 80%;height: auto">--}}
                    {{--<br>--}}

                    {{--<h6 style="font-size: 20px;font-weight: 600">BẢNG CỬU CHƯƠNG</h6>--}}

                    {{--<p>--}}
                    {{--9 Điều tinh túy được đúc kết lại để giúp anh em Môi giới Tuấn 123 có bản lĩnh, sẵn sàng có lời nói và hành động ra tiền.--}}
                    {{--<br>--}}

                    {{--1. Kiến thức Olympia.​ <br>--}}

                    {{--2. Bán cái mình có.<br>--}}

                    {{--3. Biết truy vấn đến cùng.<br>--}}

                    {{--4. Muốn xe đạp à đòi xe máy.<br>--}}

                    {{--5. Luôn nghi ngờ à xử lý nghi ngờ.<br>--}}

                    {{--6. Ký hợp đồng phải đọc kỹ trước khi ký.<br>--}}

                    {{--7. Chính nhân quân tử, được cho đi là niềm vui.<br>--}}

                    {{--8. Kiềng 3 chân: Ông chủ nhà – Ông môi giới – Ông khách mua.<br>--}}

                    {{--9. Biết né đòn, biết đá bóng, biết đưa về thế mạnh của mình.</p>--}}

                    {{--<br>--}}

                    {{--<p>--}}
                    {{--<span class="text-primary">CÔNG TY TNHH BẤT ĐỘNG SẢN TUẤN 123</span> <br>--}}
                    {{--<span class="text-primary"> Địa chỉ: </span> Số 109 Trường Chinh, Đống Đa, Hà Nội. <br>--}}
                    {{--<span class="text-primary"> Trụ sở miền Nam:</span> 202B Hoàng Văn Thụ Phường 9 Quận Phú Nhuận TP.HCM. <br>--}}

                    {{--<span class="text-danger">Hotline:</span> 0984.929.097 – 0906.037.688 - 0962.383.611 -  0962.038.484 <br>--}}
                    {{--</p>--}}

                    {{--</div>--}}
                    {{--<div class="col-md-6 pt-5">--}}
                    {{--<img class="border shadow-sm" src="{{URL::asset('images/bg/28279146_835846503254010_2229504394337144951_n.jpg')}}" alt="" style="width: 100%;height: auto;padding: 2px;">--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    <div class="borderwrapcon">


                        <img class="giai-thuong" src="{{URL::asset('images/bg/danhhieu.png')}}" alt="">

                        <div style="text-align: center;"><span style="font-size: 20px;"><strong>CÔNG TY CỔ PHẦN TUẤN 123 - BẤT ĐỘNG SẢN TUẤN 123<br></strong><em><span
                                            style="color: #800000;font-size: 15px">Số 1 Việt Nam về Bất động sản Thổ cư - Thương hiệu mạnh Asian.</span><strong><br></strong></em><span
                                        style="font-size: 10px;">&nbsp;</span></span></div>
                        <div id="fb-root" class=" fb_reset">

                            <ul>
                                <li>Là Công ty tạo ra nhiều tỷ phú Môi giới Bất động sản thổ cư nhất tại Việt Nam (có
                                    thu nhập tiền tỷ trong năm).
                                </li>
                                <li>Mức độ hài lòng nhân sự tốt nhất thị trường: Trong 5 năm qua Công ty có hơn 100 cán
                                    bộ quản lý và nhân sự chủ chốt thì chỉ duy nhất 2 trường hợp nghỉ việc (tỷ lệ nghỉ
                                    việc nhân sự chủ chốt cộng dồn 5 năm chưa đến 3%).
                                </li>
                                <li>Là đơn vị có nguồn nhà bán lớn nhất Việt Nam (hàng nghìn nhà đang bán và liên tục
                                    được chủ nhà tin tưởng gửi bán) giúp các Môi giới tận dụng tối đa khách hàng (có
                                    khách hàng là có nhà phù hợp cho khách tránh lãng phí khách hàng do không tìm được
                                    nhà phù hợp).
                                </li>
                                <li>Công ty có tốc độ tăng trưởng nhanh nhất trong lĩnh vực Môi giới Bất động sản 2 năm
                                    qua.
                                </li>
                                <li>Số lượng nhân sự lớn nhất Việt Nam trong lĩnh vực Bất động sản thổ cư (hơn 1500 nhân
                                    sự và mục tiêu lên 2500 nhân sự vào cuối năm 2018).
                                </li>
                                <li>Số lượng giao dịch và doanh số lớn nhất Việt Nam về thổ cư.</li>
                                <li>Chính sách trả hoa hồng cho nhân viên cao nhất thị trường, nhanh nhất (thu và chia
                                    hoa hồng ngay trong ngày phát sinh giao dịch).
                                </li>
                                <li>Công ty có tầm nhìn xa và lớn: Kế hoạch trở thành doanh nghiệp Môi giới Bất động sản
                                    thổ cư có chi nhánh tại nhiều quốc gia trên thế giới.
                                </li>
                                <li>Công ty có nhiều cơ hội nhất cho nhân sự mới: Thăng tiến, học hỏi, thu nhập (vì
                                    chúng tôi đang có kế hoạch phát triển bùng nổ vào năm 2018 - đặc biệt tại thị trường
                                    TP Hồ Chí Minh).
                                </li>
                                <li>Có chương trình Đào tạo bài bản, chuyên nghiệp (miễn phí 100%) từ người chưa biết
                                    đến biết một nghề và luôn sống được bằng nghề Môi giới Bất động sản dù đi bất kỳ
                                    đâu, thậm chí khi thạo nghề có thể tự làm Môi giới giỏi độc lập (Giáo án Đào tạo Tập
                                    1, Tập 2, Tập 3).
                                </li>
                                <li>Các hoạt động văn hóa doanh nghiệp, thể thao, tâm linh, du lịch ... đa dạng, hoành
                                    tráng, ý nghĩa nhất.
                                </li>
                            </ul>


                            <div class="mt-3 mb-5">
                                <a class="ut_ngay" href="">ỨNG TUYỂN NGAY</a>
                            </div>

                            <p><strong style="font-size: 20px;">Sứ mệnh:</strong></p>
                            <p><span style="font-size: 16px;">+ Làm trong sạch thị trường kinh doanh Bất động sản (không cài giá, không chênh giá).<br>+ Đào tạo, cung cấp cho thị trường hàng nghìn Môi giới thực sự và chuyên nghiệp.<br>+ Khiến người dân tôn trọng Môi giới và nghề Môi giới thực sự được tôn vinh.</span>
                            </p>
                            <p class="pt-3"><span style="font-size: 20px;"><strong>Tầm nhìn:</strong></span></p>
                            <p class="pb-3"><span style="font-size: 16px;">+ Số 1 Việt Nam về Bất động sản thổ cư.<br>+ Công ty Mối giới Bất động sản đầu tiên của Việt Nam vươn tầm Quốc tế có hoạt động uy tín và hiệu quả trên thị trường đa quốc gia.</span>
                            </p>
                            <p><span style="font-size: 20px"><strong>Giá trị cốt lõi:</strong></span></p>
                            <p><span style="font-size: 16px;">+ Tinh vi<br>+ Đoàn kết<br>+ Cống hiến<br>+ Giàu sang<br>+ Danh vọng<br>+ Vĩ đại</span>
                            </p>
                            <h3 class="pt-3" style="font-size: 20px;font-weight: 600">Giáo án đào tạo</h3>
                            <p><span style="font-size: 16px;">+ Giáo án Bất động sản tập 1.</span><br><span
                                        style="font-size: 16px;">+ Giáo án Bất động sản tập 2.</span><br><span
                                        style="font-size: 16px;">+ Giáo án Bất động sản tập 3.</span><br><span
                                        style="font-size: 16px;">+ Giáo trình Đăng tin: Kỹ năng tìm kiếm khách hàng nhanh và hiệu quả.</span><br><span
                                        style="font-size: 16px;">+ Giáo trình tiếp nhận điện thoại và khai thác thông tin khách hàng.</span><br><span
                                        style="font-size: 16px;">+ Giáo trình Phân loại và chăm sóc khách hàng tiềm năng.</span><br><span
                                        style="font-size: 16px;">+ Đào tạo kỹ năng đàm phán, kỹ năng giao tiếp, ….</span>
                            </p>
                            <h3 class="pt-3"><span style="font-size: 20px;font-weight: 600">Bảng cửu chương&nbsp;TUẤN 123</span></h3>
                            <p><span style="font-size: 16px;">1. Kiến thức Olympia.</span><br><span
                                        style="font-size: 16px;">2. Bán cái mình có.</span><br><span
                                        style="font-size: 16px;">3. Biết truy vấn đến cùng.</span><br><span
                                        style="font-size: 16px;">4. Muốn xe đạp và đòi xe máy.</span><br><span
                                        style="font-size: 16px;">5. Luôn nghi ngờ và xử lý nghi ngờ.</span><br><span
                                        style="font-size: 16px;">6. Ký hợp đồng phải đọc kỹ trước khi ký.</span><br><span
                                        style="font-size: 16px;">7. Chính nhân quân tử, được cho đi là niềm vui.</span><br><span
                                        style="font-size: 16px;">8. Kiềng 3 chân: Ông chủ nhà – Ông môi giới – Ông khách mua.</span><br><span
                                        style="font-size: 16px;">9. Biết né đòn, biết đá bóng, biết đưa về thế mạnh của mình.</span>
                            </p>
                            <h2><span style="font-size: 16px;">Những điều cốt lõi.<br>
                                        </span>
                            </h2>
                            <strong>
                                    <h2 class="pt-3" style="font-size: 20px;font-weight: 600">36 Điều cốt lõi của Công ty Bất động sản TUẤN 123.</h2></strong>
                            <p><span style="font-size: 16px;">1. Chính nhân quân tử.&nbsp;<span
                                            class="text_exposed_show"><br>2. Tinh thần Nhật Bản.<br>3. Tinh vi sáng tạo.<br>4. Quân lệnh như sơn.<br>5. Đúng luật mà làm.<br>6. Bản lĩnh bất khuất.<br>7. Khí chất hơn người.<br>8. Cơ hội giàu sang.<br>9. Đột phá thu nhập.<br>10. Giỏi là phải giàu.<br>11. Mình giàu bạn giàu.<br>12. Nâng cao bản thân.<br>13. Chấp hành Nội quy.<br>14. Phát huy văn hóa.<br>15. Ăn chơi đẳng cấp.<br>16. Giao tiếp đỉnh cao.<br>17. Không nói lời dư.<br>18. Không hành động thừa.<br>19. Ngày giờ làm việc.<br>20. Đào tạo thường xuyên.<br>21. Công nghệ quản lý.<br>22. Làm điều có nghĩa.<br>23. Phát triển không ngừng.<br>24. Nhìn xa trông rộng.<br>25. Giúp đỡ khách hàng.<br>26. Tương tác trực tiếp.<br>27. Từng ngày hồi hộp.<br>28. Chia tiền tại chỗ.<br>29. Nâng cấp thị trường.<br>30. Mở rộng bốn phương.<br>31. Làm chủ cuộc chơi.<br>32. Cống hiến xã hội.<br>33. Công bằng hạnh phúc.<br>34. Ơn đền nghĩa trả.<br>35. Ông chủ công việc.<br>36. Là Ông Môi giới.</span></span>
                            </p>
                            <hr>

                            <div class="mt-3 mb-3">
                                <a class="ut_ngay" href="">ỨNG TUYỂN NGAY</a>
                            </div>

                            <p><span style="font-size: 16px;"><span style="color: #003300;"><a
                                                href="http://anducnhan.com/CTY-TUAN-123/2610379/104429/Su-menh-Tam-nhin-Gia-tri-cot-loi-Van-hoa-doanh-nghiep-Chien-luoc-So-do-to-chuc-Quy-trinh-cong-viec.html"
                                                target="_blank">Sứ mệnh</a>;&nbsp;</span><span
                                            style="color: #003300;"><a
                                                href="http://anducnhan.com/CTY-TUAN-123/2610379/104429/Su-menh-Tam-nhin-Gia-tri-cot-loi-Van-hoa-doanh-nghiep-Chien-luoc-So-do-to-chuc-Quy-trinh-cong-viec.html"
                                                target="_blank">Tầm nhìn</a>;&nbsp;</span><span style="color: #003300;"><a
                                                href="http://anducnhan.com/CTY-TUAN-123/2610379/104429/Su-menh-Tam-nhin-Gia-tri-cot-loi-Van-hoa-doanh-nghiep-Chien-luoc-So-do-to-chuc-Quy-trinh-cong-viec.html"
                                                target="_blank">Giá trị cốt lõi</a>;&nbsp;</span><span
                                            style="color: #003300;"><a
                                                href="http://anducnhan.com/CTY-TUAN-123/2610379/104429/Su-menh-Tam-nhin-Gia-tri-cot-loi-Van-hoa-doanh-nghiep-Chien-luoc-So-do-to-chuc-Quy-trinh-cong-viec.html"
                                                target="_blank">Văn hóa doanh nghiệp</a>;</span></span></p>
                        </div>
                    </div>
                    <p><strong><span style="font-size: 16px;"><a
                                        href="http://anducnhan.com/CTY-TUAN-123/Tin-hoat-dong-2610380.html"
                                        target="_blank">Các hoạt động nội bộ</a>;&nbsp;<a
                                        href="http://anducnhan.com/CTY-TUAN-123/Tin-hoat-dong-2610380.html"
                                        target="_blank">Các hoạt động cộng đồng</a></span></strong></p>
                    <p><span style="font-size: 16px;"><a href="http://nhadatdephochiminh.com/Nha-Dat-Ban.html"
                                                         target="_blank">Danh mục sản phẩm đang bán</a></span></p>
                    <p><span style="font-size: 16px;"><a
                                    href="http://nhadatdephochiminh.com/Trang-chu.htmlhttps://docs.google.com/forms/d/e/1FAIpQLSfZEixmpP8QVkI5rxaHhJZ8x4wCkCRGYnXIHp6K0cJf1tIWCg/viewform"
                                    target="_blank">Nhu cầu khách đang tìm mua</a></span></p>
                    <p><span style="font-size: 16px;"><a href="http://nhadatdephochiminh.com/Sach-mien-phi.html"
                                                         target="_blank">Đăng ký nhận tin hữu ích</a>;&nbsp;<a
                                    style="font-size: 16px;" href="http://nhadatdephochiminh.com/Sach-mien-phi.html"
                                    target="_blank">Đăng ký nhận sách miễn phí</a></span></p>
                    <p><strong><span style="font-size: 16px;"><a
                                        href="http://nhadatdephochiminh.com/CTY-TUAN-123/Tuyen-dung-2610382.html"
                                        target="_blank">Tin tuyển dụng</a></span></strong></p>
                    <p><span style="font-size: 16px;"><a
                                    href="http://nhadattuan123.com/CTY-TUAN-123/Huong-dan-Quy-trinh-Mau-bieu-lam-viec-TUAN-123-2610381.html"
                                    target="_blank">Sổ tay/Cẩm nang nhân viên công ty Tuấn 123</a></span></p>
                    <p><strong><span style="font-size: 16px;"><a href="http://anducnhan.com/Anh.html" target="_blank">Một số hình ảnh các hoạt động</a></span></strong>
                    </p>
                    <hr>
                    <p><span style="font-size: 16px;"><strong>Facebook:</strong>&nbsp;<a
                                    href="https://www.facebook.com/nhadattuan123" target="_blank">https://www.facebook.com/nhadattuan123</a></span>
                    </p>
                    <hr>
                    <p><strong style="font-size: 16px;">
                            <iframe style="display: block; margin-left: auto; margin-right: auto;"
                                    src="https://www.youtube.com/embed/343K94I-p6Y" frameborder="0"></iframe>
                        </strong></p>
                    <p><strong style="font-size: 16px;">
                            <iframe style="display: block; margin-left: auto; margin-right: auto;"
                                    src="https://www.youtube.com/embed/2Jb-n86eGh4" frameborder="0"></iframe>
                        </strong></p>
                    <p style="text-align: center;"><strong style="font-size: 16px;">
                            <iframe style="display: block; margin-left: auto; margin-right: auto;"
                                    src="https://www.youtube.com/embed/-liTpxci-gY" frameborder="0"></iframe>
                            <br>Tọa đàm: Định hướng quản ký, kinh doanh Bất động sản đỉnh cao trong tương
                            lai&nbsp;</strong></p>
                    <p style="text-align: center;"><span style="font-size: 16px;"><iframe
                                    style="display: block; margin-left: auto; margin-right: auto;"
                                    src="https://www.youtube.com/embed/U_uZGs7jMk4?rel=0&amp;controls=0" frameborder="0"
                                    ></iframe></span></p>
                    <h1 class="title style-scope ytd-video-primary-info-renderer" style="text-align: center;"><span
                                style="font-size: 16px;">Thư ký Phương giới thiệu Công ty Bất động sản Tuấn 123 tại ngân hàng Techcombank</span>
                    </h1>
                    <p style="text-align: center;"><span style="font-size: 16px;"><iframe
                                    src="https://www.youtube.com/embed/Dwrdm45f8_o?rel=0&amp;controls=0" frameborder="0"
                                    ></iframe></span></p>
                    <h1 class="title style-scope ytd-video-primary-info-renderer" style="text-align: center;"><span
                                style="font-size: 16px;">BẤT ĐỘNG SẢN TUẤN 123 Tổng kết năm 2016 trên Vịnh Hạ Long hoành tráng như Xích Bích trận</span>
                    </h1>
                    <p style="text-align: center;"><span style="font-size: 16px;"><iframe
                                    src="https://www.youtube.com/embed/0hcPCrzm17g?rel=0&amp;controls=0" frameborder="0"
                                   ></iframe></span></p>
                    <h1 class="title style-scope ytd-video-primary-info-renderer" style="text-align: center;"><span
                                style="font-size: 16px;">Thủ lĩnh TUẤN 123 phát biểu mừng sinh nhật Công ty TNHH Tuấn 123 năm 2016&nbsp;</span>
                    </h1>
                    <p style="text-align: center;"><span style="font-size: 16px;"><iframe
                                    src="https://www.youtube.com/embed/DtjCT5P5vo4?rel=0" frameborder="0"></iframe></span></p>
                    <h1 class="title style-scope ytd-video-primary-info-renderer" style="text-align: center;"><span
                                style="font-size: 16px;">CÔNG TY BẤT ĐỘNG SẢN TUẤN 123 - Thế hệ đầu.</span></h1>
                    <p style="text-align: center;"><span style="font-size: 16px;"><iframe
                                    src="https://www.youtube.com/embed/_60NBeQDv3g?rel=0" frameborder="0" ></iframe></span></p>


                    <div class="mt-3 mb-3">
                        <a class="ut_ngay" href="">ỨNG TUYỂN NGAY</a>
                    </div>


                    <p style="text-align: center;"><span style="font-size: 16px;"><strong>Khúc hát mừng sinh nhật Thủ lĩnh TUẤN 123</strong></span>
                    </p>
                    <p style="text-align: center;"><span style="font-size: 16px;"><iframe
                                    src="https://www.youtube.com/embed/a1Fey_I5eeQ?rel=0" frameborder="0"></iframe></span></p>
                    <p style="text-align: center;"><span style="font-size: 16px;"><strong>Nằm trong chương trình Bóng đá Thứ 4 hàng tuần.<br>Trận Bán kết Sinh nhật TL TUẤN 123</strong></span>
                    </p>
                    <p style="text-align: center;"><span style="font-size: 16px;"><iframe
                                    src="https://www.youtube.com/embed/PtbAfXuCvX8?rel=0" frameborder="0" ></iframe></span></p>
                    <h1 class="title style-scope ytd-video-primary-info-renderer" style="text-align: center;"><span
                                style="font-size: 16px;">Chỉ Riêng Mình Ta Thủ lĩnh TUẤN 123</span></h1>
                    <p style="text-align: center;"><span style="font-size: 16px;"><iframe
                                    src="https://www.youtube.com/embed/Hr24VRP5_E0?rel=0" frameborder="0" ></iframe></span></p>
                    <h1 class="title style-scope ytd-video-primary-info-renderer" style="text-align: center;"><span
                                style="font-size: 16px;">Tổng kết Quý I 2016 Đến SVĐ Thiên Trường Tuấn 123</span></h1>
                    <p style="text-align: center;"><span style="font-size: 16px;"><iframe
                                    src="https://www.youtube.com/embed/WzYGupKhjMU?rel=0" frameborder="0" ></iframe></span></p>
                    <h1 class="title style-scope ytd-video-primary-info-renderer" style="text-align: center;"><span
                                style="font-size: 16px;">LÀ MÔI GIỚI THẬT TUYỆT! CÔNG TY BẤT ĐỘNG SẢN TUẤN 123 PHÒNG NHÀ VUA 2017</span>
                    </h1>
                    <p style="text-align: center;"><span style="font-size: 16px;"><iframe
                                    src="https://www.youtube.com/embed/_beAvYWOL4s?rel=0" frameborder="0"></iframe></span></p>
                    <h1 class="title style-scope ytd-video-primary-info-renderer" style="text-align: center;"><span
                                style="font-size: 16px;">Nối vòng tay lớn BĐS Tuấn 123</span></h1>
                    <p style="text-align: center;"><span style="font-size: 16px;"><iframe
                                    src="https://www.youtube.com/embed/QIQ_9ePtZgs?rel=0" frameborder="0"></iframe></span></p>
                    <h1 class="title style-scope ytd-video-primary-info-renderer" style="text-align: center;"><span
                                style="font-size: 16px;">[BẤT ĐỘNG SẢN TUẤN 123] Tiểu phẩm kịch xúc động "Niềm tin nghề Môi giới"</span>
                    </h1>
                    <p style="text-align: center;"><span style="font-size: 16px;"><iframe
                                    src="https://www.youtube.com/embed/mvNlO4lMRtE?rel=0" frameborder="0"></iframe></span></p>
                    <h1 class="title style-scope ytd-video-primary-info-renderer" style="text-align: center;"><span
                                style="font-size: 16px;">BĐS TUẤN 123 Màn Ăn Táo ăn Bưởi đỏ mặt nhất BĐS Tuấn 123</span>
                    </h1>
                    <p style="text-align: center;"><span style="font-size: 16px;"><iframe
                                    src="https://www.youtube.com/embed/lmfMZfDryrY?rel=0" frameborder="0"></iframe></span></p>
                    <h1 class="title style-scope ytd-video-primary-info-renderer" style="text-align: center;"><span
                                style="font-size: 16px;">Sinh nhật thương hiệu Tuấn 123, Bất động sản Tuấn 123 Khúc hát mừng sinh nhật thương hiệu Tuấn 123</span>
                    </h1>
                    <p style="text-align: center;"><span style="font-size: 16px;"><iframe
                                    src="https://www.youtube.com/embed/H646c4DBV5A?rel=0" frameborder="0"></iframe></span></p>
                    <h1 class="title style-scope ytd-video-primary-info-renderer" style="text-align: center;"><span
                                style="font-size: 16px;">Bất động sản Tuấn 123 Ông bầu Trường đọc diễn văn khai mạc trận CK Bóng đá trên SVĐ Thiên Trường</span>
                    </h1>
                    <p style="text-align: center;"><span style="font-size: 16px;"><iframe
                                    src="https://www.youtube.com/embed/7A64QrQzDMY?rel=0" frameborder="0"></iframe></span></p>
                    <h1 class="title style-scope ytd-video-primary-info-renderer" style="text-align: center;"><span
                                style="font-size: 16px;">SVĐ Hà Nam thất thủ Bất động sản Tuấn 123</span></h1>
                    <p style="text-align: center;"><span style="font-size: 16px;"><iframe
                                    src="https://www.youtube.com/embed/3_zEpaEOc-s?rel=0" frameborder="0"></iframe></span></p>

                    <div class="mt-3 mb-3">
                        <a class="ut_ngay" href="">ỨNG TUYỂN NGAY</a>
                    </div>

                    <p style="text-align: center;"><span style="font-size: 16px;"><strong><br></strong></span></p></div>
            </div>
        </div>
    </div>
    </div>


    @include('frontend.common.contact_middle')


    <style>
        div#fe_gt_slogan {
            background-image: url('images/bg/twitter.jpg');
            -webkit-background-size: cover;
            background-size: cover;
            background-position: center center;
        }

        div#fe_gt_slogan h5 {
            font-size: 20px;
            font-weight: 600;
            font-family: 'Lalezar', cursive;
            position: relative;
            width: fit-content;
            margin: auto;
        }

        div#fe_gt_slogan p {
            font-size: 19px;
            font-weight: normal;
            position: relative;
            width: fit-content;
            margin: auto;
        }

        div#fe_gt_slogan h5:before {
            position: absolute;
            content: '';
            height: 1px;
            width: 38%;
            background-color: #0d95e8;
            bottom: -1px;
            left: 50%;
            transform: translateX(-50%);
        }
    </style>

    <div class="container-fluid main-font" id="fe_gt_slogan">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center pt-5 mt-5 mb-5">
                    <h5 class="pt-5 pb-2 border-bottom">PHƯƠNG CHÂM LÀM VIỆC</h5>

                    <p class="pt-3 pb-5 mb-5">Vừa làm vừa chơi - thảnh thơi như dân môi giới.</p>
                </div>
            </div>
        </div>
    </div>
@stop

@section('java-scripts')
    <script type="text/javascript">

        $(document).ready(function () {


        })


    </script>

    <script>


    </script>



@stop
