<?php
require_once '../db_koneksi.php';

$id = isset($_GET['id']) ? $_GET['id'] : null;
$unit_kerja = null;

if ($id) {
    $stmt = $dbh->prepare("SELECT * FROM unit_kerja WHERE id = ?");
    $stmt->execute([$id]);
    $unit_kerja = $stmt->fetch();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $id ? 'Edit' : 'Tambah' ?> Data Unit Kerja</title>
    <link rel="stylesheet" href="../../../src/output.css">
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">
    <div class="bg-white rounded-lg shadow-md p-6 w-full max-w-md">
        <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">
            <?= $id ? 'Edit Data Unit Kerja' : 'Formulir Data Unit Kerja' ?>
        </h1>

        <form class="space-y-4" method="post" action="proses_uk.php">
            <?php if ($id): ?>
                <input type="hidden" name="id" value="<?= $id ?>">
            <?php endif; ?>

            <!-- Kode -->
            <div>
                <label for="kode" class="block text-sm font-medium text-gray-700 mb-1">Kode</label>
                <input type="text" id="kode" name="kode_unit" value="<?= $unit_kerja? htmlspecialchars($unit_kerja->kode_unit) : '' ?>"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <!-- Nama Unit -->
            <div>
                <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                <input type="text" id="nama" name="nama_unit" value="<?= $unit_kerja ? htmlspecialchars($unit_kerja->nama_unit) : '' ?>"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <!-- Keterangan -->
            <div>
                <label for="keterangan" class="block text-sm font-medium text-gray-700 mb-1">Keterangan</label>
                <input type="text" id="keterangan" name="keterangan" value="<?= $unit_kerja ? htmlspecialchars($unit_kerja->keterangan) : '' ?>"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <!-- Submit Button -->
            <div class="pt-2">
                <button type="submit" name="proses" value="<?= $id ? 'Update' : 'Simpan' ?>"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-md transition duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    <?= $id ? 'Update' : 'Simpan' ?>
                </button>
                <a href="data_uk.php" class="block w-full bg-gray-500 hover:bg-gray-600 text-white font-medium py-2 px-4 rounded-md transition duration-200 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 text-center mt-2">
                    Batal
                </a>
            </div>
        </form>
    </div>
</body>

</html>