<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasklTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswaskl', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('nis', 8);
            $table->string('nisn', 10);
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('jk', 1);
            $table->string('level');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('sandi')->nullable();
            $table->string('foto')->nullable();
            $table->string('nopes')->nullable();
            // 
            $table->string('kelas')->nullable();
            $table->string('jurusan')->nullable();
            $table->string('keterangan')->nullable();
            // NILAI
            $table->string('n_agama')->nullable();
            $table->string('n_pkn')->nullable();
            $table->string('n_bindo')->nullable();
            $table->string('n_basing')->nullable();
            $table->string('n_mtk')->nullable();
            $table->string('n_sejindo')->nullable();
            $table->string('n_pjs')->nullable();
            $table->string('n_sbud')->nullable();
            $table->string('n_prakarya')->nullable();
            $table->string('n_minat1')->nullable();
            $table->string('n_minat2')->nullable();
            $table->string('n_minat3')->nullable();
            $table->string('n_minat4')->nullable();
            $table->string('n_minat5')->nullable();
            $table->string('n_minat6')->nullable();
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
        Schema::dropIfExists('siswaskl');
    }
}
