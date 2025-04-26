<?php
// 1. Sertakan file koneksi database
require_once '../db_koneksi.php';
// 2. Definisi query untuk mengambil data pasien
$sql = "SELECT * FROM pasien ORDER BY id ASC";
// 3. Eksekusi query
$query = $dbh->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pasien</title>
    <link rel="stylesheet" href="../../../src/output.css">
</head>

<body class="bg-gray-50">
    <!-- Sidebar -->

    <!-- End Sidebar -->
    <div class="container mx-auto p-4">
        <div class="flex flex-row justify-between items-center px-4 py-2">
            <h2 class="text-2xl font-semibold mb-4">Data Pasien</h2>
            <a href="form_pasien.php" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Tambah Data</a>
        </div>

        <div class="overflow-x-auto px-4 py-4">
            <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-md">
                <thead>
                    <tr class="text-left bg-gray-100 text-gray-700">
                        <th class="py-3 px-6">No</th>
                        <th class="py-3 px-6">Kode</th>
                        <th class="py-3 px-6">Nama Pasien</th>
                        <th class="py-3 px-6">Tempat Lahir</th>
                        <th class="py-3 px-6">Tanggal Lahir</th>
                        <th class="py-3 px-6">Jenis Kelamin</th>
                        <th class="py-3 px-6">Email</th>
                        <th class="py-3 px-6">Alamat</th>
                        <!-- <th class="py-3 px-6">Kelurahan</th> -->
                        <th class="py-3 px-6">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $nomor = 1;
                    foreach ($query as $row) { ?>
                        <tr class="border-b hover:bg-gray-50">
                            <td class="py-3 px-6"><?= $nomor ?></td>
                            <td class="py-3 px-6"><?= htmlspecialchars($row->kode) ?></td>
                            <td class="py-3 px-6"><?= htmlspecialchars($row->nama) ?></td>
                            <td class="py-3 px-6"><?= htmlspecialchars($row->tmp_lahir) ?></td>
                            <td class="py-3 px-6"><?= htmlspecialchars($row->tgl_lahir) ?></td>
                            <td class="py-3 px-6"><?= htmlspecialchars($row->gender) ?></td>
                            <td class="py-3 px-6"><?= htmlspecialchars($row->email) ?></td>
                            <td class="py-3 px-6"><?= htmlspecialchars($row->alamat) ?></td>
                            <!-- <td class="py-3 px-6"><?= htmlspecialchars($row->kelurahan_id) ?></td> -->
                            <td class="py-3 px-6 space-x-2">
                                <a href="form_pasien.php?id=<?= $row->id ?>" class="text-blue-500 hover:text-blue-700">Edit</a>
                                <a href="proses_pasien.php?id_hapus=<?= $row->id ?>" class="text-red-500 hover:text-red-700" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</a>
                            </td>
                        </tr>
                        <?php $nomor++; ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>