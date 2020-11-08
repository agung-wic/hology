<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function index()
    {
        $dataset = \App\Dataset::all();
        return view('chart', ['dataset' => $dataset]);
    }
    //
}

/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'db';
$mysqli = new mysqli($host, $user, $pass, $db) or die($mysqli->error);

$data1 = '';
$data2 = '';

//query to get data from the table
$sql = "SELECT * FROM `datasets` ";
$result = mysqli_query($mysqli, $sql);

//loop through the returned data
while ($row = mysqli_fetch_array($result)) {

    $data1 = $data1 . '"' . $row['data1'] . '",';
    $data2 = $data2 . '"' . $row['data2'] . '",';
}

$data1 = trim($data1, ",");
$data2 = trim($data2, ",");
