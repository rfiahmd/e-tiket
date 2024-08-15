<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminProfileTable extends Migration
{
    public function up()
    {
        Schema::create('admin_profile', function (Blueprint $table) {
            $table->id('admin_id');
            $table->foreignId('id_user')->constrained('users', 'id')->onDelete('cascade');
            $table->foreignId('id_wisata')->constrained('wisata', 'wisata_id')->onDelete('cascade');
            $table->string('nama_lengkap_admin')->nullable();
            $table->string('alamat_admin')->nullable();
            $table->string('notelp_admin')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('admin_profile');
    }
}
