<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pesanan extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'pesanan';
    protected $dates = ['deleted_at'];
    protected $fillable = [
        "id_produk",
        "jumlah_pesanan",
        "total",
        "waktu_pesanan",
    ];
}
