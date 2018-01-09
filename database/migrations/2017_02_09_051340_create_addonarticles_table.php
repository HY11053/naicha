<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddonarticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addonarticles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('typeid');
            $table->text('body')->nullable();
            $table->string('pics')->nullable();
            $table->string('redirect')->nullable();
            $table->string('tag')->nullable();
            $table->string('coordinate')->nullable();
            $table->string('brandname')->nullable();
            $table->string('brandtime')->nullable();
            $table->string('brandorigin')->nullable();
            $table->string('brandnum')->nullable();
            $table->string('brandpay')->nullable();
            $table->string('brandarea')->nullable();
            $table->string('brandmap')->nullable();
            $table->string('brandperson')->nullable();
            $table->string('brandattch')->nullable();
            $table->string('brandapply')->nullable();
            $table->string('brandchat')->nullable();
            $table->string('brandgroup')->nullable();
            $table->string('brandaddr')->nullable();
            $table->string('brandduty')->nullable();
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
        Schema::drop('addonarticles');
    }
}
