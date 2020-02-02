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
        Schema::create('question_specialization', function (Blueprint $table) {
            $table->unsignedBigInteger('specialization_id');
            $table->unsignedBigInteger('question_id');
        });

        Schema::table('question_specialization', function (Blueprint $table) {
            $table->foreign('specialization_id')->references('specialization_id')->on('specializations');
        });

        Schema::table('question_specialization', function (Blueprint $table) {
            $table->foreign('question_id')->references('question_id')->on('questions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question_specialization');
    }
}
