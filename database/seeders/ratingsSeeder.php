<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use app\Models\ratings;

class ratingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ratings::create([
            'gadgets_id' => '1',
            'rating' => '8',
            'comment' => 'suka ip',
        ]);
        ratings::create([
            'gadgets_id' => '13',
            'rating' => '5',
            'comment' => 'jelek gasuka',
        ]);ratings::create([
            'gadgets_id' => '3',
            'rating' => '10',
            'comment' => 'bagus polll',
        ]);
    }
}
