<?php

namespace Database\Seeders;

use App\Models\User; 
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash; // Importante para gerar a hash manual

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Hash::make
        User::create([
            'name' => 'Wendhel Mota',
            'email' => 'wendhel@email.com',
            'password' => Hash::make('123456'), // Hash manual 
            'tipo' => 'ADM',
            'identificador' => '01790605',
        ]);
    }
}