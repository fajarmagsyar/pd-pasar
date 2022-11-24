<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasar extends Model
{
    use HasFactory;
    protected $keyType = 'string';
    protected $primaryKey = 'pasar_id';
    protected $table = 'pasar';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $guarded = ['pasar_id'];
}
