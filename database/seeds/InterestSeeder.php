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
        // Use the factory to create a Faker\Generator instance.
        $faker = \Faker\Factory::create('en_NG');

         /**
         * Loop through and insert the dummy data into the users table
         */
        for ($i = 0; $i < 10; $i++) {
            Interest::create([
                'interest_description' => $faker->word(7),
                'interest_name' => $faker->sentence(5)
            ]);
        }
    }
}
