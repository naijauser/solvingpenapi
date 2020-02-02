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
        //
        Interest::create([
            'interest_description' => 'Lorem ipsum isit odor',
            'interest_name' => 'Programming'
        ]);
    }
}
