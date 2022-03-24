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
            $table->foreignUuid('name_id')->references('id')->on('users')->nullable();
            $table->foreignUuid('username_id')->references('id')->on('users')->nullable();
            $table->foreignUuid('origin')->references('id')->on('pricelists');
            $table->string('penjemputan')->nullable();
            $table->foreignUuid('destinasi')->references('id')->on('pricelists');
            $table->string('pengantaran')->nullable();
            $table->foreignUuid('jenis_barang_id')->references('id')->on('barangs');
            $table->foreignUuid('berat_id')->references('id')->on('pricelists')->nullable();
            $table->foreignUuid('dimensi_id')->references('id')->on('pricelists')->nullable();
            $table->foreignUuid('harga_id')->references('id')->on('pricelists');
            $table->longText('note')->nullable();
            $table->string('packing');
            $table->string('gambar')->nullable();
            $table->foreignUuid('voucher_id')->references('id')->on('vouchers')->nullable();
            $table->foreignUuid('jenis_pembayaran_id')->references('id')->on('pembayarans');
            $table->foreignUuid('invoice_id')->references('id')->on('pembayarans')->nullable();
            $table->foreignUuid('nomer_resi_id')->references('id')->on('trackings')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pesanans');
    }
}
