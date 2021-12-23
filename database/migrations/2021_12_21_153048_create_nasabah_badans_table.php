<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNasabahBadansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nasabah_badan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_badan_usaha');
            $table->string('bentuk_usaha');
            $table->string('jenis_usaha');
            $table->string('izin_usaha');
            $table->string('alamat_pemilik');
            $table->string('npwp_pemilik');
            $table->string('sumber_dana');
            $table->string('omzet');
            $table->string('pengurus1');
            $table->string('pengurus2');
            $table->string('pengurus3');
            $table->string('pengurus4');
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
        Schema::dropIfExists('nasabah_badan');
    }
}
