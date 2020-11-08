<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function index (){
        $dataset = \App\Dataset::all();
        return view('chart',['dataset'=>$dataset]);
    }
    //
}
