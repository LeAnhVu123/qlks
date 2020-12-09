<?php

use Illuminate\Database\Seeder;
use App\Dichvu;
use App\Dondat;
use App\Khachhang;
use App\Khuyenmai;
use App\Nhanvien;
use App\Role;
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
		Nhanvien::create([
			'taikhoan' => 'phuoc',
			'matkhau' => '123',
			'cmnd' => '01234567890',
			'sdt' =>'0908966800',
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
		Dondat::create([
			'makh' => 1,
			'manv' => 1,
			'madv' => '1,2,3,4',
			'ngaylap' => date('Y/m/d'),
			'tongtien' =>123123,
			'trangthai' => 0,
		]);

		
    }
}
