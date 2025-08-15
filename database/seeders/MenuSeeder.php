<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    //
    public function run(): void
    {
        Menu::create(['name' => 'Nasi Goreng', 'kategori' => 'makanan', 'harga' => 15000]);
        Menu::create(['name' => 'Ayam Bakar', 'kategori' => 'makanan', 'harga' => 20000]);
        Menu::create(['name'=> 'Roti Bakar', 'kategori' => 'makanan', 'harga' => 10000]);
        Menu::create(['name'=> 'Air Mineral', 'kategori' => 'minuman', 'harga' => 3000]);
        Menu::create(['name'=> 'Jus Jeruk', 'kategori' => 'minuman', 'harga' => 7000]);
        Menu::create(['name'=> 'Mie Goreng', 'kategori' => 'makanan', 'harga' => 12000]);
        Menu::create(['name'=> 'Keripik Singkong', 'kategori' => 'snack', 'harga' => 5000]);
        Menu::create(['name'=> 'Kacang Goreng', 'kategori' => 'snack', 'harga' => 6000]);
        Menu::create(['name'=> 'Popcorn', 'kategori' => 'snack', 'harga' => 7000]);
        Menu::create(['name'=> 'Cokelat Batangan', 'kategori' => 'snack', 'harga' => 8000]);
    }
}
