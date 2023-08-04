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
        User::factory(5)->create();
        Plants::factory(5)->create();
        Algae::factory(5)->create();
        NutrientDeficiencies::factory(5)->create();
        //v /////////////////////////////////////////
    }
}
