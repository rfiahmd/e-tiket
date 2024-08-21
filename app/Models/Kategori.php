<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategori';
    protected $primaryKey = 'kategori_id';
    protected $fillable = ['nama_kategori'];

    public static function getAllKategori()
    {
        return self::select('kategori.*')
            ->withCount('wisatas')
            ->orderBy('kategori_id', 'asc')
            ->get();
    }

    public function wisatas()
    {
        return $this->hasMany(Wisata::class, 'id_kategori');
    }
    
}
