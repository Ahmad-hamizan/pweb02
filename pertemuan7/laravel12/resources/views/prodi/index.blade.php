<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Prodi EN Ep</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-gray-50 text-gray-800">
        <h2 class="text-2xl font-bold text-center my-6">{{ $judul }}</h2>

        <div class="max-w-4xl mx-auto px-4">
            <table
                class="min-w-full table-auto border border-gray-300 shadow-md"
            >
                <thead class="bg-gray-200">
                    <tr>
                        <th class="border px-4 py-2 text-left">No</th>
                        <th class="border px-4 py-2 text-left">Kode</th>
                        <th class="border px-4 py-2 text-left">Nama</th>
                        <th class="border px-4 py-2 text-left">Kaprodi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $count = 1; ?>
                    @foreach($ar_prodi as $prodi)
                    <tr class="bg-white even:bg-gray-100">
                        <td class="border px-4 py-2">{{ $count }}</td>
                        <td class="border px-4 py-2">{{ $prodi->kode }}</td>
                        <td class="border px-4 py-2">{{ $prodi->nama }}</td>
                        <td class="border px-4 py-2">{{ $prodi->kaprodi }}</td>
                    </tr>
                    <?php $count++; ?>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>
