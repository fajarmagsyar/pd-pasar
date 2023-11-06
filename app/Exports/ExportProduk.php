<?php

namespace App\Exports;

use App\Models\Produk;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportProduk implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    private $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function collection()
    {
        $rows = [];
        $products = produk::join('perubahan_harga', 'perubahan_harga.produk_id', 'produk.produk_id')
            ->where('perubahan_harga.pasar_id', $this->id)
            ->groupBy(['produk.produk_id'])
            ->get(['produk.*']);
        

        foreach ($products as $key => $product) {
            
            $rows[] = [
                'no' => $key + 1,
                'nama_produk' => $product['nama_produk'],
                'harga_saat_ini' => produk::checkHargaSekarang($product['produk_id'], $this->id),
                'satuan' => $product['satuan']
            ]; 
        }
       
        return collect($rows);
    }

    public function headings(): array
    {
        return ["No", "Nama", "Harga Saat Ini", "Satuan"];
    }
}
