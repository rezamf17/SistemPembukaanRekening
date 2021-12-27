<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepositosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deposito', function (Blueprint $table) {
            $table->id();
            $table->string('no_rekening_pemilik')->nullable();
            $table->string('atas_nama')->nullable();
            $table->string('mata_uang');
            $table->string('jangka_waktu');
            $table->string('pembayaran_bagi_hasil');
            $table->string('no_rek_bagi_hasil');
            $table->string('perpanjang_otomatis');
            $table->string('ahli_waris');
            $table->string('hubungan_dgn_ahli_waris');
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
        Schema::dropIfExists('deposito');
    }
}
