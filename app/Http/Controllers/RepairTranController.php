<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RepairTransaction;
use App\Models\Mobil;

class RepairTranController extends Controller
{
    public function index()
    {
        $repairTransactions = RepairTransaction::with('mobil')->get();
        return view('perbaikan.index', compact('repairTransactions'));
    }

    public function create()
    {
        $mobils = Mobil::all();
        return view('perbaikan.create', compact('mobils'));
    }

    public function store(Request $request)
    {
        $request['harga_sparepart'] = preg_replace('/\D/', '', $request['harga_sparepart']);
        $request['harga_ban'] = preg_replace('/\D/', '', $request['harga_ban']);
        $request['harga_perbaikan'] = preg_replace('/\D/', '', $request['harga_perbaikan']);
        // $request['harga_bbm'] = preg_replace('/\D/', '', $request['harga_bbm']);

        $request->validate([
            'keterangan' => 'required|string|max:255',
            'harga_sparepart' => 'required|numeric',
            'harga_ban' => 'required|numeric',
            'harga_perbaikan' => 'required|numeric',
            // 'harga_bbm' => 'required|numeric',
            'mobil_id' => 'required|exists:m_mobil,id',
            'tanggal_perbaikan' => 'required'
        ]);

        RepairTransaction::create($request->all());

        return redirect()->route('perbaikan.index')->with('success', 'Repair transaction created successfully.');
    }

    private function convertToNumeric($value)
    {
        return empty($value) ? null : floatval(str_replace('.', '', $value));
    }
}
