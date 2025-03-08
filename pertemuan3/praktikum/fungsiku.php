<?php

function hitung_nilai($nilai_uts, $nilai_uas, $nilai_tugas) {
    define("NILAI_UTS", 0.25);
    define("NILAI_UAS", 0.30);
    define("NILAI_TUGAS", 0.45);

    $nilai_akhir = NILAI_UTS * $nilai_uts + NILAI_UAS * $nilai_uas + NILAI_TUGAS * $nilai_tugas;
    return $nilai_akhir;
}

function kelulusan($nilai) {
    define ("NILAI_MINIMAL", 60);

    if ($nilai >= NILAI_MINIMAL) {
        return "Lulus";
    } else {
        return "Tidak Lulus";
    }
}

function grade($nilai) {
    if ($nilai >= 80) {
        return "A";
    } elseif ($nilai >= 70) {
        return "B";
    } elseif ($nilai >= 56) {
        return "C";
    } elseif ($nilai >= 36) {
        return "D";
    } else {
        return "E";
    }
}