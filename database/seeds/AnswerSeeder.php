<?php

use Illuminate\Database\Seeder;
use App\Answer;
use App\User;
use App\Question;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Insert the dummy data into the answers table
         */
        Answer::create([
            'user_id' => 3,
            'question_id' => 2,
            'answer_text_area' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ante orci, convallis quis vestibulum a, tristique quis purus.',
            'answer_attachment_url' => 'gravatar.jpg',
            'answer_file' => '',
        ]);

        Answer::create([
            'user_id' => 1,
            'question_id' => 2,
            'answer_text_area' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ante orci, convallis quis vestibulum a, tristique quis purus.',
            'answer_attachment_url' => 'gravatar.jpg',
            'answer_file' => '',
        ]);

        Answer::create([
            'user_id' => 2,
            'question_id' => 3,
            'answer_text_area' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ante orci, convallis quis vestibulum a, tristique quis purus.',
            'answer_attachment_url' => 'gravatar.jpg',
            'answer_file' => '',
        ]);
    }
}
