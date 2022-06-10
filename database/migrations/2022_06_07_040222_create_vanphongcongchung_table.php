<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVanphongcongchungTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vanphongcongchung', function (Blueprint $table) {
           $table->increments('ID_VPCC');
             $table->integer('ID_ADMIN');
            $table->string('TEN_VPCC');
            $table->string('ANH_VPCC');
            $table->string('THONGTIN_VPCC');
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
        Schema::dropIfExists('vanphongcongchung');
    }
}
