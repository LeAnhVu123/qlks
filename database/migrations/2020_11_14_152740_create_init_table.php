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
        //     $table->unsignedInteger('id_category');
        //     $table->string('note');
        //     $table->bigInteger('status');//2 cai nay khac gi eo tang
        //     $table->timestamps();//du a k co tu dong tao ra 2 cot  create voi update ngay luc m` insert vao k can insert = tay chua hieu cai nay lam
        //     $table->foreign('id_category')->references('id')->on('categories');
        // });
        Schema::create('khachhangs', function (Blueprint $table) {
                $table->bigInteger('makh'); 
                $table->string('id')->nullable();
                $table->string('pass')->nullable();
                $table->string('hoten');
                $table->string('sdt');
                $table->string('email')->nullable();
                $table->timestamps();  
                $table->PRIMARY('makh');       
            });
        Schema::create('nhanviens', function (Blueprint $table) {
                $table->bigInteger('manv'); 
                $table->string('id');
                $table->string('pass');
                $table->string('hoten');
                $table->string('sdt');
                $table->string('email');
                $table->string('chucvu');
                $table->timestamps();  
                $table->PRIMARY('manv');       
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
        Schema::create('khuyenmais', function (Blueprint $table) {
            $table->increments('makm'); 
            $table->string('tenkm');
            $table->bigInteger('giagiam');
            $table->date('ngaybd');
            $table->date('ngaykt');
            $table->timestamps();        
        });
        Schema::create('dondats', function (Blueprint $table) {
            $table->increments('madon'); 
            $table->bigInteger('manv')->unsigned()->nullable();
            $table->bigInteger('MaKH'); 
            $table->unsignedbigInteger('MaKM');
            $table->date('ngaylap');
            $table->bigInteger('tongtien');   
            $table->bigInteger('thanhtoan');
            $table->bigInteger('tienconlai');  
            $table->timestamps();  
            // $table->foreign('manv')->references('madon')->on('nhanviens');
            // $table->foreign('supplier_id')->references('id')->on('suppliers');
        });
        Schema::create('phongs', function (Blueprint $table) {
            $table->BigInteger('maphong'); 
            $table->unsignedInteger('maloai');
            $table->unsignedInteger('madon');
            $table->string('ghichu');
            $table->string('trangthai');
            $table->Integer('sotang');
            $table->timestamps();  
            // $table->foreign('maloai')->references('maphong')->on('loaiphongs'); 
        });
        Schema::create('dichvus', function (Blueprint $table) {
                $table->increments('madv'); 
                $table->unsignedInteger('madon');
                $table->string('tendv');
                $table->bigInteger('gia');
                $table->timestamps();  
                // $table->foreign('madon')->references('madv')->on('dondats');    
            });
        Schema::create('thanhtoans', function (Blueprint $table) {
                $table->increments('matt'); 
                $table->unsignedInteger('madon');
                $table->date('thoigiantt');
                $table->string('trangthai');
                $table->timestamps();  
                // $table->foreign('madon')->references('madv')->on('dondats');    
        });
        Schema::create('chitiets', function (Blueprint $table) {
            $table->increments('mact'); 
            $table->unsignedInteger('madon');
            $table->unsignedInteger('maphong');
            $table->date('ngayden');
            $table->date('ngaydi');
            $table->Integer('slphong');
            $table->Integer('nguoilon');
            $table->Integer('treem');
            $table->timestamps();  
            // $table->foreign('madon')->references('madv')->on('dondats');    
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
