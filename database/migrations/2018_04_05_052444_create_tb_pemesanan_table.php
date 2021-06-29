<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbPemesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pemesanan', function (Blueprint $table) {
            $table->increments('id_pemesanan');
            $table->unsignedInteger('id_restoran');
            $table->unsignedInteger('id_pelanggan');
            $table->unsignedInteger('id_pegawai');
            $table->unsignedInteger('total_pemesanan');
            $table->string('status_pemesanan');
            $table->timestamps();

            // $table->foreign('id_restoran')->references('id_restoran')->on('tb_restoran');
            // $table->foreign('id_pelanggan')->references('id_pelanggan')->on('tb_pelanggan');
            // $table->foreign('id_pegawai')->references('id_pegawai')->on('tb_pegawai');
        });
        // DB::statement("ALTER TABLE tb_pemesanan ALTER COLUMN total_pemesanan TYPE INT(10) SET DEFAULT 0;");
        // DB::statement("ALTER TABLE tb_pemesanan ALTER COLUMN status_pemesanan TYPE ENUM('Belum Dibayar', 'Lunas') SET DEFAULT 'Belum Dibayar';");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_transaksi');
    }
}
