<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuporteClientController extends Controller
{
    public function index(){
        return view('site.suporteClient');
    }
}
