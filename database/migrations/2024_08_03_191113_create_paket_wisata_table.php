<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaketWisataTable extends Migration
{
    public function up()
    {
        Schema::create('paket_wisata', function (Blueprint $table) {
            $table->id('paket_id');
            $table->foreignId('id_wisata')->constrained('wisata', 'wisata_id')->onDelete('cascade');
            $table->string('nama_paket');
            $table->decimal('harga_paket', 10, 2);
            $table->text('deskripsi')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('paket_wisata');
    }
}
