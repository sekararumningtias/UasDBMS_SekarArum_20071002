<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    function index(){
    //return('Ini adalah controller');

    $barang_arum= \DB::table('t_barang_arum')->get();
    $data = array('barang_arum' => $barang_arum);
    return view ('barang/index', $data);
}

}

