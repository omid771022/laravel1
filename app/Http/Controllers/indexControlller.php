<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexControlller extends Controller
{
public function index(){
    return view('front.index');
}
}
