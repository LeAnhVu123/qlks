<?php

use Illuminate\Database\Seeder;
use App\Dichvu;
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
		
    }
}
