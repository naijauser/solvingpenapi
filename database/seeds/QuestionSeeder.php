<?php

use Illuminate\Database\Seeder;
use App\Question;
use App\User;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Insert the dummy data into the questions table
         */
         Question::create([
            'user_id' => 2,
            'question_title' => 'How can I resolve the div of a vector',
            'question_text_area' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ante orci, convallis quis vestibulum a, tristique quis purus.',
            'question_attachment_url' => 'Gravatar.png',
            'question_file' => 'Gravatar.png',
         ]);
    }

    /**
     * Get a user id for this seeder
     * 
     * @return User
     */
    private function getUsersId () {
        $user = User::all();
    }
}

