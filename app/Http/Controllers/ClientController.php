<?php

namespace App\Http\Controllers;

use App\Models\Pasar;
use App\Models\PerubahanHarga;
use App\Models\produk;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ClientController extends Controller
{
    public function index()
    {
        $harga = PerubahanHarga::join('produk', 'produk.produk_id', 'perubahan_harga.produk_id')
            ->join('pasar', 'pasar.pasar_id', 'perubahan_harga.pasar_id')
            ->groupBy(['produk.produk_id', 'perubahan_harga.pasar_id', 'perubahan_harga.created_at', 'pasar.nama_pasar'])
            ->limit(4)
            ->orderBy('perubahan_harga.created_at', 'DESC')
            ->get(['produk.*', 'perubahan_harga.pasar_id', 'pasar.nama_pasar']);
        return view('index', [
            'title' => 'Daftar Harga Pasar | Kota Kupang',
            'rows' => Pasar::where('role', null)->get(),
            'harga' => $harga,
        ]);
    }
    public function login()
    {
        return view('login', [
            'title' => 'Login | Kota Kupang',
        ]);
    }


    public function pasarDetail($id)
    {
        $pasar = Pasar::find($id);

        $perubahan = produk::join('perubahan_harga', 'perubahan_harga.produk_id', 'produk.produk_id')
            ->where('perubahan_harga.pasar_id', $id)
            ->groupBy(['produk.produk_id'])
            ->get(['produk.*',]);

        return view('pasar-detail', [
            'title' => $pasar->nama_pasar . ' | Kota Kupang',
            'row' => $pasar,
            'rows' => $perubahan,
        ]);
    }


    public function detailProduk($pasar, $produk)
    {
        $detail_pasar = PerubahanHarga::where('perubahan_harga.produk_id', $produk)
            ->where('perubahan_harga.pasar_id', $pasar)
            ->orderBy('created_at', 'asc')
            ->get();
        $create = [];
        $harga = [];
        foreach ($detail_pasar as $p) {
            array_push($create, Carbon::parse($p->created_at)->format('d-m-Y'));
            array_push($harga, $p->harga);
        }

        return view('produk-detail', [
            'title' => 'Detail Produk | Kota Kupang',
            'rows' => $detail_pasar,
            'tgl' => $create,
            'harga' => $harga,
        ]);
    }
}
