<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWisataTable extends Migration
{
    public function up()
    {
        Schema::create('wisata', function (Blueprint $table) {
            $table->id('wisata_id');
            $table->string('nama_wisata');
            $table->enum('status', ['active', 'inactif'])->nullable();
            $table->string('alamat_lengkap');
            $table->string('gambar_wisata');
            $table->text('deskripsi');
            $table->foreignId('id_kategori')->constrained('kategori', 'kategori_id')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('wisata');
    }
}
