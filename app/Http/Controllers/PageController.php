<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index(){

        return view('home')->with([
            "title" => "YOUR NUTRITION POWERHOUSE",
            "subtitle" => "Solutions for a more secure food system.",
            "phrase" => "Cattle feed ingredients that optimize dairy cow health.",
            "imgPathDesktop" => "images/Desk/Home/Banner_Home_2x.png",
            "imgPathMovil" => "images/Mobile/Home/Banner_Home_2x.png",
        ]);
    }

    public function products(){

        return view('products')->with([
            "title" => "Dairy Products",
            "subtitle" => "Innovating across the food chain.",
            "phrase" => "Our experts use science to enhance animal health and food safety, driving positive change for animals, people, and the planet.",
        ]);
    }

}
