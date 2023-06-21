<?php

namespace App\Http\Controllers;

use App\Exports\exportSiswa;
use App\Imports\importSiswa;
use App\Models\Nilai;
use App\Models\Siswa;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class SiswaController extends Controller
{
   public function showDataSiswa()
    {
        $loginData = Auth::user(); // Mengambil data login dari pengguna
        $siswa = Siswa::join('kelas', 'siswa.kelas_id', '=', 'kelas.id')
        ->where('siswa.Nama_Siswa', $loginData->name)
        ->select('siswa.*', 'kelas.Nama_Kelas as kelas')
        ->first();

        if ($siswa) {
            $nilaiSiswa = DB::table('siswa')
            ->join('nilai', 'siswa.id', '=', 'nilai.Siswa_id')
            ->join('mata_pelajaran', 'nilai.Mata_Pelajaran_id', '=', 'mata_pelajaran.id')
            ->select('siswa.id', 'nilai.Nilai as nilai', 'mata_pelajaran.Nama_Mata_Pelajaran as mapel')
            ->where('siswa.Nama_Siswa', $loginData->name)
            ->orderBy('nilai.siswa_id')
            ->get();

            return view('Siswa.data-siswa', compact('siswa', 'nilaiSiswa'));
        } else {
            $notifikasi = "Data kamu tidak ada.";
            Alert::warning($notifikasi, 'Silahkan Hubungi Pihak Administrasi Sekolah');
            return redirect()->route('siswa.index');
        }
    }



    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = DB::table('users')->get();
        $kelas = DB::table('kelas')->get();
        $ekstrakulikuler = DB::table('Ekstrakulikuler')->get();
        $siswa = Siswa::leftjoin('users','siswa.Users_id','=','users.id')
        ->leftjoin('kelas','siswa.Kelas_id','=','kelas.id')
        ->leftjoin('ekstrakulikuler','siswa.ekstrakulikuler_id','=','ekstrakulikuler.id')
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
    $siswa->Tahun_Lulus = $request->Tahun_Lulus;
    $siswa->Users_id = $request->Users_id;
    $siswa->Kelas_id = $request->Kelas_id;
    $siswa->Ekstrakulikuler_id = $request->Ekstrakulikuler_id;
    $siswa->save();

    return redirect()->route('siswa.index')->with('toast_success','Siswa Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
         $siswa->delete();
        return redirect()->route('siswa.index')->with('success', 'Siswa deleted successfully.');
    }

     public function exportExcel()
        {
             return Excel::download(new exportSiswa, 'Siswa.xlsx');
        }

        //IMPORT EXCEL
        public function importExcel(Request $request)
        {
            $file = $request->file('file');
            $nama_file = rand().$file->getClientOriginalName();
            $file->move('file_excel',$nama_file);
            Excel::import(new importSiswa, public_path('/file_excel/'.$nama_file));
            return redirect('dashboard/siswa')->with('toast_success','Import Siswa Successfully');
        }
        public function generatePDF(Siswa $id)
        {
           $user = DB::table('users')->get();
            $kelas = DB::table('kelas')->get();
            $ekstrakulikuler = DB::table('Ekstrakulikuler')->get();
            $siswa = Siswa::leftjoin('users','siswa.Users_id','=','users.id')
            ->leftjoin('kelas','siswa.Kelas_id','=','kelas.id')
            ->leftjoin('ekstrakulikuler','siswa.ekstrakulikuler_id','=','ekstrakulikuler.id')
            ->select('siswa.*','users.name as user','kelas.Nama_Kelas as kelas','ekstrakulikuler.Nama_Ekstrakulikuler as ekstrakulikuler')
            ->get();

                $data = [
                    'title' => 'Laporan Data Siswa',
                    'date' => date('Y/m/d'),
                    'siswa' => $siswa
                ];

            $pdf = PDF::loadView('Siswa.generatePDF', $data)->setOptions(['defaultFont' => 'sans-serif', 'margin' => 'landscape'])->setPaper('a4','landscape');
            return $pdf->stream();
        }

}

