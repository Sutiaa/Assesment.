<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class mahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = mahasiswa::get();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    /** 
     * Show the form for creating a new resource.
     */

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nim'            => 'required',
            'nama'           => 'required',
            'tempat_lahir'   => 'required',
            'tanggal_lahir'  => 'required',
            'alamat'         => 'required',
            'jenis_kelamin'  => 'required',
            'email'          => 'required',
        ], [
            'email.required' => 'Email harus di isi.',
        ]);

        $validator->validate();
        mahasiswa::create([
            'nim '              => $request->nim,
            'nama'              => $request->nama,
            'tempat_lahir'      => $request->tempat_lahir,
            'tanggal_lahir'     => $request->tanggal_lahir,
            'alamat'            => $request->alamat,
            'jenis_kelamin'     => $request->jenis_kelamin,
            'email'             => $request->email,

        ]);

        return redirect('/mahasiswa');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $mahasiswa = mahasiswa::get();
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mahasiswa = mahasiswa::get();
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mahasiswa = mahasiswa::find($id);
        $mahasiswa->nama = $request->nama;
        $mahasiswa->tempat_lahir = $request->tempat_lahir;
        $mahasiswa->tanggal_lahir = $request->tanggal_lahir;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->jenis_kelamin = $request->jenis_kelamin;
        $mahasiswa->email = $request->email;
        $mahasiswa->save();
        return redirect('/mahasiswa')->with('success', 'Data mahasiswa berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $mahasiswa = mahasiswa::find($id);
        if ($mahasiswa) {
            $mahasiswa->delete();
            return redirect('/mahasiswa')->with('success', 'Data mahasiswa berhasil di delete');
        } else {
            return redirect('/mahasiswa')->with('success', 'Data mahasiswa gagal di delete');
        }
    }
}
