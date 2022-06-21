<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThuvienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thuvien', function (Blueprint $table) {
            $table->increments('ID_TV');
             $table->integer('ID_CHUYENMUC_TV');
             $table->integer('ID_ADMIN');
            $table->string('FILE_TV');
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
        Schema::dropIfExists('thuvien');
    }
}
