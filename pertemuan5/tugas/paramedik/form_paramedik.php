<?php
require_once '../db_koneksi.php';

$id = isset($_GET['id']) ? $_GET['id'] : null;
$paramedik = null;

if ($id) {
    $stmt = $dbh->prepare("SELECT * FROM paramedik WHERE id = ?");
    $stmt->execute([$id]);
    $paramedik = $stmt->fetch();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $id ? 'Edit' : 'Tambah' ?> Data Paramedik</title>
    <link rel="stylesheet" href="../../../src/output.css">
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">
    <div class="bg-white rounded-lg shadow-md p-6 w-full max-w-md">
        <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">
            <?= $id ? 'Edit Data Paramedik' : 'Formulir Data Paramedik' ?>
        </h1>

        <form class="space-y-4" method="post" action="proses_paramedik.php">
            <?php if ($id): ?>
                <input type="hidden" name="id" value="<?= $id ?>">
            <?php endif; ?>

            <!-- Nama Lengkap -->
            <div>
                <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" value="<?= $paramedik ? htmlspecialchars($paramedik->nama) : '' ?>"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <!-- Jenis Kelamin -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Jenis Kelamin</label>
                <div class="flex space-x-4">
                    <label class="inline-flex items-center">
                        <input type="radio" name="gender" value="L" <?= ($paramedik && $paramedik->gender == 'L') ? 'checked' : '' ?> class="h-4 w-4 text-blue-600 focus:ring-blue-500" required>
                        <span class="ml-2 text-gray-700">Laki-Laki</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="radio" name="gender" value="P" <?= ($paramedik && $paramedik->gender == 'P') ? 'checked' : '' ?> class="h-4 w-4 text-blue-600 focus:ring-blue-500">
                        <span class="ml-2 text-gray-700">Perempuan</span>
                    </label>
                </div>
            </div>

            <!-- Tempat Lahir -->
            <div>
                <label for="tmp_lahir" class="block text-sm font-medium text-gray-700 mb-1">Tempat Lahir</label>
                <input type="text" id="tmp_lahir" name="tmp_lahir" value="<?= $paramedik ? htmlspecialchars($paramedik->tmp_lahir) : '' ?>"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <!-- Tanggal Lahir -->
            <div>
                <label for="tgl_lahir" class="block text-sm font-medium text-gray-700 mb-1">Tanggal Lahir</label>
                <input type="date" id="tgl_lahir" name="tgl_lahir" value="<?= $paramedik ? htmlspecialchars($paramedik->tgl_lahir) : '' ?>"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <!-- Kategori -->
            <div>
                <?php
                // Ambil definisi ENUM dari kolom kategori
                $stmt = $dbh->query("SHOW COLUMNS FROM paramedik LIKE 'kategori'");
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                $enumValues = explode("','", preg_replace("/(enum|set)\('(.+?)'\)/", "\\2", $row['Type']));

                // Jika ada data paramedik yang sedang diedit
                $currentKategori = $paramedik->kategori ?? '';
                ?>

                <label for="kategori" class="block text-sm font-medium text-gray-700 mb-1">Kategori</label>
                <select name="kategori" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 p-2 border">
                    <option value="">Pilih Kategori</option>
                    <?php foreach ($enumValues as $value): ?>
                        <option value="<?= htmlspecialchars($value) ?>"
                            <?= ($value == $currentKategori) ? 'selected' : '' ?>>
                            <?= htmlspecialchars($value) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <!-- No Telepon -->
            <div>
                <label for="no_telp" class="block text-sm font-medium text-gray-700 mb-1">No Telepon</label>
                <input type="tel" id="no_telp" name="telpon" value="<?= $paramedik ? htmlspecialchars($paramedik->telpon) : '' ?>"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Alamat -->
            <div>
                <label for="alamat" class="block text-sm font-medium text-gray-700 mb-1">Alamat</label>
                <textarea id="alamat" name="alamat" rows="3"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"><?= $paramedik ? htmlspecialchars($paramedik->alamat) : '' ?></textarea>
            </div>

            <!-- Unit Kerja -->
            <div>
                <label for="unitkerja_id" class="block text-sm font-medium text-gray-700 mb-1">Unit Kerja</label>
                <select id="unitkerja_id" name="nama_unit" required
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="">Pilih Unit Kerja</option>
                    <?php
                    // Ambil data pasien
                    $query = $dbh->query("SELECT id, nama_unit FROM unit_kerja");
                    while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                        $selected = ($paramedik && $paramedik->unitkerja_id == $row['id']) ? 'selected' : '';
                        echo "<option value='{$row['id']}' {$selected}>{$row['nama_unit']}</option>";
                    }
                    ?>
                </select>
            </div>

            <!-- Submit Button -->
            <div class="pt-2">
                <button type="submit" name="proses" value="<?= $id ? 'Update' : 'Simpan' ?>"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-md transition duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    <?= $id ? 'Update' : 'Simpan' ?>
                </button>
                <a href="data_paramedik.php" class="block w-full bg-gray-500 hover:bg-gray-600 text-white font-medium py-2 px-4 rounded-md transition duration-200 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 text-center mt-2">
                    Batal
                </a>
            </div>
        </form>
    </div>
</body>

</html>