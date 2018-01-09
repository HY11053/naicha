<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOthercolumToAddonarticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('addonarticles', function (Blueprint $table) {
            $table->integer('decorationpay')->default(0);
            $table->integer('quartersrent')->default(0);
            $table->integer('equipmentcost')->default(0);
            $table->integer('workingcapital')->default(0);
            $table->integer('laborquarter')->default(0);
            $table->integer('miscellaneous')->default(0);
            $table->integer('dailyvolume')->default(0);
            $table->integer('unitprice')->default(0);
            $table->integer('watercoal')->default(0);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('addonarticles', function (Blueprint $table) {
            //
            $table->dropColumn(['decorationpay','quartersrent','equipmentcost','workingcapital','laborquarter','miscellaneous','dailyvolume','unitprice','watercoal']);
        });
    }
}
