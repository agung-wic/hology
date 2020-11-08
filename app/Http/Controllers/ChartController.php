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
        foreach ($dataset as $data) {
            $data1 = $data->data1;
            $data2 = $data->data2;
        }
        var_dump($data1);
        die();
        return view('chart', ['dataset' => $dataset], ['data1' => $data1], ['data2' => $data2]);
    }
}
