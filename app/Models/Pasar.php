<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Pasar extends Authenticatable
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


    static public function hasRole($role)
    {
        return Pasar::where('pasar_id', auth()->user()->pasar_id)->where('role', $role)->count() == 1;
    }
}
