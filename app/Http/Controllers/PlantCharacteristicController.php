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
        $plants = DB::table('plants')
        ->select('id','name')
        ->get();
        $algae = DB::table('algae')
        ->select('id','name')
        ->get();
        $nutrientDef = DB::table('nutrient_deficiencies')
        ->select('id','name')
        ->get();

        $contentId = request('id');
        $content = request('content');
        // dd($nameId);
        // dd($plantDesc);
        
        if ($content == 'plants'){
            $payload = DB::table('plants')
            ->where('id', $contentId)
            ->first();
        }else if($content == 'nutDef'){
            $payload = DB::table('nutrient_deficiencies')
            ->where('id', $contentId)
            ->first();
        }else if($content == 'algae') {
            $payload = DB::table('algae')
            ->where('id', $contentId)
            ->first();
        }else {
             $payload = null;
        }
        if(isset($payload)){
            return Inertia::render('Components/Plants/PlantCharacteristic',[
                'plants' => $plants,
                'algae' => $algae,
                'nutrientDef' => $nutrientDef,
                'content' => $content,
                'payload' => $payload
            ]);
        }else{
            return Inertia::render('Plants',[
                'plants' => $plants,
                'algae' => $algae,
                'nutrientDef' => $nutrientDef,
                'content' => '404'
            ]);   
        }
        // if(isset($nameId)){
        //     return Inertia::render('Components/Plants/PlantCharacteristic',[
        //         'plants' => $plants,
        //         'algae' => $algae,
        //         'nutrientDef' => $nutrientDef,
        //         'plant' => $plantDesc
        //     ]);
        // }else{
        //     return Inertia::render('Components/Plants/PlantCharacteristic',[
        //         'plants' => $plants,
        //         'algae' => $algae,
        //         'nutrientDef' => $nutrientDef
        //     ]);   
        // }
    }
    public function show(){
        $nameId = request('id');
        // dd($nameId);
        $plants = DB::table('plants')
        ->where('id', $nameId)
        ->first();
        return Inertia::render('Components/Plants/Content/DetailPlants',[
            'name' => $plants->name,
            'desc' => $plants->body
        ]);
    }
}
