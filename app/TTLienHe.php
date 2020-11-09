<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TTLienHe extends Model
{

    protected $table = 'ttlienhe';//goi table csdl
    public $timestamps = false;// ??? xoa create_at voi update_at
    protected $fillable = ['Ten','Gmail','VanDe','NoiDung'];
    
}//dung chua ta thu di sai gg tip chu co gi da,vl sai cai nay ma nya gio k biet 
