<html>
<title>Edit matakuliah</title>

<body>
    <h2>Edit matakuliah</h2>
    <hr>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action ="{{ URL('matakuliah') }}/{{ $matakuliah->id }}" method="POST" enctye="multipart/form-data">
        @csrf
        @method('PUT')
        <table>
            <tr>
                <th>Kode Matkul</th>
                <td>
                    <input type="text" name='kode_matkul' value ="{{ $matakuliah->kode_matkul }}"required>
                </td>
            </tr>
            <tr>
                <th>Mata Kuliah</th>
                <td>
                    <input type="text" name='mata_kuliah' value ="{{ $matakuliah->mata_kuliah }}"required>
                </td>
            </tr>
            <tr>
                <th>Sks</th>
                <td>
                    <input type="text" name='sks' value ="{{ $matakuliah->sks }}"required>
                </td>
            </tr>
            <tr>
        </table>
        <button type="submit">Save</button>
    </form>
</body>

</html>
