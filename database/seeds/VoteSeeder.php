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

         Vote::Create([
            'user_id' => 2,
            'answer_id' => 3,
         ]);
    }
}
