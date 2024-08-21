<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';
    protected $primaryKey = 'transaksi_id';
    protected $fillable = ['kode_transaksi', 'nama_pembeli', 'email_pembeli', 'notelp_pembeli', 'id_paket', 'jumlah_paket', 'total_harga', 'status_transaksi', 'qr_kode', 'sual_token', 'user_id'];

    public function paketWisata()
    {
        return $this->belongsTo(PaketWisata::class, 'id_paket');
    }

    public function pembayaran()
    {
        return $this->hasOne(Pembayaran::class, 'id_transaksi');
    }

    public function detailTransaksi()
    {
        return $this->hasMany(DetailTransaksi::class, 'id_transaksi');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
