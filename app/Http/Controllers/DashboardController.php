<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use App\Models\Plants;
use App\Models\FavPlant;
use Illuminate\Http\Request;
use Firebase\JWT\ExpiredException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Firebase\JWT\SignatureInvalidException;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Http\Controllers\Auth\AuthenticatedSessionController;


class DashboardController extends Controller
{
    //
    public function index(){


        $user = Auth::user();

        $favPlants = DB::table('plants')
        ->join('fav_plant', 'plants.id', '=', 'fav_plant.plants_id')
        ->select('fav_plant.id as id','plants.name as name')
        ->where('fav_plant.user_id', $user->id)
        ->get();
        $favNutDefs = DB::table('nutrient_deficiencies')
        ->join('fav_nutdef', 'nutrient_deficiencies.id', '=', 'fav_nutdef.nutdef_id')
        ->select('fav_nutdef.id as id','nutrient_deficiencies.name as name')
        ->where('fav_nutdef.user_id', $user->id)
        ->get();
        $favAlgaes = DB::table('algae')
        ->join('fav_algae', 'algae.id', '=', 'fav_algae.algae_id')
        ->select('fav_algae.id as id','algae.name as name')
        ->where('fav_algae.user_id', $user->id)
        ->get();


        //v Checking the JWT token using helper function
        if(!isset($_COOKIE['userData'])){
        Auth::guard('web')->logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->to('/');
        }else{
            $token = $_COOKIE['userData'];
            $validate = validateJWT($token);
        }

        // dd($validate);

        if($validate){
            return Inertia::render('Dashboard', [
             'favPlants' => $favPlants,
             'favNutDefs' => $favNutDefs,
             'favAlgaes' => $favAlgaes
             ]);

        }else{
            return redirect()->to('/');
        }

        // try{
        //     JWT::decode($jwt,new Key(env('JWT_SECRET'),'HS256'));

        // }catch(LogicException | UnexpectedValueException $e){
        //     // dd($e->getMessage());

        //     setcookie('userData', null);
        //     Auth::guard('web')->logout();
        //     session()->invalidate();
        //     session()->regenerateToken();

        //     return redirect()->to('/');
        // }
        //v ////////////////////////////



    }

    public function removeFav($content, $id){
        // dd($content,$id);
        if($content === "plants"){
            DB::table('fav_plant')
            ->where([
                ['id', '=', $id],
            ])
            ->delete();
        }elseif($content === "nutDef"){
             DB::table('fav_nutdef')
            ->where([
                ['id', '=', $id],
            ])
            ->delete();
        }elseif($content === "algae"){
             DB::table('fav_algae')
            ->where([
                ['id', '=', $id],
            ])
            ->delete();
        }


    }

    public function admin(){
        return Inertia::render('AdminDashboard');
    }
}
