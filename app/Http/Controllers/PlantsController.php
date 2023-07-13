<?php

namespace App\Http\Controllers;

use App\Models\Algae;
use App\Models\NutrientDeficiencies;
use App\Models\Plants;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlantsController extends Controller
{
    public function index(){
        $plants = DB::table('plants')
        ->select('id','name')
        ->get();
        $algae = DB::table('algae')
        ->select('id','name')
        ->get();
        $nutrientDef = DB::table('nutrient_deficiencies')
        ->select('id','name')
        ->get();

        return inertia('Plants', compact('plants','algae','nutrientDef'));
    }
    //
}
