<!DOCTYPE html>
<html lang="en" data-theme="light">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Daftar Buku</title>
        <link
            href="https://cdn.jsdelivr.net/npm/daisyui@3.9.4/dist/full.css"
            rel="stylesheet"
            type="text/css"
        />
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="min-h-screen bg-base-300 text-base-content">
        <div class="container mx-auto px-4 py-8">
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-3xl font-bold text-primary">Daftar Buku</h1>
                <a href="/books/create" class="btn btn-primary">Tambah Buku</a>
            </div>

            <div class="overflow-x-auto">
                <table class="table table-zebra">
                    <!-- head -->
                    <thead>
                        <tr class="bg-primary text-primary-content">
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Tahun</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($books as $book)
                        <tr>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->year }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
