@extends('master') @section('content')
<div class="main">
    <div class="clear"></div>
    <div class="row" style="/*padding:15px;*/">
    @if(count($errors)>0)
    <div class="alert alert-danger">
        @foreach($errors->all() as $err) {{$err}}<br/> @endforeach
    </div>
    @endif @if(Session::has('ruttien'))
    <div class="alert alert-{{Session::get('flag')}}">
        {{Session::get('ruttien')}}
    </div>
    @endif
        <div class="col-md-3 col-sm-4 sidebar" style="/*padding-left:0px*/">
            <div class="panel tu-van-tieu-dung">
                <div class="panel-heading" style="font-weight:bold;">
                    Bảng điều khiển </div>
                <div class="list-group">
                    <a class="list-group-item  " href="{{route('member')}}">
                        <i class="fa fa-angle-double-right">&nbsp;&nbsp;</i>Thông tin tài khoản </a>
                    <a class="list-group-item  " href="{{route('reset')}}">
                        <i class="fa fa-angle-double-right">&nbsp;&nbsp;</i>Chỉnh sửa thông tin </a>
                    <a class="list-group-item  " href="{{route('giaodich')}}">
                        <i class="fa fa-angle-double-right">&nbsp;&nbsp;</i>Nạp tiền </a>
                    <a class="list-group-item active " href="{{route('ruttien')}}">
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
                <h1>Rút tiền</h1>

                <div class="tabs-container">
                    <div class="tab-content">
                    <form id="frm-withdraw-make" action="{{route('ruttien')}}" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}" />
                            <div class="form-row">
                                <label class="form-label" for="param_amount">Số tiền muốn rút (K):
                                    <span class="req">*</span>
                                </label>
                                <div class="form-item">
                                    <span class="one">
                                        <input name="money" type="text" class="form-control" required>
                                    </span>
                                    <div class="clear"></div>
                                    <div name="amount_error" class="error"></div>
                                    <div name="amount_autocheck" class="autocheck"></div>
                                    <div class="clear"></div>

                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="form-row">
                                <label class="form-label" for="name">Ngân hàng:
                                    <span class="req">*</span>
                                </label>
                                <div class="form-item">
                                    <span class="one">
                                        <select name="bank" _autocheck="true" class="t-input form-control">
                                            @foreach($nganhang as $bank)
                                            <option value="{{$bank->id}}">{{$bank->name}}</option>
                                            @endforeach
                                        </select>
                                    </span>
                                    <div name="bank_autocheck" class="autocheck"></div>
                                    <div class="clear"></div>
                                    <div name="bank_error" class="error"></div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="form-row">
                                <label class="form-label" for="name">Số tài khoản:
                                    <span class="req">*</span>
                                </label>
                                <div class="form-item">
                                    <span class="one">
                                        <input name="stk" id="bank_numbers" _autocheck="true" type="text" onkeyup="numberonly(this)"
                                            value="" class="t-input tipN form-control" title="" required>
                                    </span>
                                    <div name="bank_numbers_autocheck" class="autocheck"></div>
                                    <div class="clear"></div>
                                    <div name="bank_numbers_error" class="error"></div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="form-row">
                                <label class="form-label" for="name">Chủ tài khoản:
                                    <span class="req">*</span>
                                </label>
                                <div class="form-item">
                                    <span class="one">
                                        <input name="account" id="bank_account" value="" _autocheck="true" type="text" class="t-input form-control" required>
                                    </span>
                                    <div name="bank_account_autocheck" class="autocheck"></div>
                                    <div class="clear"></div>
                                    <div name="bank_account_error" class="error"></div>
                                    <span id="bank_account_update_load" style="display: none;">
                                        <div id="loader"></div>
                                    </span>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="clear"></div>
                            <div class="form-row">
                                <label class="form-label">Nhập mã:
                                    <span class="req">*</span>
                                </label>
                                <div class="form-item">
                                    <span class="one">
                                        <input autocomplete="off" name="code" id="security_code" placeholder="5 số cuối điện thoại của bạn"
                                            _autocheck="true" type="text" value="" class="t-input tipN form-control" title="Nhập 5 số cuối điện thoại" required>
                                    </span>
                                    <div name="code" class="autocheck"></div>
                                    <div class="clear"></div>
                                    <div name="security_code_error" class="error"></div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="clear"></div>
                            <div class="form-row mt5">
                                <label class="form-label">&nbsp;</label>
                                <div class="form-item">
                                    <input type="submit" value="Rút tiền" class=" lode-button btn-submit-cus">
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="clear"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>
@endsection