<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'imgUrl' => fake()->randomElement([
                'https://lush.com.ph/cdn/shop/files/lush_20000218_1.jpg?v=1697477108',
                'https://img.lazcdn.com/g/ff/kf/Sffe333438e9f4b139a8484288eb6265cg.jpg_720x720q80.jpg',
                'https://www.lucian.store/cdn/shop/articles/IMG_1224.JPG?v=1568721007&width=1100',
                'https://media.cnn.com/api/v1/images/stellar/prod/210203182253-perfume-gucci-bloom-eau-de-parfum.jpg?q=w_1700,h_956,x_0,y_0,c_fill'
            ]),
            'name' => fake()->word(),
            'description' => fake()->sentence(),
            'price' => fake()->numberBetween(5000, 10000)
        ];
    }
}
