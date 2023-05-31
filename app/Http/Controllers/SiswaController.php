<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = DB::table('users')->get();
        $kelas = DB::table('kelas')->get();
        $ekstrakulikuler = DB::table('Ekstrakulikuler')->get();
        $siswa = Siswa::join('users','siswa.Users_id','=','users.id')
        ->join('kelas','siswa.Kelas_id','=','kelas.id')
        ->join('ekstrakulikuler','siswa.ekstrakulikuler_id','=','ekstrakulikuler.id')
        ->select('siswa.*','users.name as user','kelas.Nama_Kelas as kelas','ekstrakulikuler.Nama_Ekstrakulikuler as ekstrakulikuler')
        ->get();
        $title = 'Delete Siswa!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('siswa.index',compact('siswa','kelas','user','ekstrakulikuler'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = DB::table('users')->get();
        $kelas = DB::table('kelas')->get();
        $ekstrakulikuler = DB::table('Ekstrakulikuler')->get();
        $siswa = Siswa::join('users','siswa.Users_id','=','users.id')
        ->join('kelas','siswa.Kelas_id','=','kelas.id')
        ->join('ekstrakulikuler','siswa.ekstrakulikuler_id','=','ekstrakulikuler.id')
        ->select('siswa.*','users.name as user','kelas.Nama_Kelas as kelas','ekstrakulikuler.Nama_Ekstrakulikuler as ekstrakulikuler')
        ->get();
        return view('siswa.create',compact('siswa','kelas','user','ekstrakulikuler'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $request->validate([
        'Nama_Siswa' => 'required',
        'Tanggal_Lahir' => 'required',
        'Alamat' => 'required',
        'Jenis_Kelamin' => 'required',
        'Nomor_Telepon' => 'required',
        'Email' => 'required',
        'Tahun_Lulus' => 'required',
        'Users_id' => 'required',
        'Kelas_id' => 'required',
        'Ekstrakulikuler_id' => 'required'
        ]);

    $siswa = new Siswa();
    $siswa->Nama_Siswa = $request->Nama_Siswa;
    $siswa->Tanggal_Lahir = $request->Tanggal_Lahir;
    $siswa->Alamat = $request->Alamat;
    $siswa->Jenis_Kelamin = $request->Jenis_Kelamin;
    $siswa->Nomor_Telepon = $request->Nomor_Telepon;
    $siswa->Email = $request->Email;
    $siswa->Tahun_Lulus = $request->Tahun_Lulus;
    $siswa->Users_id = $request->Users_id;
    $siswa->Kelas_id = $request->Kelas_id;
    $siswa->Ekstrakulikuler_id = $request->Ekstrakulikuler_id;
    $siswa->save();

    return redirect()->route('siswa.index')->with('toast_success', 'Created Siswa Succesfully');;
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $siswa = DB::table('siswa')->orderby('id', 'asc')->get();
        return view('layouts.data_siswa', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = DB::table('users')->get();
        $kelas = DB::table('kelas')->get();
        $ekstrakulikuler = DB::table('ekstrakulikuler')->get();
        $siswa = Siswa::findOrFail($id);
        return view('siswa.edit', compact('siswa','kelas','ekstrakulikuler','user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Siswa $siswa)
    {
           $request->validate([
        'Nama_Siswa' => 'required',
        'Tanggal_Lahir' => 'required',
        'Alamat' => 'required',
        'Jenis_Kelamin' => 'required',
        'Nomor_Telepon' => 'required',
        'Email' => 'required',
        'Tahun_Lulus' => 'required',
        'Users_id' => 'required',
        'Kelas_id' => 'required',
        'Ekstrakulikuler_id' => 'required'
        ]);

    $siswa->Nama_Siswa = $request->Nama_Siswa;
    $siswa->Tanggal_Lahir = $request->Tanggal_Lahir;
    $siswa->Alamat = $request->Alamat;
    $siswa->Jenis_Kelamin = $request->Jenis_Kelamin;
    $siswa->Nomor_Telepon = $request->Nomor_Telepon;
    $siswa->Email = $request->Email;
    $siswa->Users_id = $request->Users_id;
    $siswa->Kelas_id = $request->Kelas_id;
    $siswa->Ekstrakulikuler_id = $request->Ekstrakulikuler_id;
    $siswa->save();

    return redirect()->route('siswa.index')->with('toast_success','Siswa Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siswa $siswa)
    {
         $siswa->delete();
        return redirect()->route('siswa.index')->with('success', 'Siswa deleted successfully.');
    }
}
