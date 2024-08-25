<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaranTable extends Migration
{
    public function up()
    {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id('pembayaran_id');
            $table->foreignId('id_transaksi')->constrained('transaksi', 'transaksi_id')->onDelete('cascade');
            $table->decimal('jumlah_pembayaran', 10, 0);
            $table->string('metode_pembayaran');
            $table->enum('status_pembayaran', ['Sukses', 'Batal']);
            $table->string('bukti_pembayaran')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pembayaran');
    }
}
