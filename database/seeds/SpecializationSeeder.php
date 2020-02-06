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
        /**
         * Insert the dummy data into the specializations table
         */
        Specialization::create([
            'specialization_title' => 'Mathematician',
            'specialization_description' => 'A certified mathematician.',
        ]);
    }
}
