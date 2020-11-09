<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loaiphong extends Model
{
    protected $table='loaiphong';
    public $timestamps = false;
    protected $fillable = ['HinhAnh','MoTa'];
    // protected $guared =[];
    public function phong(){
        return $this->hasMany('App\Phong', 'MaLoai','MaLoai');
    }
}
