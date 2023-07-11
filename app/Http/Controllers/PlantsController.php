<?php

namespace App\Http\Controllers;

use App\Models\Algae;
use App\Models\NutrientDeficiencies;
use App\Models\Plants;
use Illuminate\Http\Request;

class PlantsController extends Controller
{
    public function index(){
        $plants = Plants::all();
        $algae = Algae::all();
        $nutrientDef = NutrientDeficiencies::all();

        return inertia('Plants', compact('plants','algae','nutrientDef'));
    }
    //
}
