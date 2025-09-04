<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Menu;
use App\Models\Posts;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Posts::create([
        //     'title' => 'Judul Post 1',
        //     'slug' => 'judul-post-1',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
        //     'category_id' => 1,
        //     'author_id' => 1,
        // ]);

        // $this->call([CategorySeeder::class, UserSeeder::class]);
        // Posts::factory(100)->recycle([
        //     Category::all(),
        //     User::all(),
        // ])->create();

        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            PostSeeder::class,
        ]);
    }
}
