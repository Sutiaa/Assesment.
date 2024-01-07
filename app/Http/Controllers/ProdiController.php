<?php

namespace App\Http\Controllers;

use App\Models\prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('prodi.index')->with([
            'prodi' => prodi::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('prodi/create')->with([
            'prodi' => prodi::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fakultas'           => 'required',
            'program_studi'         => 'required',
        ], [
            'fakultas.required' => 'Nama fakultas harus di isi.',
            'program_studi.required' => 'Program Studi harus di isi.',
        ]);

        $validator->validate();
        Prodi::create([
            'fakultas'              => $request->fakultas,
            'program_studi'            => $request->program_studi,
        ]);

        return redirect('/prodi');
    }

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('prodi.edit')->with([
            'prodi' => prodi::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $prodi = Prodi::find($id);
        $prodi->fakultas = $request->fakultas;
        $prodi->program_studi = $request->program_studi;
        $prodi->save();
        return redirect('/prodi')->with('success', 'Data prodi berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $prodi = Prodi::find($id);
        if ($prodi) {
            $prodi->delete();
            return redirect('/prodi')->with('success', 'Data prodi berhasil di delete');
        } else {
            return redirect('/prodi')->with('success', 'Data prodi gagal di delete');
        }
    }
}
