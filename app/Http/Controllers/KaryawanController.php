<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\Karyawan;
use App\Models\Perkebunan;
use App\Models\Afdeling;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawans = Karyawan::all();
        return view('karyawan.index', compact('karyawans'));
    }

    public function create()
    {
        $jabatans = Jabatan::all();
        $kebuns = Perkebunan::all();
        $provinces = config('province');
        return view('karyawan.create', compact('jabatans', 'provinces', 'kebuns'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nik' => 'nullable|integer',
            'no_kk' => 'nullable|string|max:255',
            'nama' => 'nullable|string|max:255',
            'jk' => 'nullable|string|max:255',
            'tempat_lahir' => 'nullable|string|max:255',
            'tanggal_lahir' => 'nullable|datetime',
            'agama' => 'nullable|string|max:255',
            'pendidikan' => 'nullable|string|max:255',
            'jurusan' => 'nullable|string|max:255',
            'status' => 'nullable|string|max:255',
            'jabatan_pekerjaan' => 'nullable|string|max:255',
            'tanggal_masuk' => 'nullable|datetime',
            'tahun_masuk' => 'nullable|integer',
            'gaji_pokok' => 'nullable|integer',
            'iuran' => 'nullable|integer',
            'alamat' => 'nullable|string|max:255',
            'desa' => 'nullable|string|max:255',
            'kecamatan' => 'nullable|string|max:255',
            'kabupaten' => 'nullable|string|max:255',
            'provinsi' => 'nullable|string|max:255',
            'negara' => 'nullable|string|max:255',
            'kode_pos' => 'nullable|string|max:255',
            'no_hp' => 'nullable|string|max:255',
            'email' => 'nullable|string|max:255',
            'npwp' => 'nullable|string|max:255',
            'nama_ibu_kandung' => 'nullable|string|max:255',
            'suku' => 'nullable|string|max:255',
            'berat_badan' => 'nullable|integer',
            'tinggi_badan' => 'nullable|integer',
            'nama_bank' => 'nullable|string|max:255',
            'nomor_rekening' => 'nullable|string|max:255',
            'total_gaji' => 'nullable|integer',
            'id_kebun' => 'nullable|integer',
            'id_afdeling' => 'nullable|integer',
            'aktif' => 'nullable|string|max:255',
            'masa_kontrak' => 'nullable|string|max:255',
            'surat_kontrak' => 'nullable|string|max:255',
        ]);

        Karyawan::create($validatedData);

        return redirect()->route('karyawan.index')->with('success', 'Karyawan created successfully.');
    }

    public function show(Karyawan $karyawan)
    {
        return view('karyawan.show', compact('jabatans', 'provinces', 'kebuns'));
    }

    public function edit(Karyawan $karyawan)
    {
        $jabatans = Jabatan::all();
        $kebuns = Perkebunan::all();
        $provinces = config('province');
        $afdelingsAsal = Afdeling::where('id_kebun', $karyawan->id_kebun)->get();
        return view('karyawan.edit', compact('karyawan'));
    }

    public function update(Request $request, Karyawan $karyawan)
    {
        $validatedData = $request->validate([
            'nik' => 'nullable|integer',
            'no_kk' => 'nullable|string|max:255',
            'nama' => 'nullable|string|max:255',
            'jk' => 'nullable|string|max:255',
            'tempat_lahir' => 'nullable|string|max:255',
            'tanggal_lahir' => 'nullable|datetime',
            'agama' => 'nullable|string|max:255',
            'pendidikan' => 'nullable|string|max:255',
            'jurusan' => 'nullable|string|max:255',
            'status' => 'nullable|string|max:255',
            'jabatan_pekerjaan' => 'nullable|string|max:255',
            'tanggal_masuk' => 'nullable|datetime',
            'tahun_masuk' => 'nullable|integer',
            'gaji_pokok' => 'nullable|integer',
            'iuran' => 'nullable|integer',
            'alamat' => 'nullable|string|max:255',
            'desa' => 'nullable|string|max:255',
            'kecamatan' => 'nullable|string|max:255',
            'kabupaten' => 'nullable|string|max:255',
            'provinsi' => 'nullable|string|max:255',
            'negara' => 'nullable|string|max:255',
            'kode_pos' => 'nullable|string|max:255',
            'no_hp' => 'nullable|string|max:255',
            'email' => 'nullable|string|max:255',
            'npwp' => 'nullable|string|max:255',
            'nama_ibu_kandung' => 'nullable|string|max:255',
            'suku' => 'nullable|string|max:255',
            'berat_badan' => 'nullable|integer',
            'tinggi_badan' => 'nullable|integer',
            'nama_bank' => 'nullable|string|max:255',
            'nomor_rekening' => 'nullable|string|max:255',
            'total_gaji' => 'nullable|integer',
            'id_kebun' => 'nullable|integer',
            'id_afdeling' => 'nullable|integer',
            'aktif' => 'nullable|string|max:255',
            'masa_kontrak' => 'nullable|string|max:255',
            'surat_kontrak' => 'nullable|string|max:255',
        ]);

        $karyawan->update($validatedData);

        return redirect()->route('karyawan.index')->with('success', 'Karyawan updated successfully.');
    }

    public function destroy(Karyawan $karyawan)
    {
        $karyawan->delete();
        return redirect()->route('karyawan.index')->with('success', 'Karyawan deleted successfully.');
    }

    public function getAfdelings($kebun_id)
    {
        $afdelings = Afdeling::where('kebun_id', $kebun_id)->get();
        return response()->json($afdelings);
    }
}
