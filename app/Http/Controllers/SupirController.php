<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supir;

class SupirController extends Controller
{
    public function index(){
        $supirs = Supir::all();

        return view ('supir.index', compact('supirs') );
    }

    public function create(Request $request){
        $supirs = Supir::all();

        return view ('supir.create', compact('supirs'));
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'nama_supir' => 'required',
            'no_tlp' => 'required',
            'no_ktp' => 'required',
            'no_sim' => 'required',
            'aktif' => 'required'
        ]);

        $supir = Supir::create($validateData);

        return redirect()->route('supir.index')->with('success', 'Supir Berhasil Ditambahkan');
    }

    public function edit(Supir $supir){
        return view('supir.edit', compact('supir'));
    }
    
    public function update(Request $request, Supir $supir){    
        $validateData = $request->validate([
            'nama_supir' => 'required',
            'no_tlp' => 'required',
            'no_ktp' => 'required',
            'no_sim' => 'required',
            'aktif' => 'required'
        ]);
    
        $supir->update($validateData);
    
        return redirect()->route('supir.index')->with('success', 'Supir Berhasil diedit');
    }
    

    public function destroy (Supir $supir){
        $supir->delete();

        return redirect()->route('supir.index')->with('success', 'Asset deleted successfully.');
    }}
