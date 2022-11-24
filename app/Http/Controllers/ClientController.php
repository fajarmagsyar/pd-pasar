<?php

namespace App\Http\Controllers;

use App\Models\Pasar;
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
}
