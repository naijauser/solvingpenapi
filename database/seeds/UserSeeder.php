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
            'password' => bcrypt('000000'),

        ]);
    }
}