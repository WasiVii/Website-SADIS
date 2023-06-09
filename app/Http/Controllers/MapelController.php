<?php

namespace App\Http\Controllers;

use App\Exports\MapelExport;
use App\Imports\MapelImport;
use App\Models\Mapel;
use App\Models\Nilai;
use PDF;
use Dompdf\Dompdf;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mapel = Mapel::all();
        $title = 'Delete Mata Pelajaran!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
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
    return redirect()->route('mapel.index')->with('toast_success','Mata Pelajaran  Creted Successfully');
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
    public function edit( $id)
    {
         $mapel = Mapel::findOrFail($id);
        return view('Mapel.edit', compact('mapel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {

        $request->validate([
        'Nama_Mata_Pelajaran' => 'required'

        ]);
     $mapel = Mapel::findOrFail($id);
    $mapel->Nama_Mata_Pelajaran = $request->Nama_Mata_Pelajaran;
    $mapel->save();
    return redirect()->route('mapel.index')->with('toast_success','Mata Pelajaran Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mapel $mapel)
    {
         $mapel->delete();
        return redirect()->route('mapel.index')->with('success','Mata Pelajaran Deleted Successfully');
    }

    public function generatePDF()
        {
           $mapel = Mapel::all();

            $data = [
                'title' => 'Laporan Mata Pelajaran Siswa',
                'date' => date('Y/m/d'),
                'mapel' => $mapel
            ];

            $pdf = PDF::loadView('Mapel.generatePDF', $data)->setOptions(['defaultFont' => 'sans-serif', 'margin' => 'landscape'])->setPaper('a4','landscape');
            return $pdf->stream();

        }

        // Export PDF for ID
        public function generatePDFid(Mapel $id)
        {
            $mapel = Mapel::find($id);


            if (!$mapel) {
                abort(404);
            }

            $data = [
                'title' => 'Laporan Mata Pelajaran :',
                'date' => date('Y/M/D'),
                'mapel' => $mapel
            ];

            $pdf = new Dompdf();
            $pdf = PDF::loadView('Mapel.generatePDFid', $data)->setOptions(['defaultFont' => 'sans-serif', 'margin' => 'landscape'])->setPaper('a4','landscape');
            return $pdf->stream();

        }

        //EXPORT EXCEL
        public function exportExcel()
        {
             return Excel::download(new MapelExport, 'Mapel.xlsx');
        }

        //IMPORT EXCEL
        public function importExcel(Request $request)
        {
            $file = $request->file('file');
            $nama_file = rand().$file->getClientOriginalName();
            $file->move('file_excel',$nama_file);
            Excel::import(new MapelImport, public_path('/file_excel/'.$nama_file));
            return redirect('dashboard/mapel')->with('toast_success','Import Mapel Successfully');
        }
}
