<?php

namespace App\Http\Controllers;

use App\Models\Perkebunan;
use Illuminate\Http\Request;

class KebunController extends Controller
{
    public function index(){
        $kebuns = Perkebunan::all();
        return view('kebun.index', compact('kebuns'));
    }

    public function create()
    {
        return view('kebun.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kebun' => 'required|string|max:255',
            'alias' => 'required',
            'aktif' => 'required',
        ]);

        Perkebunan::create($request->all());

        return redirect()->route('kebun.index')->with('success', 'Perkebunan created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Perkebunan $kebun)
    {
        return view('kebun.show', compact('kebun'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Perkebunan $kebun)
    {
        return view('kebun.edit', compact('kebun'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Perkebunan $kebun)
    {
        $request->validate([
            'nama_kebun' => 'required|string|max:255',
            'alias' => 'required|string|max:255',
            'aktif' => 'required',
        ]);

        $kebun->update($request->all());

        return redirect()->route('kebun.index')->with('success', 'Perkebunan updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Perkebunan $kebun)
    {
        $kebun->delete();

        return redirect()->route('kebun.index')->with('success', 'Perkebunan deleted successfully.');
    }
}
