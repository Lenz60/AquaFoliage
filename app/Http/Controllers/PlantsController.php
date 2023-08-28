<?php

namespace App\Http\Controllers;

use App\Models\Algae;
use App\Models\NutrientDeficiencies;
use App\Models\Plants;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

        //v Checking the JWT token using helper function
        $token = $_COOKIE['userData'];
        $validate = validateJWT($token);

        if($validate){
            return inertia('Plants', compact('plants','algae','nutrientDef'));
        }else{
            return redirect()->to('/');
        }
        //v ////////////////////////////

    }
    //
}
