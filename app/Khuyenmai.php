<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Khuyenmai extends Model
{
    //
    public $incrementing = false; 
	protected $primaryKey = 'makm';
	protected $fillable =[
		'makm','tenkm','giagiam','ngaybd','ngaykt'
	];
}
