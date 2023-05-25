<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $staff = DB::table('staff')->get();
        $berita = Berita::join('staff', 'berita.staff_id', '=', 'staff.id')
        ->select('berita.*','staff.staffcol as staff')
        ->get();
        return view('berita.index', compact('berita','staff'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $staff = DB::table('staff')->get();
        $berita = Berita::join('staff', 'berita.staff_id', '=', 'staff.id')
        ->select('berita.*','staff.staffcol as staff')
        ->get();
        return view('Berita.create',compact('staff','berita'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'Judul' => 'required',
        'Isi_Berita' => 'required',
        'Tanggal_Publikasi' => 'required',
        'Staff_id' => 'required',
        'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

    $berita = new Berita();
    $berita->Judul = $request->Judul;
    $berita->Isi_Berita = $request->Isi_Berita;
    $berita->Tanggal_Publikasi = $request->Tanggal_Publikasi;
    $berita->Staff_id = $request->Staff_id;

    if ($request->hasFile('photo')) {
        $image = $request->file('photo');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $name);
        $berita->photo = $name;
    }

    $berita->save();

    return redirect()->route('berita.index');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $staff = DB::table('staff')->get();
        $berita = DB::table('berita')->orderby('id', 'desc')->join('staff', 'berita.staff_id', '=', 'staff.id')
        ->select('berita.*','staff.staffcol as staff')->get();
        return view('layouts.news', compact('berita','staff'));
    }

    public function detail($id)
    {
        $staff = DB::table('staff')->get();
        $berita = DB::table('berita')->where('id', $id)->first();
        return view('layouts.news_details', compact('berita','staff'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        //  @dd($id);
        $berita = Berita::findOrFail($id);
        return view('berita.edit', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $request->validate([
    'Judul' => 'required',
    'Isi_Berita' => 'required',
    'Tanggal_Publikasi' => 'required',
    'Staff_id' => 'required',
    'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
]);

    $berita = Berita::findOrFail($id); // Fetch the existing record using the ID

    $berita->Judul = $request->Judul;
    $berita->Isi_Berita = $request->Isi_Berita;
    $berita->Tanggal_Publikasi = $request->Tanggal_Publikasi;
    $berita->Staff_id = $request->Staff_id;

    if ($request->hasFile('photo')) {
        $image = $request->file('photo');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $name);
        $berita->photo = $name;
    }

    $berita->save();

    return redirect()->route('berita.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Berita $berita, $slug)
    {
        $berita = Berita::where('id',$slug)->first();
        $berita->delete();

        return redirect()->back();
    }
}
