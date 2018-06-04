@extends('master') @section('content')
<div class="main">
    <div class="clear"></div>
    <div class="row" style="/*padding:15px;*/">
    @if(Session::has('reset'))
    <div class="alert alert-{{Session::get('flag')}}">
        {{Session::get('reset')}}
    </div>
    @endif
    @if(count($errors)>0)
    <div class="alert alert-danger">
        @foreach($errors->all() as $err)
            {{$err}}<br/>
        @endforeach
    </div>
    @endif
        <div class="col-md-3 col-sm-4 sidebar" style="/*padding-left:0px*/">
            <div class="panel tu-van-tieu-dung">
                <div class="panel-heading" style="font-weight:bold;">
                    Bảng điều khiển </div>
                <div class="list-group">
                    <a class="list-group-item  " href="{{route('member')}}">
                        <i class="fa fa-angle-double-right">&nbsp;&nbsp;</i>Thông tin tài khoản </a>
                    <a class="list-group-item active " href="{{route('reset')}}">
                        <i class="fa fa-angle-double-right">&nbsp;&nbsp;</i>Chỉnh sửa thông tin </a>
                    <a class="list-group-item  " href="{{route('giaodich')}}">
                        <i class="fa fa-angle-double-right">&nbsp;&nbsp;</i>Nạp tiền </a>
                    <a class="list-group-item  " href="{{route('ruttien')}}">
                        <i class="fa fa-angle-double-right">&nbsp;&nbsp;</i>Rút tiền </a>
                    <a class="list-group-item  " href="{{route('lichsugiaodich')}}">
                        <i class="fa fa-angle-double-right">&nbsp;&nbsp;</i>Lịch sử giao dịch </a>
                    <a class="list-group-item  " href="{{route('lichsudanhde')}}">
                        <i class="fa fa-angle-double-right">&nbsp;&nbsp;</i>Lịch sử đánh </a>
                </div>
            </div>
        </div>
        <div class="col-md-9 col-sm-8 main-right" style="padding-left:12px !important">
            <div class="tagline m0 user_form_action">
                <h1>Thay đổi mật khẩu</h1>
                <form action="{{route('reset')}}" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}" />
                    <div class="row">
                        <label class="col-xs-12 form-label" for="param_password_old">Mật khẩu hiện tại:
                            <span class="req">*</span>
                        </label>
                        <div class="col-xs-12 form-item">
                            <span class="one">
                                <input name="password_old" id="param_password_old" _autocheck="true" type="password" class="form-control t-input" required>
                            </span>
                            <div name="password_old_autocheck" class="autocheck"></div>
                            <div class="clear"></div>
                            <div name="password_old_error" class="error"></div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="row">
                        <label class="col-xs-12 form-label" for="param_password">Mật khẩu mới:
                            <span class="req">*</span>
                        </label>
                        <div class="col-xs-12 form-item">
                            <span class="one">
                                <input name="password" id="param_password" _autocheck="true" type="password" class="form-control t-input tipN"
                                    title="Mật khẩu phải có ít nhất 6 kí tự" required>
                            </span>
                            <div name="password_autocheck" class="autocheck"></div>
                            <div class="clear"></div>
                            <div name="password_error" class="error"></div>
                            <div class="clear"></div>
                            <div class="note">Khi muốn thay đổi mật khẩu thì mới nhập giá trị</div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="row">
                        <label class="col-xs-12 form-label" for="param_password_repeat">Nhập lại mật khẩu:
                            <span class="req">*</span>
                        </label>
                        <div class="col-xs-12 form-item">
                            <span class="one">
                                <input name="password_repeat" id="param_password_repeat" type="password" class="t-input form-control" required>
                            </span>
                            <div name="password_repeat_autocheck" class="autocheck"></div>
                            <div class="clear"></div>
                            <div name="password_repeat_error" class="error"></div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>

                    <div class="clear" style="height:10px;"></div>
                    <div class="form-row">

                        <div class="form-item">
                            <input type="submit" value="Cập nhật" class=" lode-button btn-submit-cus">
                        </div>
                    </div>
                </form>
                <div class="clear" style="height:10px;"></div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>
@endsection