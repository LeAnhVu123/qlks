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
Route::post('/DangNhapADMin','ControllerQLKS@ktid')->name('ktid');


/* Quản Lí ID khách hàng */

// Route::group(['prefix'=>'Admin'],function(){
//     Route::get('QLKH','ControllerAdmin@qltk')->name('khachhang');//index ID KH
//     Route::get('QLP','ControllerAdmin@qlp')->name('phong');//index Phòng
//     Route::get('QLLP','ControllerAdmin@qllp')->name('loaiphong');//index Phòng
//     Route::group(['prefix'=>'QLKH'],function(){
// 			Route::get('insert','ControllerAdmin@insertqlkh')->name('insert-qlkh');
// 			Route::post('insert','ControllerAdmin@postinsertqlkh')->name('post.insert-qlkh');
// 			Route::get('edit/{makh}','ControllerAdmin@editqlkh')->name('edit.qlkh');
// 			Route::PATCH('edit/{makh}','ControllerAdmin@posteditqlkh')->name('update.qlkh');
// 			Route::Delete('delete/{makh}','ControllerAdmin@deleteqlkh')->name('delete.qlkh');
// 	});
// 	Route::group(['prefix'=>'QLLP'],function(){
// 		Route::get('insert','ControllerAdmin@insertqllp')->name('insert-qllp');
// 		Route::post('insert','ControllerAdmin@postinsertqllp')->name('post.insert-qllp');
// 	});
// 	Route::group(['prefix'=>'QLP'],function(){
// 		Route::get('insert','ControllerAdmin@insertqlp')->name('insert-qlp');
// 		Route::post('insert','ControllerAdmin@postinsertqlp')->name('post.insert-qlp');
// 	});
// });

// Route::post('/DangNhapADMin','ControllerQLKS@ktid')->name('ktid');
// ---------------------------------

Route::get('Admin/dangnhap','LoginController@dangnhap')->name('dangnhap');
Route::post('Admin/dangnhap','LoginController@xetdangnhap')->name('xetdangnhap');// ua post get dang nhap la sao m, sao phai them thang post
Route::group(['middleware' => ['checkaccount'],'prefix'=>'Admin'],function(){
	// Dangxuat
	Route::get('dangxuat','LoginController@dangxuat')->name('dangxuat');
	
	/* View Quan Ly */
		Route::get('QuanLy','ControllerAdmin@quanly')->name('quanly');
		Route::get('QLTKKH','ControllerAdmin@getkh')->name('qltk');
		Route::get('QLP','ControllerAdmin@getp')->name('phong');
		Route::get('QLLP','ControllerAdmin@getlp')->name('lphong');
		Route::get('AllDonDat','ControllerAdmin@getalldondat')->name('alldondat');
		Route::get('Chitietdondat','ControllerAdmin@getchitietdd')->name('ctdondat');
		Route::get('QLTKNV','ControllerAdmin@getviewnv')->name('nv');
		Route::get('QLDV','DichVuController@index')->name('dichvu');
		/* Xoa */
		Route::get('Xoa/{makh}','ControllerAdmin@getxoa')->middleware('checkrole')->name('get-xoatk');
		Route::get('XoaPhong/{maphong}','ControllerAdmin@xoaphong')->name('get-xoaphong');
		Route::get('XoaLoaiPhong/{maloai}','ControllerAdmin@xoaloaiphong')->name('get-xoaloaiphong');
		Route::get('XoaDonDat/{madon}','ControllerAdmin@xoadondat')->name('get-xoadondat');
		Route::get('XoaChiTiet/{mact}','ControllerAdmin@getxoact')->name('get-xoact');
		Route::get('XoaDichVu/{madv}','DichVuController@xoadv')->name('get-xoadv');
			Route::group(['prefix'=>'Them'],function(){
					// Admin/Them/
					Route::get('ThemTKKH','ControllerAdmin@getthemtk')->name('get-themtk');
					Route::post('ThemTKKH','ControllerAdmin@postthemtk')->name('post-themtk');

					Route::get('ThemPhong','ControllerAdmin@getthemp')->name('get-themp');
					Route::post('ThemPhong','ControllerAdmin@postthemp')->name('post-themp');
					
					Route::get('Themloaiphong','ControllerAdmin@getthemlp')->name('get-themlp');
					Route::post('Themloaiphong','ControllerAdmin@postthemlp')->name('post-themlp');

					Route::get('Themdondat','ControllerAdmin@getthemdd')->name('get-themdd');
					Route::post('Themdondat','ControllerAdmin@postthemdd')->name('post-themdd');

					Route::get('Themchitiet','ControllerAdmin@getviewthemct')->name('get-themct');
					Route::post('Themchitiet','ControllerAdmin@postthemct')->name('post-themct');

					Route::get('ThemTKNV','ControllerAdmin@getviewthemnv')->name('get-themnv');
					Route::post('ThemTKNV','ControllerAdmin@postthemnv')->name('postthemnv');

					Route::get('ThemDV','DichVuController@getviewthemnv')->name('get-themdv');
					Route::post('ThemDV','DichVuController@postthemnv')->name('postthemdv');
					
				});
			Route::group(['prefix'=>'Sua'],function(){
				// Admin/Sua/
				Route::get('SuaTKKH/{makh}','ControllerAdmin@getsuatk')->name('get-suatk');
				Route::post('SuaTKKH/{makh}','ControllerAdmin@postsuatk')->name('post-suatk');

				Route::get('Suaphong/{maphong}','ControllerAdmin@getsuaphong')->name('get-suaphong');
				Route::post('Suaphong/{maphong}','ControllerAdmin@postsuaphong')->name('post-suaphong');

				Route::get('Sualoaiphong/{maloai}','ControllerAdmin@getsualoaiphong')->name('get-sualoaiphong');
				Route::post('Sualoaiphong/{maloai}','ControllerAdmin@postsualoaiphong')->name('post-sualoaiphong');

				Route::get('Suadondat/{madon}','ControllerAdmin@getsuadondat')->name('get-suadondat');
				Route::post('Suadondat/{madon}','ControllerAdmin@postsuadondat')->name('post-suadondat');

				Route::get('Suachitiet/{mact}','ControllerAdmin@getsuact')->name('get-suact');
				Route::post('Suachitiet/{mact}','ControllerAdmin@postsuact')->name('post-suact');
						
				Route::get('SuaTKNV/{manv}','ControllerAdmin@getviewsuanv')->middleware('checkrole')->name('get-suanv');
				Route::post('SuaTKNV/{manv}','ControllerAdmin@postsuanv')->middleware('checkrole')->name('post-suanv');

				Route::get('SuaDV/{madv}','DichVuController@getviewsuadv')->middleware('checkrole')->name('get-suadv');
				Route::post('SuaDV/{madv}','DichVuController@postsuadv')->middleware('checkrole')->name('post-suadv');
			});
	
	 
});

