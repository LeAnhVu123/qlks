<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phong extends Model
{
    protected $table = 'phong';
    public function pval(){
        return $this->belongsTo('App\Loaiphong', 'MaLoai','MaLoai');
    }
}
