<?php
require_once '../db_koneksi.php';

$id = isset($_GET['id']) ? $_GET['id'] : null;
$pasien = null;

if ($id) {
    $stmt = $dbh->prepare("SELECT * FROM pasien WHERE id = ?");
    $stmt->execute([$id]);
    $pasien = $stmt->fetch();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $id ? 'Edit' : 'Tambah' ?> Data Pasien</title>
    <link rel="stylesheet" href="../../../src/output.css">
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">
    <div class="bg-white rounded-lg shadow-md p-6 w-full max-w-md">
        <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">
            <?= $id ? 'Edit Data Pasien' : 'Formulir Data Pasien' ?>
        </h1>

        <form class="space-y-4" method="post" action="proses_pasien.php">
            <?php if ($id): ?>
                <input type="hidden" name="id" value="<?= $id ?>">
            <?php endif; ?>

            <!-- Kode -->
            <div>
                <label for="kode" class="block text-sm font-medium text-gray-700 mb-1">Kode</label>
                <input type="text" id="kode" name="kode" value="<?= $pasien ? htmlspecialchars($pasien->kode) : '' ?>"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <!-- Nama Lengkap -->
            <div>
                <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" value="<?= $pasien ? htmlspecialchars($pasien->nama) : '' ?>"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <!-- Tempat Lahir -->
            <div>
                <label for="tmp_lahir" class="block text-sm font-medium text-gray-700 mb-1">Tempat Lahir</label>
                <input type="text" id="tmp_lahir" name="tmp_lahir" value="<?= $pasien ? htmlspecialchars($pasien->tmp_lahir) : '' ?>"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <!-- Tanggal Lahir -->
            <div>
                <label for="tgl_lahir" class="block text-sm font-medium text-gray-700 mb-1">Tanggal Lahir</label>
                <input type="date" id="tgl_lahir" name="tgl_lahir" value="<?= $pasien ? htmlspecialchars($pasien->tgl_lahir) : '' ?>"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <!-- Jenis Kelamin -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Jenis Kelamin</label>
                <div class="flex space-x-4">
                    <label class="inline-flex items-center">
                        <input type="radio" name="gender" value="L" <?= ($pasien && $pasien->gender == 'L') ? 'checked' : '' ?> class="h-4 w-4 text-blue-600 focus:ring-blue-500" required>
                        <span class="ml-2 text-gray-700">Laki-Laki</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="radio" name="gender" value="P" <?= ($pasien && $pasien->gender == 'P') ? 'checked' : '' ?> class="h-4 w-4 text-blue-600 focus:ring-blue-500">
                        <span class="ml-2 text-gray-700">Perempuan</span>
                    </label>
                </div>
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input type="email" id="email" name="email" value="<?= $pasien ? htmlspecialchars($pasien->email) : '' ?>"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Alamat -->
            <div>
                <label for="alamat" class="block text-sm font-medium text-gray-700 mb-1">Alamat</label>
                <textarea id="alamat" name="alamat" rows="3"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"><?= $pasien ? htmlspecialchars($pasien->alamat) : '' ?></textarea>
            </div>

            <!-- Kelurahan -->
            <div>
                <label for="kelurahan_id" class="block text-sm font-medium text-gray-700 mb-1">Kelurahan</label>
                <select id="kelurahan_id" name="kelurahan_id"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="">Pilih Kelurahan</option>
                    <option value="beji" <?= ($pasien && $pasien->kelurahan_id == '1') ? 'selected' : '' ?>>Beji</option>
                    <option value="cimanggis" <?= ($pasien && $pasien->kelurahan_id == '2') ? 'selected' : '' ?>>Cimanggis</option>
                    <option value="sukmajaya" <?= ($pasien && $pasien->kelurahan_id == '3') ? 'selected' : '' ?>>Sukmajaya</option>
                    <option value="sawangan" <?= ($pasien && $pasien->kelurahan_id == '4') ? 'selected' : '' ?>>Sawangan</option>
                    <option value="Lainnya" <?= ($pasien && $pasien->kelurahan_id == 'Lainnya') ? 'selected' : '' ?>>Lainnya</option>
                </select>
            </div>

            <!-- Submit Button -->
            <div class="pt-2">
                <button type="submit" name="proses" value="<?= $id ? 'Update' : 'Simpan' ?>"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-md transition duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    <?= $id ? 'Update' : 'Simpan' ?>
                </button>
                <a href="data_pasien.php" class="block w-full bg-gray-500 hover:bg-gray-600 text-white font-medium py-2 px-4 rounded-md transition duration-200 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 text-center mt-2">
                    Batal
                </a>
            </div>
        </form>
    </div>
</body>

</html>