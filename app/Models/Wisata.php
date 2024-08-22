<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;

    protected $table = 'wisata';
    protected $primaryKey = 'wisata_id';
    protected $fillable = [
        'nama_wisata', 
        'status', 
        'alamat_lengkap', 
        'gambar_wisata', 
        'deskripsi', 
        'fasilitas', 
        'syarat_ketentuan', 
        'waktu_buka', 
        'waktu_tutup', 
        'id_kategori'
    ];

    public static function getAllWisata()
    {
        return self::with('kategori')->get();
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

    public function paketWisata()
    {
        return $this->hasMany(PaketWisata::class, 'id_wisata');
    }

    public function adminProfiles()
    {
        return $this->hasMany(AdminProfile::class, 'id_wisata');
    }

    public function karyawanProfiles()
    {
        return $this->hasMany(KaryawanProfile::class, 'id_wisata');
    }
}

