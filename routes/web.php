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
Route::post('/TrangChu','ControllerQLKS@gui')->name('trangchu');//dung k ta, thay cai nay sai sai xem thu

Route::get('/PhongDaDat','ControllerQLKS@phongdadat')->name('phongdadat');

Route::get('/DatPhong','ControllerQLKS@datphong')->name('datphong');
Route::post('/DatPhong','ControllerQLKS@getid')->name('getid');
Route::post('/get-val','ControllerQLKS@getval')->name('getval');
Route::get('/DangNhapADMin','ControllerQLKS@dangnhapadmin')->name('dangnhap');
Route::post('/DangNhapADMin','ControllerQLKS@ktid')->name('ktid');
Route::get('/GioiThieu','ControllerQLKS@gioithieu')->name('gt');
Route::get('/HuongDan','ControllerQLKS@huongdan')->name('hd');
Route::get('/KhuyenMai','ControllerQLKS@khuyenmai')->name('km');
Route::get('/DichVu','ControllerQLKS@dichvu')->name('dv');
Route::get('/Search','ControllerQLKS@search')->name('search');
Route::get('/QuancanhNT','ControllerQLKS@quancanhNT')->name('qcNT');
Route::get('/DulichNT','ControllerQLKS@dulichNT')->name('dlNT');
Route::get('/DuongbienNT','ControllerQLKS@venbienNT')->name('dbNT');
Route::get('/TinTuc','ControllerQLKS@tintuc')->name('tint');
Route::get('/DacsanNT','ControllerQLKS@dacsanNT')->name('dsNT');
Route::get('/Dangnhap','ControllerQLKS@dangnhap')->name('dn');
Route::post('/Dangnhap','DangNhapController@dangnhap')->name('post-dn');
Route::get('/Dangki','ControllerQLKS@dangki')->name('dk');
Route::get('/Thanhtoan','ControllerQLKS@thanhtoan')->name('ttoan');
Route::post('/Dangki','DangKiController@postdk')->name('post-dk');
Route::get('/MasterTimkiem','ControllerQLKS@mastertimkiem')->name('mastertimkiem');

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
Route::post('countimg','LoginController@countImg')->name('countImg');
Route::get('Admin/dangnhap','LoginController@dangnhap')->name('dangnhap');
Route::post('Admin/dangnhap','LoginController@xetdangnhap')->name('xetdangnhap');// ua post get dang nhap la sao m, sao phai them thang post
Route::group(['middleware' => ['checkaccount'],'prefix'=>'Admin'],function(){
	// Dangxuat
	Route::get('dangxuat','LoginController@dangxuat')->name('dangxuat');
	
	/* View Quan Ly */
		Route::get('QuanLy','ControllerAdmin@quanly')->name('quanly');
		Route::get('QLTKKH','KhachHangController@getkh')->name('qltk');
		Route::get('QLP','PhongController@getp')->name('phong');
		Route::get('QLLP','LoaiPhongController@getlp')->name('lphong');
		Route::get('AllDonDat','DonDatController@getalldondat')->name('alldondat');
		Route::get('Chitietdondat','ChiTietController@getchitietdd')->name('ctdondat');
		Route::get('QLTKNV','NhanVienController@getviewnv')->name('nv');
		Route::get('QLDV','DichVuController@index')->name('dichvu');
		Route::get('QLTT','ThanhToanController@index')->name('thanhtoan');
		Route::get('QLKM','KhuyenMaiController@index')->name('khuyenmai');
		/* Xoa */
		Route::get('Xoa/{makh}','KhachHangController@getxoa')->middleware('checkrole')->name('get-xoatk');
		Route::get('XoaPhong/{maphong}','PhongController@xoaphong')->name('get-xoaphong');
		Route::get('XoaLoaiPhong/{maloai}','LoaiPhongController@xoaloaiphong')->name('get-xoaloaiphong');
		Route::get('XoaDonDat/{madon}','DonDatController@xoadondat')->name('get-xoadondat');
		Route::get('XoaChiTiet/{mact}','ChiTietController@getxoact')->name('get-xoact');
		Route::get('XoaDichVu/{madv}','DichVuController@xoadv')->name('get-xoadv');
		Route::get('XoaThanhToan/{matt}','ThanhToanController@xoatt')->name('get-xoatt');
		Route::get('XoaKhuyenMai/{makm}','KhuyenMaiController@xoakm')->name('get-xoakm');
			Route::group(['prefix'=>'Them'],function(){
					// Admin/Them/
					Route::get('ThemTKKH','KhachHangController@getthemtk')->name('get-themtk');
					Route::post('ThemTKKH','KhachHangController@postthemtk')->name('post-themtk');

					Route::get('ThemPhong','PhongController@getthemp')->name('get-themp');
					Route::post('ThemPhong','PhongController@postthemp')->name('post-themp');
					
					Route::get('Themloaiphong','LoaiPhongController@getthemlp')->name('get-themlp');
					Route::post('Themloaiphong','LoaiPhongController@postthemlp')->name('post-themlp');

					Route::get('Themdondat','DonDatController@getthemdd')->name('get-themdd');
					Route::post('Themdondat','DonDatController@postthemdd')->name('post-themdd');

					Route::get('Themchitiet','ChiTietController@getviewthemct')->name('get-themct');
					Route::post('Themchitiet','ChiTietController@postthemct')->name('post-themct');

					Route::get('ThemTKNV','NhanVienController@getviewthemnv')->name('get-themnv');
					Route::post('ThemTKNV','NhanVienController@postthemnv')->name('postthemnv');

					Route::get('ThemDV','DichVuController@getviewthemdv')->name('get-themdv');
					Route::post('ThemDV','DichVuController@postthemdv')->name('postthemdv');

					Route::get('Themtt','ThanhToanController@getviewthemtt')->name('get-themtt');
					Route::post('Themtt','ThanhToanController@postthemtt')->name('postthemtt');

					Route::get('ThemKM','KhuyenMaiController@getviewthemkm')->name('get-themkm');
					Route::post('ThemKM','KhuyenMaiController@postthemkm')->name('postthemkm');
					
				});
			Route::group(['prefix'=>'Sua'],function(){
				// Admin/Sua/
				Route::get('SuaTKKH/{makh}','KhachHangController@getsuatk')->name('get-suatk');
				Route::post('SuaTKKH/{makh}','KhachHangController@postsuatk')->name('post-suatk');

				Route::get('Suaphong/{maphong}','PhongController@getsuaphong')->name('get-suaphong');
				Route::post('Suaphong/{maphong}','PhongController@postsuaphong')->name('post-suaphong');

				Route::get('Sualoaiphong/{maloai}','LoaiPhongController@getsualoaiphong')->name('get-sualoaiphong');
				Route::post('Sualoaiphong/{maloai}','LoaiPhongController@postsualoaiphong')->name('post-sualoaiphong');

				Route::get('Suadondat/{madon}','DonDatController@getsuadondat')->name('get-suadondat');
				Route::post('Suadondat/{madon}','DonDatController@postsuadondat')->name('post-suadondat');

				Route::get('Suachitiet/{mact}','ChiTietController@getsuact')->name('get-suact');
				Route::post('Suachitiet/{mact}','ChiTietController@postsuact')->name('post-suact');
						
				Route::get('SuaTKNV/{manv}','NhanVienController@getviewsuanv')->middleware('checkrole')->name('get-suanv');
				Route::post('SuaTKNV/{manv}','NhanVienController@postsuanv')->middleware('checkrole')->name('post-suanv');

				Route::get('SuaDV/{madv}','DichVuController@getviewsuadv')->middleware('checkrole')->name('get-suadv');
				Route::post('SuaDV/{madv}','DichVuController@postsuadv')->middleware('checkrole')->name('post-suadv');

				Route::get('SuaTT/{matt}','ThanhToanController@getviewsuatt')->middleware('checkrole')->name('get-suatt');
				Route::post('SuaTT/{matt}','ThanhToanController@postsuatt')->middleware('checkrole')->name('post-suatt');

				Route::get('SuaKM/{matt}','KhuyenMaiController@getviewsuakm')->middleware('checkrole')->name('get-suakm');
				Route::post('SuaKM/{matt}','KhuyenMaiController@postsuakm')->middleware('checkrole')->name('post-suakm');
			});
	
	 
});

