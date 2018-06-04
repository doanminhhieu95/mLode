@extends('master') @section('content')
<div class="main">
    <div class="clear"></div>
    <div class="row" style="/*padding:15px;*/">
    @if(count($errors)>0)
    <div class="alert alert-danger">
        @foreach($errors->all() as $err) {{$err}} @endforeach
    </div>
    @endif @if(Session::has('giaodich'))
    <div class="alert alert-{{Session::get('flag')}}">
        {{Session::get('giaodich')}}
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
                    <a class="list-group-item active " href="{{route('giaodich')}}">
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
            <div class="m0 transaction-box">
                <div class="deposit-box">
                    <h2 class="block-title">Nạp tiền thủ công</h2>
                    <div id="content_product">
                        <div class="box-itemt">
                            <div class="tabs-container">
                                <div class="tab-content">
                                    <form action="{{route('giaodich')}}" id="frm-deposit-make" method="post">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}" />
                                        <div class="row">
                                            <label class="col-xs-12 form-label" for="param_bank">Ngân hàng:</label>
                                            <div class="col-xs-12 form-item">
                                                <div class="">
                                                    <select name="bank" id="param_bank" class="form-control t-input">
                                                        @foreach($nganhang as $bank)
                                                        <option value="{{$bank->id}}">{{$bank->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="clear"></div>
                                                <p>Bạn đã gửi tiền vào ngân hàng nào?</p>
                                                <div name="bank_error" class="error"></div>
                                                <div class="clear"></div>
                                                <div id="bank_content"></div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="row">
                                            <label class="col-xs-12 form-label" for="sender">Tên người gửi:</label>
                                            <div class="col-xs-12 form-item">
                                                <div class="one">
                                                    <input name="sender" id="sender" type="text" class="form-control t-input" required>
                                                </div>
                                                <div class="clear"></div>
                                                <div name="sender_error" class="error"></div>
                                                <div class="clear"></div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="row">
                                            <label class="col-xs-12 form-label" for="param_amount">Số tiền (K):</label>
                                            <div class="col-xs-12 form-item">
                                                <div class="one">
                                                    <input name="amount" id="param_amount" type="text" class="form-control t-input" required>
                                                    <font class="fontB"></font>
                                                </div>
                                                <div name="amount_error" class="error"></div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="row">
                                            <label class="col-xs-12 form-label" for="param_user_bank_content">Mã giao dịch:</label>
                                            <div class="col-xs-12 form-item">
                                                <input name="code" id="param_user_bank_content" type="text" class="form-control t-input" required>
                                                <div class="clear"></div>
                                                <div name="user_bank_content_error" class="error"></div>
                                                <div class="clear"></div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="row mt5">

                                            <div class="col-xs-12 form-item">
                                                <input id="btn-form-submit" type="submit" value="Nạp tiền" class=" lode-button btn-submit-cus">
                                            </div>
                                        </div>
                                    </form>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                $("#frm-smartpay-deposit-make").submit(function () {
                    var amount = parseInt($("#from_overview_smartpay_naptien_tien").val().replace(new RegExp(
                        ",", 'g'), ""));
                    if (isNaN(amount) || amount < 50000) {
                        alert("Số tiền tối thiếu 50,000VNĐ");
                        return false;
                    }
                    return true;
                });
            </script>
        </div>
    </div>
    <div class="clear"></div>
</div>
@endsection