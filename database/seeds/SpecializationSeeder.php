<?php

use Illuminate\Database\Seeder;
use App\Specialization;

class SpecializationSeeder extends Seeder
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
            Specialization::create([
                'specialization_title' => $faker->word(rand(7, 12)),
                'specialization_description' => $faker->sentence(),
            ]);
        }
    }
}
