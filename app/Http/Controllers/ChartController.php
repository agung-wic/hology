<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function index()
    {
        $dataset = \App\Dataset::all();

        $data1 = '';
        $data2 = '';
        while ($row = count($dataset)) {
            $data1 = $data1 . '"' . $row['data1'] . '",';
            $data2 = $data2 . '"' . $row['data2'] . '",';
        }
        $data1 = trim($data1, ",");
        $data2 = trim($data2, ",");
        dd(json_encode($data1));


        return view('chart', ['dataset' => $dataset], ['data1' => $data1], ['data2' => $data2]);
    }
}
