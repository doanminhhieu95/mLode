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
                    <a class="list-group-item  " href="{{route('lichsugiaodich')}}">
                        <i class="fa fa-angle-double-right">&nbsp;&nbsp;</i>Lịch sử giao dịch </a>
                    <a class="list-group-item active " href="{{route('lichsudanhde')}}">
                        <i class="fa fa-angle-double-right">&nbsp;&nbsp;</i>Lịch sử đánh </a>
                </div>
            </div>
        </div>
        <div class="col-md-9 col-sm-8 main-right" style="padding-left:12px !important">
            <div class="lich-su-danh gd">
                <h2>Lịch sử đánh đề</h2>
                <div class="bcontent" id="ls-danh-loto">
                    <table id="tblshower_playhistory">
                        <tbody id="table_playhistory">
                            <tr>
                                <td>Ngày tạo</td>
                                <td>Ngày đánh</td>
                                <td>Đài</td>
                                <td>Loại đề</td>
                                <td>Số</td>
                                <td>Tiền 1 con</td>
                                <td>Tổng tiền</td>
                                <td>Trúng</td>
                                <td>Kết quả</td>
                                <td>Ghi chú</td>
                            </tr>
                            @foreach($danhde as $dd) @if($dd->jackpot != -1)
                            <tr>
                                <td>{{$dd->created_at}}</td>
                                <td>{{$dd->ngaydanh}}</td>
                                <td>{{$dd->city->name}}</td>
                                <td>{{$dd->kieuchoi->name}}</td>
                                <td>{{$dd->number}}</td>
                                <td>{{$dd->money}}</td>
                                <td>{{$dd->kieuchoi->money*$dd->money}}</td>
                                <td>{{$dd->jackpot}}</td>
                                <td>{{$dd->money*$dd->jackpot*$dd->kieuchoi->giaithuong}}</td>
                                <td>Ghi chú</td>
                            </tr>
                            @else
                            <tr>
                                <td>{{$dd->created_at}}</td>
                                <td>{{$dd->ngaydanh}}</td>
                                <td>{{$dd->city->name}}</td>
                                <td>{{$dd->kieuchoi->name}}</td>
                                <td>{{$dd->number}}</td>
                                <td>{{$dd->money}}</td>
                                <td>{{$dd->kieuchoi->money*$dd->money}}</td>
                                <td>Đang cập nhật</td>
                                <td>Đang cập nhật</td>
                                <td>Ghi chú</td>
                            </tr>
                            @endif @endforeach
                        </tbody>
                    </table>
                    <div class="row">
                        {{$danhde->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>

@endsection