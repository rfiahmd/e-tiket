<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailTransaksiTable extends Migration
{
    public function up()
    {
        Schema::create('detail_transaksi', function (Blueprint $table) {
            $table->id('detail_transaksi_id');
            $table->foreignId('id_transaksi')->constrained('transaksi', 'transaksi_id')->onDelete('cascade');
            $table->foreignId('id_paket')->constrained('paket_wisata', 'paket_id')->onDelete('cascade');
            $table->decimal('sub_total', 10, 2);
            $table->integer('kwantitas');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('detail_transaksi');
    }
}
