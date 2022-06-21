<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLienketwebsiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lienketwebsite', function (Blueprint $table) {
            $table->increments('ID_LKWEB');
             $table->integer('ID_ADMIN');
            $table->string('TEN_LKWEB');
            $table->string('LINK_LKWEB');
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
        Schema::dropIfExists('lienketwebsite');
    }
}
