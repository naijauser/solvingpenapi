<?php

use Illuminate\Database\Seeder;
use App\UserSpecialization;

class UserSpecializationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Insert the dummy data into the user_specialization table
         */
        for ($i = 0; $i < 10; $i++) {
            UserSpecialization::create([
                'specialization_id' => rand(1, 10),
                'user_id' => rand(1, 10),
            ]);
        }
    }
}
