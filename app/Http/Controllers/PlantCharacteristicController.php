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
    private function commonLogic($plants, $algae, $nutrientDef, $favData, $contentDesc,  $payload){
        //Check if a JWT token exists
        $token = $_COOKIE['userData'] ?? null;
        //Validate the token with helper if the token exists
        $validate = $token ? validateJWT($token) : null;

        //If token is valid and there is payload, redirect to description page
        if ($validate && $payload) {
            return $this->redirectDesc($plants, $algae, $nutrientDef, $contentDesc, $payload, $favData);
        }
        //If token is exists but not valid, redirect to home
        if ($token && !$validate) {
            return redirect()->to('/');
        }

        return redirect('docs')->with([
            'plants' => $plants,
            'algae' => $algae,
            'nutrientDef' => $nutrientDef,
        ]);
    }

    public function index(){
        $user = Auth::user();
        $plants = $this->getTableKey('plants');
        $algae = $this->getTableKey('algae');
        $nutrientDef = $this->getTableKey('nutrient_deficiencies');
        $contentId = request('id');
        $contentDesc = request('content');
        $payload = $this->checkContent($contentId, $contentDesc);

        if($payload){
            if($user){
                // dd('break');
                $favPlants = $this->getFavTable('fav_plant',$user);
                $favNutDefs = $this->getFavTable('fav_nutdef',$user);
                $favAlgaes = $this->getFavTable('fav_algae',$user);

                $favData = $this->getFavData($favPlants, $favNutDefs, $favAlgaes);
                return $this->commonLogic($plants, $algae, $nutrientDef,
                $favData,
                $contentDesc, $payload);
            }
            else{
                $favData = "";
                return $this->redirectDesc($plants, $algae, $nutrientDef, $contentDesc, $payload, $favData);
            }
        }else{
            return redirect('/docs')->with([
                'plants' => $plants,
                'algae' => $algae,
                'nutrientDef' => $nutrientDef,
                ]);
            }

    }

    public function indexFav(){
        $user = Auth::user();
        $plants = $this->getTableKey('plants');
        $algae = $this->getTableKey('algae');
        $nutrientDef = $this->getTableKey('nutrient_deficiencies');
        $contentId = request('id');
        $contentDesc = request('content');
        $payload = $this->checkContent($contentId, $contentDesc);


        if($payload){
            if($user){
                $favPlants = $this->getFavTable('fav_plant', $user);
                $favNutDefs = $this->getFavTable('fav_nutdef', $user);
                $favAlgaes = $this->getFavTable('fav_algae', $user);
                $favData = $this->getFavData($favPlants, $favNutDefs, $favAlgaes);
                return $this->commonLogic($plants, $algae, $nutrientDef,
                $favData,
                $contentDesc, $payload);
            }
            else{
                $favData = "";
                return $this->redirectDesc($plants, $algae, $nutrientDef, $contentDesc, $payload, $favData);
            }
        }else{
            return redirect('/docs')->with([
                'plants' => $plants,
                'algae' => $algae,
                'nutrientDef' => $nutrientDef,
            ]);
        }
    }


    public function redirectDesc($plants, $algae, $nutrientDef, $contentDesc, $payload, $favData = ""){
        $user = Auth::user();
        if($user){
            return Inertia::render('Components/Plants/PlantCharacteristic', [
                        'plants' => $plants,
                        'algae' => $algae,
                        'nutrientDef' => $nutrientDef,
                        'content' => $contentDesc,
                        'payload' => $payload,
                        'favData' => $favData,
                        'state' => "online"
                    ]);
        }else{
            return Inertia::render('Components/Plants/PlantCharacteristic', [
                        'plants' => $plants,
                        'algae' => $algae,
                        'nutrientDef' => $nutrientDef,
                        'content' => $contentDesc,
                        'payload' => $payload,
                        'favData' => $favData,
                        'state' => "offline"
                    ]);
        }
    }


    public function getTableKey($tableName){
        return DB::table($tableName)
        ->select('id','name')
        ->get();
    }

    public function getFavTable($tableName, $user){
        if($tableName == 'fav_plant'){
            return DB::table('fav_plant')
            ->select('id','plants_id')
            ->where('user_id', $user->id)
            ->get();
        }elseif($tableName == 'fav_nutdef'){
            return DB::table('fav_nutdef')
            ->select('id','nutdef_id')
            ->where('user_id', $user->id)
            ->get();
        }elseif($tableName == 'fav_algae'){
            return DB::table('fav_algae')
            ->select('id','algae_id')
            ->where('user_id', $user->id)
            ->get();
        }
    }


    private function getFavData($favPlants, $favNutDefs, $favAlgaes){
        // dd($favPlants);
        return [
            'favPlant' => $favPlants,
            'favNutDef' => $favNutDefs,
            'favAlgaes' => $favAlgaes,
        ];
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
        $content = request('content');
        // $favorite = filter_var(request('favorite'), FILTER_VALIDATE_BOOLEAN) ;
        $plants = $this->getTableKey('plants');
        $algae = $this->getTableKey('algae');
        $nutrientDef = $this->getTableKey('nutrient_deficiencies');
        $payload = $this->checkContent($id, $content);
        $user = Auth::user();

        // dd($user);

        if(!$user){
            // dd('You are offline');
            $favData = "";
            return $this->redirectDesc($plants, $algae, $nutrientDef, $content, $payload, $favData);
            // return redirect()->back();
        }else{
            $favPlants = $this->getFavTable('fav_plant', $user);
            $favNutDefs = $this->getFavTable('fav_nutdef', $user);
            $favAlgaes = $this->getFavTable('fav_algae', $user);

            if($this->checkFavorite($content, $user, $id)){
                dd('This Plants is already in the favorites list');

            }else{
                $this->addFavorite($content, $user, $id);
                // dd('added to db');
                $favData = $this->getFavData($favPlants, $favNutDefs, $favAlgaes);
                return $this->redirectDesc($plants, $algae, $nutrientDef,
                $content, $payload,$favData);
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

    public function removeFav(){
        $id = request('id');
        $content = request('content');
        $plants = $this->getTableKey('plants');
        $algae = $this->getTableKey('algae');
        $nutrientDef = $this->getTableKey('nutrient_deficiencies');
        $payload = $this->checkContent($id, $content);
        $user = Auth::user();
        $favPlants = $this->getFavTable('fav_plant', $user);
        $favNutDefs = $this->getFavTable('fav_nutdef', $user);
        $favAlgaes = $this->getFavTable('fav_algae', $user);
        if($content === "plants"){
            DB::table('fav_plant')
            ->where([
                ['user_id', '=', $user->id],
                ['plants_id', '=', $id],
            ])
            ->delete();
            $favData = $this->getFavData($favPlants, $favNutDefs, $favAlgaes);
            return $this->redirectDesc($plants, $algae, $nutrientDef, $content, $payload, $favData);
        }elseif($content === "nutDef"){
            DB::table('fav_nutdef')
            ->where([
                ['user_id', '=', $user->id],
                ['nutdef_id', '=', $id],
            ])
            ->delete();
            $favData = $this->getFavData($favPlants, $favNutDefs, $favAlgaes);
            return $this->redirectDesc($plants, $algae, $nutrientDef, $content, $payload, $favData);
        }elseif($content === "algae"){
            DB::table('fav_algae')
            ->where([
                ['user_id', '=', $user->id],
                ['algae_id', '=', $id],
            ])
            ->delete();
            $favData = $this->getFavData($favPlants, $favNutDefs, $favAlgaes);
            return $this->redirectDesc($plants, $algae, $nutrientDef, $content, $payload, $favData);
        }
    }
}
