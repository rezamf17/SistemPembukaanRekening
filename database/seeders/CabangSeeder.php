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
                'nama_cabang' => 'Arcamanik'
            ],
            [
                'nama_cabang' => 'Cianjur'
            ],
            [
                'nama_cabang' => 'Cipacing'
            ],
            [
                'nama_cabang' => 'Garut'
            ],
            [
                'nama_cabang' => 'Jatiwangi'
            ],
            [
                'nama_cabang' => 'Kopo'
            ],
            [
                'nama_cabang' => 'Kulalet'
            ],
            [
                'nama_cabang' => 'Majalaya'
            ],
            [
                'nama_cabang' => 'Rancaekek'
            ],
        ]);
    }
}
