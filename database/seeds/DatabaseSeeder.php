<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(InterestSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(SpecializationSeeder::class);
        $this->call(QuestionSeeder::class);
        $this->call(AnswerSeeder::class);
        $this->call(VoteSeeder::class);
        $this->call(UserSpecializationSeeder::class);
        $this->call(QuestionSpecializationSeeder::class);
        $this->call(UserMetaSeeder::class);
    }

}
