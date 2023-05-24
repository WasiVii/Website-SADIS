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
        'Nama_Esktrakulikuler' => 'required',
        'Deskripsi' => 'required'
        ]);

    $ekstrakulikuler = new Ekstrakulikuler();
    $ekstrakulikuler->Nama_Ekstrakulikuler = $request->Nama_Ekstrakulikuler;
    $ekstrakulikuler->Deskripsi = $request->Deskripsi;
    $ekstrakulikuler->save();

    return redirect()->route('esktrakulikuler.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ekstrakulikuler $ekstrakulikuler)
    {
        return view('Ekstrakulikuler.show', compact('ekstrakulikuler'));
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
        'Nama_Esktrakulikuler' => 'required',
        'Deskripsi' => 'required'
        ]);
    $ekstrakulikuler->Nama_Ekstrakulikuler = $request->Nama_Ekstrakulikuler;
    $ekstrakulikuler->Deskripsi = $request->Deskripsi;
    $ekstrakulikuler->save();

    return redirect()->route('esktrakulikuler.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ekstrakulikuler $ekstrakulikuler)
    {
         $ekstrakulikuler->delete();
        return redirect()->route('esktrakulikuler.index')->with('success', 'Mentor deleted successfully.');
    }
}
