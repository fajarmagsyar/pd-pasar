<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerubahanHarga extends Model
{
    use HasFactory;
    protected $keyType = 'string';
    protected $primaryKey = 'perubahan_harga_id';
    protected $table = 'perubahan_harga';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $guarded = ['perubahan_harga_id'];
}
