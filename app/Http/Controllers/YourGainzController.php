<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YourGainzController extends Controller
{
    public function home(){
        return view('yourgainz.home');
    }
    public function menuimc(){
        return view('yourgainz.menuimc');
    }
}
