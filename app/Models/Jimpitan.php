<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jimpitan extends Model
{
    use HasFactory;

    protected $table = 'jimpitan';

    protected $fillable = [
        'tanggal',
        'penyetor',
        'tidaksetor',
        'jumlahsetoran'
    ];
}
