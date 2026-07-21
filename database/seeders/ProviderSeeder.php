<?php

namespace Database\Seeders;

use App\Models\Provider;
use Illuminate\Database\Seeder;

class ProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $providers = [
            [
                'email' => 'john.hopkins@loltest.com',
                'name' => 'John Hopkins'
            ],
            [
                'email' => 'bunk.moreland@loltest.com',
                'name' => 'Bunk Moreland'
            ],
            [
                'email' => 'gordon.freeman@loltest.com',
                'name' => 'Gordon Freeman'
            ],
            
        ];
    
        foreach($providers as $provider) {
            Provider::create($provider);
        }
    }
}
