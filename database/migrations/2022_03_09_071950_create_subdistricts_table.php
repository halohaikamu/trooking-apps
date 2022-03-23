<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubdistrictsTable extends Migration
{
    public function up()
    {
        Schema::create('subdistricts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dis_id')->references('id')->on('districts')->nullable();
            $table->string('name')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('subdistricts');
    }
}
