<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lienhe extends Model
{
    //
    protected $fillable = [
		'malh','manv','hoten','email','noidung','created_at','updated_at',
	];
	protected $primaryKey = 'malh';
	public $incrementing = false; 
}
