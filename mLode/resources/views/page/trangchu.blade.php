@extends('master') @section('content')
<div class="all-icon-service">
    <ul class="clearfix">
        <li>
            <a href="{{route('mienbac')}}">
                <img src="mLode/public/mobile/site/layout/images/MB.png" alt="">
                <p>
                    Miền Bắc
                </p>
            </a>
        </li>
        <li>
            <a href="{{route('mientrung')}}">
                <img src="mLode/public/mobile/site/layout/images/MT.png" alt="">
                <p>
                    Miền Trung
                </p>
            </a>
        </li>
        <li>
            <a href="{{route('miennam')}}">
                <img src="mLode/public/mobile/site/layout/images/MN.png" alt="">
                <p>
                    Miền Nam
                </p>
            </a>
        </li>
    </ul>
</div>
<div class="main">
    <?php 
    $date = date("d-m-Y");
    $now = date("H:i:s");
    $plus = 1;
    $date = date("d-m-Y",strtotime("$date -$plus day"));
    ?>
    <script type="text/javascript">
        (function ($) {
            $(document).ready(function () {
                var main = $('#resultlottery');
                var url = main.attr('action');

                //load dai
                $(".ngaydo").datetimepicker({
                    scrollMonth: false,
                    scrollInput: false,
                    format: 'd-m-Y',
                    timepicker: false,
                    changeYear: true,
                    changeMonth: true,
                    yearStart: '2013',
                    yearEnd: '2018',
                    maxDate: new Date(),
                    onSelectDate: function (dp, $input) {
                        load_city();
                    }
                });

                function load_city() {
                    var date = main.find('input#date').val();
                    jQuery(this).nstUI({
                        method: "loadAjax",
                        loadAjax: {
                            url: '/home/load_city.html',
                            data: {
                                'date': date
                            },
                            field: {
                                load: 'divkqxs_load',
                                show: ''
                            },
                            event_complete: function (data, setting) {
                                $('#load_city').html(data);
                                load_resultlottery();
                            }
                        }
                    });
                }


                //load ket qua
                jQuery(document.body).on('change', '#resultlottery select#daido', function () {
                    load_resultlottery();
                    return false;
                });
                //load ket qua
                jQuery(document.body).on('click', '#resultlottery input.btn-signin1', function () {
                    load_resultlottery();
                    return false;
                });

                function load_resultlottery() {
                    var daido = main.find('select#daido').val();
                    var date = main.find('input#date').val();
                    var number = main.find('input#number').val();
                    jQuery(this).nstUI({
                        method: "loadAjax",
                        loadAjax: {
                            url: url,
                            data: {
                                'city': daido,
                                'date': date,
                                'number': number
                            },
                            field: {
                                load: 'divkqxs_load',
                                show: ''
                            },
                            event_complete: function (data, setting) {
                                $('#divkqxs').html(data);
                            }
                        }
                    });
                }


            });
        })(jQuery);
    </script>
    <div class="fl box-number">
        <div class="box-number-content">
            <div class="select-number">
                <div class="fl">
                    <form id="resultlottery" method="POST" action="/home/get_resultlottery.html">
                        <div class="chon">
                            <input id="number" style="width: 75px;" type="text" name="so" class="form-control" placeholder="Nhập số" />
                            <input type="text" readonly="readonly" style="width: 63px;" name="so" id="date" value="{{$date}}" class="form-control ngaydo"
                                placeholder="Chọn ngày" />
                            <div id="load_city" style="float:left; width:150px;">
                                <select id="daido" name="city" class="form-control txt-red" placeholder="Chọn đài">
                                </select>
                            </div>
                            <input id="xem" type="submit" style="width: 55px;" value="XEM" class="btn btn-default btn-check btn-signin1" />
                        </div>
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>

            <div style="position:relative;">
                <div id="divkqxs" class="box-ketqua">
                    <style>
                        b.hight-light {
                            background-color: #ff0;
                        }
                    </style>
                    <div class="bang-ketqua" id="ketqua">
                    </div>
                </div>
                <div id="divkqxs_load" class="form_load"></div>
            </div>
        </div>
    </div>
    <div class="fl box-chat">
        <div class="box-chat-title"></div>
        <div id="chat_logined" class="box-chat-content">
            <div id="cboxdiv" style="position: relative; margin: 0 auto; width: 286px; font-size: 0; line-height: 0;">
                <div style="position: relative; height:327px; overflow: auto; overflow-y: auto; -webkit-overflow-scrolling: touch; border:#EDDEDB 1px solid;">
                    <iframe src="https://www4.cbox.ws/box/?boxid=4255997&boxtag=5wepjf&sec=main" marginheight="0" marginwidth="0" frameborder="0"
                        width="100%" height="100%" scrolling="auto" allowtransparency="yes" name="cboxmain4-4255997" id="cboxmain4-4255997"></iframe>
                </div>
                <div style="position: relative; height: 106px; overflow: hidden; border:#EDDEDB 1px solid; border-top: 0px;">
                    <iframe src="https://www4.cbox.ws/box/?boxid=4255997&boxtag=5wepjf&sec=form" marginheight="0" marginwidth="0" frameborder="0"
                        width="100%" height="100%" scrolling="no" allowtransparency="yes" name="cboxform4-4255997" id="cboxform4-4255997"></iframe>
                </div>
            </div>
        </div>
        <div id="chat_login" style="display:block;" class="box-chat-content-2">
            <span>Hãy đăng nhập để chat</span>
        </div>

    </div>
    <div class="clearfix"></div>

    <div class="all-icon-service">
        <ul class="clearfix">
            <li>
                <a href="{{route('hdnaptien')}}">
                    <img src="mLode/public/mobile/site/layout/images/icon_naptien.png" alt="">
                    <p>Cách nạp tiền</p>
                </a>
            </li>
            <li>
                <a href="{{route('hdruttien')}}">
                    <img src="mLode/public/mobile/site/layout/images/icon_ruttien.png" alt="">
                    <p>
                        Cách rút tiền
                    </p>
                </a>
            </li>
            <li>
                <a href="{{route('trogiup')}}">
                    <img src="mLode/public/mobile/site/layout/images/icon_moigioi.png" alt="">
                    <p>
                        Trợ giúp
                    </p>
                </a>
            </li>
        </ul>
    </div>
    <div class="banner">
        <ul class="banner-slider">
            <li>
                <img src="mLode/public/mobile/site/layout/images/1.png" />
            </li>
            <li>
                <img src="mLode/public/mobile/site/layout/images/2.png" />
            </li>
            <li>
                <img src="mLode/public/mobile/site/layout/images/3.png" />
            </li>
            <li>
                <img src="mLode/public/mobile/site/layout/images/4.png" />
            </li>
            <li>
                <img src="mLode/public/mobile/site/layout/images/5.png" />
            </li>
            <li>
                <img src="mLode/public/mobile/site/layout/images/6.png" />
            </li>
        </ul>
        <div class="slider-controls">
            <span id="slider-next" class="slider-btn "></span>
            <span id="slider-prev" class="slider-btn "></span>
        </div>
    </div>
