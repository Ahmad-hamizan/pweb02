<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelurahan</title>
</head>
<body>
<h3>Daftar Kelurahan</h3>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Kelurahan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($kelurahans as $kelurahan)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $kelurahan->nama }}</td>
                <td>
                    <a href="{{ url('kelurahan.edit', $kelurahan->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ url('kelurahan.destroy', $kelurahan->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</body>
</html>