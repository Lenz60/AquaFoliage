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
        $excerpt = request('excerpt');

        // dd(request('excerpt'));

        //v Checking the JWT token using helper function
        if(isset($_COOKIE['userData'])){
            $token = $_COOKIE['userData'];
            $validate = validateJWT($token);

            if($validate){
                if(isset($excerpt)){
                    return inertia('Plants', compact('plants','algae','nutrientDef','excerpt'));
                }else{
                    return inertia('Plants', compact('plants','algae','nutrientDef'));
                }
            }else{
                return redirect()->to('/');
            }
        }else{
            if(isset($excerpt)){
                return inertia('Plants', compact('plants','algae','nutrientDef','excerpt'));
            }else{
                return inertia('Plants', compact('plants','algae','nutrientDef'));
            }
        }
        //v ////////////////////////////

    }

    //
}
