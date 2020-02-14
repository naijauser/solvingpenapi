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
            'interest_id' => 2,
            'user_id' => 3,
        ]);

        UserInterest::create([
            'interest_id' => 2,
            'user_id' => 1,
        ]);

        UserInterest::create([
            'interest_id' => 3,
            'user_id' => 1,
        ]);

        UserInterest::create([
            'interest_id' => 2,
            'user_id' => 3,
        ]);

        UserInterest::create([
            'interest_id' => 3,
            'user_id' => 1,
        ]);

    }
}
