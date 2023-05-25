<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelas = Kelas::all();
        return view('Kelas.index',compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Kelas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'Nama_Kelas' => 'required',
        'Tahun_Pelajaran' => 'required',
        'Wali_Kelas' => 'required',
        'Array_Siswa' => 'required'

        ]);

    $kelas = new Kelas();
    $kelas->Nama_Kelas = $request->Nama_Kelas;
    $kelas->Tahun_Pelajaran = $request->Tahun_Pelajaran;
    $kelas->Wali_Kelas = $request->Wali_Kelas;
    $kelas->Array_Siswa = $request->Array_Siswa;
    $kelas->save();

    return redirect()->route('kelas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kelas $kelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kelas $kelas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kelas $kelas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id,$slug)
    {
          $kelas = Kelas::findOrFail($id);
        $kelas = Kelas::where('id',$slug)->first();
        $kelas->delete();

        return redirect()->back();
    }
}
