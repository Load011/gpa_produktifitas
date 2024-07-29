<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Trip;
use App\Models\Perkebunan;
use App\Models\Afdeling;

class TripController extends Controller
{
    public function index(){
        $trips = Trip::all();
        $kebuns = Perkebunan::all();

        return view('trip.index', compact('trips', 'kebuns'));
    }

    public function create()
    {
        $kebuns = Perkebunan::all();
        return view('trip.create', compact('kebuns'));
    }

    public function edit(Trip $trip)
    {
        $kebuns = Perkebunan::all();
        $afdelingsAsal = Afdeling::where('kebun_id', $trip->asal_trip)->get();
        return view('trip.edit', compact('trip', 'kebuns', 'afdelingsAsal'));
    }

    public function store(Request $request)
    {
        $request['harga_trip'] = $this->convertToNumeric($request['harga_trip']);

        $request->validate([
            'asal_trip' => 'required|exists:m_kebun,id',
            'tujuan_trip' => 'required|exists:m_kebun,id',
            'afdeling' => 'required|exists:m_afdeling,id',
            'harga_trip' => 'required|numeric',
            'jarak_trip' => 'required|numeric',
        ]);

        Trip::create($request->all());

        return redirect()->route('trip.index')->with('success', 'Trip created successfully.');
    }

    public function update(Request $request, Trip $trip)
    {
        $request['harga_trip'] = $this->convertToNumeric($request['harga_trip']);

        $request->validate([
            'asal_trip' => 'required|exists:m_kebun,id',
            'tujuan_trip' => 'required|exists:m_kebun,id',
            'afdeling' => 'required|exists:m_afdeling,id',
            'harga_trip' => 'required|numeric',
            'jarak_trip' => 'required|numeric',
        ]);

        $trip->update($request->all());

        return redirect()->route('trip.index')->with('success', 'Trip updated successfully.');
    }
    public function destroy(Trip $trip)
    {
        $trip->delete();

        return redirect()->route('trip.index')->with('success', 'Trip deleted successfully.');
    }

    public function getAfdelings($kebun_id)
    {
        $afdelings = Afdeling::where('kebun_id', $kebun_id)->get();
        return response()->json($afdelings);
    }


    private function convertToNumeric($value)
    {
        return empty($value) ? null : floatval(str_replace('.', '', $value));
    }

}
