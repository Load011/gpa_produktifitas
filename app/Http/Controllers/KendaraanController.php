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
        $pengemudis = Supir::all();
        $mobils = Mobil::all();
        return view('kendaraan.index', compact('drivers', 'pengemudis', 'mobils'));
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
            'supir_id' => 'required|exists:m_supir,id',
            'mobil_id' => 'required|exists:m_mobil,id',
        ]);

        Kendaraan::create($request->all());

        return redirect()->route('kendaraan.index')->with('success', 'Transaction created successfully.');
    }
    public function edit(Kendaraan $kendaraan){
        return view('kendaraan.edit', compact('kendaraan'));
    }
    
    public function update(Request $request, Kendaraan $kendaraan){    
        $validateData = $request->validate([
            'supir_id' => 'required|exists:m_supir,id',
            'mobil_id' => 'required|exists:m_mobil,id',
        ]);
    
        $kendaraan->update($validateData);
    
        return redirect()->route('kendaraan.index')->with('success', 'Mobil Berhasil diedit');
    }
    

    public function destroy (Mobil $mobil){
        $mobil->delete();

        return redirect()->route('mobil.index')->with('success', 'Asset deleted successfully.');
    }

}
