<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLayananRumahsakitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('layanan_rumahsakit', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('layanan_id')->unsigned();
            $table->integer('rumahsakit_id')->unsigned();
            $table->text('informasi_layanan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('layanan_rumahsakit');
    }
}
