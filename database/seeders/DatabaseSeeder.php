<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\compte;
use App\Models\Params;
use App\Models\Version;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $user=User::factory(10)->hascompte()->create();
         Params::factory(1)->create();
        //  compte::factory()->count(10)->for($user)->create();
         
         
    }
}
