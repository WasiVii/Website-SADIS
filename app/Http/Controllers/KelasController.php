<?php

namespace App\Http\Controllers;

use App\Exports\exportKelas;
use App\Imports\importKelas;
use App\Models\Kelas;
use App\Models\Siswa;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelas = Kelas::all();
        foreach ($kelas as $kls) {
        $jumlahSiswa = Siswa::where('Kelas_id', $kls->id)->count();
        $kls->Array_Siswa = $jumlahSiswa;
        $kls->save();
        }
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
        $guru = DB::table('guru')->get();
        $kelas = Kelas::join('guru','guru.Nama_Guru','=','Kelas.Wali_kelas')
        ->select('kelas.*','guru.Nama_Guru as guru')
        ->get();
        return view('Kelas.create', compact('guru','kelas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'Nama_Kelas' => 'required',
        'Tahun_Pelajaran' => 'required',
        'Wali_Kelas' => 'required'

        ]);

    $kelas = new Kelas();
    $kelas->Nama_Kelas = $request->Nama_Kelas;
    $kelas->Tahun_Pelajaran = $request->Tahun_Pelajaran;
    $kelas->Wali_Kelas = $request->Wali_Kelas;
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
        $guru = DB::table('Guru')->get();
        $kelas = Kelas::findOrFail($id);
        return view('Kelas.edit' , compact('kelas','guru'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
         $request->validate([
        'Nama_Kelas' => 'required',
        'Tahun_Pelajaran' => 'required',
        'Wali_Kelas' => 'required'

        ]);
        $kelas = Kelas::findOrFail($id);
    $kelas->Nama_Kelas = $request->Nama_Kelas;
    $kelas->Tahun_Pelajaran = $request->Tahun_Pelajaran;
    $kelas->Wali_Kelas = $request->Wali_Kelas;
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

        //EXPORT EXCEL
        public function exportExcel()
        {
             return Excel::download(new exportKelas, 'Kelas.xlsx');
        }

        //IMPORT EXCEL
        public function importExcel(Request $request)
        {
            $file = $request->file('file');
            $nama_file = rand().$file->getClientOriginalName();
            $file->move('file_excel',$nama_file);
            Excel::import(new importKelas, public_path('/file_excel/'.$nama_file));
            return redirect('dashboard/kelas')->with('toast_success','Import Kelas Successfully');
        }
        public function generatePDF()
        {
           $kelas = Kelas::all();

            $data = [
                'title' => 'Laporan Kelas',
                'date' => date('Y/m/d'),
                'kelas' => $kelas
            ];

            $pdf = PDF::loadView('Kelas.generatePDF', $data)->setOptions(['defaultFont' => 'sans-serif', 'margin' => 'landscape'])->setPaper('a4','landscape');
            return $pdf->stream();

        }
}
