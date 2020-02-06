<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->bigIncrements('answer_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('question_id');
            // $table->string('answer_text_area', 16000);
            $table->text('answer_text_area');
            $table->string('answer_attachment_url', 1000)->nullable();
            $table->string('answer_file', 1000)->nullable();
            $table->boolean('best_answer')->default(false);
            $table->timestamps();
        });

        Schema::table('answers', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('answers', function (Blueprint $table) {
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
        Schema::dropIfExists('answers');
    }
}










