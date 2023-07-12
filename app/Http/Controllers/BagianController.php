<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BagianController extends Controller
{
    function index(){
    //return('Ini adalah controller');

    $bagian_arum= \DB::table('t_bagian_arum')->get();
    $data = array('bagian_arum' => $bagian_arum);
    return view ('bagian/index', $data);
}

}

