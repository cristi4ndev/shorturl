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
        $userAgent = $request->header('User-Agent');
        $ip = $request->ip();
        
        $location = Location::get('79.116.207.237');
        var_dump($location);
        $ad = new AgentDetector($userAgent);
        

        
        return view('welcome', compact('ad','location'));
    }
}
