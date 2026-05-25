<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::updateOrCreate(
            ['email' => 'test@example.com'],
            [
                'name' => 'Admin User',
                'password' => \Illuminate\Support\Facades\Hash::make('password'),
            ]
        );

        \App\Models\User::updateOrCreate(
            ['email' => 'worker@kingssuits.com'],
            [
                'name' => 'Worker User',
                'password' => \Illuminate\Support\Facades\Hash::make('WorkerPass123!'),
            ]
        );

        // Seed sample appointments
        $appointments = [
            [
                'name' => 'John Doe',
                'phone' => '(310) 555-0199',
                'email' => 'john@example.com',
                'preferred_date' => now()->addDays(2)->setTime(10, 0),
                'message' => '[Service: Suit Rental] Looking for a classic black tuxedo fitting for my upcoming wedding.',
                'status' => 'pending',
            ],
            [
                'name' => 'Robert Johnson',
                'phone' => '(213) 555-0144',
                'email' => 'robert@example.com',
                'preferred_date' => now()->addDays(3)->setTime(14, 30),
                'message' => '[Service: Same-Day Alterations] Need trousers shortened and waist taken in for a business suit.',
                'status' => 'confirmed',
            ],
            [
                'name' => 'Michael Smith',
                'phone' => '(714) 555-0122',
                'email' => 'michael@example.com',
                'preferred_date' => now()->subDays(1)->setTime(11, 0),
                'message' => '[Service: Custom Order] Bespoke 3-piece navy suit fitting.',
                'status' => 'cancelled',
            ],
            [
                'name' => 'David Miller',
                'phone' => '(626) 555-0177',
                'email' => 'david@example.com',
                'preferred_date' => now()->addDays(5)->setTime(16, 0),
                'message' => '[Service: Prom / Event Suits] Finding a slim-fit navy suit for high school prom.',
                'status' => 'pending',
            ],
            [
                'name' => 'William Davis',
                'phone' => '(909) 555-0188',
                'email' => 'william@example.com',
                'preferred_date' => now()->addDays(1)->setTime(13, 0),
                'message' => '[Service: Wedding Party Suits] Wedding group fitting for the groom and 4 groomsmen.',
                'status' => 'confirmed',
            ]
        ];

        foreach ($appointments as $appt) {
            \App\Models\Appointment::create($appt);
        }
    }
}
