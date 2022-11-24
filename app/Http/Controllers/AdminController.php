<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        ]);
    }
}
