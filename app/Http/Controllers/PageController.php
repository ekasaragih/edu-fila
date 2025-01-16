<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function promotive()
    {
        return view('promotive');  
    }

    public function preventive()
    {
        return view('preventive'); 
    }

    public function diagnostic()
    {
        return view('diagnostic'); 
    }

    public function monitoring()
    {
        return view('monitoring');  
    }
}
