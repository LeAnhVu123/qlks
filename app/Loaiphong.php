<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loaiphong extends Model
{
	public $incrementing = false; 
	protected $primaryKey = 'maloai';
	protected $fillable =[
		'maloai','tenloai','succhua','mota','hinhanh','gia'
	];
	
	public function lvap()
    {
		return $this->hasMany('App\Phong', 'maloai','maloai');
		
    }
}
