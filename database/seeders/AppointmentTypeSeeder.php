<?php

namespace Database\Seeders;

use App\Models\AppointmentType;
use App\Models\Provider;
use Illuminate\Database\Seeder;

class AppointmentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            [
                'name'             => 'Physical Therapy',
                'duration_minutes' => 45,
                'buffer_before'    => 15,
                'buffer_after'     => 5,
                'price'            => 50,
                'is_active'        => true,
            ],
            [
                'name'             => 'Telehealth',
                'duration_minutes' => 30,
                'buffer_before'    => 5,
                'buffer_after'     => 5,
                'price'            => 35,
                'is_active'        => true,
            ],
            [
                'name'             => 'Addiction Recovery',
                'duration_minutes' => 60,
                'buffer_before'    => 10,
                'buffer_after'     => 10,
                'price'            => 50,
                'is_active'        => true,
            ],
            [
                'name'             => 'Flexibility Therapy',
                'duration_minutes' => 20,
                'buffer_before'    => 5,
                'buffer_after'     => 5,
                'price'            => 20,
                'is_active'        => true,
            ],
            
        ];

        foreach($types as $appointmentType) {
            AppointmentType::firstOrCreate($appointmentType);
        }
    }
}
