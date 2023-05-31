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
        $title = 'Delete Kelas!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
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

    return redirect()->route('kelas.index')->with('toast_success','Kelas Creted Successfully');
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
    public function edit($id)
    {
        $kelas = Kelas::findOrFail($id);
        return view('Kelas.edit' , compact('kelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
         $request->validate([
        'Nama_Kelas' => 'required',
        'Tahun_Pelajaran' => 'required',
        'Wali_Kelas' => 'required',
        'Array_Siswa' => 'required'

        ]);
        $kelas = Kelas::findOrFail($id);
    $kelas->Nama_Kelas = $request->Nama_Kelas;
    $kelas->Tahun_Pelajaran = $request->Tahun_Pelajaran;
    $kelas->Wali_Kelas = $request->Wali_Kelas;
    $kelas->Array_Siswa = $request->Array_Siswa;
    $kelas->save();

    return redirect()->route('kelas.index')->with('toast_success','Kelas Updated Successfully');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kelas $kelas, $slug)
    {
        $kelas = Kelas::where('id',$slug)->first();
        $kelas->delete();

        return redirect()->back()->with('success','Kelas Deleted Successfully');
    }
}
