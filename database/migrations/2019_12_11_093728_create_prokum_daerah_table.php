<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProkumDaerahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prokum_daerah', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('bentuk');
            $table->string('no_per');
            $table->string('tahun');
            $table->string('judul');
            $table->string('katalog');
            $table->string('abstrak');
            $table->string('file');
            $table->string('lampiran');
            $table->string('status');
            $table->bigInteger('downloaded')->default(0)->unsigned();
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
        Schema::dropIfExists('prokum_daerah');
    }
}
