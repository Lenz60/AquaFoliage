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
        return Inertia::render('Components/Plants/Content/DetailPlants',[
            'name' => $plants->name,
            'desc' => $plants->body
        ]);

        
    }
}
