<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_detail_transaksi extends Model
{
    use HasFactory;

    protected $table = 'tb_detail_transaksi';

    protected $fillable = [
        'id_transaksi',
        'id_produk',
        'qty',
        'harga_produk',
        'sum_total',
    ];
}
