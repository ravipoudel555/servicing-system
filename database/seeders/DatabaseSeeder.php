<?php

namespace Database\Seeders;

use App\Models\MasterMake;
use App\Models\User;
use Faker\Factory as FakerFactory;
use Faker\Provider\FakeCar;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       
       

        $this->call([
            CustomerSeeder::class,
            // MechanicSeeder::class,
            // VehicleSeeder::class,
            MasterMakeSeeder::class,
            MasterModelSeeder::class
            
        ]);

        // Use   r::factory(1000)->create();
    

    }
}

/**
 * php artisan make:factory UserFactory --model=User
 */