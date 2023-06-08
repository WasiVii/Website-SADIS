<?php

namespace App\Http\Controllers;

use App\Exports\NilaiExport;
use App\Imports\NilaiImport;
use App\Models\Nilai;
use App\Models\Siswa;
use Dompdf\Dompdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa = DB::table('Siswa')->get();
        $mapel = DB::table('Mata_Pelajaran')->get();
        $nilai = Nilai::join('siswa','nilai.siswa_id','=','siswa.id')
        ->join('mata_pelajaran','nilai.mata_pelajaran_id','=','mata_pelajaran.id')
        ->select('Nilai.*','siswa.Nama_Siswa as siswa','mata_pelajaran.Nama_Mata_Pelajaran as mapel')
        ->get();
        $title = 'Delete Nilai!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('Nilai.index',compact('nilai','mapel','siswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $siswa = DB::table('Siswa')->get();
        $mapel = DB::table('Mata_Pelajaran')->get();
        $nilai = Nilai::join('siswa','nilai.siswa_id','=','siswa.id')
        ->join('mata_pelajaran','nilai.mata_pelajaran_id','=','mata_pelajaran.id')
        ->select('siswa.*','siswa.Nama_Siswa as siswa','mata_pelajaran.Nama_Mata_Pelajaran as mapel')
        ->get();
        return view('Nilai.create',compact('nilai','mapel','siswa'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
        'Nilai' => 'required',
        'Siswa_id' => 'required',
        'Mata_Pelajaran_id' => 'required'
        ]);

    $nilai = new Nilai();
    $nilai->Nilai = $request->Nilai;
    $nilai->Siswa_id = $request->Siswa_id;
    $nilai->Mata_Pelajaran_id = $request->Mata_Pelajaran_id;
    $nilai->save();

    return redirect()->route('nilai.index')->with('toast_success','Nilai Creted Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Nilai $nilai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
         $nilai = Nilai::findOrFail($id);
        return view('Nilai.edit', compact('nilai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {

         $request->validate([
        'Nilai' => 'required',
        'Siswa_id' => 'required',
        'Mata_Pelajaran_id' => 'required'
        ]);
    $nilai = Nilai::findOrFail($id);
    $nilai->Nilai = $request->Nilai;
    $nilai->Siswa_id = $request->Siswa_id;
    $nilai->Mata_Pelajaran_id = $request->Mata_Pelajaran_id;
    $nilai->save();

    return redirect()->route('nilai.index')->with('toast_success','Nilai Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nilai $nilai)
    {
       $nilai->delete();
        return redirect()->route('nilai.index')->with('success','Nilai Deleted Successfully');
    }

    public function generatePDF(Nilai $id)
        {
            $siswa = DB::table('Siswa')->get();
            $mapel = DB::table('Mata_Pelajaran')->get();
            $nilais = Nilai::join('siswa','nilai.siswa_id','=','siswa.id')
                ->join('mata_pelajaran','nilai.mata_pelajaran_id','=','mata_pelajaran.id')
                ->select('Nilai.*','siswa.Nama_Siswa as siswa','mata_pelajaran.Nama_Mata_Pelajaran as mapel')
                ->get();

                $data = [
                    'title' => 'Laporan Nilai Siswa',
                    'date' => date('Y/m/d'),
                    'nilai' => $nilais
                ];

            $pdf = PDF::loadView('Nilai.generatePDF', $data)->setOptions(['defaultFont' => 'sans-serif', 'margin' => 'landscape'])->setPaper('a4','landscape');
            // return $pdf->download('laporan-nilai.pdf', compact('siswa', 'mapel', 'nilai'));
            return $pdf->stream();
            // dd('Nilai');
        }
        public function generatePDFid(Nilai $id)
        {
            $nilai = Nilai::find($id);
            // $siswa = DB::table('Siswa')->get();
            // $mapel = DB::table('Mata_Pelajaran')->get();
            // $nilais = Nilai::join('siswa','nilai.siswa_id','=','siswa.id')
            //     ->join('mata_pelajaran','nilai.mata_pelajaran_id','=','mata_pelajaran.id')
            //     ->select('Nilai.*','siswa.Nama_Siswa as siswa','mata_pelajaran.Nama_Mata_Pelajaran as mapel')
            //     ->where('nilai.id',$nilai)
            //     ->get();
                if (!$nilai) {
                    abort(404);
                }

                $data = [
                    'title' => 'Laporan Nilai Siswa :',
                    'date' => date('Y/M/D'),
                    'nilai' => $nilai
                ];
                // dd($nilai);

                $pdf = new Dompdf();
            $pdf = PDF::loadView('Nilai.generatePDFid', $data)->setOptions(['defaultFont' => 'sans-serif', 'margin' => 'landscape'])->setPaper('a4','landscape');
            // return $pdf->download('laporan-nilai.pdf', compact('siswa', 'mapel', 'nilai'));
            return $pdf->stream();
        }
        public function exportExcel()
        {
             return Excel::download(new NilaiExport, 'Nilai.xlsx');
        }
        public function importExcel(Request $request)
        {
            $file = $request->file('file');
            $nama_file = rand().$file->getClientOriginalName();
            $file->move('file_excel',$nama_file);
            Excel::import(new NilaiImport, public_path('/file_excel/'.$nama_file));
            return redirect('dashboard/nilai')->with('toast_success','Import Nilai Successfully');
        }

}
