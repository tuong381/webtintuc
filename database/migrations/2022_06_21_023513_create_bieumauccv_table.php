<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBieumauccvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bieumauccv', function (Blueprint $table) {
            $table->increments('ID_BMCCV');
             $table->integer('ID_ADMIN');
            $table->string('TEN_BMCCV');
            $table->string('FILE_BMCCV');
            $table->date('NGAYDANG_BMCCV');
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
        Schema::dropIfExists('bieumauccv');
    }
}
