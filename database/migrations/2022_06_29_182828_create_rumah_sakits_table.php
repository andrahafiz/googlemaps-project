<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRumahSakitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rumahsakits', function (Blueprint $table) {
            $table->id('id_rumahsakit');
            $table->string('nama_rumahsakit');
            $table->text('alamat_rumahsakit');
            $table->string('foto_rumahsakit')->default('no-image.jpg');
            $table->string('latitude_rumahsakit');
            $table->string('longitude_rumahsakit');
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
        Schema::dropIfExists('rumahsakits');
    }
}
