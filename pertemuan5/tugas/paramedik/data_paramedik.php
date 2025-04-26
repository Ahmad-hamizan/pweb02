<?php
// 1. Sertakan file koneksi database
require_once '../db_koneksi.php';
// 2. Definisi query untuk mengambil data pasien
$sql = "SELECT d.*, uk.nama_unit as unit_kerja
        FROM paramedik d
        LEFT JOIN unit_kerja uk ON d.id = uk.id
        ORDER BY d.id DESC";
// 3. Eksekusi query
$query = $dbh->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Paramedik</title>
    <link rel="stylesheet" href="../../../src/output.css">
</head>

<body class="bg-gray-50">
    <div class="container mx-auto p-4">
        <div class="flex flex-row justify-between items-center px-4 py-2">
            <h2 class="text-2xl font-semibold mb-4">Data Paramedik</h2>
            <a href="form_paramedik.php" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Tambah Data</a>
        </div>

        <div class="overflow-x-auto px-4 py-4">
            <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-md">
                <thead>
                    <tr class="text-left bg-gray-100 text-gray-700">
                        <th class="py-3 px-6">No</th>
                        <th class="py-3 px-6">Nama</th>
                        <th class="py-3 px-6">Jenis Kelamin</th>
                        <th class="py-3 px-6">Tempat Lahir</th>
                        <th class="py-3 px-6">Tanggal Lahir</th>
                        <th class="py-3 px-6">Kategori</th>
                        <th class="py-3 px-6">No HP</th>
                        <th class="py-3 px-6">Alamat</th>
                        <th class="py-3 px-6">Unit Kerja</th>
                        <th class="py-3 px-6">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $nomor = 1;
                    while ($row = $query->fetch(PDO::FETCH_ASSOC)): ?>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= $nomor++ ?></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"><?= $row['nama'] ?? '-' ?></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= $row['gender'] ?? '-' ?></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= $row['tmp_lahir'] ?? '-' ?> kg</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= $row['tgl_lahir'] ?? '-' ?> cm</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= $row['kategori'] ?? '-' ?></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= $row['telpon'] ?? '-' ?></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= $row['alamat'] ?? '-' ?></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= $row['unit_kerja'] ?></td>
                            <td class="px-6 py-4 space-x-2">
                                <a href="form_paramedik.php?id=<?= $row['id'] ?>" class="text-blue-500 hover:text-blue-700">Edit</a>
                                <a href="proses_paramedik.php?id_hapus=<?= $row['id'] ?>" class="text-red-500 hover:text-red-700" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Delete</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>