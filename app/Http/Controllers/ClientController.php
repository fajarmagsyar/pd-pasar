<?php

namespace App\Http\Controllers;

use App\Models\Pasar;
use App\Models\PerubahanHarga;
use App\Models\produk;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        return view('index', [
            'title' => 'Daftar Harga Pasar | Kota Kupang',
            'rows' => Pasar::get(),
        ]);
    }

    public function pasarDetail($id)
    {
        $pasar = Pasar::find($id);
        $perubahan = PerubahanHarga::join('pasar', 'pasar.pasar_id', 'perubahan_harga.pasar_id')
            ->join('produk', 'perubahan_harga.produk_id', 'produk.produk_id')
            ->get();

        dd($perubahan);
        return view('pasar-detail', [
            'title' => $pasar->nama_pasar . ' | Kota Kupang',
            'row' => $pasar,
            'rows' => $perubahan,
        ]);
    }
}
