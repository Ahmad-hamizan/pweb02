<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class Kelurahan extends Model
{
    use HasFactory;
    protected $table = 'kelurahans';

    protected $fillable = [
        'id',
        'nama',
    ];
}
