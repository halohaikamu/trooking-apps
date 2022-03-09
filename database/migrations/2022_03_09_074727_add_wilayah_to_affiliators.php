<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddWilayahToAffiliators extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('affiliators', function (Blueprint $table) {
            $table->foreignId('prov_id')->references('id')->on('provinces');
            $table->foreignId('city_id')->references('id')->on('cities');
            $table->foreignId('dis_id')->references('id')->on('districts');
            $table->foreignId('subdis_id')->references('id')->on('subdistricts');
            $table->foreignId('voucher_id')->references('id')->on('vouchers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('affiliators', function (Blueprint $table) {
            Schema::dropColumns('prov_id','city_id','dis_id','subdis_id');
        });
    }
}
