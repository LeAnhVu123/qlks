<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dondat extends Model
{
    //
    public $incrementing = false; 
	protected $primaryKey = 'madon';
	protected $fillable =[
		'madon','makh','manv','makm','matt','ngaylap','tongtien','trangthai'
	];
	
	
}
