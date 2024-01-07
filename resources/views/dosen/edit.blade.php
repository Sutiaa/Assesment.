<html>
<title>Edit dosen</title>

<body>
    <h2>Edit dosen</h2>
    <hr>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action ="{{ URL('dosen') }}/{{ $dosen->nip }}" method="POST" enctye="multipart/form-data">
        @csrf
        @method('PUT')
        <table>

            <tr>
                <th>Nip</th>
                <td>
                    <input type="number" name='nip' value ="{{ $dosen->nip }}"required>
                </td>
            </tr>

            <tr>
                <th>Nama</th>
                <td>
                    <input type="text" name='nama' value ="{{ $dosen->nama }}"required>
                </td>
            </tr>
            <tr>
                <th>alamat</th>
                <td>
                    <input type="text" name='alamat' value ="{{ $dosen->alamat }}"required>
                </td>
            </tr>
            <tr>
                <th>email</th>
                <td>
                    <input type="text" name='email' value ="{{ $dosen->email }}"required>
                </td>
            </tr>
        </table>
        <button type="submit">Save</button>
    </form>
</body>

</html>
