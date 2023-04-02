<?php

namespace App\Http\Controllers;

use App\Models\Plants;
use Illuminate\Http\Request;

class PlantsController extends Controller
{
    //
    public function index()
    {
        // $plants = Plants::all();
        // $body = Plants::pluck('body');
        // $data['name'] = $plants->name;
        // $data['body'] = $plants->body;

        return view('plants', [
            "plants" => Plants::all()
        ]);
    }
}
