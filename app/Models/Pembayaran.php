<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table = 'pembayaran';
    protected $primaryKey = 'pembayaran_id';
    protected $fillable = ['id_transaksi', 'jumlah_pembayaran', 'metode_pembayaran', 'status_pembayaran', 'bukti_pembayaran'];

    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class, 'id_transaksi');
    }
}
