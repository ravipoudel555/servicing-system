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
        User::factory(1000)->create();
    

      

        $this->call([
            CustomerSeeder::class,
            // MechanicSeeder::class,
            // VehicleSeeder::class,
            MasterMakeSeeder::class,
            MasterModelSeeder::class
            
        ]);
    }
}

/**
 * php artisan make:factory UserFactory --model=User
 */