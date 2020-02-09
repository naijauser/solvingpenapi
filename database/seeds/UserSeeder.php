<?php 

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder {

    public function run () {

        // Clear the database
        //  User::truncate();

         // Use the factory to create a Faker\Generator instance.
        $faker = \Faker\Factory::create('en_NG');

         /**
         * Loop through and insert the dummy data into the users table
         */
        for ($i = 0; $i < 10; $i++) {
            User::create([
                'firstName' => $faker->firstName,
                'lastName' => $faker->lastName,
                'email' => $faker->email,
                'password' => bcrypt('000000'),
            ]);
        }
    }
}