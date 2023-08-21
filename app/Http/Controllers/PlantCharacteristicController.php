<?php

namespace App\Http\Controllers;

use App\Models\Algae;
use App\Models\NutrientDeficiencies;
use App\Models\Plants;
use Illuminate\Http\Request;
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
}
