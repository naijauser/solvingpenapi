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
        for ($i = 0; $i < 10; $i++) {
            UserInterest::create([
                'interest_id' => rand(1, 10),
                'user_id' => rand(1, 10),
            ]);
        }
    }
}
