<?php 

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder {

    public function run () {

        /**
         * Insert the dummy data into the users table
         */

         // Clear the database
        //  User::truncate();

         // Use the factory to create a Faker\Generator instance.
        $faker = \Faker\Factory::create('en_NG');

        for ($i = 0; $i < 10; $i++) {
            User::create([
                'firstName' => $faker->firstName,
                'lastName' => $faker->lastName,
                'email' => $faker->email,
                'password' => bcrypt('000000'),
            ]);
        }

        // User::create([
        //     'name' => 'nnamdi',
        //     'email' => 'a@b.com',
        //     'password' => bcrypt('000000'),

        // ]);

        // User::create([
        //     'name' => 'tope',
        //     'email' => 't@p.com',
        //     'password' => bcrypt('000000'),

        // ]);

        // User::create([
        //     'name' => 'novados',
        //     'email' => 'n@s.com',
        //     'password' => bcrypt('000000'),

        // ]);
    }
}