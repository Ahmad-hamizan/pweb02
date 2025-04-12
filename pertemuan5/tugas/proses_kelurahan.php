<?php
// Sertakan file koneksi database
require_once 'db_koneksi.php';

// Cek apakah form disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $nama_kelurahan = $_POST['nama_kelurahan'] ?? '';

    // Validasi data
    if (empty($nama_kelurahan)) {
        die("Data penting tidak boleh kosong!");
    }

    $proses = $_POST['proses'] ?? '';

    if ($proses == "Simpan") {
        // Simpan data baru
        $sql = "INSERT INTO kelurahan (nama_kelurahan) VALUES (?)";
        $stmt = $dbh->prepare($sql);
        // var_dump($kelurahan_id);
        // exit();
        $stmt->execute([$nama_kelurahan]);

        header("Location: data_kelurahan.php");
        exit();
    } elseif ($proses == "Update") {
        // Update data yang ada
        $id = $_POST['id'] ?? 0;
        if ($id <= 0) {
            die("ID tidak valid!");
        }

        $sql = "UPDATE kelurahan SET nama_kelurahan=? WHERE id=?";
        $stmt = $dbh->prepare($sql);
        $stmt->execute([$nama_kelurahan]);

        header("Location: data_kelurahan.php");
        exit();
    }
} elseif (isset($_GET['id_hapus'])) {
    // Hapus data
    $id = $_GET['id_hapus'] ?? 0;
    if ($id <= 0) {
        die("ID tidak valid!");
    }

    $sql = "DELETE FROM kelurahan WHERE id=?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$id]);

    header("Location: data_kelurahan.php");
    exit();
} else {
    die("Aksi tidak dikenali!");
}
