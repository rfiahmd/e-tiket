<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketWisata extends Model
{
    use HasFactory;

    protected $table = 'paket_wisata';
    protected $primaryKey = 'paket_id';
    protected $fillable = ['id_wisata', 'nama_paket', 'harga_paket', 'deskripsi'];

    public static function getAllPaket()
    {
        return self::with('wisata')->get();
    }

    public function wisata()
    {
        return $this->belongsTo(Wisata::class, 'id_wisata');
    }

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'id_paket');
    }

    public function detailTransaksi()
    {
        return $this->hasMany(DetailTransaksi::class, 'id_paket');
    }
}
