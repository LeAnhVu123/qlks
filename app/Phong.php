<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phong extends Model
{
	//
	protected $fillable = [
		'maphong','maloai','madon','ghichu','trangthai','sotang'
	];
}
