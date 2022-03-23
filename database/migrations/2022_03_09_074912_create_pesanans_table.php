<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesanansTable extends Migration
{
    public function up()
    {
        Schema::create('pesanans', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignId('name_id')->references('id')->on('users')->nullable();
            $table->foreignId('username_id')->references('id')->on('users')->nullable();
            $table->foreignId('origin')->references('id')->on('pricelists');
            $table->string('penjemputan')->nullable();
            $table->foreignId('destinasi')->references('id')->on('pricelists');
            $table->string('pengantaran')->nullable();
            $table->foreignId('jenis_barang_id')->references('id')->on('barangs');
            $table->foreignId('berat_id')->references('id')->on('pricelists')->nullable();
            $table->foreignId('dimensi_id')->references('id')->on('pricelists')->nullable();
            $table->foreignId('harga_id')->references('id')->on('pricelists');
            $table->longText('note')->nullable();
            $table->string('packing');
            $table->string('gambar')->nullable();
            $table->foreignId('voucher_id')->references('id')->on('vouchers')->nullable();
            $table->foreignId('jenis_pembayaran_id')->references('id')->on('pembayarans');
            $table->foreignId('invoice_id')->references('id')->on('pembayarans')->nullable();
            $table->foreignId('nomer_resi_id')->references('id')->on('trackings')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pesanans');
    }
}
