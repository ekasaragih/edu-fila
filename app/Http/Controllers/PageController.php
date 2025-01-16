<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function promotive()
    {
        return view('feature.promotive');  
    }

    public function preventive()
    {
        return view('feature.preventive'); 
    }

    public function diagnostic()
    {
        return view('feature.diagnostic'); 
    }

    public function monitoring()
    {
        return view('feature.monitoring');  
    }
}
