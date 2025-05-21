<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasien</title>
</head>
<body>
    <h3>Daftar Pasien</h3>
<a href="{{ url('pasien.create') }}" class="btn btn-primary">Tambah Pasien</a>
<table class="table table-bordered" width="100%" border="1" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama Pasien</th>
            <th>Tempat,Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Kelurahan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pasiens as $pasien)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $pasien->kode }}</td>
                <td>{{ $pasien->nama }}</td>
                <td>{{ $pasien->tmp_lahir }}, {{ $pasien->tgl_lahir }}</td>
                <td>{{ $pasien->gender }}</td>
                <td>{{ $pasien->alamat }}</td>
                <td>{{ $pasien->kelurahan->nama }}</td>
                <td>
                    <a href="{{ url('pasien.edit', $pasien->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ url('pasien.destroy', $pasien->id) }}" method="POST" style="display:inline;">
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