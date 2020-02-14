<?php

use Illuminate\Database\Seeder;
use App\UserInterest;

class UserInterestSeeder extends Seeder
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
        UserInterest::create([
            'specialization_id' => 2,
            'question_id' => 3,
        ]);

        UserInterest::create([
            'specialization_id' => 2,
            'question_id' => 1,
        ]);

        UserInterest::create([
            'specialization_id' => 3,
            'question_id' => 1,
        ]);

        UserInterest::create([
            'specialization_id' => 2,
            'question_id' => 3,
        ]);

        UserInterest::create([
            'specialization_id' => 3,
            'question_id' => 1,
        ]);

    }
}
