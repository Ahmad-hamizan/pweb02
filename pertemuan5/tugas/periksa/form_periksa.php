<?php
require_once '../db_koneksi.php';

$id = isset($_GET['id']) ? $_GET['id'] : null;
$periksa = null;

if ($id) {
    $stmt = $dbh->prepare("SELECT * FROM periksa WHERE id = ?");
    $stmt->execute([$id]);
    $periksa = $stmt->fetch();
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
            <?= $id ? 'Edit Data Periksa' : 'Formulir Data Periksa' ?>
        </h1>

        <form class="space-y-4" method="post" action="proses_periksa.php">
            <?php if ($id): ?>
                <input type="hidden" name="id" value="<?= $id ?>">
            <?php endif; ?>

            <!-- Field Pasien -->
            <div>
                <label for="pasien_id" class="block text-sm font-medium text-gray-700">Pasien</label>
                <select id="pasien_id" name="pasien_id" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 p-2 border">
                    <option value="">Pilih Pasien</option>
                    <?php
                    // Ambil data pasien
                    $query = $dbh->query("SELECT id, nama FROM pasien");
                    while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                        $selected = ($periksa && $periksa->pasien_id == $row['id']) ? 'selected' : '';
                        echo "<option value='{$row['id']}' {$selected}>{$row['nama']}</option>";
                    }
                    ?>
                </select>
            </div>

            <!-- Field Tanggal -->
            <div>
                <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal</label>
                <input type="date" id="tanggal" name="tanggal" value="<?= $periksa ? htmlspecialchars($periksa->tanggal) : '' ?>"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 p-2 border">
            </div>

            <!-- Field Berat -->
            <div>
                <label for="berat" class="block text-sm font-medium text-gray-700">Berat Badan (kg)</label>
                <input type="number" step="0.1" id="berat" name="berat" required value="<?= $periksa ? htmlspecialchars($periksa->berat) : '' ?>"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 p-2 border">
            </div>

            <!-- Field Tinggi -->
            <div>
                <label for="tinggi" class="block text-sm font-medium text-gray-700">Tinggi Badan (cm)</label>
                <input type="number" step="0.1" id="tinggi" name="tinggi" required value="<?= $periksa ? htmlspecialchars($periksa->tinggi) : '' ?>"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 p-2 border">
            </div>

            <!-- Field Tensi -->
            <div>
                <label for="tensi" class="block text-sm font-medium text-gray-700">Tensi Darah (mmHg)</label>
                <input type="number" id="tensi" name="tensi" placeholder="Contoh: 120/80" value="<?= $periksa ? htmlspecialchars($periksa->tensi) : '' ?>"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 p-2 border">
            </div>


            <!-- Field Dokter -->
            <div>
                <label for="dokter_id" class="block text-sm font-medium text-gray-700">Dokter</label>
                <select id="dokter_id" name="dokter_id" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 p-2 border">
                    <option value="">Pilih Dokter</option>
                    <?php
                    // Ambil data dokter
                    $query = $dbh->query("SELECT id, nama FROM paramedik");
                    while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                        $selected = ($periksa && $periksa->dokter_id == $row['id']) ? 'selected' : '';
                        echo "<option value='{$row['id']}' {$selected}>{$row['nama']}</option>";
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
                <a href="data_periksa.php" class="block w-full bg-gray-500 hover:bg-gray-600 text-white font-medium py-2 px-4 rounded-md transition duration-200 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 text-center mt-2">
                    Batal
                </a>
            </div>
        </form>
    </div>
</body>

</html>