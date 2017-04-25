<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    function index(){
        
        $params = array(
            'title' => 'IntraSAIN'
        );
        
        return view('home', $params);
    }
    
}
