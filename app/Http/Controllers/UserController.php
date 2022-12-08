<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.karyawan.index', [
            'title' => 'Karyawan',
            'users' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.karyawan.create', [
            'title' => 'Karyawan Baru'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'nama' => 'required|max:100',
            'no_telp' => 'required|max:14|min:11',
            'username' => 'required|max:50',
            'email' => 'required|email',
            'password' => 'required|unique:users|max:15',
            'alamat' => 'required',
            'role' => 'required'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/dashboard/karyawan')->with('success', 'Karyawan Baru Telah di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('dashboard.karyawan.edit', [
            'title' => 'Profile',
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:100',
            'no_telp' => 'required|max:14|min:11',
            'username' => 'required|max:50',
            'email' => 'required|email:dns',
            'alamat' => 'required',
            'role' => 'required'
        ]);

        // dd($validatedData);

        User::where('id', $user->id)
            ->update($validatedData);

        return redirect('/dashboard/karyawan')->with('success', 'Data Karyawan Telah di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        User::destroy($user->id);

        return redirect('/dashboard/karyawan')->with('success', 'Data Karyawan Telah di Hapus');
    }
}
