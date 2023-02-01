<?php

namespace Database\Seeders;

use App\Models\Pasar;
use App\Models\PerubahanHarga;
use App\Models\produk;
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
        $pasar1 = Pasar::create([
            'nama_pasar' => 'Pasar Oebobo',
            'alamat_pasar' => 'Kelurahan Oebobo',
            'email' => 'pasar.oebobo@kupangkota.go.id',
            'password' => Hash::make('admin1234'), // password
            'telp' => '-',
            'langlat' => '-10.159832832139363, 123.60870816842525',
            'foto_pasar' => 'assets/images/dashboard/oebobo.png',
        ])->getAttributes();

        $pasar2 = Pasar::create([
            'nama_pasar' => 'Pasar Oesapa',
            'alamat_pasar' => 'Kelurahan Oesapa',
            'email' => 'pasar.oesapa@kupangkota.go.id',
            'password' => Hash::make('admin1234'), // password
            'telp' => '-',
            'langlat' => '-10.142942909275112, 123.65341432424913',
            'foto_pasar' => 'assets/images/dashboard/oesapa.png',
        ])->getAttributes();

        $pasar3 = Pasar::create([
            'nama_pasar' => 'Pasar Inpres',
            'alamat_pasar' => 'Kelurahan Inpres',
            'email' => 'pasar.inpres@kupangkota.go.id',
            'password' => Hash::make('admin1234'), // password
            'telp' => '-',
            'langlat' => '-10.179684572836587, 123.60202351444762',
            'foto_pasar' => 'assets/images/dashboard/inpres.png',
        ])->getAttributes();

        $pasar4 = Pasar::create([
            'nama_pasar' => 'Pasar Oeba',
            'alamat_pasar' => 'Kelurahan Oeba',
            'email' => 'pasar.oeba@kupangkota.go.id',
            'password' => Hash::make('admin1234'), // password
            'telp' => '-',
            'langlat' => '-10.154364981039237, 123.5929750377436',
            'foto_pasar' => 'assets/images/dashboard/oeba.png',
        ])->getAttributes();

        $pasar5 = Pasar::create([
            'nama_pasar' => 'Pasar Penfui',
            'alamat_pasar' => 'Kelurahan Penfui',
            'email' => 'pasar.penfui@kupangkota.go.id',
            'password' => Hash::make('admin1234'), // password
            'telp' => '-',
            'langlat' => '-10.175783091296404, 123.6584330684254',
            'foto_pasar' => 'assets/images/dashboard/penfui.png',
        ])->getAttributes();

        $pasar6 = Pasar::create([
            'nama_pasar' => 'Pasar Kuanino',
            'alamat_pasar' => 'Kelurahan Kuanino',
            'email' => 'pasar.kuanino@kupangkota.go.id',
            'password' => Hash::make('admin1234'), // password
            'telp' => '-',
            'langlat' => '-10.169407711878556, 123.59063389726064',
            'foto_pasar' => 'assets/images/dashboard/kuanino.png',
        ])->getAttributes();

        $produk1 = produk::create([
            'nama_produk' => 'Beras',
            'merk' => 'Nona Kupang',
            'satuan' => 'Kg',
            'keterangan' => '-'
        ])->getAttributes();

        $produk2 = produk::create([
            'nama_produk' => 'Telur Ayam Ras',
            'merk' => 'Telur Makyus',
            'satuan' => 'Kg',
            'keterangan' => '-'
        ])->getAttributes();

        $produk3 = produk::create([
            'nama_produk' => 'Minyak Goreng',
            'merk' => 'Bimoli',
            'satuan' => 'Liter',
            'keterangan' => '-'
        ])->getAttributes();

        $produk4 = produk::create([
            'nama_produk' => 'Minyak Goreng',
            'merk' => 'Sania',
            'satuan' => 'Liter',
            'keterangan' => '-'
        ])->getAttributes();

        PerubahanHarga::create([
            'produk_id' => $produk1['produk_id'],
            'pasar_id' => $pasar1['pasar_id'],
            'harga' => '250000',
        ]);

        PerubahanHarga::create([
            'produk_id' => $produk2['produk_id'],
            'pasar_id' => $pasar1['pasar_id'],
            'harga' => '210000',
        ]);

        PerubahanHarga::create([
            'produk_id' => $produk3['produk_id'],
            'pasar_id' => $pasar2['pasar_id'],
            'harga' => '15600',
        ]);

        PerubahanHarga::create([
            'produk_id' => $produk4['produk_id'],
            'pasar_id' => $pasar3['pasar_id'],
            'harga' => '17800',
        ]);

        PerubahanHarga::create([
            'produk_id' => $produk4['produk_id'],
            'pasar_id' => $pasar3['pasar_id'],
            'harga' => '18000',
        ]);

        PerubahanHarga::create([
            'produk_id' => $produk4['produk_id'],
            'pasar_id' => $pasar3['pasar_id'],
            'harga' => '19000',
        ]);

    }
}
