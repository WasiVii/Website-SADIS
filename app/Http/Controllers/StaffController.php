<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
}
