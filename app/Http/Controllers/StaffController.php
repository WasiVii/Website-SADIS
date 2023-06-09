<?php

namespace App\Http\Controllers;

use App\Exports\StaffExport;
use App\Imports\StaffImport;
use App\Models\Staff;
use PDF;
use Dompdf\Dompdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = DB::table('users')->get();
        $staff = Staff::join('users','staff.users_id', '=','users.id')
        ->select('staff.*','users.name as user')
        ->get();
        $title = 'Delete Staff!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('Staaf.index',compact('staff','user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $user = DB::table('users')->get();
        $staff = Staff::join('users','staff.users_id', '=','users.id')
        ->select('staff.*','users.name as user')
        ->get();
        return view('Staaf.create',compact('staff','user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'Staffcol' => 'required',
        'Divisi' => 'required',
        'Users_id' => 'required'
        ]);

    $staff = new Staff();
    $staff->Staffcol = $request->Staffcol;
    $staff->Divisi = $request->Divisi;
    $staff->Users_id = $request->Users_id;
    $staff->save();

    return redirect()->route('staff.index')->with('toast_success','Staff Creted Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $staff = Staff::findOrFail($id);
        return view('staaf.edit', compact('staff'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
        'Staffcol' => 'required',
        'Divisi' => 'required',
        'Users_id' => 'required'
        ]);

    $staff = Staff::findOrFail($id);
    $staff->Staffcol = $request->Staffcol;
    $staff->Divisi = $request->Divisi;
    $staff->Users_id = $request->Users_id;
    $staff->save();

    return redirect()->route('staff.index')->with('toast_success','Staff Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Staff $staff)
    {
        $staff->delete();
        return redirect()->route('staff.index')->with('success','Staff Deleted Successfully');
    }

    public function generatePDF()
        {
            $user = DB::table('users');
            $staff = Staff::join('users','staff.users_id', '=','users.id')
            ->select('staff.*','users.name as user')
            ->get();

            $data = [
                'title' => 'Laporan Staff',
                'date' => date('Y/m/d'),
                'staff' => $staff
            ];

            $pdf = PDF::loadView('Staaf.generatePDF', $data)->setOptions(['defaultFont' => 'sans-serif', 'margin' => 'landscape'])->setPaper('a4','landscape');
            return $pdf->stream();

        }

        // Export PDF for ID
        public function generatePDFid(Staff $id)
        {
            $staff = Staff::find($id);


            if (!$staff) {
                abort(404);
            }

            $data = [
                'title' => 'Laporan Staff :',
                'date' => date('Y/M/D'),
                'staff' => $staff
            ];

            $pdf = new Dompdf();
            $pdf = PDF::loadView('Staaf.generatePDFid', $data)->setOptions(['defaultFont' => 'sans-serif', 'margin' => 'landscape'])->setPaper('a4','landscape');
            return $pdf->stream();

        }

        //EXPORT EXCEL
        public function exportExcel()
        {
             return Excel::download(new StaffExport, 'Staff.xlsx');
        }

        //IMPORT EXCEL
        public function importExcel(Request $request)
        {
            $file = $request->file('file');
            $nama_file = rand().$file->getClientOriginalName();
            $file->move('file_excel',$nama_file);
            Excel::import(new StaffImport, public_path('/file_excel/'.$nama_file));
            return redirect('dashboard/staff')->with('toast_success','Import staff Successfully');
        }
}
