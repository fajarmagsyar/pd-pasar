<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class produk extends Model
{
    use HasFactory;
    protected $keyType = 'string';
    protected $primaryKey = 'produk_id';
    protected $table = 'produk';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $guarded = ['produk_id'];

    public function checkHargaKemarin($produk_id)
    {
        $yest = Carbon::now()->subDays(1);
        $q = PerubahanHarga::where('produk_id', $produk_id)
            ->whereDate('created_at', $yest)
            ->orderBy('created_at', 'DESC')
            ->select('harga')->first();

        $q == null ? $q = '-' : $q = number_format($q->harga);

        return $q;
    }

    public function checkHargaSekarang($produk_id)
    {
        $yest = Carbon::now();
        $q = PerubahanHarga::where('produk_id', $produk_id)
            ->whereDate('created_at', $yest)
            ->orderBy('created_at', 'DESC')
            ->select('harga')->first();

        $q == null ? $q = '-' : $q = number_format($q->harga);

        return $q;
    }

    public function checkHariIni($produk_id)
    {
        $yest = Carbon::now();
        return PerubahanHarga::where('produk_id', $produk_id)
            ->whereDate('created_at', $yest)
            ->orderBy('created_at', 'DESC')
            ->count() >= 1;
    }
}
