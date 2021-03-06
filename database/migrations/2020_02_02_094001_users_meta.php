<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsersMeta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('users_meta', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->unique();
            $table->string('profile_pic')->default('profile_avatar')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('website')->nullable();
            $table->string('gender')->nullable();
            $table->string('phone')->nullable();
            $table->unsignedInteger('points')->default(0);
            $table->string('description', 1000)->nullable();
        });

        Schema::table('users_meta', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
