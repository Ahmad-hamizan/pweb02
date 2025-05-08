<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function show()
    {
        return view('profil.profil', [
                'nama' => 'John Doe',
                'nim' => '123456789',
                'jurusan' => 'Teknik Informatika',
                'fakultas' => 'Fakultas Teknik',
                'address' => 'Jl. Raya No. 1, Jakarta',
            ]
        );
    }
}
