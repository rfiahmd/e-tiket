<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KaryawanProfile extends Model
{
    use HasFactory;

    protected $table = 'karyawan_profile';
    protected $primaryKey = 'karyawan_id';
    protected $fillable = ['id_user', 'id_wisata', 'nama_lengkap_karyawan', 'alamat_karyawan', 'notelp_karyawan'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function wisata()
    {
        return $this->belongsTo(Wisata::class, 'id_wisata');
    }
}
