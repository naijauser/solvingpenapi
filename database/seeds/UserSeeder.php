<?php 

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder {


    public function run () {

        /**
         * Insert the dummy data into the users table
         */

        User::create([
            'name' => 'nnamdi',
            'email' => 'a@b.com',
            // 'email_verified_at' => '',
            'password' => bcrypt('000000'),
            // 'remember_token' => '',
            // 'created_at' => '',
            // 'updated_at' => '',
            // 'points' => '',
            // 'profile_pic' => '',
            // 'd_o_b' => '',
            // 'website' => '',
            // 'gender' => '',
            // 'phone' => ''

        ]);
    }
}