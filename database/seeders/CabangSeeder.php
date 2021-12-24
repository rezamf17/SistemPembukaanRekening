<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CabangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('cabang')->insert([
            [
                'nama_cabang' => 'Arcamanik',
                'kode_cabang' => '40'
            ],
            [
                'nama_cabang' => 'Cianjur',
                'kode_cabang' => '50'
            ],
            [
                'nama_cabang' => 'Garut',
                'kode_cabang' => '60'
            ],
            [
                'nama_cabang' => 'Jatiwangi',
                'kode_cabang' => '20'
            ],
            [
                'nama_cabang' => 'Kopo',
                'kode_cabang' => '30'
            ],
            [
                'nama_cabang' => 'Majalaya',
                'kode_cabang' => '10'
            ],
            [
                'nama_cabang' => 'Rancaekek',
                'kode_cabang' => '00'
            ],
        ]);
    }
}
