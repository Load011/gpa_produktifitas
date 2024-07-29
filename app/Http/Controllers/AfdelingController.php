<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Afdeling;
use App\Models\Perkebunan;

class AfdelingController extends Controller
{
    public function index()
    {
        $afds = Afdeling::all();
        return view('afdeling.index', compact('afds'));
    }

    public function create()
    {
        $kebuns = Perkebunan::all();
        return view('afdeling.create', compact('kebuns'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_afd' => 'required|string|max:255',
            'no_afd' => 'required|string|max:255',
            'alias_afd' => 'required|string',
            'kebun_id' => 'required|exists:m_kebun,id'
        ]);

        Afdeling::create($request->all());

        return redirect()->route('afdeling.index')->with('success', 'Afdeling created successfully.');
    }

    public function show(Afdeling $afds)
    {
        $kebuns = Perkebunan::all();
        return view('afdeling.show', compact('afds', 'kebuns'));
    }

    public function edit(Afdeling $afds)
    {
        return view('afdeling.edit', compact('afds'));
    }

    public function update(Request $request, Afdeling $afds)
    {
        $request->validate([
            'nama_afd' => 'required|string|max:255',
            'no_afd' => 'required|string|max:255',
            'alias_afd' => 'required|string',
            'kebun_id' => 'required|exists:m_kebun,id'
        ]);

        $afds->update($request->all());

        return redirect()->route('afdeling.index')->with('success', 'Afdeling updated successfully.');
    }

    public function destroy(Afdeling $afds)
    {
        $afds->delete();

        return redirect()->route('afdeling.index')->with('success', 'Afdeling deleted successfully.');
    }
}
