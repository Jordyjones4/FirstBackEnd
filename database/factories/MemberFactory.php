<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MemberFactory extends Factory
{
    protected $model = Member::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'username' => $this->faker->userName(),
            'full_name' => $this->faker->name(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'role'=>'Member'
        ];
    }
    /**
     * Indicate that the user is Admin.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function Admin()
    {
        return $this->state(function (array $attributes) {
            return [
                'role' => 'Admin',
            ];
        });
    }
}
