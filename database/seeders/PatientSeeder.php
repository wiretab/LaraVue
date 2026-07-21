<?php

namespace Database\Seeders;

use App\Models\Patient;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $patients = [
            [
                'name' => "Napoleon Blownapart",
                'gender' => 'male',
                'dob' => '1989-07-10'
            ],
            [
                'name' => "Kima Greggs",
                'gender' => 'female',
                'dob' => '1971-04-22'
            ],
            [
                'name' => "Max Eisenhardt",
                'gender' => 'male',
                'dob' => '1932-05-11'
            ],
            [
                'name' => "Noah Caldwell-Gervais",
                'gender' => 'other',
                'dob' => '1989-02-25'
            ],
            [
                'name' => "Charles Xavier",
                'gender' => 'male',
                'dob' => '1948-09-04'
            ],
            [
                'name' => 'Antony Dyatlov',
                'gender' => 'male',
                'dob' => '1939-07-30'
            ]
        ];
        
        foreach($patients as $patient) {
            Patient::firstOrCreate($patient);
        }
    }
}
