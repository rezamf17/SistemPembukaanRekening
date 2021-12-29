<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\CabangSeeder;
use Illuminate\Support\Facades\DB;

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
        DB::table('users')->insert([
            'name' => 'reza',
            'email' => 'rezayuyara@gmail.com',
            'password' => 'reza1234'
        ]);
        $this->call([
            CabangSeeder::class,
        ]);
    }
}
