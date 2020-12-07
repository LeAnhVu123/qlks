<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dichvu extends Model
{
	//
	protected $fillable = [
		'tendv','gia'
	];

	protected $primaryKey = 'madv';
}
