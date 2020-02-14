<?php

use Illuminate\Database\Seeder;
use App\UserMeta;

class UserMetaSeeder extends Seeder
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

        $gender = ['male', 'female'];

         /**
         * Loop through and insert the dummy data into the users table
         */
        for ($i = 0; $i < 10; $i++) {
            UserMeta::create([
                'user_id' => rand(1, 10),
                'interest_id' => rand(1, 10), 
                'profile_pic' => $faker->imageUrl(),
                'date_of_birth' => $faker->dateTimeThisCentury->format('Y-m-d'),
                'website' => $faker->domainName,
                'gender' => $gender[rand(0, 1)],
                'phone' => $faker->phoneNUmber,
                'description' => $faker->text
            ]);
        }
    }
}
