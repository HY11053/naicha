<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTitlesToArchivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('archives', function (Blueprint $table) {
            //
            $table->string('ppjstitle')->nullable();
            $table->string('jmxqtitle')->nullable();
            $table->string('jmystitle')->nullable();
            $table->string('jmlctitle')->nullable();
            $table->string('jmzctitle')->nullable();
            $table->string('jmasktitle')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('archives', function (Blueprint $table) {
            //
            $table->dropColumn(['ppjstitle','jmxqtitle','jmystitle','jmlctitle','jmzctitle','jmasktitle']);
        });
    }
}