</div>
@endsection @section('script')
<script>
    $(document).ready(function () {
        var iddate = $('#date').val();
        var day = iddate.substr(0, 2);
        var month = iddate.substr(3, 2);
        var year = iddate.substr(6, 4);
        var date = year + "-" + month + "-" + day;
        var d = new Date(date);
        var dd = String(d);
        var ddd = dd.slice(0, 3);
        if (ddd == "Sun") var thu = 1;
        if (ddd == "Mon") var thu = 2;
        if (ddd == "Tue") var thu = 3;
        if (ddd == "Wed") var thu = 4;
        if (ddd == "Thu") var thu = 5;
        if (ddd == "Fri") var thu = 6;
        if (ddd == "Sat") var thu = 7;
        $.get("ajax/city/" + thu, function (data) {
            $("#daido").html(data);
            var idcity = $('#daido').val();
            var day = $('#date').val();
            $.get("ajax/ketqua/" + idcity + "/" + day, function (data) {
                $("#ketqua").html(data);
            });
        });
        $("#date").change(function () {
            var iddate = $(this).val();
            var day = iddate.substr(0, 2);
            var month = iddate.substr(3, 2);
            var year = iddate.substr(6, 4);
            var date = year + "-" + month + "-" + day;
            var d = new Date(date);
            var dd = String(d);
            var ddd = dd.slice(0, 3);
            if (ddd == "Sun") var thu = 1;
            if (ddd == "Mon") var thu = 2;
            if (ddd == "Tue") var thu = 3;
            if (ddd == "Wed") var thu = 4;
            if (ddd == "Thu") var thu = 5;
            if (ddd == "Fri") var thu = 6;
            if (ddd == "Sat") var thu = 7;
            $.get("ajax/city/" + thu, function (data) {
                $("#daido").html(data);
                var idcity = $('#daido').val();
                var day = $('#date').val();
                $.get("ajax/ketqua/" + idcity + "/" + day, function (data) {
                    $("#ketqua").html(data);
                });
            });
        });

        $("#daido").change(function () {
            var idcity = $('#daido').val();
            var day = $('#date').val();
            $.get("ajax/ketqua/" + idcity + "/" + day, function (data) {
                $("#ketqua").html(data);
            });
        });
        $("#xem").click(function () {
            var number = $('#number').val();
            var regex = new RegExp(number, "g");
            var tr = $("div.box-number tr");
            var kq = new Array();
            for(var i=0; i<tr.length;i++){
                kq.push($("div.box-number tr:eq("+i+") td:odd").text());
            }
            for(var i=0; i<tr.length;i++){
                var a = $("div.box-number tr:eq("+i+") td:odd");
                if(i==0){
                    a.html('<b id="db" style="color:red">'+a.text().replace(number, '<b class="">'+number+'</b>'));
                }
                else{
                    a.html(a.text());
                }
                if(kq[i].indexOf(number)!=-1){
                    if(i==0){
                        a.html('<b id="db" style="color:red">'+a.text().replace(number, '<b class="hight-light">'+number+'</b>')+'</b>');
                    }
                    else
                    a.html(a.text().replace(regex, '<b class="hight-light">'+number+'</b>'));
                }
            }
            // var a = $("div.box-number tr:eq(2) td:odd");
            // a.text("a");
            // alert(a.text());
            // for(var i=0; i<a.lenth;i++){
            //     alert(a[i].text());
            // }
            // a.append('<b class="hight-light">'+a.text()+'</b>');
            // var b = $("tbody").find("tr:eq(1) td:eq(1)").text();
            // 
        });
    });
</script>
@endsection