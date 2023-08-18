<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bayar extends Model 
{
    use HasFactory;

    public $table = "bayar";
    public $primaryKey = "id_bayar";

    //tambahkan kode berikut
    protected $fillable = [
        'id_bayar', 'kd_bayar', 'nm' ,'tgl_bayar', 'nominal', 'status'
    ];
}