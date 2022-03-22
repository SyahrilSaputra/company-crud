<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'uuid' => $this->faker->uuid(),
            'information_category_id' => mt_rand(1, 2),
            'user_id' => mt_rand(1, 2),
            'title' => "lorem Ipseum Doler Sit Amet",
            'content' => "lorem Ipseum Doler Sit Amet lorem Ipseum Doler Sit Amet lorem Ipseum Doler Sit Amet lorem Ipseum Doler Sit Amet lorem Ipseum Doler Sit Amet",
            'start_at' => '',
            'end_at' => '',
            'update_by' => 1,
            'slug' => $this->faker->slug(),
            'views' => mt_rand(1, 100),
            'cover' => '73SjrEJXqsYRxxe8dP7hkTVAKx76Opqxvd2Qk4CT.jpg',
        ];
    }
}
