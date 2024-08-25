<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiTable extends Migration
{
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id('transaksi_id');
            $table->string('kode_transaksi')->unique();
            $table->string('nama_pembeli');
            $table->string('email_pembeli');
            $table->string('notelp_pembeli');
            $table->foreignId('id_paket')->constrained('paket_wisata', 'paket_id')->onDelete('cascade');
            $table->integer('jumlah_paket');
            $table->decimal('total_harga', 10, 0);
            $table->date('tanggal_pesanan');
            $table->enum('status_transaksi', ['Sukses','Proses', 'Batal'])->default('Proses');
            $table->string('qr_kode')->nullable();
            $table->string('sual_token')->nullable();
            $table->foreignId('id_user')->constrained('users', 'id')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
}
