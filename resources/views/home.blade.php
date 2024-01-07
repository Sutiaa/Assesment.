@extends('layouts.app')

@section('content')
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" href="mahasiswa">Mahasiswa</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="dosen">Dosen</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="matakuliah">Matakuliah</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="prodi">Prodi</a>
        </li>
    </ul>
@endsection
