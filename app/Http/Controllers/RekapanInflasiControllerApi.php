<?php

namespace App\Http\Controllers;

use App\Models\PerubahanHarga;
use App\Models\produk as Produk;
use Illuminate\Http\Request;

class RekapanInflasiControllerApi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function index()
     {          
        //  $data = json_decode(file_get_contents(public_path() . "/inflasi.json"), true);
        $data = PerubahanHarga::join('produk', 'produk.produk_id', '=', 'perubahan_harga.produk_id')->join('pasar', 'pasar.pasar_id', '=', 'perubahan_harga.pasar_id')->groupBy(['perubahan_harga.produk_id', 'perubahan_harga.created_at', 'perubahan_harga.harga', 'produk.produk_id', 'pasar.pasar_id'])->orderBy('perubahan_harga.created_at', 'DESC')->get(['nama_pasar', 'nama_produk', 'merk', 'satuan', 'harga as today_price','harga as yesterday_price', 'harga as perubahan', 'produk.produk_id', 'pasar.pasar_id', 'perubahan_harga.created_at']);
        
        $rows = [];
        foreach ($data->unique('produk_id') as $h) {
            $selisih = Produk::checkHargaSekarang($h->produk_id, $h->pasar_id) == '-' ? 'Harga belum diupdate' : ((int) Produk::checkHargaKemarin($h->produk_id, $h->pasar_id) / (int)Produk::checkHargaSekarang($h->produk_id, $h->pasar_id) - 1) * 100 * -1 . ' %';
            
            array_push($rows, [
                'nama_pasar' => $h['nama_pasar'], 
                'produk_id' => $h['produk_id'], 
                'nama_produk' => $h['nama_produk'], 
                'merk' => $h['merk'], 
                'satuan' => $h['satuan'], 
                'today_price' => Produk::checkHargaSekarang($h->produk_id, $h->pasar_id), 
                'yesterday_price' => Produk::checkHargaKemarin($h->produk_id, $h->pasar_id), 
                'perubahan' => sprintf("%.2f", $selisih), 
                'created_at' => $h['created_at']
            ]); 
        }
     
         if (!$data) {
             return response()->json([
                 'success' => false,
                 'result' => []
             ]);  
         } 
     
         return response()->json([
             'success' => true,
             'result' => [
                'data' => $rows
           ],
         ]);
     }
 
     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
         //
     }
 
     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(Request $request)
     {
         //
     }
 
     /**
      * Display the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function show($id)
     {
         //
     }
 
     /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function edit($id)
     {
         //
     }
 
     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request, $id)
     {
         //
     }
 
     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
         //
     }
}
