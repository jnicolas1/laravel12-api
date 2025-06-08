<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $user = User::factory()->create([
            'name' => 'Josue Nicolás',
            'email' => 'nicolas@socialtec.com',
        ]);

        Task::factory(100)->create([
            'user_id' => $user->id, // Asignar todas las tareas al usuario creado
        ]);
    }
}
