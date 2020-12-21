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
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('role_id');
            $table->string('name_role');
            $table->timestamps();
    });
    
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
                $table->unsignedInteger('role');
                $table->timestamps();
                $table->foreign('role')->references('role_id')->on('roles');
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
		
        Schema::create('hinhloaiphongs', function (Blueprint $table) {
            $table->increments('mahinh');
            $table->unsignedInteger('maloai');
            $table->string('tenhinh');
            $table->timestamps();    
            $table->foreign('maloai')->references('maloai')->on('loaiphongs');
        });        
       
        Schema::create('khuyenmais', function (Blueprint $table) {
            $table->increments('makm'); 
            $table->string('tenkm');
            $table->string('giagiam');
            $table->date('ngaybd');
            $table->date('ngaykt');
            $table->timestamps();        
		});

		Schema::create('dichvus', function (Blueprint $table) {
			$table->increments('madv'); 
			$table->string('tendv');
			$table->bigInteger('gia');
			$table->timestamps();    
		});

		Schema::create('phongs', function (Blueprint $table) {
            $table->unsignedInteger('maphong'); 
            $table->unsignedInteger('maloai');
            // $table->unsignedInteger('madon')->nullable();
            // $table->string('hinhanh');
            $table->string('ghichu');
            $table->Integer('sotang');
            $table->timestamps();  
            $table->primary('maphong');
            $table->foreign('maloai')->references('maloai')->on('loaiphongs'); 
            // $table->foreign('madon')->references('madon')->on('dondats'); 
		});
		
        Schema::create('dondats', function (Blueprint $table) {
            $table->increments('madon'); 
            $table->unsignedInteger('manv');
			$table->unsignedInteger('makh');
			$table->text('maphong');
			$table->unsignedInteger('makm')->nullable();
			$table->text('madv')->nullable();
			$table->date('ngaylap');			
            $table->bigInteger('tongtien'); 
            $table->bigInteger('trangthai')->default(0);
            $table->timestamps();  
            $table->foreign('manv')->references('manv')->on('nhanviens');
            $table->foreign('makh')->references('makh')->on('khachhangs');
            $table->foreign('makm')->references('makm')->on('khuyenmais');
		});
		
		Schema::create('thanhtoans', function (Blueprint $table) {
            $table->increments('matt'); 
            $table->unsignedInteger('madon')->unique();
            $table->Integer('thanhtoan');
            // $table->Integer('conlai');
         
			$table->timestamps();  
			$table->foreign('madon')->references('madon')->on('dondats');
	});

        Schema::create('chitiets', function (Blueprint $table) {
            $table->increments('mact'); 
            $table->unsignedInteger('madon');
            $table->date('ngayden');
            $table->date('ngaydi');
            $table->Integer('slphong');
            $table->Integer('soluong');
            $table->timestamps();  
            $table->foreign('madon')->references('madon')->on('dondats');      
    });
    Schema::create('lienhes', function (Blueprint $table) {
        $table->increments('malh'); 
        $table->unsignedInteger('manv')->nullable();
        $table->String('hoten');
        $table->String('email');
        $table->String('sdt');
        $table->String('noidung');
        $table->timestamps();  
        $table->foreign('manv')->references('manv')->on('nhanviens');      
});

        

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {           
        Schema::dropIfExists('lienhes'); 
		   Schema::dropIfExists('dondats'); 
           Schema::dropIfExists('khachhangs');
           Schema::dropIfExists('nhanviens');
           Schema::dropIfExists('phongs');
           Schema::dropIfExists('loaiphongs');
           Schema::dropIfExists('khuyenmais');           
           Schema::dropIfExists('dichvus');
           Schema::dropIfExists('thanhtoans');
           Schema::dropIfExists('chitiets');
           Schema::dropIfExists('hinhloaiphongs');
           Schema::dropIfExists('roles');
           
           
    }
}
