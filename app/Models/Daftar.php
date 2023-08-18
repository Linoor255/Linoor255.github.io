<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftar extends Model 
{
    use HasFactory;

    public $table = "daftar";
    public $primaryKey = "id_daftar";

    //tambahkan kode berikut
    protected $fillable = [
         'kd_daftar', 'nm', 'gender', 'tgl_lahir', 'agama', 'surat_baptis', 'akte','kk', 
        'alamat', 'nm_ortu', 'pekerjaan', 'nohp', 'ktp', 'status'
    ];
}