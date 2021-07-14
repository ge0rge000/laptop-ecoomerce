<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
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
        $product_name=$this->faker->unique()->words($nb=3,$asText=true);
        $slug=Str::slug($product_name);
        return [
            'name'=>$product_name,
            'slug'=>$slug,
            'short_descripation'=>$this->faker->text(200),
            'descripation'=>$this->faker->text(200),
            'regular_price'=>$this->faker->numberBetween(100,500),
            'SKU'=>'DIGI'.$this->faker->unique()->numberBetween(100,500),
            'stock_status'=>'instock',
            'quantity'=>$this->faker->numberBetween(100,200),
            'image'=>$this->faker->unique()->numberBetween(1,12),
            'category_id'=>$this->faker->numberbetween(1,5),

        ];
    }
}
