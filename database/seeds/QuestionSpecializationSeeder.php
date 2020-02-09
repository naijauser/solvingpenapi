<?php

use Illuminate\Database\Seeder;
use App\QuestionSpecialization;

class QuestionSpecializationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         /**
         * Insert the dummy data into the question_specialization table
         */
        for ($i = 0 ; $i < 10; $i++) {
            QuestionSpecialization::create([
                'specialization_id' => rand(1, 10),
                'question_id' => rand(1, 10),
            ]);
        }
    }
}
