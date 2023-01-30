<?php

namespace App\Http\Controllers;

use App\Models\PerubahanHarga;
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
        $data = PerubahanHarga::join('produk', 'produk.produk_id', '=', 'perubahan_harga.produk_id')->join('pasar', 'pasar.pasar_id', '=', 'perubahan_harga.pasar_id')->get(['nama_pasar', 'nama_produk', 'merk', 'satuan', 'harga', 'keterangan']);
        
        $row = [
             "data" => $data
        ];
     
         if (!$data) {
             return response()->json([
                 'success' => false,
                 'result' => []
             ]);  
         } 
     
         return response()->json([
             'success' => true,
             'result' => $row,
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
