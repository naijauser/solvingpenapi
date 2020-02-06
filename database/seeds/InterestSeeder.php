<?php

use Illuminate\Database\Seeder;
use App\Interest;

class InterestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Insert the dummy data into the interests table
         */
        Interest::create([
            'interest_description' => 'Lorem ipsum isit odor',
            'interest_name' => 'Programming'
        ]);
    }
}
