<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    public function index(){
        $mobils = Mobil::all();

        return view ('mobil.index', compact('mobils') );
    }

    public function create(Request $request){
        $mobils = Mobil::all();

        return view ('mobil.create', compact('mobils'));
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'jenis_mobil' => 'required',
            'plat_bk' => 'required',
            'no_lambung' => 'required',
        ]);

        $mobil = Mobil::create($validateData);

        return redirect()->route('mobil.index')->with('success', 'Mobil Berhasil Ditambahkan');
    }

    public function edit(Mobil $mobil){
        return view('mobil.edit', compact('mobil'));
    }
    
    public function update(Request $request, Mobil $mobil){    
        $validateData = $request->validate([
            'jenis_mobil' => 'required',
            'plat_bk' => 'required',
            'no_lambung' => 'required',
        ]);
    
        $mobil->update($validateData);
    
        return redirect()->route('mobil.index')->with('success', 'Mobil Berhasil diedit');
    }
    

    public function destroy (Mobil $mobil){
        $mobil->delete();

        return redirect()->route('mobil.index')->with('success', 'Asset deleted successfully.');
    }

}
