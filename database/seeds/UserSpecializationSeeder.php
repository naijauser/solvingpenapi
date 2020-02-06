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
        UserSpecialization::create([
            'specialization_id' => 3,
            'user_id' => 5,
        ]);

    }
}
