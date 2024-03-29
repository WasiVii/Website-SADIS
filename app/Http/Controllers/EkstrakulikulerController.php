<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakulikuler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EkstrakulikulerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ekstrakulikuler = Ekstrakulikuler::all();
        $title = 'Delete Ekstrakulikuler!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('Ekstrakulikuler.index', compact('ekstrakulikuler'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Ekstrakulikuler.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'Nama_Ekstrakulikuler' => 'required',
        'Deskripsi' => 'required',
        'Photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);

    $ekstrakulikuler = new Ekstrakulikuler();
    $ekstrakulikuler->Nama_Ekstrakulikuler = $request->Nama_Ekstrakulikuler;
    $ekstrakulikuler->Deskripsi = $request->Deskripsi;
    if ($request->hasFile('Photo')) {
        $image = $request->file('Photo');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $name);
        $ekstrakulikuler->photo = $name;
    }
    $ekstrakulikuler->save();

    return redirect()->route('ekstrakulikuler.index')->with('toast_success','Ekstrakulikuler Creted Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $extrakulikuler = DB::table('ekstrakulikuler')->orderby('id', 'asc')->get();
        return view('layouts.extrakulikuler', ['extrakulikuler'=>$extrakulikuler]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ekstrakulikuler $ekstrakulikuler)
    {
        return view('Ekstrakulikuler.edit', compact('ekstrakulikuler'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ekstrakulikuler $ekstrakulikuler)
    {
        $request->validate([
        'Nama_Ekstrakulikuler' => 'required',
        'Deskripsi' => 'required',
        'Photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);

    $ekstrakulikuler->Nama_Ekstrakulikuler = $request->Nama_Ekstrakulikuler;
    $ekstrakulikuler->Deskripsi = $request->Deskripsi;
    if ($request->hasFile('Photo')) {
        $image = $request->file('Photo');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $name);
        $ekstrakulikuler->photo = $name;
    }
    $ekstrakulikuler->save();

    return redirect()->route('ekstrakulikuler.index')->with('toast_success','Ekstrakulikuler Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ekstrakulikuler $ekstrakulikuler)
    {
         $ekstrakulikuler->delete();
        return redirect()->route('ekstrakulikuler.index')->with('success', 'Ekstrakulikuler deleted successfully.');
    }
}
