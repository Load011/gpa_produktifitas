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
        $request['harga_sparepart'] = $this->convertToNumeric($request['harga_sparepart']);
        $request['harga_ban'] = $this->convertToNumeric($request['harga_ban']);
        $request['harga_perbaikan'] = $this->convertToNumeric($request['harga_perbaikan']);
        $request['harga_bbm'] = $this->convertToNumeric($request['harga_bbm']);

        $request->validate([
            'keterangan' => 'required|string|max:255',
            'harga_sparepart',
            'harga_ban',
            'harga_perbaikan',
            'harga_bbm' => 'required|numeric',
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
