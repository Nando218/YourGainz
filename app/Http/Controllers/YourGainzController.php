<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YourGainzController extends Controller
{
    public function home(){
        return view('yourgainz.home');
    }
    public function menumain(){
        return view('yourgainz.menumain');
    }
    public function routines(){
        return view('yourgainz.routines');
    }
    public function imc(){
        return view('yourgainz.imc');
    }
    
    public function exercises(){
        return view('yourgainz.exercises');
    }

}
