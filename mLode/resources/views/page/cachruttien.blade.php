@extends('master') @section('content')
<div class="main">
    <div class="trogiup">
        <div class="">
            <div>
                <ul class="menu-help" id="ul_help">
                    <li id="gioithieu" class="">
                        <a id="gioithieu1" href="{{route('huongdan')}}">Hướng dẫn</a>
                    </li>
                    <li id="gioithieu" class="act">
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
                <h1 style="box-sizing: border-box; font-size: 36px; font-weight: 500; margin: 20px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 1.1; color: rgb(51, 51, 51);">
                    Các Bước Rút Tiền</h1>
                <p style="box-sizing: border-box; font-size: 14px; line-height: normal; margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;">
                    &nbsp;</p>
                <p style="box-sizing: border-box; font-size: 14px; line-height: normal; margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;">
                    1. Đăng nhập vào tài khoản của bạn tại lode88</p>
                <p style="box-sizing: border-box; font-size: 14px; line-height: normal; margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;">
                    Vào mục Tài khoản lập phiếu Rút tiền&nbsp;</p>
                <p style="box-sizing: border-box; font-size: 14px; line-height: normal; margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;">
                    Như hình bên dưới</p>
                <p style="box-sizing: border-box; font-size: 14px; line-height: normal; margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;">
                    <img src="mLode/ldimages/rt.png" style="box-sizing: border-box; border: 0px; vertical-align: middle;">
                </p>
                <p style="box-sizing: border-box; font-size: 14px; line-height: normal; margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;">
                    2. Lưu ý : Nhập mã (*) là 5 chữ số cuối của số điện thoại mà bạn đăng ký.</p>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
@endsection