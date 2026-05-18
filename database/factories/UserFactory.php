<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'username' => fake()->unique()->userName(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            //ternary operator $a=$a??= $b; sama dengan $a=$a ?? $b; artinya jika $a sudah ada maka tetap $a, jika belum ada maka $a=$b
            // ??= adalah operator penugasan null coalescing, yang menetapkan nilai ke variabel hanya jika variabel tersebut belum ditetapkan atau bernilai null.
            //$a=$a?:$b; adalah operator penugasan ternary, yang menetapkan nilai ke variabel berdasarkan kondisi. Jika $a bernilai true (tidak null, tidak false, tidak 0, dll), maka $a tetap $a. Jika $a bernilai false, maka $a akan diubah menjadi $b.
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
    
}
