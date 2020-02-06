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

        Specialization::create([
            'specialization_title' => 'Physicist',
            'specialization_description' => 'A guru in physics.',
        ]);

        Specialization::create([
            'specialization_title' => 'Physician',
            'specialization_description' => 'A mdeical doctor',
        ]);
    }
}
