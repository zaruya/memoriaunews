<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'slug' => Str::slug(fake()->sentence()),
            // 'slug' => Str::slug(fake()->sentence()) . '-' . Str::random(5), --- IGNORE ---
           //merubah sentence menjadi slug dengan tambahan random string agar tidak terjadi duplikat slug 
            'author_id' => User::factory(),
            'body' => fake()->paragraphs(3, true)
        ];
    }
}
