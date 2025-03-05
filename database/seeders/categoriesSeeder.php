<?php

namespace Database\Seeders;

use App\Models\categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class categoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        categories::create([
            'name' => 'Mobile',
        ]);
        categories::create([
            'name' => 'Laptop',
        ]);
        categories::create([
            'name' => 'PC',
        ]);
    }
}
