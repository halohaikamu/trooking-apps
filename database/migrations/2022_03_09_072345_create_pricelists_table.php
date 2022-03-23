<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricelistsTable extends Migration
{
    public function up()
    {
        Schema::create('pricelists', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignId('origin')->references('id')->on('cities');
            $table->foreignId('destinasi')->references('id')->on('cities');
            $table->bigInteger('berat');
            $table->bigInteger('dimensi');
            $table->bigInteger('harga');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pricelists');
    }
}
