<?php

namespace Database\Factories;

use App\Models\Patient;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $genderArr = ['male', 'female', 'other'];

        $randomDob = Carbon::createFromTimestamp(mt_rand(
            Carbon::parse('1935-01-01')->timestamp,
            Carbon::parse('2005-12-31')->timestamp
        ))->toDateString();

        return [
            'name' => $this->faker->name(),
            'dob' => $randomDob,
            'gender' => $genderArr[array_rand($genderArr)]
        ];
    }
}
