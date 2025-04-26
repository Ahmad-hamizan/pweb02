<?php
require_once '../db_koneksi.php';

$id = isset($_GET['id']) ? $_GET['id'] : null;
$kelurahan = null;

if ($id) {
    $stmt = $dbh->prepare("SELECT * FROM kelurahan WHERE id = ?");
    $stmt->execute([$id]);
    $kelurahan = $stmt->fetch();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $id ? 'Edit' : 'Tambah' ?> Data Kelurahan</title>
    <link rel="stylesheet" href="../../../src/output.css">
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">
    <div class="bg-white rounded-lg shadow-md p-6 w-full max-w-md">
        <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">
            <?= $id ? 'Edit Data Kelurahan' : 'Formulir Data Kelurahan' ?>
        </h1>

        <form class="space-y-4" method="post" action="proses_kelurahan.php">
            <?php if ($id): ?>
                <input type="hidden" name="id" value="<?= $id ?>">
            <?php endif; ?>

            <!-- Nama Kelurahan -->
            <div>
                <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama Kelurahan</label>
                <input type="text" id="nama" name="nama_kelurahan" value="<?= $kelurahan ? htmlspecialchars($kelurahan->nama_kelurahan) : '' ?>"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <!-- Submit Button -->
            <div class="pt-2">
                <button type="submit" name="proses" value="<?= $id ? 'Update' : 'Simpan' ?>"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-md transition duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    <?= $id ? 'Update' : 'Simpan' ?>
                </button>
                <a href="data_kelurahan.php" class="block w-full bg-gray-500 hover:bg-gray-600 text-white font-medium py-2 px-4 rounded-md transition duration-200 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 text-center mt-2">
                    Batal
                </a>
            </div>
        </form>
    </div>
</body>

</html>