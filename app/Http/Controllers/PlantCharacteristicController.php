<?php

namespace App\Http\Controllers;

use App\Models\Algae;
use App\Models\FavAlgae;
use App\Models\FavNutDef;
use App\Models\FavPlant;
use App\Models\NutrientDeficiencies;
use App\Models\Plants;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class PlantCharacteristicController extends Controller
{
    public function index(){
        $plants = $this->getTableName('plants');
        $algae = $this->getTableName('algae');
        $nutrientDef = $this->getTableName('nutrient_deficiencies');

        $contentId = request('id');
        $contentDesc = request('content');

        $payload = $this->checkContent($contentId,$contentDesc);

        //v Checking the JWT token using helper function
        if(isset($_COOKIE['userData'])){
            $token = $_COOKIE['userData'];
            $validate = validateJWT($token);

            if($validate){
                if(isset($payload)){
                    return Inertia::render('Components/Plants/PlantCharacteristic',[
                        'plants' => $plants,
                        'algae' => $algae,
                        'nutrientDef' => $nutrientDef,
                        'content' => $contentDesc,
                        'payload' => $payload,
                    ]);
                }else{
                    return Inertia::render('Plants',[
                        'plants' => $plants,
                        'algae' => $algae,
                        'nutrientDef' => $nutrientDef,
                        'content' => '404'
                    ]);
                }
            }else{
                return redirect()->to('/');
            }
        }else{
            return Inertia::render('Plants',[
                'plants' => $plants,
                'algae' => $algae,
                'nutrientDef' => $nutrientDef,
                'content' => '404'
            ]);
        }
        //v ////////////////////////////
    }

    public function getTableName($tableName){
        return DB::table($tableName)
        ->select('id','name')
        ->get();
    }

    public function checkContent($id,$table){
        if ($table == 'plants'){
            $payload = DB::table('plants')
            ->select('id','name','genus','species','common_name','difficulty','light','temp','usage','body')
            ->where('id', $id)
            ->first();
        }elseif($table == 'nutDef'){
            $payload = DB::table('nutrient_deficiencies')
            ->select('id','name','difficulty','causes','causes_desc','body')
            ->where('id', $id)
            ->first();
        }elseif($table == 'algae') {
            $payload = DB::table('algae')
            ->select('id','name','species','common_name','difficulty','causes','causes_desc','body')
            ->where('id', $id)
            ->first();
        }else {
             $payload = null;
        }
        return $payload;
    }

    public function addFav(){
        $id = request('id');
        // dd('function stopped');
        $content = request('content');
        $favorite = filter_var(request('favorite'), FILTER_VALIDATE_BOOLEAN) ;
        $state = request('state');

        if($state === 'offline'){
            //? Insert Alert box that indicates that the user is offline
            //? and remind the bookmarked item will only saved in cookies
            //? by returning a value indicating the state of the user
            // dd('You are offline');

        }else{
            $user = Auth::user();
            if($favorite){

                if($this->checkFavorite($content, $user, $id)){
                    //? Create alert that indicates that user is already favorites this item
                    //? by returning a value indicating the plant is already favorited
                    dd('This Plants is already in the favorites list');

                }else{
                    $this->addFavorite($content, $user, $id);
                    //? Create alert box that indicates that the user is successfully added items to the favorites list
                    //? by returning a value indicating the plant is added to db
                    dd('added to db');
                }

            }else{
                $this->removeFavorite($content, $user, $id);
                //? Create alert box that indicates that the user is successfully remove item from favorites list
                //? by returning a value indicating the item is removed from db
                dd('removed from db');

            }
        }
    }

    public function addFavorite($content, $user, $id){
        if($content === "plants"){
            FavPlant::create([
                    'id' => fake()->uuid(),
                    'user_id' => $user->id,
                    'plants_id' => $id,
                   ]);
        }elseif($content === "nutDef"){
            FavNutDef::create([
                        'id' => fake()->uuid(),
                        'user_id' => $user->id,
                        'nutdef_id' => $id,
                    ]);
        }elseif($content === "algae"){
            FavAlgae::create([
                        'id' => fake()->uuid(),
                        'user_id' => $user->id,
                        'algae_id' => $id,
                    ]);
        }
    }

    public function checkFavorite($content, $user, $id){
        if($content === "plants"){
            return DB::table('fav_plant')
            ->where([
                ['user_id', '=', $user->id],
                ['plants_id', '=', $id],
            ])
            ->first();
        }elseif($content === "nutDef"){
            return DB::table('fav_nutdef')
            ->where([
                ['user_id', '=', $user->id],
                ['nutdef_id', '=', $id],
            ])
            ->first();
        }elseif($content === "algae"){
            return DB::table('fav_algae')
            ->where([
                ['user_id', '=', $user->id],
                ['algae_id', '=', $id],
            ])
            ->first();
        }
    }

    public function removeFavorite($content, $user, $id){
        if($content === "plants"){
            return DB::table('fav_plant')
            ->where([
                ['user_id', '=', $user->id],
                ['plants_id', '=', $id],
            ])
            ->delete();
        }elseif($content === "nutDef"){
            return DB::table('fav_nutdef')
            ->where([
                ['user_id', '=', $user->id],
                ['nutdef_id', '=', $id],
            ])
            ->delete();
        }elseif($content === "algae"){
            return DB::table('fav_algae')
            ->where([
                ['user_id', '=', $user->id],
                ['algae_id', '=', $id],
            ])
            ->delete();
        }
    }
}
