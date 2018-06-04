<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('page.trangchu');
// });
Route::get('/',[
    'as'=>'trangchu',
    'uses'=>'PageController@getIndex'
]);

Route::get('lo-de-mien-bac',[
    'as'=>'mienbac',
    'uses'=>'PageController@getmienbac'
]);

Route::get('lo-de-mien-nam',[
    'as'=>'miennam',
    'uses'=>'PageController@getmiennam'
]);

Route::get('lo-de-mien-trung',[
    'as'=>'mientrung',
    'uses'=>'PageController@getmientrung'
]);

Route::get('member',[
    'as'=>'member',
    'uses'=>'PageController@getmember'
]);
// Route::get('giao-dich',function (){
//     return redirect()->route('member');
// });


Route::get('admin',[
    'as'=>'admin',
    'uses'=>'PageController@getadmin'
]);

// Route::resource('user','UserController');
// Route::resource('giaodich','giaodichController');
// Route::resource('nganhang','nganhangController');
// Route::resource('danhde','danhdeController');
// Route::resource('kieuchoi','kieuchoiController');
// Route::resource('kqxs','kqxsController');

// Route::post('dangnhap',[
//     'as'=>'dangnhap',
//     'uses'=>'PageController@postDangNhap'
// ]);
Route::get('dangky',[
    'as'=>'dangky',
    'uses'=>'PageController@getDangKy'
]);
Route::post('dangky',[
    'as'=>'dangky',
    'uses'=>'PageController@postDangKy'
]);
Route::get('dangxuat',[
    'as'=>'dangxuat',
    'uses'=>'PageController@getDangXuat'
]);

Route::get('lo-de-mien-bac/ajax/kieuchoi/{idloaide}','AjaxController@getkieuchoi');
Route::get('lo-de-mien-trung/ajax/kieuchoi/{idloaide}','AjaxController@getkieuchoi');
Route::get('lo-de-mien-nam/ajax/kieuchoi/{idloaide}','AjaxController@getkieuchoi');

Route::get('lo-de-mien-bac/ajax/city/{thu}','AjaxController@getcitybac');
Route::get('lo-de-mien-trung/ajax/city/{thu}','AjaxController@getcitytrung');
Route::get('lo-de-mien-nam/ajax/city/{thu}','AjaxController@getcitynam');

Route::get('lo-de-mien-bac/ajax/luatchoi/{idkieuchoi}','AjaxController@getluatchoi');
Route::get('lo-de-mien-trung/ajax/luatchoi/{idkieuchoi}','AjaxController@getluatchoi');
Route::get('lo-de-mien-nam/ajax/luatchoi/{idkieuchoi}','AjaxController@getluatchoi');

Route::get('lo-de-mien-bac/ajax/chonso/{idkieuchoi}','AjaxController@getchonso');
Route::get('lo-de-mien-trung/ajax/chonso/{idkieuchoi}','AjaxController@getchonso');
Route::get('lo-de-mien-nam/ajax/chonso/{idkieuchoi}','AjaxController@getchonso');

Route::get('lo-de-mien-bac/ajax/max/{idkieuchoi}','AjaxController@getmax');
Route::get('lo-de-mien-trung/ajax/max/{idkieuchoi}','AjaxController@getmax');
Route::get('lo-de-mien-nam/ajax/max/{idkieuchoi}','AjaxController@getmax');

Route::get('lo-de-mien-nam/ajax/money/{idkieuchoi}','AjaxController@getmoney');
Route::get('lo-de-mien-trung/ajax/money/{idkieuchoi}','AjaxController@getmoney');
Route::get('lo-de-mien-bac/ajax/money/{idkieuchoi}','AjaxController@getmoney');

Route::get('ajax/city/{thu}','AjaxController@getcity');

Route::get('ajax/title/{idcity}/{day}','AjaxController@gettitle');

