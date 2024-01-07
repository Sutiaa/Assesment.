<?php

namespace App\Http\Controllers;

use App\Models\dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dosen.index')->with([
            'dosen' => dosen::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dosen.create')->with([
            'dosen' => dosen::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nip'            => 'required',
            'nama'           => 'required',
            'alamat'         => 'required',
            'email'          => 'required',
        ], [
            'nama.required' => 'Nama harus di isi.',
            'alamat.required' => 'Alamat harus di isi.',
            'jenis_kelamin.required' => 'Jenis Kelamin harus di isi.',
            'email.required' => 'Email harus di isi.',
        ]);

        $validator->validate();
        Dosen::create([
            'nip'               => $request->nip,
            'nama'              => $request->nama,
            'alamat'            => $request->alamat,
            'email'             => $request->email,

        ]);

        return redirect('/dosen');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $nip)
    {
        $dosen = Dosen::find($nip);
        return view('dosen.create')->with([
            'dosen' => dosen::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $nip)
    {
        return view('dosen.edit')->with([
            'dosen' => dosen::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $nip)
    {
        $dosen = Dosen::find($nip);
        $dosen->nip = $request->nip;
        $dosen->nama = $request->nama;
        $dosen->alamat = $request->alamat;
        $dosen->email = $request->email;
        $dosen->save();
        return redirect('/dosen')->with('success', 'Data dosen berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $nip)
    {
        $dosen = Dosen::find($nip);
        if ($dosen) {
            $dosen->delete();
            return redirect('/dosen')->with('success', 'Data dosen berhasil di delete');
        } else {
            return redirect('/dosen')->with('success', 'Data dosen gagal di delete');
        }
    }
}
