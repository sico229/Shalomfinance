<?php

namespace Database\Factories;

use App\Models\User;
use SicoHelpers\Helpers;
use Illuminate\Database\Eloquent\Factories\Factory;

class compteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user=User::find(rand(1,10));

        return [
            "numeroCompte"=>$this->faker->bankAccountNumber,
            "iban"=>$this->faker->iban('fr'),
            "solde"=>$this->faker->numberBetween(0,7000),
            "devise"=>["$","€"][array_rand(["$","€"])],
            "token"=>Helpers::tokener()
        ];
       
    }
}
