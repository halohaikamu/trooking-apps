<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResisTable extends Migration
{
    public function up()
    {
        Schema::create('resis', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('admin_id')->references('id')->on('admins');
            $table->foreignUuid('pesanan_id')->references('id')->on('pesanans');
            $table->foreignUuid('nomer_resi_id')->references('id')->on('pesanans');
            $table->dateTime('on_booking');
            $table->dateTime('on_pickup')->nullable();
            $table->dateTime('on_process')->nullable();
            $table->dateTime('on_transit')->nullable();
            $table->dateTime('on_packing')->nullable();
            $table->dateTime('on_survey')->nullable();
            $table->dateTime('on_hold')->nullable();
            $table->dateTime('canceled')->nullable();
            $table->dateTime('delivered')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('resis');
    }
}
