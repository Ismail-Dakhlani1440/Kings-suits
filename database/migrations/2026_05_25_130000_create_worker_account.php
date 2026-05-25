<?php

use Illuminate\Database\Migrations\Migration;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        User::updateOrCreate(
            ['email' => 'worker@kingssuits.com'],
            [
                'name' => 'Worker User',
                'password' => Hash::make('WorkerPass123!'),
            ]
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        User::where('email', 'worker@kingssuits.com')->delete();
    }
};
