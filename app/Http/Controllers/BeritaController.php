<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berita = Berita::all();
        return view('berita.index', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Berita.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'Judul' => 'required',
        'Isi_Berita' => 'required',
        'Tanggal_Publikasi' => 'required',
        'Staff_id' => 'required',
        'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

    $berita = new Berita();
    $berita->Judul = $request->Judul;
    $berita->Isi_Berita = $request->Isi_Berita;
    $berita->Tanggal_Publikasi = $request->Tanggal_Publikasi;
    $berita->Staff_id = $request->Staff_id;

    if ($request->hasFile('photo')) {
        $image = $request->file('photo');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $name);
        $berita->photo = $name;
    }

    $berita->save();

    return redirect()->route('berita.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Berita $berita)
    {
         return view('berita.show', compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Berita $berita)
    {
        return view('berita.edit', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Berita $berita)
    {
        $request->validate([
        'Judul' => 'required',
        'Isi_Berita' => 'required',
        'Tanggal_Publikasi' => 'required',
        'Staff_id' => 'required',
        'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

    $berita->Judul = $request->Judul;
    $berita->Isi_Berita = $request->Isi_Berita;
    $berita->Tanggal_Publikasi = $request->Tanggal_Publikasi;
    $berita->Staff_id = $request->Staff_id;

    if ($request->hasFile('photo')) {
        $image = $request->file('photo');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $name);
        $berita->photo = $name;
    }

    $berita->save();

    return redirect()->route('berita.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Berita $berita)
    {
        $berita->delete();
        return redirect()->route('berita.index')->with('success', 'Mentor deleted successfully.');
    }
}
