<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loaiphong extends Model
{
	//
	protected $fillable =[
		'tenloai','succhua','mota','hinhanh','gia'
	];
	protected $primaryKey= 'maloai';
}
