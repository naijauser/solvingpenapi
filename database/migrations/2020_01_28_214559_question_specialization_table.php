<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class QuestionSpecializationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_specializations', function (Blueprint $table) {
            $table->unsignedBigInteger('specialization_id');
            $table->unsignedBigInteger('question_id');
        });

        Schema::table('question_specializations', function (Blueprint $table) {
            $table->foreign('specialization_id')->references('id')->on('specializations');
        });

        Schema::table('question_specializations', function (Blueprint $table) {
            $table->foreign('question_id')->references('id')->on('questions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question_specializations');
    }
}
