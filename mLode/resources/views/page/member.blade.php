@extends('master') @section('content')
<div class="main">
    <div class="clear"></div>
    <div class="row" style="/*padding:15px;*/">

        <div class="col-md-3 col-sm-4 sidebar" style="/*padding-left:0px*/">
            <div class="panel tu-van-tieu-dung">
                <div class="panel-heading" style="font-weight:bold;">
                    Bảng điều khiển </div>
                <div class="list-group">
                    <a class="list-group-item active " href="{{route('member')}}">
                        <i class="fa fa-angle-double-right">&nbsp;&nbsp;</i>Thông tin tài khoản </a>
                    <a class="list-group-item  " href="{{route('reset')}}">
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
        <div class="col-md-9 col-sm-8 main-right" >
            <style>
                ul.list2 li span {
                    width: 150px;
                }
            </style>
            <div class="tagline m0 user_form_action">
                <h1>Thông tin cá nhân</h1>

                <div class="left dInline mr20" style="width:305px">
                    <div class="f16 fontB blue">
                        {{$user->email}}
                    </div>
                    <div class="clear"></div>
                    <ul class=" list2 valueB dInline arrowT">
                        <li>
                            <span>Họ tên:</span>
                            {{$user->name}} </li>
                        <li>
                            <span>số dư:</span>
                            <strong class="f15 fontB red">{{$user->money}}K</strong>
                        </li>
                        <li>
                            <span>Điện thoại:</span>
                            {{substr($user->phone,0,strlen($user->phone)-5)}}***** </li>
                        <li>
                            <span>Thành viên từ:</span>
                            {{$user->created_at}} </li>
                    </ul>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>
@endsection