<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| */

// Route::get('/TrangChu', function (){
//      return view('TrangChu');
//  });
Route::get('/TrangChu','ControllerQLKS@index');//cai nay sao? no in ra luôn trang chủ mất luôn cái html

// Route::get('db/abc', function()
// {
//     $data = DB::table('loaiphong')->select(['MoTa'])->where('MaLoai',1)->get();
//     echo $data;
// });
Route::get('/test','ControllerQLKS@tindex');//post r cai link la /test sao ben kia tindex quen 
Route::post('test','ControllerQLKS@click');// chu click tro trang dung k? um` day ha thu 
Route::post('/TrangChu','ControllerQLKS@gui');//dung k ta, thay cai nay sai sai xem thu

Route::get('/PhongDaDat','ControllerQLKS@phongdadat')->name('phongdadat');

Route::get('/DatPhong','ControllerQLKS@datphong');
Route::post('/DatPhong','ControllerQLKS@getid')->name('getid');
Route::post('/get-val','ControllerQLKS@getval')->name('getval');
Route::get('/DangNhapADMin','ControllerQLKS@dangnhapadmin')->name('dangnhap');
Route::get('/QuanLy','ControllerQLKS@quanly')->name('quanly');
Route::post('/DangNhapADMin','ControllerQLKS@ktid')->name('ktid');
Route::post('/QuanLy','ControllerQLKS@idkh')->name('idkh');
/* Quản Lí ID khách hàng */
Route::group(['prefix'=>'Admin'],function(){
    Route::get('indexQLKH','ControllerAdmin@qltk')->name('khachhang');//index ID KH
    Route::get('indexQLP','ControllerAdmin@qlp')->name('phong');//index Phòng
    Route::group(['prefix'=>'QLKH'],function(){
        
});
});



//Route::post('/DangNhapADMin','ControllerQLKS@ktid')->name('ktid');

