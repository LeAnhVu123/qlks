<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phong extends Model
{
	//
	protected $fillable = [
		'maloai','madon','ghichu','trangthai','sotang'
	];
	protected $primaryKey = 'maphong';
}
