<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstname' => $this->faker->firstName(),
            'lastname' => $this->faker->lastName(),
            'phone' => $this->faker->phoneNumber(),
            'agent_name' => $this->faker->name(),
            'agent_number' => $this->faker->randomNumber(6),
            'street' => $this->faker->randomElement(['Kijenge', 'Posta', 'Kaloleni', 'Shamsi', 'Majengo', 'Mwanama']),
            'ward' => $this->faker->randomElement(['Kijenge', 'Lemara', 'Kaloleni', 'Sombetini', 'Sakina', 'Olasiti']),
            'district_id' => 1,
            'password' => Hash::make('123'),
            'email_verified_at' => now(),
            'email' => $this->faker->unique()->safeEmail(),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
