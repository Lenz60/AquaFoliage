<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ContentExcerptController extends Controller
{
    //
    public function index(){
        $content = request('content');

        return Inertia::render('Components/Plants/Content/ContentExcerpt',['content' => $content]);
    }
}
