<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormulirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulir', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_cabang')->constrained('cabang')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_identitas_nasabah')->constrained('identitas_nasabah')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_nasabah_perorang')->nullable()->constrained('nasabah_perorang')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_nasabah_badan')->nullable()->constrained('nasabah_badan')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('formulir');
    }
}
