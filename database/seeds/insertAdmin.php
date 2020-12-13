<?php

use App\Chitiet;
use Illuminate\Database\Seeder;
use App\Dichvu;
use App\Dondat;
use App\Khachhang;
use App\Khuyenmai;
use App\Loaiphong;
use App\Nhanvien;
use App\Phong;
use App\Role;
use App\Thanhtoan;
use FFI\CData;

class insertAdmin extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//
		Role::create([
			'name_role' => 'admin',
		]);
		Role::create([
			'name_role' => 'manager',
		]);
		Nhanvien::create([
			'taikhoan' => 'phuoc',
			'matkhau' => '123',
			'cmnd' => '01234567890',
			'sdt' => '0908966800',
			'hoten' => 'tranvanphuoc',
			'email' => 'phuoc5108147@gmail.com',
			'role' => 1,
		]);
		Khachhang::create([
			'taikhoan' => 'vu',
			'matkhau' => '123',
			'cmnd' => '01234567890',
			'hoten' => 'le anh vu',
			'sdt' => '01234567811'
		]);
		Khuyenmai::create([
			'tenkm' => 'none',
			'giagiam' => 0,
			'ngaybd' => date('Y/m/d'),
			'ngaykt' => date('Y/m/d'),
		]);

		Khuyenmai::create([
			'tenkm' => 'kmtheodon',
			'giagiam' => 100,
			'ngaybd' => '2020/12/09',
			'ngaykt' => date('Y/m/d'),
		]);

		Dichvu::create([
			'tendv' => 'matxa',
			'gia' => 100,
		]);
		Dichvu::create([
			'tendv' => 'xeom',
			'gia' => 100,
		]);
		Dichvu::create([
			'tendv' => 'don dua',
			'gia' => 100,
		]);
		Dichvu::create([
			'tendv' => 'xe hoi',
			'gia' => 100,
		]);
		Loaiphong::create([
			'tenloai' => 'giadinh',
			'succhua' => 4,
			'mota' => "view dep mien che",
			'hinhanh' => 'KS-187.png',
			'gia' => 300,
		]);

		Loaiphong::create([
			'tenloai' => 'banbe',
			'succhua' => 6,
			'mota' => "Cung binh thuong",
			'hinhanh' => 'KS-196.jpg',
			'gia' => 500,
		]);

		Phong::create([
			'maphong' => 1,
			'maloai' => '1',
			'ghichu' => 'Phong nay dep',
			'sotang' => 1,
		]);

		Phong::create([
			'maphong' => 2,
			'maloai' => '2',
			'ghichu' => 'Phong nay xau vai dai',
			'sotang' => 2,
		]);
		Dondat::create([
			'makh' => 1,
			'manv' => 1,
			'maphong' => '1, 2',
			'madv' => '1,2,3,4',
			'ngaylap' => date('Y/m/d'),
			'tongtien' => 123123,
			'trangthai' => 0,
		]);
		Thanhtoan::create([
			'madon' => 1,
			'thanhtoan' => 0
		]);
		Chitiet::create([
			'madon' => 1,
			'ngayden' => Date('Y/m/d'),
			'ngaydi' => Date('Y/m/d'),
			'slphong' => 2,
			'soluong' => 3,
		]);
	}
}
