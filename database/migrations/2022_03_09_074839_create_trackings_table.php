<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrackingsTable extends Migration
{
    public function up()
    {
        Schema::create('trackings', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nomer_resi');
            $table->string('status');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('trackings');
    }
}
