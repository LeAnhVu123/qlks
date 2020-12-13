<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thanhtoan extends Model
{
    //
    public $incrementing = false; 
	protected $primaryKey = 'matt';
	protected $fillable =[
		'thanhtoan','madon'
	];
}
