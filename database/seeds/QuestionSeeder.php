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

        // Use the factory to create a Faker\Generator instance.
        $faker = \Faker\Factory::create('en_NG');

         /**
         * Loop through and insert the dummy data into the users table
         */
        for ($i = 0; $i < 10; $i++) {
            Question::create([
                'user_id' => rand(1, 10),
                'question_title' => $faker->sentence(rand(10, 14), true),
                'question_text_area' => $faker->text(rand(20, 500)),
                'question_attachment_url' => $faker->imageUrl(),
                'question_file' => $faker->image('/tmp', 640, 480),
             ]);
        }
    }
}

