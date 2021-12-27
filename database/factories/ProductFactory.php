<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name,
            'keywords' => $this->faker->word,
            'description' => $this->faker->text(150),
            'image' => $this->faker->image,
            'category_id' => Category::factory()->create(),
            'user_id' => User::factory()->create(),
            'Ticket_type' => $this->faker->word,
            'from' => $this->faker->word,
            'to' => $this->faker->word,
            'price_ticket' => 100.00,
            'aicraft_type_capacity' =>1,
            'detail' => $this->faker->text,
            'status' => 'False',
        ];
    }
}
