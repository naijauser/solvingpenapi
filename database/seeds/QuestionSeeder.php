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

         // Array of dummy questions
        $questions = [
            'How can I make Ewa Aganyi?',
            'What is the most effective way to master bible prophecy?',
            'How can I solve for the net force in this problem?',
            'How can I resolve the div of a vector'
         ];

         // Get all the users
         $users = User::all();

         // Loop through the users and insert the data
         foreach ($users as $user) {
            Question::create([
                // 'user_id' => getUsersId(),
                'user_id' => $user->id,
                'question_title' => $questions[rand(0, 2)],
                'question_text_area' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ante orci, convallis quis vestibulum a, tristique quis purus.',
                'question_attachment_url' => 'Gravatar.png',
                'question_file' => 'Gravatar.png',
             ]);
         }         
    }
}

