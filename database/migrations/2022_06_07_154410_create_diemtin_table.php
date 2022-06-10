<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiemtinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diemtin', function (Blueprint $table) {
            $table->increments('ID_DT');
             $table->integer('ID_CHUYENMUC_DT');
             $table->integer('ID_ADMIN');
            $table->string('TIEUDE_DT');
            $table->text('NOIDUNG_DT');

            $table->string('HINHANH_DT');
             $table->datetime("NGAYDANG_DT");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diemtin');
    }
}
