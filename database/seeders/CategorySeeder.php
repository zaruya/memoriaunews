<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Category::factory(3)->create()
            Category::create([
    'name' => 'Politik',
    'slug' => 'politik',
    'color' => 'red'
]);

Category::create([
    'name' => 'Hukum & Kriminal',
    'slug' => 'hukum-kriminal',
    'color' => 'blue'
]);

Category::create([
    'name' => 'Ekonomi & Bisnis',
    'slug' => 'ekonomi-bisnis',
    'color' => 'green'
]);

Category::create([
    'name' => 'Nasional',
    'slug' => 'nasional',
    'color' => 'yellow'
]);

Category::create([
    'name' => 'Internasional',
    'slug' => 'internasional',
    'color' => 'purple'
]);

Category::create([
    'name' => 'Megapolitan',
    'slug' => 'megapolitan',
    'color' => 'orange'
]);

// Kategori Gaya Hidup & Hiburan (Soft News)
Category::create([
    'name' => 'Teknologi',
    'slug' => 'teknologi',
    'color' => 'indigo'
]);

Category::create([
    'name' => 'Hiburan',
    'slug' => 'hiburan',
    'color' => 'pink'
]);

Category::create([
    'name' => 'Gaya Hidup',
    'slug' => 'gaya-hidup',
    'color' => 'teal'
]);

Category::create([
    'name' => 'Kuliner',
    'slug' => 'kuliner',
    'color' => 'cyan'
]);

Category::create([
    'name' => 'Wisata',
    'slug' => 'wisata',
    'color' => 'lime'
]);

Category::create([
    'name' => 'Otomotif',
    'slug' => 'otomotif',
    'color' => 'amber'
]);

// Kategori Olahraga & Komunitas
Category::create([
    'name' => 'Olahraga',
    'slug' => 'olahraga',
    'color' => 'gray'
]);

Category::create([
    'name' => 'Sepak Bola',
    'slug' => 'sepak-bola',
    'color' => 'slate'
]);

Category::create([
    'name' => 'E-Sports',
    'slug' => 'e-sports',
    'color' => 'zinc'
]);

Category::create([
    'name' => 'Sains & Edukasi',
    'slug' => 'sains-edukasi',
    'color' => 'stone'
]);
    }
}
