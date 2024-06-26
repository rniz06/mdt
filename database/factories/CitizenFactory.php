<?php

namespace Database\Factories;

use App\Models\Citizen;
use App\Models\CitizenType;
use App\Models\District;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Citizen>
 */
class CitizenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Citizen::class;

    public function definition(): array
    {
        $randomNumber = mt_rand(100000, 9999999);
        $randomFinalDigit = mt_rand(1, 8);
        $district = District::query()->inRandomOrder()->first() ?? District::factory()->create();
        $citizen_type = CitizenType::query()->inRandomOrder()->first() ?? CitizenType::factory()->create();

        return [
            'name' => fake()->name(),
            'ci' => fake()->numerify(fake()->randomElement(['######', '#######'])),
            'ruc' => $randomNumber . '-' . $randomFinalDigit,
            'email' => fake()->email(),
            'phone_number' => fake()->numerify('##########'),
            'streep' => fake()->address(),
            'district_id' => $district->id,
            'citizen_type_id' => $citizen_type->id,
        ];
    }
}
