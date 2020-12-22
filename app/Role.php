<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    public $incrementing = false; 
	protected $primaryKey = 'role_id';
	protected $fillable =[
		'role_id','name_role'
    ];
    public function role()
    {
        return $this->belongsTo('App\Nhanvien', 'role_id','role');
    }
}
