<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArctypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arctypes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('reid')->default(0);
            $table->integer('topid')->default(0);
            $table->integer('sortrank')->nullable();
            $table->string('typename')->nullable();
            $table->string('typedir');
            $table->string('title');
            $table->string('description')->nullable();
            $table->string('keywords')->nullable();
            $table->smallInteger('dirposition')->default(1);
            $table->integer('is_write');
            $table->string('real_path');
            $table->string('litpic')->nullable();
            $table->text('typeimages')->nullable();
            $table->text('contents')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('arctypes');
    }
}
