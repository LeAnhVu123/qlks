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

	public function donvachitiet(){
        return $this->belongsTo('App\Chitiet', 'madon','madon');
	}
	public function ddvatt(){
        return $this->belongsTo('App\Thanhtoan', 'madon','madon');
    }
}
