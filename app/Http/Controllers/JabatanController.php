<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jabatan;

class JabatanController extends Controller
{
    public function index(){
        $jabatans = Jabatan::all();

        return view('jabatan.index', compact('jabatans'));
    }

    public function create(Request $request){
        $jabatans = Jabatan::all();

        return view ('jabatan.create', compact('jabatans'));
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'nama_jabatan' =>'required'
        ]);

        $jabatan = Jabatan::create($validateData);

        return redirect()->route('jabatan.index')->with('success', 'Jabatan Berhasil Ditambahkan');
    }

    public function edit(Jabatan $jabatan){
        return view('jabatan.edit', compact('jabatan'));
    }
    
    public function update(Request $request, Jabatan $jabatan){    
        $validateData = $request->validate([
            'nama_jabatan' => 'required'
        ]);
    
        $jabatan->update($validateData);
    
        return redirect()->route('jabatan.index')->with('success', 'Jabatan Berhasil diedit');
    }
    

    public function destroy (Jabatan $jabatan){
        $jabatan->delete();

        return redirect()->route('jabatan.index')->with('success', 'Asset deleted successfully.');
    }
}
