@extends('master') @section('content')
<div class="main">
    <div class="trogiup">
        <div class="">
            <div>
                <ul class="menu-help" id="ul_help">
                    <li id="gioithieu" class="">
                        <a id="gioithieu1" href="{{route('huongdan')}}">Hướng dẫn</a>
                    </li>
                    <li id="gioithieu" class="">
                        <a id="gioithieu1" href="{{route('hdruttien')}}">Cách rút tiền</a>
                    </li>
                    <li id="gioithieu" class="act">
                        <a id="gioithieu1" href="{{route('hdnaptien')}}">Cách nạp tiền</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="trogiup-content">

            <div id="div_trogiup_detail" style="margin-top: 10px;">
                <h1 color:="" helvetica="" line-height:="" style="box-sizing: border-box; font-size: 36px; font-weight: 500; margin: 20px 0px 10px; font-family: ">
                    Các Bước Nạp Tiền</h1>
                <p helvetica="" style="box-sizing: border-box; font-size: 14px; line-height: normal; margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: ">
                    &nbsp;</p>
                <p helvetica="" style="box-sizing: border-box; font-size: 14px; line-height: normal; margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: ">
                    1.&nbsp;Lấy thông tin tài khoản ngân hàng từ Hỗ trợ viên lode88 qua Hotline, Livechat</p>
                <p helvetica="" style="box-sizing: border-box; font-size: 14px; line-height: normal; margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: ">
                    2.&nbsp;Bạn cần chuyển khoản vào&nbsp;tài khoản ngân hàng vừa lấy được</p>
                <p helvetica="" style="box-sizing: border-box; font-size: 14px; line-height: normal; margin: 0px 0px 10px;">
                    <span style="color: rgb(51, 51, 51);">3.&nbsp;Đăng nhập vào tài khoản
                        <strong>lode88.net</strong>
                    </span>
                    <font color="#333333">&nbsp;của bạn</font>
                </p>
                <p helvetica="" style="box-sizing: border-box; font-size: 14px; line-height: normal; margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: ">
                    Vào mục Tài khoản lập phiếu Nạp tiền&nbsp;</p>
                <p helvetica="" style="box-sizing: border-box; font-size: 14px; line-height: normal; margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: ">
                    Như hình bên dưới</p>
                <p helvetica="" style="box-sizing: border-box; font-size: 14px; line-height: normal; margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: ">
                    <img src="mLode/ldimages/nt.png" style="box-sizing: border-box; border: 0px; vertical-align: middle;">
                </p>
                <p helvetica="" style="box-sizing: border-box; font-size: 14px; line-height: normal; margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: ">
                    &nbsp;</p>
                <p helvetica="" style="box-sizing: border-box; font-size: 14px; line-height: normal; margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: ">
                    <span style="box-sizing: border-box; font-weight: 700;">Mã giao dịch:</span>
                </p>
                <p helvetica="" style="box-sizing: border-box; font-size: 14px; line-height: normal; margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: ">
                    - Nếu bạn chuyển qua&nbsp;
                    <span style="box-sizing: border-box; font-weight: 700;">ATM</span>&nbsp;vui lòng điền "Số Tài Khoản Ngân Hàng của bạn".</p>
                <p helvetica="" style="box-sizing: border-box; font-size: 14px; line-height: normal; margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: ">
                    - Nếu bạn chuyển bằng hình thức&nbsp;
                    <span style="box-sizing: border-box; font-weight: 700;">Nộp Tiền mặt tại quầy&nbsp;</span>vui lòng điền "Họ Và Tên người nộp tiền".</p>
                <p helvetica="" style="box-sizing: border-box; font-size: 14px; line-height: normal; margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: ">
                    - Nếu bạn chuyển qua&nbsp;
                    <span style="box-sizing: border-box; font-weight: 700;">Internetbanking&nbsp;</span>thì tùy ngân hàng sẽ có "Mã Giao Dịch" khác nhau:</p>
                <p helvetica="" style="box-sizing: border-box; font-size: 14px; line-height: normal; margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: ">
                    &nbsp;+ VCB: Số Lệnh Giao Dịch</p>
                <p helvetica="" style="box-sizing: border-box; font-size: 14px; line-height: normal; margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: ">
                    &nbsp;+ DAB: Số TKNH của bạn</p>
                <p helvetica="" style="box-sizing: border-box; font-size: 14px; line-height: normal; margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: ">
                    &nbsp;+&nbsp;ACB: Họ Và Tên chủ TKNH</p>
                <p helvetica="" style="box-sizing: border-box; font-size: 14px; line-height: normal; margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: ">
                    &nbsp;+&nbsp;Vietinbank: Số TKNH của bạn</p>
                <p helvetica="" style="box-sizing: border-box; font-size: 14px; line-height: normal; margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: ">
                    &nbsp;+&nbsp;BIDV:&nbsp;Số Tham Chiếu</p>
                <p helvetica="" style="box-sizing: border-box; font-size: 14px; line-height: normal; margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: ">
                    &nbsp;+&nbsp;Sacombank: Số Giao Dịch</p>
                <p helvetica="" style="box-sizing: border-box; font-size: 14px; line-height: normal; margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: ">
                    &nbsp;+&nbsp;TCB: Số Bút Toán</p>
                <p helvetica="" style="box-sizing: border-box; font-size: 14px; line-height: normal; margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: ">
                    &nbsp;</p>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
@endsection