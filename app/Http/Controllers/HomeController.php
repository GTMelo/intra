<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserDatum;

class HomeController extends Controller
{
    
    function index(){
        
        $params = array(
            'title' => 'IntraSAIN',
            'user' => UserDatum::find(1)
        );
        
        return view('home', $params);
    }
    
}
