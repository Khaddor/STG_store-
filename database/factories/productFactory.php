<?php

namespace Database\Factories;

use App\Models\product;
use Illuminate\Database\Eloquent\Factories\Factory;

class productFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $images = array( "keytab.jpg" , "keybook.jpg",
         "s20.jpg" , "ALPHA 1 PRO.jpg" , );

        return [
            'name' => $this->faker->name(),
            'label' => $this->faker->name(),
            'price' => rand(600,750),
            'reduction' => rand(900,1000),
            'description' => $this->faker->text(),
            'inStock' => 30,
            'image' => $images[rand(0,3)],
            'category_id' => rand(1,5),

        ];
    }
    
}
