<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Techsphere',
            'email' => 'techsphere00@gmail.com',
            'role' => 'admin',
            'password' => Hash::make('pikirsendiri'),
        ]);
        User::create([
            'name' => 'Ce',
            'email' => 'cee@gmail.com',
            'role' => '',
            'password' => Hash::make('bismillah'),
        ]);
    }
}
