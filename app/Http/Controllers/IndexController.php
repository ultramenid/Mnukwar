<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $title = 'Mnukwar Papua';
        return view('frontends.index',compact('title') );
    }
}
