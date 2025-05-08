<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\View\View;
use App\Http\Controllers\Controller;

class ProdiController extends Controller{
    public function show(): View
    {
        $prodi1 = new Prodi('Teknik Informatika', 'TI');
        $prodi1->kaprodi='Tiffany Nabbarian M.TI.';
        $prodi2 = new Prodi('Sistem Informasi', 'SI');
        $prodi2->kaprodi='Misna Asqia M.Kom.';
        $prodi3 = new Prodi('Bisnis Digital', 'BD');
        $prodi3->kaprodi='Dr. Amalia Rahmah M.T';

        $ar_prodi = [$prodi1, $prodi2, $prodi3];
        return view('prodi.index', ['judul' => 'Daftar Prodi En Ep', 'ar_prodi' => $ar_prodi]);
    }
}