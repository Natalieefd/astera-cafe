<?php

namespace Database\Factories;

use App\Models\kategori;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\menu>
 */
class menuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->randomElement(['Orange Juice', 'Egg Toast', 'Lemon Yakult', 'Esspreso', 'Crunchy Caramel', 'French Fries', 'Fried Chicken', 'Hot Chocolate', 'Meatball', 'Pastry Rasberries', 'Chocolate Cookies', 'Simply Salad', 'Creamy Spagethi', 'Squash Watermelon', 'Chesecake Bluberry Strawberry']),
            'stok' => fake()->randomDigitNotZero(),
            'harga' => fake()->randomNumber(5, true),
            'gambar' => fake()->randomElement(['avocado-chesee-toast.jpg', 'creamy-spagetti.jpg', 'egg-toast.jpg', 'lemon-yakult.jpg', 'squash-watermelon.jpg', 'orange-lime.jpg', 'pinaple-milk-pie.jpg', 'squash-watermelon.jpg', 'crepes-frape-strawberry.jpg', 'choco-oreo-waffle.jpg', 'chesecake-bluberry-strawberry.jpg', 'coffee.jpg', 'orange-honey-crepes.jpg', 'simply-salad.jpg', 'strayberry-french-toast.jpg']),
            'kategori_id' => kategori::all()->random()->id,
        ];
    }
}
