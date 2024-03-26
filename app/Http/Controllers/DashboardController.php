<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Karmendra\LaravelAgentDetector\AgentDetector as AgentDetector;
use Stevebauman\Location\Facades\Location;


class DashboardController extends Controller
{
    public function index(){
        return view('dashboard');
    }
    public function welcome(Request $request){
        
        

        
        return view('welcome');
    }
}
