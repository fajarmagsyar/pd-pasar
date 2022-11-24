<?php

namespace Database\Seeders;

use App\Models\Pasar;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Pasar::create([
            'nama_pasar' => 'Pasar Oebobo',
            'alamat_pasar' => 'Kelurahan Oebobo',
            'email' => 'pasar.oebobo@kupangkota.go.id',
            'telp' => '082312791232',
            'langlat' => '-10.159832832139363, 123.60870816842525',
        ]);
    }
}
