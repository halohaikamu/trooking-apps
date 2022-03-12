<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddWilayahToVendors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vendors', function (Blueprint $table) {
            $table->foreignId('prov_id')->references('id')->on('provinces')->nullable();
            $table->foreignId('city_id')->references('id')->on('cities')->nullable();
            $table->foreignId('dis_id')->references('id')->on('districts')->nullable();
            $table->foreignId('subdis_id')->references('id')->on('subdistricts')->nullable();
            $table->foreignId('voucher_id')->references('id')->on('vouchers')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vendors', function (Blueprint $table) {
            Schema::dropColumns('prov_id','city_id','dis_id','subdis_id');
        });
    }
}
