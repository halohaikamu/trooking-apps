<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricelistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pricelists', function (Blueprint $table) {
            $table->id();
            $table->foreignId('origin')->references('id')->on('cities');
            $table->foreignId('destinasi')->references('id')->on('cities');
            $table->bigInteger('berat');
            $table->bigInteger('dimensi');
            $table->bigInteger('harga');
            // $table->integer('created_by')->nullable();
            // $table->integer('updated_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pricelists');
    }
}
