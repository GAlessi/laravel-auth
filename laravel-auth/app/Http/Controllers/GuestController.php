<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Pilot;
use App\Brand;

class GuestController extends Controller
{
    
    public function home()
    {
        $cars = Car::where('deleted', false) -> get();

        return view('pages.home', compact('cars'));
    }

    public function showPilot($id)
    {
        $pilot = Pilot::findOrFail($id);

        return view('pages.showPilot', compact('pilot'));
    }

}
