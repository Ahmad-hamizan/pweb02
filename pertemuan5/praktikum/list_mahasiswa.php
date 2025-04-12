<?php

require_once 'dbkoneksi.php';

// define query (1)
$sql = "SELECT * FROM mahasiswa ORDER BY thn_masuk DESC";

// eksekusi query (2)
$rs = $dbh->query($sql);

// tampilkan hasil query (3)
// foreach ($rs as $row) {
//     echo "<br>" . $row->nim . " - " . $row->nama . " - " . $row->thn_masuk;
// }

?>

<h2>Data Mahasiswa</h2>
<table border="1" cellpadding="5" cellspacing="0">
    <tr></tr>
    <th>No</th>
    <th>NIM</th>
    <th>Nama</th>
    <th>Tahun Masuk</th>
    <th>Aksi</th>
    </tr>
    <?php
    $nomor = 1;
    foreach ($rs as $row) { ?>
        <tr>
            <td><?= $nomor ?></td>
            <td><?= $row->nim ?></td>
            <td><?= $row->nama ?></td>
            <td><?= $row->thn_masuk ?></td>
            <td>
                <a href="form_mahasiswa.php?id=<?= $row->id ?>">Edit</a>
                <a href="proses_mahasiswa.php?id_hapus=<?= $row->id ?>">Hapus</a>
            </td>
        </tr>
        <?php $nomor++; ?>
    <?php } ?>
</table>