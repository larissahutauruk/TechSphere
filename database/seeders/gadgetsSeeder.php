<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\gadgets;

class gadgetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        gadgets::create([
            'name' => 'ASUS ROG Zephyrus G14',
            'categories_id' => '2',
            'tahun_keluaran' => '2024',
            'harga' => '27999000',
            'description' => 'prosesor AMD Ryzen & GPU NVIDIA GeForce, Ryzen 9 7940HS & GPU RTX 4070, layar ROG Nebula Display QHD 14", Windows 11.',
            'image' => 'pict/D5B4B086-677C-4E99-8EE4-5CB7D6C01AD5-removebg-preview.png',
        ]);
        gadgets::create([
            'name' => 'Samsung Galaxy S25 Ultra',
            'categories_id' => '1',
            'tahun_keluaran' => '2024',
            'harga' => '24999999',
            'description' => '5.000 mAh, 200 MP + 50 MP + 50 MP + 10 MP, Dynamic AMOLED 2X, 256 GB, 516 GB, 1 TB, android 15, chip Snapdragon 8 Gen 3.',
            'image' => 'pict/2025-02-17__11_-removebg-preview.png',
        ]);
        gadgets::create([
            'name' => 'iMAC M4',
            'categories_id' => '3',
            'tahun_keluaran' => '2024',
            'harga' => '21999000',
            'description' => '12 MP, layar Retina 4.5K berukuran 24 inci, 16 GB, 24 GB, 256 GB, 512 GB,CPU 10-Core',
            'image' => 'pict/download-removebg-preview.png',
        ]);
        gadgets::create([
            'name' => 'Samsung Galaxy Book5 pro 360',
            'categories_id' => '2',
            'tahun_keluaran' => '2025',
            'harga' => '28000000',
            'description' => 'up to 25 hours, 16" 3K Dynamic AMOLED 2X, 16GB RAM + 1TB SSD, Windows 11, Intel® Core™ Ultra 7
Series 2 Processor 256V.',
            'image' => 'pict/THUMB_003-kv-galaxy-book5-pro-360-gray-main-us-OOH-1p 1.png',
        ]);
        gadgets::create([
            'name' => 'Lenovo Legion 7i (16", Gen 9)',
            'categories_id' => '2',
            'tahun_keluaran' => '2023',
            'harga' => '36999000',
            'description' => '4-cell 99.99Whr, Intel® Core™ i9-14900HX, NVIDIA® GeForce RTX™ 4070 Laptop GPU 8GB GDDR6 (115W) 2175MHz Boost Clock, Built-in FHD (up to 1080p) webcam, 32 GB, 1 TB, Windows 11',
            'image' => 'pict/16_Legion_7i_16_10_Glacier_white_RGB_Front_angle-e1736190016820-1024x816 1.png',
        ]);
    }
}
