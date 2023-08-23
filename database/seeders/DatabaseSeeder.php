<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Algae;
use App\Models\FavAlgae;
use App\Models\FavNutDef;
use App\Models\FavPlant;
use App\Models\NutrientDeficiencies;
use App\Models\Plants;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        //? Seeder for Relationship Favourites table
        //TODO: Seed for another Table with Favourites table

        $users = User::factory()
            ->count(5)
            ->create();
        $plants = Plants::factory()
            ->count(5)
            ->create();
        $nutdefs = NutrientDeficiencies::factory()
            ->count(5)
            ->create();
        $algaes = Algae::factory()
            ->count(5)
            ->create();
        //v Seed The Favourites table
        foreach ($users as $user){
            foreach ($plants as $plant){
                FavPlant::factory([
                    'user_id' => $user->id,
                    'plants_id' => $plant->id
                ]) ->create();
            }
        }

        foreach ($users as $user){
            foreach ($nutdefs as $nutdef){
                FavNutDef::factory([
                    'user_id' => $user->id,
                    'nutdef_id' => $nutdef->id
                ]) ->create();
            }
        }

        foreach ($users as $user){
            foreach ($algaes as $algae){
                FavAlgae::factory([
                    'user_id' => $user->id,
                    'algae_id' => $algae->id
                ]) ->create();
            }
        }

        // User::factory()
        // ->has(FavPlant::factory(),'fav_Plant')
        // ->count(5)
        // ->create();
        // Plants::factory()
        // ->has(FavPlant::factory(),'fav_Plant')
        // ->count(5)
        // ->create();
        //? ///////////////////////////////////////

        //v Default Seed
        // User::factory(5)->create();
        // Plants::factory(5)->create();
        // Algae::factory(5)->create();
        // NutrientDeficiencies::factory(5)->create();
        //v /////////////////////////////////////////
    }
}
