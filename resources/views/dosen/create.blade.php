<html>
<title>Create Dosen</title>

<body>
    <h2>Create Dosen</h2>
    <hr>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action="{{ URL('dosen') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <table>
            <tr>
                <th>Nip</th>
                <td>
                    <input type="char" name="nip" required>
                </td>
            </tr>
            <tr>
                <th>Nama</th>
                <td>
                    <input type="text" name="nama" required>
                </td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>
                    <input type="string" name="alamat" required>
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
