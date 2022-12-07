<?php

namespace Database\Factories;

use App\Models\Agent;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AgentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Agent::class;

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
            'district_id' => 1,
            'password' => Hash::make('123'),
            'remember_token' => Str::random(10),
            'created_by' => 1,
        ];
    }
}
