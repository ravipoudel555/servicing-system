<?php

namespace Database\Seeders;

use App\Models\Mechanic;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MechanicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();

        for ($i = 0; $i < 200; $i++) {
            $user = $users->random();
            Mechanic::factory()->create([
                'user_id' => $user->id,
            ]);
        }
    }
}
