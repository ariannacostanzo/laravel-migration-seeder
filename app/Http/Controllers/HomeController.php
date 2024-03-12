<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class HomeController extends Controller
{
    public function __invoke()
    {
        // $trains = Train::all();
        //prendo solo i treni che partono oggi
        $trains = Train::where('departure_date', '=', '2024-03-12')->get();
        return view('home', compact('trains'));
    }
   
}
