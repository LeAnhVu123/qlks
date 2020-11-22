<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nhanvien extends Model
{
	//
	protected $primaryKey ='manv';
	protected $fillable = [
		'manv','username','password','hoten','sdt','email','chucvu'
	];
}
