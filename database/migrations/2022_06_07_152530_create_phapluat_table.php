<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhapluatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phapluat', function (Blueprint $table) {
            $table->increments('ID_PL');
             $table->integer('ID_CHUYENMUC_PL');
             $table->integer('ID_ADMIN');
            $table->string('TIEUDE_PL');
            $table->text('NOIDUNG_PL');
            $table->string('FILE_PL');
             $table->datetime("NGAYDANG_PL");
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
        Schema::dropIfExists('phapluat');
    }
}
