@extends('master') @section('content')
<div class="main">
    @if(Session::has('dangky'))
    <div class="alert alert-success">
        {{Session::get('dangky')}}
    </div>
    @endif @if(count($errors)>0)
    <div class="alert alert-danger">
        @foreach($errors->all() as $err) {{$err}}
        <br/> @endforeach
    </div>
    @endif
    <div class="tagline m0 user_form_action">
        <form action="{{route('dangky')}}" method="post">
            {{csrf_field()}}
            <div class="form-row">
                <label class="form-label" for="param_email">Tên:
                    <span class="req">*</span>
                </label>
                <div class="form-item">
                    <span class="one">
                        <input name="name" id="param_name" _autocheck="true" type="text" class="t-input form-control" required>
                    </span>
                    <span name="name_autocheck" class="autocheck"></span>
                    <div class="clear"></div>
                    <div name="email_error" class="error"></div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="form-row">
                <label class="form-label" for="param_email">Email:
                    <span class="req">*</span>
                </label>
                <div class="form-item">
                    <span class="one">
                        <input name="emaildk" id="param_email" _autocheck="true" type="text" class="t-input form-control" required>
                    </span>
                    <span name="email_autocheck" class="autocheck"></span>
                    <div class="clear"></div>
                    <div name="email_error" class="error"></div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="form-row">
                <label class="form-label" for="param_password">Mật khẩu:
                    <span class="req">*</span>
                </label>
                <div class="form-item">
                    <span class="one">
                        <input name="passworddk" id="param_password" _autocheck="true" type="password" class="t-input tipN form-control" title="Mật khẩu phải có ít nhất 6 kí tự"
                            required>
                    </span>
                    <div name="password_autocheck" class="autocheck"></div>
                    <div class="clear"></div>
                    <div name="password_error" class="error"></div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="form-row">
                <label class="form-label" for="param_password_repeat">Nhập lại mật khẩu:
                    <span class="req">*</span>
                </label>
                <div class="form-item">
                    <span class="one">
                        <input name="repassword" id="param_password_repeat" type="password" class="t-input form-control" required>
                    </span>
                    <div name="password_repeat_autocheck" class="autocheck"></div>
                    <div class="clear"></div>
                    <div name="password_repeat_error" class="error"></div>
                </div>
                <div class="clear"></div>
            </div>

            <div class="form-row">
                <label class="form-label" for="param_phone">Điện thoại:
                    <span class="req">*</span>
                </label>
                <div class="form-item">
                    <span class="one">
                        <input name="phone" id="param_phone" _autocheck="true" type="text" class="t-input form-control" required>
                    </span>
                    <span name="phone_autocheck" class="autocheck"></span>
                    <div class="clear"></div>
                    <p>
                        <b style="color:red">Chú ý:</b> Điền đúng số điện thoại để có thể rút tiền.</p>
                    <div name="phone_error" class="error"></div>
                </div>
                <div class="clear"></div>
            </div>


            <div class="form-row">
                <label class="form-label">&nbsp;</label>
                <div class="form-item">
                    <input type="submit" value="Đăng ký" class="button button-border medium f lode-button" style="">
                </div>
            </div>
            <div class="clear"></div>
        </form>
    </div>
</div>
@endsection