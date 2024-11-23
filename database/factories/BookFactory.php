<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = ['Thriller', 'Horror', 'Romance', 'Sci-Fi', 'Fantasy'];
        $adjectives = ['Silent', 'Hidden', 'Lost', 'Dark', 'Mysterious', 'Forgotten'];
        $nouns = ['Shadows', 'Paths', 'Secrets', 'Waves', 'Memories', 'Voices'];
        $suffixes = ['', 'of the Night', 'in the Forest', 'Beyond the Horizon'];

        return [
            'author' => fake()->name(),
            'title' => $this->faker->randomElement($adjectives) . ' ' .
                $this->faker->randomElement($nouns) .
                ' ' . $this->faker->randomElement($suffixes),
            'category' => $this->faker->randomElement($categories),
        ];
    }
}
