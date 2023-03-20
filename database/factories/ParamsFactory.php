<?php

namespace Database\Factories;

use SicoHelpers\Helpers;
use Illuminate\Database\Eloquent\Factories\Factory;

class ParamsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nom"=>"Labanque",
            "slogan"=>"The best bank",
            "url"=>"localhost/BANQUE",
            "adresse"=>"adresse",
            "ville"=>"ville",
            "telephone"=>"07 51 16 91 10",
            "email"=>"email@labanque.com",
            "emailer"=>"emailer@labanque.com",
            "langue"=>"francais",
            "proprio"=>"serge.aguidissou@gmail.com",
            "devise"=>"€",
            "token"=>Helpers::tokener(),
        ];
    }
}
