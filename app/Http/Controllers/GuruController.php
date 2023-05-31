<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = DB::table('users')->get();
        $kelas = DB::table('kelas')->get();
        $mapel = DB::table('mata_pelajaran')->get();
        $guru = Guru::join('users', 'guru.users_id','=','users.id')
        ->join('kelas','guru.kelas_id','=','kelas.id')
        ->join('mata_pelajaran','guru.mata_pelajaran_id','=','mata_pelajaran.id')
        ->select('guru.*','users.name as user','kelas.Nama_Kelas as kelas','mata_pelajaran.Nama_Mata_Pelajaran as mapel')
        ->get();
        $title = 'Delete Guru!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('guru.index', compact('guru','kelas','user','mapel'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = DB::table('users')->get();
        $kelas = DB::table('kelas')->get();
        $mapel = DB::table('mata_pelajaran')->get();
        $guru = Guru::join('users', 'guru.users_id','=','users.id')
        ->join('kelas','guru.kelas_id','=','kelas.id')
        ->join('mata_pelajaran','guru.mata_pelajaran_id','=','mata_pelajaran.id')
        ->select('guru.*','users.name as user','kelas.Nama_Kelas','mata_pelajaran.Nama_Mata_Pelajaran')
        ->get();
        return view('guru.create', compact('guru','kelas','user','mapel'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
        'Nama_Guru' => 'required',
        'Mata_Pelajaran' => 'required',
        'Jenis_Kelamin' => 'required',
        'Alamat' => 'required',
        'Nomor_Telepon' => 'required',
        'Image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'Users_id' => 'required',
        'Kelas_id' => 'required',
        'Mata_Pelajaran_id' => 'required'
        ]);

    $guru = new Guru();
    $guru->Nama_Guru = $request->Nama_Guru;
    $guru->Mata_Pelajaran = $request->Mata_Pelajaran;
    $guru->Jenis_Kelamin = $request->Jenis_Kelamin;
    $guru->Alamat = $request->Alamat;
    $guru->Nomor_Telepon = $request->Nomor_Telepon;
    $guru->Users_id = $request->Users_id;
    $guru->Kelas_id = $request->Kelas_id;
    $guru->Mata_Pelajaran_id = $request->Mata_Pelajaran_id;

    if ($request->hasFile('photo')) {
        $image = $request->file('photo');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $name);
        $guru->photo = $name;
    }

    $guru->save();

    return redirect()->route('guru.index')->with('toast_success','Guru Creted Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $mapel = DB::table('mata_pelajaran')->get();
        $guru = DB::table('guru')->join('mata_pelajaran','guru.mata_pelajaran_id','=','mata_pelajaran.id')
        ->select('guru.*','mata_pelajaran.Nama_Mata_Pelajaran as mapel')
        ->get();
        return view('layouts.data_guru', compact('guru','mapel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $user = DB::table('users')->get();
        $kelas = DB::table('kelas')->get();
        $mapel = DB::table('mata_pelajaran')->get();
        $guru = Guru::findOrFail($id);
        return view('guru.edit', compact('guru','kelas','mapel','user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {

         $request->validate([
        'Nama_Guru' => 'required',
        'Mata_Pelajaran' => 'required',
        'Jenis_Kelamin' => 'required',
        'Alamat' => 'required',
        'Nomor_Telepon' => 'required',
        'Image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'Users_id' => 'required',
        'Kelas_id' => 'required',
        'Mata_Pelajaran_id' => 'required'
        ]);

    $guru = Guru::findOrFail($id);
    $guru->Nama_Guru = $request->Nama_Guru;
    $guru->Mata_Pelajaran = $request->Mata_Pelajaran;
    $guru->Jenis_Kelamin = $request->Jenis_Kelamin;
    $guru->Alamat = $request->Alamat;
    $guru->Nomor_Telepon = $request->Nomor_Telepon;
    $guru->Users_id = $request->Users_id;
    $guru->Kelas_id = $request->Kelas_id;
    $guru->Mata_Pelajaran_id = $request->Mata_Pelajaran_id;

    if ($request->hasFile('photo')) {
        $image = $request->file('photo');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $name);
        $guru->photo = $name;
    }

    $guru->save();

    return redirect()->route('guru.index')->with('toast_success','Guru Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guru $guru)
    {
         $guru->delete();
    return redirect()->route('guru.index')->with('success', 'Guru deleted successfully.');
    }
}
