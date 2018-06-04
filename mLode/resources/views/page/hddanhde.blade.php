@extends('master') @section('content')
<div class="main">
    <div class="trogiup">
        <div class="">
            <div>
                <ul class="menu-help" id="ul_help">
                <li id="gioithieu" class="act">
                        <a id="gioithieu1" href="{{route('huongdan')}}">Hướng dẫn</a>
                    </li>
                    <li id="gioithieu" class="">
                        <a id="gioithieu1" href="{{route('hdruttien')}}">Cách rút tiền</a>
                    </li>
                    <li id="gioithieu" class="">
                        <a id="gioithieu1" href="{{route('hdnaptien')}}">Cách nạp tiền</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="trogiup-content">

            <div id="div_trogiup_detail" style="margin-top: 10px;">
                <p font-size:="" helvetica="" style="box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; color: rgb(51, 51, 51); font-family: ">
                    <span style="box-sizing: border-box; margin: 0px; padding: 0px; font-weight: 700;">I. Để tham gia&nbsp;chơi lô đề, số đề thì trước tiên&nbsp;bạn đăng ký tài khoản trên trang lode88.net</span>
                </p>
                <p font-size:="" helvetica="" style="box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; color: rgb(51, 51, 51); font-family: ">
                    <img alt="Description: dk.png" src="mLode/ldimages/hd1.png" style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; vertical-align: middle; height: 65px; width: 458px;">
                </p>
                <p font-size:="" helvetica="" style="box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; color: rgb(51, 51, 51); font-family: ">
                    <span style="box-sizing: border-box; margin: 0px; padding: 0px; font-weight: 700;">II. Sau khi đăng ký xong bạn tiến hành Nạp tiền</span>
                </p>
                <p font-size:="" helvetica="" style="box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; color: rgb(51, 51, 51); font-family: ">
                    Để tiện lợi cho việc gửi tiền vào chơi lô đề thì Lode88 có hỗ trợ đủ các ngân hàng thông dụng nhất hiện nay: Vietcombank,
                    Đông Á, ACB, VietinBank, BIDV, Sacombank,Techcombank</p>
                <p font-size:="" helvetica="" style="box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; color: rgb(51, 51, 51); font-family: ">
                    Khi gửi tiền xong thì bạn vui lòng lập lệnh Nạp tiền. Khi nhận được tiền thì bộ phận hỗ trợ của Lode88 sẽ cập nhật tiền vào
                    tài khoản lô đề cho bạn. (
                    <span style="box-sizing: border-box; margin: 0px; padding: 0px; font-weight: 700;">
                        <a href="{{route('hdnaptien')}}">Xem hướng dẫn Nạp Tiền</a>)</span>
                </p>
                <p font-size:="" helvetica="" style="box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; color: rgb(51, 51, 51); font-family: ">
                    <span style="box-sizing: border-box; margin: 0px; padding: 0px; font-weight: 700;">III. Cách Đánh Số Đề</span>
                </p>
                <p font-size:="" helvetica="" style="box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; color: rgb(51, 51, 51); font-family: ">
                    <span style="box-sizing: border-box; margin: 0px; padding: 0px; font-weight: 700;">&nbsp;1.&nbsp;</span>Sau khi có tiền trong tài khoản thì ở giao diện trang chủ, bạn chọn lô đề mình cần
                    đánh: Lô đề Miền Bắc, Lô đề Miền Trung, Lô đề Miền Nam.</p>
                <p font-size:="" helvetica="" style="box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; color: rgb(51, 51, 51); font-family: ">
                    <img alt="Description: chon dai.png" src="mLode/ldimages/hd2.png" style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; vertical-align: middle; height: 104px; width: 470px;">
                </p>
                <p font-size:="" helvetica="" style="box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; color: rgb(51, 51, 51); font-family: ">
                    <span style="box-sizing: border-box; margin: 0px; padding: 0px; font-weight: 700;">2</span>. Như trên là đã chọn đánh lô đề Miền Nam. Trong một ngày thì lô đề Miền Nam có nhiều đài, bạn
                    chọn đài cần đánh.</p>
                <p font-size:="" helvetica="" style="box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; color: rgb(51, 51, 51); font-family: ">
                    <img alt="" src="mLode/ldimages/hd3.png" style="width: 500px; height: 221px;">
                </p>
                <p font-size:="" helvetica="" style="box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; color: rgb(51, 51, 51); font-family: ">
                    <span style="box-sizing: border-box; margin: 0px; padding: 0px; font-weight: 700;">3.</span>&nbsp;Tiếp đến bạn chọn dạng lô đề cần đánh các con số đề yêu thích.</p>
                <p font-size:="" helvetica="" style="box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; color: rgb(51, 51, 51); font-family: ">
                    <img alt="" src="mLode/ldimages/hd4.png" style="width: 500px; height: 176px;">
                </p>
                <p font-size:="" helvetica="" style="box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; color: rgb(51, 51, 51);">
                    <span style="box-sizing: border-box; margin: 0px; padding: 0px; font-weight: 700;">4</span>. Sau khi chọn kiểu đánh và con số ưa thích rồi thì bạn điền số tiền cần đánh và bấm
                    <strong>Xác Nhận</strong>
                </p>
                <p font-size:="" helvetica="" style="box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; color: rgb(51, 51, 51);">
                    <img alt="" src="mLode/ldimages/hd5.png" style="width: 500px; height: 372px;">
                </p>
                <p font-size:="" helvetica="" style="box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; color: rgb(51, 51, 51);">
                    5. Khi bấm Xác Nhận, hệ thống hỏi " Bạn có chắc chắn muốn đánh không?" , kiểm tra thấy con số mình chọn và số tiền đã đúng
                    rồi thì bạn bấm
                    <strong>OK</strong>, nếu không đúng bạn bấm
                    <strong>Hủy </strong>và chọn lại.</p>
                <p font-size:="" helvetica="" style="box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; color: rgb(51, 51, 51);">
                    &nbsp;</p>
                <p font-size:="" helvetica="" style="box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; color: rgb(51, 51, 51);">
                    <img alt="" src="mLode/ldimages/hd6.png" style="width: 500px; height: 380px;">
                </p>
                <p font-size:="" helvetica="" style="box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; color: rgb(51, 51, 51);">
                    - Đối với Bao Lô 2 số của lô đề Miền Nam thì bạn chỉ cần thanh toán 15 giải trên tổng 18 giải. Thắng gấp 79 lần, nếu số đó
                    về N lần thì tiền thắng được xN lần. Như ví dụ trên tôi đánh 990k, bao lô 2 số đài Long An, nếu kết quả
                    xổ số 18 giải của đài Long An có ra số đuôi là 88 thì tôi thắng được&nbsp; 5,214K ( 5 triệu 214 ngàn).
                    Nếu ra 2 lần thì số tiền được x2, tức là: &nbsp;5,214k x 2= 10,428k.</p>
                <p font-size:="" helvetica="" style="box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; color: rgb(51, 51, 51); font-family: ">
                    - Tương tự bạn có thể chọn đánh lô đề miền trung, lô đề miền bắc và chọn những con số đề yêu thích một cách dễ dàng. Chúc
                    các bạn tham gia chơi lô đề, số đề nhiều may mắn và thắng lớn!</p>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
@endsection