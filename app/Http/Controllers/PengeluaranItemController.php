<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengeluaranItemController extends Controller
{
    function index(){
    //return('Ini adalah controller');

    $pengeluaranitem_arum= \DB::table('t_pengeluaranitem_arum')->get();
    $data = array('pengeluaranitem_arum' => $pengeluaranitem_arum);
    return view ('pengeluaranitem/index', $data);
}

}


