<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chitiet extends Model
{
      //
      public $incrementing = false; 
      protected $primaryKey = 'mact';
      protected $fillable =[
          'mact','madon','ngayden','ngaydi','slphong','nguoilon','treem'
      ];
      
}
