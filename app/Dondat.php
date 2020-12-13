<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dondat extends Model
{
    //
    public $incrementing = false; 
	protected $primaryKey = 'madon';
	protected $fillable =[
		'madon','makh','manv','maphong','madv','makm','ngaylap','tongtien','trangthai'
	];
	
	public function getNameKM(){
		return $this->belongsTo('App\Khuyenmai','makm','makm');
	}
}
