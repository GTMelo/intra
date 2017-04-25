<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    function index(){
        
        $params = array(
            'foo' => 'bar'
        );
        
        return view('home', $params);
    }
    
}
