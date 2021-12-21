<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNasabahPerorangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nasabah_perorang', function (Blueprint $table) {
            $table->id();
            $table->string('sumber_penghasilan');
            $table->string('nama_tempat_kerja');
            $table->string('jabatan');
            $table->string('bidang_usaha');
            $table->string('alamat_perusahaan');
            $table->string('pekerjaan');
            $table->string('pendidikan');
            $table->string('agama');
            $table->string('penghasilan');
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
        Schema::dropIfExists('nasabah_perorang');
    }
}
