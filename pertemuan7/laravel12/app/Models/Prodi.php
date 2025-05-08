<?php

namespace App\Models;

class Prodi
{
    public string $nama;
    public string $kode;
    public string $kaprodi;

    public function __construct(string $nama, string $kode)
    {
        $this->nama = $nama;
        $this->kode = $kode;
    }
}