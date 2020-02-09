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
        /**
         * Insert the dummy data into the users_meta table
         */
        UserMeta::create([
            'user_id' => 3,
            'interest_id' => 2, 
        ]);

        UserMeta::create([
            'user_id' => 1,
            'interest_id' => 2, 
        ]);

        UserMeta::create([
            'user_id' => 3,
            'interest_id' => 1, 
        ]);
    }
}
