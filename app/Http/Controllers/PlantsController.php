<?php

namespace App\Http\Controllers;

use App\Models\Plants;
use Illuminate\Http\Request;

class PlantsController extends Controller
{
    public function index(){
        $plants = Plants::all();

        return inertia('Plants', compact('plants'));
    }
    //
}
