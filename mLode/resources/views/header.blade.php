<div class="header">
    <div class="header-main clearfix">
        <div class="h-c1 float_left">
            <a class="icon-bar " role="button" data-toggle="collapse" href="#nav-sup-mobile" aria-expanded="false" aria-controls="nav-sup-mobile"></a>
        </div>
        <div class="h-c3 float_right">
            <div class="button-login">
                <a title=" " role="button" data-toggle="collapse" href="#section-login" aria-expanded="false" aria-controls="section-login">
                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                </a>
            </div>
        </div>
        <div class="h-c2 float_left text-center" style="margin-top: 4px;">
            <a href="/">
                <img src="mLode/public/mobile/site/layout/images/logo.png" height="18" alt="">
            </a>
        </div>
    </div>
    <div id="section-login" class="collapse">
        <div class="login box-login-sup section " id="form_login">
            <!-- <form class="form_action" action="/login.html" method="post"> -->
            <div class="row">
                @if(Auth::check())
                <div class="user-logined col-xs-12">
                    <p>Chào bạn:
                        <b>
                            <a href="{{route('member')}}" style="color: #d70a0a; text-decoration: underline;" id="form_username">{{Auth::user()->name}}</a>
                        </b>
                    </p>
                </div>
                <div class="col-xs-6 col-xs-signin">
                    <button class=" btn-signin">
                        <a style="color:white;" href="{{route('giaodich')}}">Tài khoản</a>
                    </button>
                </div>
                <div class="col-xs-6 col-xs-register">
                    <button class=" btn-register">
                        <a style="color:red;" href="{{route('dangxuat')}}">Đăng Xuất</a>
                    </button>
                </div>
                @else
                <div class="col-xs-12">
                    <input type="text" placeholder="Email" name="email" class="user-text  form-control txt-red" id="email">
                </div>
                <div class="col-xs-12">
                    <input type="password" placeholder="Mật khẩu" name="password" class="user-text  form-control txt-red" id="password">
                </div>
                <div class="col-xs-6 col-xs-signin">
                    <input type="submit" id="submit" value="Đăng nhập" class=" btn-signin">
                </div>
                <div class="col-xs-6 col-xs-register">
                    <a href="{{route('dangky')}}">
                        <input type="button" value="Đăng ký" class=" btn-register">
                    </a>
                </div>
                <div>
                    <div class="clear "></div>
                    <div class="error" style="color:red;background:none;border:none;padding:0px 15px" name="login_error"></div>
                    <div class="clear "></div>
                </div>
                <div class="reset-pwd">
                    <a href="{{route('quenmatkhau')}}">Quên mật khẩu?</a>
                </div>
                @endif

            </div>
            <div class="message-box error m0 f13 hideit hide" style="color:#444;" name="login_error"></div>
            <!-- </form> -->

        </div>
    </div>
    <div class="clearfix"></div>
    <div id="nav-sup-mobile" class="box-nav-sup collapse">
        <ul class="nav-sup" style="margin-bottom:0;">
            <li>
                <p>
                    <img src="mLode/public/mobile/site/layout/images/icon_home.png" alt="" width="23" height="25">
                </p>
                <a href="/">Trang chủ</a>
            </li>
            <li>
                <p>
                    <img src="mLode/public/mobile/site/layout/images/icon_nganhang.png" alt="" width="25" height="24">
                </p>
                <a href="{{route('bank')}}">Ngân hàng</a>
            </li>
            <li>
                <p>
                    <img src="mLode/public/mobile/site/layout/images/icon_phone.png" alt="" width="25" height="25">
                </p>
                <a href="{{route('trogiup')}}">Trợ giúp</a>
            </li>
            <li>
                <p>
                    <img src="mLode/public/mobile/site/layout/images/icon_lienhe.png" alt="" width="28" height="25">
                </p>
                <a href="#">Liên hệ</a>
            </li>
        </ul>
    </div>
    <script>
        $(document).ready(function () {
            $("#submit").click(function () {
                // alert('ok');
                var email = $("#email").val();
                var password = $("#password").val();
                // alert(email);
                if (email != "" && password != "") {
                    $.get("ajax/dangnhap/" + email + "/" + password, function (data) {
                        // alert(data);
                        if (data == "Tài khoản hoặc mật khẩu không chính xác!") {
                            $(".error").html(data);
                        } else
                            window.location = "/lo-de-mien-bac";
                    });
                }
            });
        });
    </script>
    <div class="notification">
        <div class="notification-head">
            <span class="notification-icon"></span>
        </div>
        <div class="notification-text">
            <marquee behavior="scroll" direction="left">
                <span id="div_thongbao">Cam kết an toàn trên mỗi giao dịch với ghi chú buôn bán tiền ảo hợp pháp</span>
            </marquee>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>

    <script>
        $('#nav-sup-mobile').on('show.bs.collapse', function () {
            if ($('#section-login').is(":visible"))
                $('#section-login').collapse('hide');
        })
        $('#section-login').on('show.bs.collapse', function () {
            if ($('#nav-sup-mobile').is(":visible"))
                $('#nav-sup-mobile').collapse('hide');
        })
    </script>
</div>