<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    </head>
    <body>
        <h1 class="text-3xl font-bold text-center">Daftar Buku</h1>
        <table class="mx-auto border-collapse border border-slate-400 w-2/3 m-4">
            <thead class="bg-slate-300 text-slate-700">
                <tr>
                    <th class="border border-slate-300 px-4 py-2">Judul</th>
                    <th class="border border-slate-300 px-4 py-2">Penulis</th>
                    <th class="border border-slate-300 px-4 py-2">Tahun</th>
                </tr>
            </thead>
            <tbody class="bg-slate-100 text-slate-700 text-center">
                @foreach ($books as $book)
                    <tr>
                        <td class="border border-slate-300 px-4 py-2">{{ $book->title }}</td>
                        <td class="border border-slate-300 px-4 py-2">{{ $book->author }}</td>
                        <td class="border border-slate-300 px-4 py-2">{{ $book->year }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>
