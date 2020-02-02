<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->bigIncrements('question_id');
            $table->unsignedBigInteger('user_id');
            $table->string('question_title');
            $table->text('question_text_area');
            $table->string('question_attachment_url', 1000)->nullable();;
            $table->string('question_file', 1000)->nullable();;
            $table->string('question_state', 1000)->default('unsolved');
            $table->timestamps();
        });

        Schema::table('questions', function (Blueprint $table) {
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
        Schema::dropIfExists('questions');
    }
}
