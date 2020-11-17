<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Khachhang extends Model
{
	//	
	protected $fillable = [
		'makh','username','password','hoten','sdt','email',
	];
	protected $primaryKey = 'makh';
}
