<html>
<title>Edit prodi</title>

<body>
    <h2>Edit prodi</h2>
    <hr>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action ="{{ URL('prodi') }}/{{ $prodi->id }}" method="POST" enctye="multipart/form-data">
        @csrf
        @method('PUT')
        <table>

            <tr>
                <th>Fakultas</th>
                <td>
                    <input type="number" name='nim' value ="{{ $prodi->fakultas }}"required>
                </td>
            </tr>

            <tr>
                <th>Prodi</th>
                <td>
                    <input type="text" name='nama' value ="{{ $prodi->prodi }}"required>
                </td>

        </table>
        <button type="submit">Save</button>
    </form>
</body>

</html>
