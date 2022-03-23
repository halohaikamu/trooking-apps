<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformasisTable extends Migration
{
    public function up()
    {
        Schema::create('informasis', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('jenis_informasi');
            $table->string('isi');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('informasis');
    }
}
