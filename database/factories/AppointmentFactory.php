<?php

namespace Database\Factories;

use App\Models\Appointment;
use App\Models\AppointmentType;
use App\Models\Patient;
use App\Models\Provider;
use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Appointment>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $appointmentType = AppointmentType::inRandomOrder()->first();

        return [
            'provider_id' => Provider::factory(),
            'patient_id' => Patient::factory(),
            'appointment_type_id' => $appointmentType->id,
            'starts_at' => Carbon::parse('today 10:30AM'),
            'ends_at' => Carbon::parse('Today 10:30 AM')->addMinutes($appointmentType->duration_minutes),
            'status' => 'pending'
        ];
    }

    public function confirmed(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'status' => 'confirmed'
            ];
        });
    }

    public function startingAt(string|DateTimeInterface $dateTime): Factory
    {
        return $this->state(function (array $attributes) use ($dateTime) {
            return [
                'starts_at' => Carbon::parse($dateTime),
                'ends_at' => Carbon::parse($dateTime)
                    ->addMinutes(
                        AppointmentType::find(
                            $attributes['appointment_type_id']
                        )->duration_minutes
                    ),
            ];
        });
    }
}
