<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Dosen</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Daftar Dosen</h2>
        <hr>
        <a href="{{ URL('dosen/create') }}" class="btn btn-primary mb-3">Create Dosen</a>
        <table class="table">
            <thead>
                <tr>
                    <th>nip</th>
                    <th>nama</th>
                    <th>alamat</th>
                    <th>email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($dosen as $data)
                    <tr>
                        <td>{{ $data->nip }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->alamat }}</td>
                        <td>{{ $data->email }}</td>
                        <td>
                            <a href="{{ URL('/dosen' . $data->nip . '/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ URL('/dosen' . $data->nip) }}" method="POST"
                                style="display: inline-block;">

                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">Daftar Dosen Empty</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Include Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
