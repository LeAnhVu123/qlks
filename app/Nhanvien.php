<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nhanvien extends Model
{
    //
    public $incrementing = false; 
	protected $primaryKey = 'manv';
	protected $fillable =[
		'manv','taikhoan','matkhau','hoten','sdt','email','role','cmnd'
	];
}
