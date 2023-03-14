<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Layanan;
use App\Models\Rumah_Sakit;

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
        Layanan::create([
            'id_layanan' => NULL,
            'nama_layanan' => 'ICO',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        Layanan::create([
            'id_layanan' => NULL,
            'nama_layanan' => 'IGD',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        Layanan::create([
            'id_layanan' => NULL,
            'nama_layanan' => 'UGD',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
    }
}
