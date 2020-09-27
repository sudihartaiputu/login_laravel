<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratsklTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suratskl', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nama_surat');
            $table->string('tgl_surat');
            $table->text('header');
            $table->text('pembuka');
            $table->text('isi_surat');
            $table->text('penutup');
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
        Schema::dropIfExists('suratskl');
    }
}
