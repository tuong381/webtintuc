<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVanbanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vanban', function (Blueprint $table) {
            $table->increments('ID_VB');
             $table->integer('ID_CHUYENMUC_VB');
              $table->integer('ID_ADMIN');
            $table->string('TIEUDE_VB');
            $table->text('NOIDUNG_VB');
            $table->string('FILE_VB');
            $table->string('HINHANH_VB');
             $table->datetime("NGAYDANG_VB");
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
        Schema::dropIfExists('vanban');
    }
}
