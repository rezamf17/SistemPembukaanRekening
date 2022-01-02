<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\CabangSeeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            CabangSeeder::class,
        ]);
        DB::table('users')->insert([
            [
                'id_cabang' => 7,
                'name' => 'reza',
                'email' => 'rezayuyara@gmail.com',
                'password' => Hash::make('reza1234'),
                'role' => 'super_admin'
            ],
            [
                'id_cabang' => 6,
                'name' => 'nelian mayhana',
                'email' => 'nelianmayhana@gmail.com',
                'password' => Hash::make('nelian1234'),
                'role' => 'admin'
            ],
        ]);
    }
}
