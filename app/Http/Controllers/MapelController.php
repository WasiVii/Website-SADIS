<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mapel = Mapel::all();
        return view('mapel.index', compact('mapel'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Mapel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
        'Nama_Mata_Pelajaran' => 'required'

        ]);

    $mapel = new Mapel();
    $mapel->Nama_Mata_Pelajaran = $request->Nama_Mata_Pelajaran;
    $mapel->save();
    return redirect()->route('Mapel.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Mapel $mapel, $slug)
    {
       $mapel = Mapel::where('id',$slug)->first();
        $mapel->delete();

        return redirect()->back();
    }
}
