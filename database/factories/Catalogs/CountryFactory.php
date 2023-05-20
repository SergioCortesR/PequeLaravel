<?php

namespace Database\Factories\Catalogs;

use App\Models\Catalogs\Country\Country;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CountryFactory extends Factory
{
    protected $model=Country::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this->faker->country(),
            'iso_code_2'=>$this->faker->randomLetter() . $this->faker->randomLetter(),
            'iso_code_3'=>$this->faker->randomLetter() . $this->faker->randomLetter() . $this->faker->randomLetter(),
        ];
    }
}
