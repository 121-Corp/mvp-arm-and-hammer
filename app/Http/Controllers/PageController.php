<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index(){

        return view('home')->with([
            "title" => "YOUR NUTRITION POWERHOUSE",
            "subtitle" => "Solutions for a <br class='lg:hidden'> more secure <br class='lg:hidden'> food system.",
            "phrase" => "Cattle feed ingredients that optimize dairy cow health.",
        ]);
    }
}
