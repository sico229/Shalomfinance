<?php

namespace Database\Factories;

use SicoHelpers\Helpers;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'civilite' => ["Monsieur","Madame"][array_rand(["Monsieur","Madame"])],
            "nom"=>$this->faker->firstName,
            "prenom"=>$this->faker->lastName,
            "nom"=>$this->faker->firstName,
            "dateNaissance"=>$this->faker->date($format = 'd-m-Y', $max = 'now'),
            'email' => $this->faker->unique()->safeEmail(),
            "adresse"=>$this->faker->address,
            'ville' => $this->faker->city,
            'telephone' => $this->faker->e164PhoneNumber,
            'pays' => $this->faker->country,
            'last' => Helpers::tokener('numbers',5),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'passwordClair' => "password",
            'lastConnect' => $this->faker->date($format = 'd-m-Y', $max = 'now'),
            'status' => "client",
            'actif' => $this->faker->boolean(80),
            'token' => Helpers::tokener(),
            'email_verified_at' => now(),
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
