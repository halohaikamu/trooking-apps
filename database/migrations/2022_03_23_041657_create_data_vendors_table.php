<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataVendorsTable extends Migration
{
    public function up()
    {
        Schema::create('data_vendors', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('vendor_id')->references('id')->on('vendors');
            $table->bigInteger('whatsapp');
            $table->string('nama_driver');
            $table->integer('nopol_driver');
            $table->foreignId('coverage_area')->references('id')->on('cities');
            $table->string('foto_ktp');
            $table->string('foto_unit')->nullable();
            $table->string('foto_sim')->nullable();
            $table->string('foto_stnk')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('data_vendors');
    }
}
