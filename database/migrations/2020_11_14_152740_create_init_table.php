<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('categories', function (Blueprint $table) {
        //     $table->increments('id'); 
        //     $table->string('note');
        //     $table->bigInteger('status');
        //     $table->timestamps();  
                  
        // });

        // Schema::create('rooms', function (Blueprint $table) {
        //     $table->increments('id'); 
        //     $table->unsignedinteger('id_category');
        //     $table->string('note');
        //     $table->bigInteger('status');//2 cai nay khac gi eo tang
        //     $table->timestamps();//du a k co tu dong tao ra 2 cot  create voi update ngay luc m` insert vao k can insert = tay chua hieu cai nay lam
        //     $table->foreign('id_category')->references('id')->on('categories');
        // });
        Schema::create('khachhangs', function (Blueprint $table) {
                $table->increments('makh'); 
                $table->string('taikhoan')->nullable();
                $table->string('matkhau')->nullable();
                $table->integer('cmnd'); 
                $table->string('hoten');
                $table->string('sdt');
                $table->string('email')->nullable();
                $table->timestamps();  
                // $table->primary('makh');             
            });
        Schema::create('nhanviens', function (Blueprint $table) {
                $table->increments('manv'); 
                $table->string('taikhoan');
                $table->string('matkhau');
                $table->integer('cmnd'); 
                $table->string('hoten');
                $table->string('sdt');
                $table->string('email');
                $table->string('chucvu');
                $table->timestamps();
                // $table->primary('manv');
            });
        Schema::create('loaiphongs', function (Blueprint $table) {
            $table->increments('maloai');
            $table->string('tenloai');
            $table->bigInteger('succhua');
            $table->string('mota');
            $table->string('hinhanh');
            $table->bigInteger('gia'); 
            $table->timestamps();      
        });
        Schema::create('thanhtoans', function (Blueprint $table) {
            $table->increments('matt'); 
            $table->date('ngaytt');
            $table->bigInteger('tongtien');
            $table->Integer('thanhtoan');
            // $table->Integer('conlai');
         
            $table->timestamps();  
    });
        Schema::create('khuyenmais', function (Blueprint $table) {
            $table->increments('makm'); 
            $table->string('tenkm');
            $table->string('giagiam');
            $table->date('ngaybd');
            $table->date('ngaykt');
            $table->timestamps();        
        });
        Schema::create('dondats', function (Blueprint $table) {
            $table->increments('madon'); 
            $table->unsignedInteger('manv');
            $table->unsignedInteger('makh'); 
            $table->unsignedInteger('makm')->nullable();
            $table->unsignedInteger('matt')->nullable();
            $table->date('ngaylap');
            $table->bigInteger('tongtien'); 
            $table->string('trangthai');  
            $table->timestamps();  
            $table->foreign('manv')->references('manv')->on('nhanviens');
            $table->foreign('makh')->references('makh')->on('khachhangs');
            $table->foreign('makm')->references('makm')->on('khuyenmais');
            $table->foreign('matt')->references('matt')->on('thanhtoans');
        });
        Schema::create('phongs', function (Blueprint $table) {
            $table->unsignedInteger('maphong'); 
            $table->unsignedInteger('maloai');
            $table->unsignedInteger('madon')->nullable();
            // $table->string('hinhanh');
            $table->string('ghichu');
            $table->string('trangthai');
            $table->Integer('sotang');
            $table->timestamps();  
            $table->primary('maphong');
            $table->foreign('maloai')->references('maloai')->on('loaiphongs'); 
            $table->foreign('madon')->references('madon')->on('dondats'); 
        });
        Schema::create('dichvus', function (Blueprint $table) {
                $table->increments('madv'); 
                $table->unsignedInteger('matt');
                $table->string('tendv');
                $table->bigInteger('gia');
                $table->timestamps();  
                $table->foreign('matt')->references('matt')->on('thanhtoans');    
            });
      
        Schema::create('chitiets', function (Blueprint $table) {
            $table->increments('mact'); 
            $table->unsignedInteger('madon');
            $table->date('ngayden');
            $table->date('ngaydi');
            $table->Integer('slphong');
            $table->Integer('nguoilon');
            $table->Integer('treem');
            $table->timestamps();  
            $table->foreign('madon')->references('madon')->on('dondats');      
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
           Schema::dropIfExists('khachhangs');
           Schema::dropIfExists('nhanviens');
           Schema::dropIfExists('phongs');
           Schema::dropIfExists('loaiphongs');
           Schema::dropIfExists('khuyenmais');
           Schema::dropIfExists('dondats');
           Schema::dropIfExists('dichvus');
           Schema::dropIfExists('thanhtoans');
           Schema::dropIfExists('chitiets');
           
        // Schema::dropIfExists('categorys');
        // Schema::dropIfExists('rooms');
    }
}
