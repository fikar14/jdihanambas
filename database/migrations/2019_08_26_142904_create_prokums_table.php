<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProkumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prokums', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nomor');
            $table->string('tahun');
            $table->string('desa');
            $table->string('judul');
            $table->string('fileupload');
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
        Schema::dropIfExists('prokums');
    }
}
