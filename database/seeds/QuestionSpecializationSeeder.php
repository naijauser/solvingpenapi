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
        QuestionSpecialization::create([
            'specialization_id' => 4,
            'question_id' => 6,
        ]);

    }
}
