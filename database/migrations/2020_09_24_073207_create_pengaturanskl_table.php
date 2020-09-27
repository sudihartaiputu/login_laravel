<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengaturansklTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaturanskl', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nama_sekolah');
            $table->string('npsn');
            $table->string('nss');
            $table->string('nama_kepsek');
            $table->string('nip_kepsek');
            $table->string('alamat');
            $table->string('kota');
            $table->string('provinsi');
            $table->string('stempel');
            $table->string('wstempel');
            $table->string('ttd');
            $table->string('wttd');
            $table->datetime('tanggal_pengumuman');
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
        Schema::dropIfExists('pengaturanskl');
    }
}
