<?php

namespace App\Http\Controllers;

use App\Models\Sarana;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SaranaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sarana = Sarana::all();
        $title = 'Delete Sarana!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('Sarana.index',compact('sarana'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Sarana.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'nama_Sarana' => 'required',
        'Ketersediaan' => 'required',
        'Lokasi' => 'required'

        ]);

    $sarana = new Sarana();
    $sarana->nama_Sarana = $request->nama_Sarana;
    $sarana->Ketersediaan = $request->Ketersediaan;
    $sarana->Lokasi = $request->Lokasi;
    $sarana->save();

    return redirect()->route('sarana.index')->with('toast_success','Sarana Creted Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $saranaprasarana = DB::table('sarana')->orderby('id', 'desc')->get();
        return view('layouts.sarana_prasarana', ['saranaprasarana'=>$saranaprasarana]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sarana $sarana)
    {
        return view('sarana.edit', compact('sarana'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sarana $sarana)
    {
         $request->validate([
        'nama_Sarana' => 'required',
        'Ketersediaan' => 'required',
        'Lokasi' => 'required'

        ]);

    $sarana->nama_Sarana = $request->nama_Sarana;
    $sarana->Ketersediaan = $request->Ketersediaan;
    $sarana->Lokasi = $request->Lokasi;
    $sarana->save();

    return redirect()->route('sarana.index')->with('toast_success','Sarana Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sarana $sarana)
    {
         $sarana->delete();
        return redirect()->route('sarana.index')->with('success','Sarana Deleted Successfully');
    }
}
