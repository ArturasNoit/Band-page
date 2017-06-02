<?php
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use App\Product;
Use App\Category;

class ProductSeeder extends Seeder
{
    protected $product;
    protected $faker;
    protected $category;

    public function __construct(Product $product, Faker $faker, Category $category) {
        $this->product = $product;
        $this->faker = $faker;
        $this->category = $category;
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = $this->faker->create();

      $category_ids = $this->category->pluck('id');
      foreach (range(1, 10) as $x) {
        $this->product->create([
        'title' => $faker->name(),
        'description' => $faker->sentence(100),
        'quantity' => $faker->numberBetween(1, 15),
        'price' => $faker->numberBetween(10, 100),
        'manufacturer_id' => $faker->numberBetween(1, 10),
        'category_id' => $category_ids->random(),
        'img_url' => $faker->imageUrl(800, 600, 'technics')
       ]);
      }
    }
}
