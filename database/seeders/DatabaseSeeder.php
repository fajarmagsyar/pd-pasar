<?php

namespace Database\Seeders;

use App\Models\Pasar;
use Illuminate\Database\Seeder;
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
        Pasar::create([
            'nama_pasar' => 'Pasar Oebobo',
            'password' => Hash::make('ateblukup'),
            'role' => 'pasar',
            'alamat_pasar' => 'Kelurahan Oebobo',
            'email' => 'pasar.oebobo@kupangkota.go.id',
            'telp' => '-',
            'langlat' => '-10.159832832139363, 123.60870816842525',
            'foto_pasar' => 'assets/images/dashboard/oebobo.png',
        ]);

        Pasar::create([
            'nama_pasar' => 'Pasar Oesapa',
            'password' => Hash::make('ateblukup'),
            'role' => 'pasar',
            'alamat_pasar' => 'Kelurahan Oesapa',
            'email' => 'pasar.oesapa@kupangkota.go.id',
            'telp' => '-',
            'langlat' => '-10.142942909275112, 123.65341432424913',
            'foto_pasar' => 'assets/images/dashboard/oesapa.png',
        ]);

        Pasar::create([
            'nama_pasar' => 'Pasar Inpres',
            'password' => Hash::make('ateblukup'),
            'role' => 'pasar',
            'alamat_pasar' => 'Kelurahan Inpres',
            'email' => 'pasar.inpres@kupangkota.go.id',
            'telp' => '-',
            'langlat' => '-10.179684572836587, 123.60202351444762',
            'foto_pasar' => 'assets/images/dashboard/inpres.png',
        ]);

        Pasar::create([
            'nama_pasar' => 'Pasar Oeba',
            'password' => Hash::make('ateblukup'),
            'role' => 'pasar',
            'alamat_pasar' => 'Kelurahan Oeba',
            'email' => 'pasar.oeba@kupangkota.go.id',
            'telp' => '-',
            'langlat' => '-10.154364981039237, 123.5929750377436',
            'foto_pasar' => 'assets/images/dashboard/oeba.png',
        ]);

        Pasar::create([
            'nama_pasar' => 'Pasar Penfui',
            'password' => Hash::make('ateblukup'),
            'role' => 'pasar',
            'alamat_pasar' => 'Kelurahan Penfui',
            'email' => 'pasar.penfui@kupangkota.go.id',
            'telp' => '-',
            'langlat' => '-10.175783091296404, 123.6584330684254',
            'foto_pasar' => 'assets/images/dashboard/penfui.png',
        ]);

        Pasar::create([
            'nama_pasar' => 'Pasar Kuanino',
            'password' => Hash::make('ateblukup'),
            'role' => 'pasar',
            'alamat_pasar' => 'Kelurahan Kuanino',
            'email' => 'pasar.kuanino@kupangkota.go.id',
            'telp' => '-',
            'langlat' => '-10.169407711878556, 123.59063389726064',
            'foto_pasar' => 'assets/images/dashboard/kuanino.png',
        ]);


        Pasar::create([
            'nama_pasar' => 'Admin',
            'alamat_pasar' => 'Admin',
            'email' => 'kominfo@kupangkota.go.id',
            'telp' => '-',
            'password' => Hash::make('ateblukup'),
            'role' => 'admin',
            'langlat' => '-10.169407711878556, 123.59063389726064',
            'foto_pasar' => 'assets/images/dashboard/kuanino.png',
        ]);
    }
}
