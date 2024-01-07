<html>
<title>Create prodi</title>

<body>
    <h2>Create prodi</h2>
    <hr>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action="{{ URL('prodi') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <table>
            <tr>
                <th>Fakultas</th>
                <td>
                    <input type="text" name="fakultas" required>
                </td>
            </tr>
            <tr>
                <th>Program studi</th>
                <td>
                    <input type="text" name="program_studi" required>
                </td>
        </table>
        <button type="submit">Save</button>
    </form>
</body>

</html>
