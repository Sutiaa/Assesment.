<html>
<title>Create matakuliah</title>

<body>
    <h2>Create matakuliah</h2>
    <hr>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action="{{ URL('matakuliah') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <table>
            <tr>
                <th>Kode Matkul</th>
                <td>
                    <input type="number" name="kode_matkul" required>
                </td>
            </tr>
            <tr>
                <th>Mata Kuliah</th>
                <td>
                    <input type="text" name="matakuliah" required>
                </td>
            </tr>
            <tr>
                <th>Sks</th>
                <td>
                    <input type="number" name="sks" required>
                </td>

        </table>
        <button type="submit">Save</button>
    </form>
</body>

</html>
