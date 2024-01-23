<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\person;
use App\Models\project;
class portfolioController extends Controller
{
    public function showWelcomePage(){
        $showInfo = person::first();
        $projects = project::all();
    
        return view('welcome', compact('showInfo', 'projects'));
    }
    
}
