<?php

namespace App\Http\Controllers;

use App\Models\PHK;
use App\Models\Karyawan;

use Illuminate\Http\Request;

class PHKController extends Controller
{
    public function index(){
        $phks = PHK::all();

        return view ('phk.index', compact('phks'));
    }

    public function create(Request $request){
        $phk = PHK::all();
        $karyawan = Karyawan::all();
        return view ('phk.create', compact('phk', 'karyawan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_karyawan' => 'required',
            'nik' => 'required',
            'no_kk' => 'required',
            'jabatan' => 'required',
            'suku' => 'required',
        ]);

        PHK::create($request->all());

        return redirect()->route('phk.create')->with('success', 'Karyawan has been fired successfully.');
    }

    public function getKaryawan($id)
    {
        $karyawan = Karyawan::findOrFail($id);
        return response()->json($karyawan);
    }
}
