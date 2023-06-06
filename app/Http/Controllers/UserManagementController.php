<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserManagement;
use CreateUsersTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $role = DB::table('roles')->get();
        $users = DB::table('users')->join('roles', 'users.role_id', '=', 'roles.id')
        ->select('users.*','roles.name as roles')
        ->get();
        return view('Users.index', compact('users','role'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $role = DB::table('roles')->get();
        $users = DB::table('users')->join('roles', 'users.role_id', '=', 'roles.id')
        ->select('users.*','roles.name as roles')
        ->get();
        return view('Users.create', compact('users','role'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role_id' => 'required'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role_id = $request->role_id;

        $user->save();

        return redirect()->route('users.index')->with('toast_success','Account Created Successfully');
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
    public function edit($id)
    {
        //
        $role = DB::table('roles')->get();
        $user = User::join('roles', 'users.role_id', '=', 'roles.id')
        ->select('users.*','roles.name as roles')->findOrFail($id);
        return view('users.edit', compact('user', 'role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role_id' => 'required'
        ]);
        $user = User::findOrFail($id); // Fetch the existing record using the ID

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role_id = $request->role_id;

        $user->save();

        return redirect()->route('users.index')->with('toast_success','Account Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
