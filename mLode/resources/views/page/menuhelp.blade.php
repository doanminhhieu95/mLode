@extends('master') @section('content')
<div class="main">
    <div class="trogiup">
        <div class="">
            <div>
                <ul class="menu-help" id="ul_help">
                    <li id="gioithieu" class="">
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
        <div class="clearfix"></div>
    </div>
</div>
@endsection