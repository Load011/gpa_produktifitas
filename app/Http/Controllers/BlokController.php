<?php

namespace App\Http\Controllers;

use App\Models\Blok;
use App\Models\Perkebunan;
use App\Models\Afdeling;

use Illuminate\Http\Request;

class BlokController extends Controller
{
    public function index(){
        $bloks = Blok::all();
        return view('blok.index', compact('bloks'));
    }

    public function create(Request $request){
        $kebuns = Perkebunan::all();
        $afdelings = Afdeling::all();

        return view('blok.create', compact('kebuns', 'afdelings'));
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'id_kebun' => 'required|exists:m_kebun,id',
            'id_afdeling' => 'required|exists:m_afdeling,id',
            'blok' => 'required|string|max:255',
            'tahun_tanam' => 'required|string|max:4',
            'komidel' => 'required|numeric',
            'luas' => 'required|numeric',
            'jmlh_pokok' => 'required|integer',
            'jmlh_tph' => 'required|integer',
            'jmlh_baris' => 'nullable|integer',
            'pjg_jalan' => 'required|integer',
            'aktif' => 'nullable|string|max:255',
        ]);
        Blok::create($request->all());

        return redirect()->route('blok.index');
    }

    public function edit(Blok $blok){
        $kebun = Perkebunan::all();
        $afdeling = Afdeling::all();
        return view('blok.edit', compact('blok', 'kebun', 'afdeling'));
    }
    
    public function update(Request $request, Blok $blok){    
        $validateData = $request->validate([
            'id_kebun' => 'required|exists:m_kebun,id',
            'id_afdeling' => 'required|exists:m_afdeling,id',
            'blok' => 'required|string|max:255',
            'tahun_tanam' => 'required|string|max:4',
            'komidel' => 'required|numeric',
            'luas' => 'required|numeric',
            'jmlh_pokok' => 'required|integer',
            'jmlh_tph' => 'required|integer',
            'jmlh_baris' => 'nullable|integer',
            'pjg_jalan' => 'required|integer',
            'aktif' => 'nullable|string|max:255',
        ]);
    
        $blok->update($validateData);
    
        return redirect()->route('blok.index')->with('success', 'Blok Berhasil diedit');
    }
    

    public function destroy (Blok $blok){
        $blok->delete();

        return redirect()->route('blok.index')->with('success', 'Asset deleted successfully.');
    }

    public function getAfdelings($kebun_id)
    {
        $afdelings = Afdeling::where('kebun_id', $kebun_id)->get();
        return response()->json($afdelings);
    }
}

