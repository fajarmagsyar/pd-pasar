<?php

namespace App\Http\Controllers;

use App\Models\Pasar;
use App\Models\PerubahanHarga;
use App\Models\produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Produk as GlobalProduk;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'title' => 'Admin PD-Pasar | SODAMOLEK',
            'active' => 'dashboard',
        ]);
    }

    public function pasar()
    {
        return view('admin.pasar.index', [
            'title' => 'Data Pasar | SODAMOLEK',
            'active' => 'pasar',
            'rows' => Pasar::whereNull('role')->get(),
        ]);
    }
    public function produk()
    {
        return view('admin.produk.index', [
            'title' => 'Data Produk | SODAMOLEK',
            'active' => 'produk',
            'rows' => produk::get(),
        ]);
    }
    public function harga()
    {
        return view('admin.harga.index', [
            'title' => 'Data harga | SODAMOLEK',
            'active' => 'harga',
        ]);
    }

    public function pasarTambah()
    {
        return view('admin.pasar.tambah', [
            'title' => 'Tambah Data Pasar | SODAMOLEK',
            'active' => 'pasar',
        ]);
    }

    public function pasarStore(Request $request)
    {
        $data = [
            'nama_pasar' => $request->input('nama_pasar'),
            'alamat_pasar' => $request->input('alamat_pasar'),
            'telp' => $request->input('telp'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ];

        Pasar::create($data);

        return redirect('/admn-pg/pasar')->with('success', 'Input data berhasil');
    }

    public function pasarEdit($id)
    {
        return view('admin.pasar.edit', [
            'title' => 'Edit Data Pasar | SODAMOLEK',
            'active' => 'pasar',
            'r' => Pasar::find($id),
        ]);
    }

    public function pasarUpdate(Request $request, $id)
    {
        $data = [
            'nama_pasar' => $request->input('nama_pasar'),
            'alamat_pasar' => $request->input('alamat_pasar'),
            'telp' => $request->input('telp'),
            'email' => $request->input('email'),
        ];

        if ($request->input('password') != null) {
            $data['password'] = Hash::make($request->input('password'));
        }

        Pasar::find($id)->update($data);

        return redirect('/admn-pg/pasar')->with('success', 'Input data diupdate');
    }

    public function pasarHapus($id)
    {
        Pasar::destroy($id);
        return redirect('/admn-pg/pasar')->with('success', 'Input data dihapus');
    }

    public function produkTambah()
    {
        return view('admin.produk.tambah', [
            'title' => 'Tambah Data Produk | SODAMOLEK',
            'active' => 'produk',
            'pasar' => Pasar::get(),
        ]);
    }

    public function produkStore(Request $request)
    {
        $data = [
            'nama_produk' => $request->input('nama_produk'),
            'merk' => $request->input('merk'),
            'satuan' => $request->input('satuan'),
            'keterangan' => $request->input('keterangan'),
        ];

        // dd($request->input('pasar'));

        $input = produk::create($data)->getAttributes();


        foreach ($request->input('pasar') as $p) {

            $detail = [
                'harga' => $request->input('harga'),
                'produk_id' => $input['produk_id'],
                'pasar_id' => $p,
            ];
            PerubahanHarga::create($detail);
        }


        return redirect('/admn-pg/produk')->with('success', 'Input data berhasil');
    }
    public function produkEdit($id)
    {
        return view('admin.produk.edit', [
            'title' => 'Edit Data Produk | SODAMOLEK',
            'active' => 'produk',
            'w' => Produk::find($id),
        ]);
    }
    public function produkUpdate(Request $request, $id)
    {
        $data = [
            'nama_produk' => $request->input('nama_produk'),
            'merek' => $request->input('merk'),
            'satuan' => $request->input('satuan'),
            'keterangan' => $request->input('keterangan'),
        ];
        produk::find($id)->update($data);

        return redirect('/admn-pg/produk')->with('success', 'Input data diupdate');
    }
    public function produkHapus($id)
    {
        produk::destroy($id);
        return redirect('/admn-pg/produk')->with('success', 'Input data dihapus');
    }

    public function tambahHarga($id, produk $prod)
    {
        $produk = produk::find($id);
        $isChecked = $prod->checkHariIni($id);
        $harga = [
            'kemarin' => $prod->checkHargaKemarin($id),
            'sekarang' => $prod->checkHargaSekarang($id),
        ];
        return view('admin.produk.harga', [
            'title' => 'Data Produk | SODAMOLEK',
            'active' => 'produk',
            'rows' => produk::get(),
            'isChecked' => $isChecked,
            'produk' => $produk,
            'harga' => $harga,
            'pasar' => Pasar::get(),
        ]);
    }
    public function hargaTambahStore(Request $request, $id)
    {
        foreach ($request->input('pasar') as $p) {

            $detail = [
                'harga' => $request->input('harga'),
                'produk_id' => $id,
                'pasar_id' => $p,
            ];
            PerubahanHarga::create($detail);
        }


        return redirect('admn-pg/produk/' . $id . '/tambah-harga')->with('success', 'Input data berhasil');
    }
}
