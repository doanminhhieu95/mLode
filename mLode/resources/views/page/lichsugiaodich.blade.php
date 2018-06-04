@extends('master') @section('content')
<div class="main">
    <div class="clear"></div>
    <div class="row" style="/*padding:15px;*/">
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
                    <a class="list-group-item  " href="{{route('ruttien')}}">
                        <i class="fa fa-angle-double-right">&nbsp;&nbsp;</i>Rút tiền </a>
                    <a class="list-group-item active " href="{{route('lichsugiaodich')}}">
                        <i class="fa fa-angle-double-right">&nbsp;&nbsp;</i>Lịch sử giao dịch </a>
                    <a class="list-group-item  " href="{{route('lichsudanhde')}}">
                        <i class="fa fa-angle-double-right">&nbsp;&nbsp;</i>Lịch sử đánh </a>
                </div>
            </div>
        </div>
        <div class="col-md-9 col-sm-8 main-right" style="padding-left:12px !important">
            <div class="lich-su-danh gd">

                <h2>Lịch sử giao dịch</h2>
                <div class="bcontent" id="ls-danh-tran">
                    <table id="tblshower_transaction">
                        <tbody id="table_cashhistory">
                            <tr>
                                <td>Ngày tạo</td>
                                <td>Ngày GD</td>
                                <td>Tiền GD</td>
                                <td>Tiền sau GD</td>
                                <td>Trạng thái</td>
                            </tr>
                            @foreach($giaodich as $gd)
                            <tr>
                                <td>{{$gd->created_at}}</td>
                                @if($gd->ngayGD=="")
                                <td>Đang cập nhật</td>
                                @else
                                <td>{{$gd->ngayGD}}</td>
                                @endif
                                <td>{{$gd->moneyGD}}</td>
                                @if($gd->ngayGD=="")
                                <td>Đang cập nhật</td>
                                @else
                                <td>{{$gd->tiensauGD}}</td>
                                @endif
                                <td>{{$gd->trangthai}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="row">
                        {{$giaodich->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>

@endsection