<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bandosController extends Controller
{
    public function mugiwara(){
        return view('luffy');
        
    }
    public function ruivo(){
        return view('shanks');
        
    }
    public function barbabranca(){
        return view('edward');
        
    }
    public function shichibukai(){
        return view('shichibukai');
        
    }
    public function marinha(){
        return view('marinha');
        
    }

    public function home() {
        return view('home');
    }


     
}

