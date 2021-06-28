<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbHidanganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_hidangan', function (Blueprint $table) {
            $table->increments('id_hidangan');
            $table->string('nama_hidangan');
            $table->string('jenis_hidangan');
            $table->unsignedInteger('harga_hidangan');
            $table->string('foto_hidangan');
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
        Schema::dropIfExists('tb_hidangan');
    }
}
