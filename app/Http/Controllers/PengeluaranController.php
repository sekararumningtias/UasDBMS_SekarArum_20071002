<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengeluaranController extends Controller
{
    function index(){
    //return('Ini adalah controller');

    $pengeluaran_arum= \DB::table('t_pengeluaran_arum')->get();
    $data = array('pengeluaran_arum' => $pengeluaran_arum);
    return view ('pengeluaran/index', $data);
}

}

