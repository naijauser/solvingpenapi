<?php

use Illuminate\Database\Seeder;
use App\Vote;

class VoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Insert dummy data into the votes table
         */
         for ($i = 0; $i < 10; $i++) {
            Vote::Create([
               'user_id' => rand(1, 10),
               'answer_id' => rand(1, 10),
            ]);
         }
    }
}
