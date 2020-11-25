<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Khachhang extends Model
{
	//	
	protected $fillable = [
		'makh','taikhoan','matkhau','hoten','sdt','email',
	];
	protected $primaryKey = 'makh';
	public $incrementing = false; 
}
