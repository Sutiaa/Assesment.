<html>
<title>Edit Mahasiswa</title>

<body>
    <h2>Edit Mahasiswa</h2>
    <hr>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action ="{{ URL('mahasiswa') }}/{{ $mahasiswa->id }}" method="POST" enctye="multipart/form-data">
        @csrf
        @method('PUT')
        <table>

            <tr>
                <th>Nim</th>
                <td>
                    <input type="number" name='nim' value ="{{ $mahasiswa->nim }}"required>
                </td>
            </tr>

            <tr>
                <th>Nama</th>
                <td>
                    <input type="text" name='nama' value ="{{ $mahasiswa->nama }}"required>
                </td>
            </tr>
            <tr>
                <th>tempat lahir</th>
                <td>
                    <input type="text" name='tempat_lahir' value ="{{ $mahasiswa->tempat_lahir }}"required>
                </td>
            </tr>
            <tr>
                <th>tanggal lahir</th>
                <td>
                    <input type="number" name='tanggal_lahir' value ="{{ $mahasiswa->tanggal_lahir }}"required>
                </td>
            </tr>
            <tr>
                <th>alamat</th>
                <td>
                    <input type="text" name='alamat' value ="{{ $mahasiswa->alamat }}"required>
                </td>
            </tr>
            <tr>
                <th>jenis_kelamin</th>
                <td>
                    <input type="text" name='jenis_kelamin' value ="{{ $mahasiswa->jenis_kelamin }}"required>
                </td>
            </tr>
            <tr>
                <th>email</th>
                <td>
                    <input type="text" name='email' value ="{{ $mahasiswa->email }}"required>
                </td>
            </tr>
        </table>
        <button type="submit">Save</button>
    </form>
</body>

</html>
