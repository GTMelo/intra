<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\UserDatum;

class TesteController extends Controller
{
    
    function index(){
        $title = 'whatever';
        $user = UserDatum::first();
        
        return view('home', compact('title', 'user'));
    }
    
}
