<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SistemasController extends Controller
{
    public function index(){
        return view('site.sistema');
    }
}
