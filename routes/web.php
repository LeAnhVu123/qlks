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
    Route::get('QLKH','ControllerAdmin@qlkh')->name('khachhang');//index ID KH
    Route::get('QLP','ControllerAdmin@qlp')->name('phong');//index Phòng
    Route::get('QLLP','ControllerAdmin@qllp')->name('loaiphong');//index Phòng
    Route::group(['prefix'=>'QLKH'],function(){
		Route::get('insert','ControllerAdmin@insertqlkh')->name('insert-qlkh');
		Route::post('insert','ControllerAdmin@postinsertqlkh')->name('post.insert-qlkh');
		Route::get('edit/{makh}','ControllerAdmin@editqlkh')->name('edit.qlkh');
		Route::PATCH('edit/{makh}','ControllerAdmin@posteditqlkh')->name('update.qlkh');
		Route::Delete('delete/{makh}','ControllerAdmin@deleteqlkh')->name('delete.qlkh');
	});
	Route::group(['prefix'=>'QLLP'],function(){
		Route::get('insert','ControllerAdmin@insertqllp')->name('insert-qllp');
		Route::post('insert','ControllerAdmin@postinsertqllp')->name('post.insert-qllp');
		Route::get('edit/{malp}','ControllerAdmin@editqllp')->name('edit.qllp');
		Route::PATCH('edit/{malp}','ControllerAdmin@updateqllp')->name('update.qllp');
		Route::Delete('delete/{malp}','ControllerAdmin@deleteqllp')->name('delete.qllp');
	});
	Route::group(['prefix'=>'QLP'],function(){
		Route::get('insert','ControllerAdmin@insertqlp')->name('insert-qlp');
		Route::post('insert','ControllerAdmin@postinsertqlp')->name('post.insert-qlp');
		Route::get('edit/{map}','ControllerAdmin@editqlp')->name('edit.qlp');
		Route::PATCH('edit/{map}','ControllerAdmin@updateqlp')->name('update.qlp');
		Route::Delete('delete/{map}','ControllerAdmin@deleteqlp')->name('delete.qlp');
	});
});

//Route::post('/DangNhapADMin','ControllerQLKS@ktid')->name('ktid');

