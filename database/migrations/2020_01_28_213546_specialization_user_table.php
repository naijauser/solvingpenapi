<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SpecializationUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specialization_user', function (Blueprint $table) {
            $table->unsignedBigInteger('specialization_id');
            $table->unsignedBigInteger('user_id');

        });

        Schema::table('specialization_user', function (Blueprint $table) {
            $table->foreign('specialization_id')->references('specialization_id')->on('specializations');
        });

        Schema::table('specialization_user', function (Blueprint $table) {
            $table->foreign('user_id')->references('user_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('specialization_user');
    }
}
