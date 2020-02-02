<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votes', function (Blueprint $table) {
            $table->bigIncrements('vote_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('answer_id');
            $table->string('vote_description');
            $table->string('vote_type');
            $table->timestamps();
        });

        Schema::table('votes', function (Blueprint $table) {
            $table->foreign('user_id')->references('user_id')->on('users');
        });

        Schema::table('votes', function (Blueprint $table) {
            $table->foreign('answer_id')->references('answer_id')->on('answers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('votes');
    }
}