Route::post('lo-de-mien-nam',[
    'as'=>'miennam',
    'uses'=>'PageController@postmiennam'
]);
Route::post('lo-de-mien-trung',[
    'as'=>'mientrung',
    'uses'=>'PageController@postmientrung'
]);
Route::post('lo-de-mien-bac',[
    'as'=>'mienbac',
    'uses'=>'PageController@postmienbac'
]);
// Route::post('capnhat',[
//     'as'=>'capnhat',
//     'uses'=>'UpdateController@postcapnhat'
// ]);

// Route::get('deleteUser','UserController@deleteItem');
// Route::get('deletenganhang','nganhangController@deleteItem');

Route::get('ajax/loaide/{idkhuvuc}','AjaxController@getloaide');
Route::get('ajax/loaide/{idkhuvuc}/{idloaide}','AjaxController@getloaideselected');

Route::get('reset',[
    'as'=>'reset',
    'uses'=>'PageController@getresetpassword'
]);
Route::post('reset',[
    'as'=>'reset',
    'uses'=>'PageController@postresetpassword'
]);

Route::get('ajax/ketqua/{idcity}/{day}','AjaxController@getketqua');

// Route::get('ketqua',[
//     'as'=>'ketqua',
//     'uses'=>'ketquaController@getketqua'
// ]);
// Route::post('ketqua',[
//     'as'=>'ketqua',
//     'uses'=>'ketquaController@postketqua'
// ]);

Route::get('ketqua/ajax/dai/{thu}/{ngay}','AjaxController@getdai');
Route::get('ajax/dangnhap/{email}/{password}',[
    'as'=>'dangnhap',
    'uses'=>'AjaxController@getdangnhap'
]);

Route::get('danhde/ajax/kieuxem/{kieuxem}','AjaxController@getkieuxem');
Route::get('danhde/ajax/ngay/{kieuxemdate}','AjaxController@getkieuxemdate');

Route::get('gioi-thieu',[
    'as'=>'gioithieu',
    'uses'=>'PageController@getgioithieu'
]);
Route::get('trach-nhiem',[
    'as'=>'trachnhiem',
    'uses'=>'PageController@gettrachnhiem'
]);
Route::get('huong-dan-danh-de',[
    'as'=>'hddanhde',
    'uses'=>'PageController@gethddanhde'
]);
Route::get('nap-tien-thu-cong',[
    'as'=>'naptienthucong',
    'uses'=>'PageController@getnaptienthucong'
]);
Route::get('cach-rut-tien',[
    'as'=>'cachruttien',
    'uses'=>'PageController@getcachruttien'
]);

Route::get('nap-tien',[
    'as'=>'giaodich',
    'uses'=>'PageController@getgiaodich'
]);
Route::post('nap-tien',[
    'as'=>'giaodich',
    'uses'=>'PageController@postgiaodich'
]);
Route::get('rut-tien',[
    'as'=>'ruttien',
    'uses'=>'PageController@getruttien'
]);
Route::post('rut-tien',[
    'as'=>'ruttien',
    'uses'=>'PageController@postruttien'
]);
Route::get('lich-su-giao-dich',[
    'as'=>'lichsugiaodich',
    'uses'=>'PageController@getlichsugiaodich'
]);
Route::get('lich-su-danh-de',[
    'as'=>'lichsudanhde',
    'uses'=>'PageController@getlichsudanhde'
]);
Route::get('ngan-hang',[
    'as'=>'bank',
    'uses'=>'PageController@getbank'
]);
Route::get('tro-giup',[
    'as'=>'trogiup',
    'uses'=>'PageController@gettrogiup'
]);
Route::get('huong-dan',[
    'as'=>'huongdan',
    'uses'=>'PageController@gethuongdan'
]);
Route::get('huong-dan-nap-tien',[
    'as'=>'hdnaptien',
    'uses'=>'PageController@gethdnaptien'
]);
Route::get('huong-dan-rut-tien',[
    'as'=>'hdruttien',
    'uses'=>'PageController@gethdruttien'
]);
Route::get('quen-mat-khau',[
    'as'=>'quenmatkhau',
    'uses'=>'PageController@getquenmatkhau'
]);
Route::get('chat-box',[
    'as'=>'chatbox',
    'uses'=>'PageController@getchatbox'
]);
