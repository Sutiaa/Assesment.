<?php

namespace App\Http\Controllers;

use App\Models\matakuliah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('matakuliah.index')->with([
            'matakuliah' => matakuliah::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('matakuliah.create')->with([
            'matakuliah' => matakuliah::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kode_matkul'           => 'required',
            'matakuliah'         => 'required',
            'sks'         => 'required',
        ], [
            'kode_matkul.required' => 'Kode harus di isi.',
            'matakuliah.required' => 'Mata Kuliah Studi harus di isi.',
            'sks.required' => 'Sks harus di isi.',
        ]);

        $validator->validate();
        MataKuliah::create([
            'kode_matkul'              => $request->kode_matkul,
            'matakuliah'            => $request->matakuliah,
            'sks'            => $request->sks,
        ]);

        return redirect('/matakuliah');
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('matakuliah.edit')->with([
            'matakuliah' => matakuliah::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request)
    {
        $matakuliah = MataKuliah::find($id);
        $matakuliah->kode_matkul = $request->kode_matkul;
        $matakuliah->matakuliah = $request->matakuliah;
        $matakuliah->sks = $request->sks;
        $matakuliah->save();
        return redirect('/matakuliah')->with('success', 'Data mata kuliah berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $matakuliah = Matakuliah::find($id);
        if ($matakuliah) {
            $matakuliah->delete();
            return redirect('/matakuliah')->with('success', 'Data mata_kuliah berhasil di delete');
        } else {
            return redirect('/matakuliah')->with('success', 'Data mata_kuliah gagal di delete');
        }
    }
}
