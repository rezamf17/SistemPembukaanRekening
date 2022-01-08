<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RekeningDepositoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('deposito')->insert([
            [
                'id_cabang' => 6,
                'id_jenis_simpanan' => 1,
                'no_rekening_pemilik' => '345345345',
                'atas_nama'  => 'dani cirebon',
                'nominal_setoran' => 'Rp. 1.500.123.,',
                'mata_uang'  => 'rupiah',
                'jangka_waktu'  => '12 bulan',
                'pembayaran_bagi_hasil'  => 'Dibukukan pada tabungan',
                'no_rek_bagi_hasil' => '2342343453',
                'perpanjang_otomatis'  => 'Ya',
                'ahli_waris'  => 'mayang',
                'hubungan_dgn_ahli_waris'  => 'anak',
            ],
            [
                'id_cabang' => 6,
                'id_jenis_simpanan' => 1,
                'no_rekening_pemilik' => '345345345',
                'atas_nama'  => 'dani cicalengka',
                'nominal_setoran' => 'Rp. 1.500.123.,',
                'mata_uang'  => 'rupiah',
                'jangka_waktu'  => '12 bulan',
                'pembayaran_bagi_hasil'  => 'Dibukukan pada tabungan',
                'no_rek_bagi_hasil' => '2342343453',
                'perpanjang_otomatis'  => 'Ya',
                'ahli_waris'  => 'doddy',
                'hubungan_dgn_ahli_waris'  => 'adik',
            ],

         ]);
    }
}
