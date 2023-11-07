<?php

namespace App\Http\Controllers;

use App\Models\Pasar;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        $pasar = Pasar::where('role', 'pasar')->get();
        return view('admin.laporan', [
            'title' => 'Cetak Laporan | Kota Kupang',
            'row' => $pasar,
        ]);
    }
}
