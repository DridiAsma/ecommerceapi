<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class ReviewFactory extends Factory
{
    protected $model = Review::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //

            'product_id' => function(){
                          return Product::all()->random();
                     },
                      'customer' => $this->faker->name,
                      'review' => $this->faker->paragraph,
                      'star' => $this->faker->numberBetween(0,5)
        ];
    }
}

// $factory->define(App\Models\Review::class, function (Faker $faker){
//     return[
//         'product_id' => function(){
//             return Product::all()->random();
//         },
//       'customer' => $faker->name,
//       'review' => $faker->paragraph,
//       'star' => $faker->numberBetween(0,5)

//     ];

