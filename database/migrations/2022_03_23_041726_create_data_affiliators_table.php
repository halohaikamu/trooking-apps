<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataAffiliatorsTable extends Migration
{
    public function up()
    {
        Schema::create('data_affiliators', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('affiliator_id')->references('id')->on('affiliators');
            $table->bigInteger('whatsapp');
            $table->string('foto_ktp');
            $table->string('foto_npwp');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('data_affiliators');
    }
}
