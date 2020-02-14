<?php

use Illuminate\Database\Seeder;
use App\Answer;

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

        // Clear the database
        // Answer::truncate();

        // Use the factory to create a Faker\Generator instance.
        $faker = \Faker\Factory::create('en_NG');


        for ($i = 0; $i < 10; $i++) {
            Answer::create([
                'user_id' => rand(1, 10),
                'question_id' => rand(1, 10),
                'answer_text_area' => $faker->text(rand(20, 500)),
                'answer_attachment_url' => $faker->imageUrl(),
                'answer_file' => $faker->image(),
            ]);    
        }
    }
}
