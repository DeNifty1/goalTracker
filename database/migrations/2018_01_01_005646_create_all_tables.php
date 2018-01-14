<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        
        Schema::create('progresses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('progressName');
            $table->timestamps();
        });

        Schema::create('types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('typeName');
            $table->timestamps();
        });    

        Schema::create('goals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('goalName');
            $table->mediumText('goalDesc')->nullable();
            $table->integer('type_id')->unsigned();
            $table->foreign('type_id')->references('id')->on('types');
            $table->timestamps();
        });    

        Schema::create('milestones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('milestoneName');
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
        Schema::dropIfExists('goals');
        Schema::dropIfExists('milestones');
        Schema::dropIfExists('types');
        Schema::dropIfExists('progress');
    }
}
