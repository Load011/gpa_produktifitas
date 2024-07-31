<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pengawas;
use App\Models\Perkebunan;

class PengawasController extends Controller
{
    public function index(){
        $pengs = Pengawas::all();

        return view ('pengawas.index', compact('pengs'));
    }

    public function create(Request $request){
        $kebuns = Perkebunan::all();

        return view ('pengawas.create', compact('kebuns'));
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'nama_pengawas' =>'required',
            'id_kebun' => 'required|exists:m_kebun,id',
            'no_tlp' => 'required',
        ]);
        Pengawas::create($request->all());

        return redirect()->route('pengawas.index')->with('success', 'Pengawas Berhasil Ditambahkan');
    }

    public function edit(Pengawas $pengawas){
        return view('pengawas.edit', compact('pengawas'));
    }
    
    public function update(Request $request, Pengawas $pengawas){    
        $validateData = $request->validate([
            
            'nama_pengawas' =>'required',
            'id_kebun' => 'required|exists:m_kebun,id',
            'no_tlp' => 'required',
        ]);
    
        $pengawas->update($validateData);
    
        return redirect()->route('pengawas.index')->with('success', 'Pengawas Berhasil diedit');
    }
    

    public function destroy (Pengawas $pengawas){
        $pengawas->delete();

        return redirect()->route('pengawas.index')->with('success', 'Asset deleted successfully.');
    }
}