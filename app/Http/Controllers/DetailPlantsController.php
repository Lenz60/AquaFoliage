<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class DetailPlantsController extends Controller
{
    public function index (){
        $nameId = request('id');
        // dd($nameId);
        $plants = DB::table('plants')
        ->where('id', $nameId)
        ->first();

        //v Checking the JWT token using helper function
        if(isset($_COOKIE['userData'])){
            $token = $_COOKIE['userData'];
            $validate = validateJWT($token);

            if($validate){
                return Inertia::render('Components/Plants/Content/DetailPlants',[
                    'name' => $plants->name,
                    'desc' => $plants->body
                ]);

            }else{
                return redirect()->to('/');
            }

        }else{
            return Inertia::render('Components/Plants/Content/DetailPlants',[
                'name' => $plants->name,
                'desc' => $plants->body
            ]);
        }
        //v ////////////////////////////


    }
}
