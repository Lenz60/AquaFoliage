<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutModel;

class AboutController extends Controller
{
    //
    public function info()
    {
        // $model = new AboutModel();
        // $a = $model->Info();
        // $data['a'] = $model->Info();
        $data['a'] = AboutModel::Info();
        $data['b'] = "This data is from controller";

        return view('about', $data);
    }
}
