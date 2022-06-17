<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYkiendonggopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ykiendonggop', function (Blueprint $table) {
            $table->increments('ID_YKDG');
            $table->string('NOIDUNG_YKDG');
            $table->datetime('THOIGIAN_YKDG');
            $table->string('HOTEN_YKDG');
            $table->string('EMAIL_YKDG');
            $table->string('SDT_YKDG');
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
        Schema::dropIfExists('ykiendonggop');
    }
}
