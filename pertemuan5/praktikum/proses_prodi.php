<?php
// Sertakan file koneksi database
require_once 'dbkoneksi.php';

// Cek apakah form disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 1) tangkap data dari form
    $_kode = $_POST['kode'];
    $_nama = $_POST['nama'];
    $_kaprodi = $_POST['kaprodi'];

    // Validasi data
    if (empty($_kode) || empty($_nama) || empty($_kaprodi)) {
        die("Data penting tidak boleh kosong!");
    }

    $proses = $_POST['proses'] ?? '';

    if ($proses == "Simpan") {
        // Simpan data baru
        $sql = "INSERT INTO prodi (kode, nama, kaprodi) VALUES (?, ?, ?)";
        $stmt = $dbh->prepare($sql);
        // var_dump($kelurahan_id);
        // exit();
        $stmt->execute([$_kode, $_nama, $_kaprodi]);

        header("Location: data_pasien.php");
        exit();
    } elseif ($proses == "Update") {
        // Update data yang ada
        $id = $_POST['id'] ?? 0;
        if ($id <= 0) {
            die("ID tidak valid!");
        }

        $sql = "UPDATE prodi SET kode=?, nama=?, kaprodi=? WHERE id=?";
        $stmt = $dbh->prepare($sql);
        $stmt->execute([$_kode, $_nama, $_kaprodi]);

        header("Location: list_prodi.php");
        exit();
    }
} elseif (isset($_GET['id_hapus'])) {
    // Hapus data
    $id = $_GET['id_hapus'] ?? 0;
    if ($id <= 0) {
        die("ID tidak valid!");
    }

    $sql = "DELETE FROM prodi WHERE id=?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$id]);

    header("Location: list_prodi.php");
    exit();
} else {
    die("Aksi tidak dikenali!");
}
