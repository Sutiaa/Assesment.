<html>
<title>Create Mahasiswa</title>

<body>
    <h2>Create Mahasiswa</h2>
    <hr>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action="{{ URL('mahasiswa') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <table>
            <tr>
                <th>Nim</th>
                <td>
                    <input type="number" name="nim" required>
                </td>
            </tr>
            <tr>
                <th>Nama</th>
                <td>
                    <input type="text" name="nama" required>
                </td>
            </tr>
            <tr>
            <tr>
                <th>Tempat Lahir</th>
                <td>
                    <input type="text" name="tempat_lahir" required>
                </td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td>
                    <input type="text" name="tanggal_lahir" required>
                </td>
            </tr>
            <th>Alamat</th>
            <td>
                <input type="text" name="alamat" required>
            </td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>
                    <input type="text" name="jenis_kelamin" required>
                </td>
            </tr>
            <tr>
                <th>Email</th>
                <td>
                    <input type="string" name="email" required>
                </td>
            </tr>
        </table>
        <button type="submit">Save</button>
    </form>
</body>

</html>
