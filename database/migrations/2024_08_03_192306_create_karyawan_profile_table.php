<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawanProfileTable extends Migration
{
    public function up()
    {
        Schema::create('karyawan_profile', function (Blueprint $table) {
            $table->id('karyawan_id');
            $table->foreignId('id_user')->constrained('users', 'id')->onDelete('cascade');
            $table->foreignId('id_wisata')->constrained('wisata', 'wisata_id')->onDelete('cascade');
            $table->string('nama_lengkap_karyawan')->nullable();
            $table->string('alamat_karyawan')->nullable();
            $table->string('notelp_karyawan')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('karyawan_profile');
    }
}
