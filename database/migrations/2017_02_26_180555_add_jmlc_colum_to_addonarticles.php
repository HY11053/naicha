<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddJmlcColumToAddonarticles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('addonarticles', function (Blueprint $table) {
            //
            $table->mediumText('jmxq_content')->nullable();
            $table->mediumText('jmys_content')->nullable();
            $table->mediumText('jmlc_content')->nullable();
            $table->mediumText('jmzc_content')->nullable();
            $table->mediumText('jmask_content')->nullable();
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
            $table->dropColumn(['jmxq_content','jmys_content','jmlc_content','jmzc_content','jmask_content']);
        });
    }
}
