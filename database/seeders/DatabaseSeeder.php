<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        DB::table('shifts')->insert([
            [
                'title' => 'Software Developer',
                'start_date' => '2025-11-01',
                'end_date' => '2025-12-31',
                'per_hour' => '25',
                'location' => 'Remote',
                'status' => 1,
            ],
            [
                'title' => 'Graphic Designer',
                'start_date' => '2025-10-20',
                'end_date' => '2025-11-15',
                'per_hour' => '20',
                'location' => 'Lahore',
                'status' => 0,
            ],
            [
                'title' => 'Project Manager',
                'start_date' => '2025-11-10',
                'end_date' => '2026-01-10',
                'per_hour' => '40',
                'location' => 'Karachi',
                'status' => 1,
            ],
        ]);
    }
}
