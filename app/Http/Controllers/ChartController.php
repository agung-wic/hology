<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function index()
    {
        $dataset = \App\Dataset::all();
        $data1 = [];
        $data2 = [];
        $i = 0;
        foreach ($dataset as $data) {
            $data1[$i] = $data->data1;
            $data2[$i] = $data->data2;
            $i++;
        }


        return view('chart', ['dataset' => $dataset], ['data1' => $data1], ['data2' => $data2]);
    }
}
