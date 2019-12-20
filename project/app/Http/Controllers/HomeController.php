<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show(){

        $r = \App\RequestJob::all();

        return view('home', ['requests' => $r]);
    }
}
