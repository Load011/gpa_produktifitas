<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use App\Models\Supir;
use App\Models\Mobil;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function index(){
        $drivers = Kendaraan::all();
        return view('kendaraan.index', compact('drivers'));
    }

    public function create()
    {
        $pengemudis = Supir::all();
        $mobils = Mobil::all();
        return view('kendaraan.create', compact('pengemudis', 'mobils'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'supir_id' => 'required|exists:drivers,id',
            'mobil_id' => 'required|exists:cars,id',
            'harga_satuan' => 'required',
            'bbm_ltr' => 'required'
        ]);

        Kendaraan::create($request->all());

        return redirect()->route('kendaraan.index')->with('success', 'Transaction created successfully.');
    }
}
