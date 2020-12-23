<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phong extends Model
{
	//
	public $incrementing = false; 
	protected $fillable = [
		'maphong','maloai','madon','ghichu','trangthai','sotang'
	];
	protected $primaryKey = 'maphong';
	public function pval(){
        return $this->belongsTo('App\Loaiphong', 'maloai','maloai');
	}
	
}
