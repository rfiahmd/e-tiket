<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminProfile extends Model
{
    use HasFactory;

    protected $table = 'admin_profile';
    protected $primaryKey = 'admin_id';
    protected $fillable = ['id_user', 'id_wisata', 'nama_lengkap_admin', 'alamat_admin', 'notelp_admin'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function wisata()
    {
        return $this->belongsTo(Wisata::class, 'id_wisata');
    }
}

