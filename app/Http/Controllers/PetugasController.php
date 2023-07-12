<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetugasController extends Controller
{
    function index(){
    //return('Ini adalah controller');

    $petugas_arum= \DB::table('t_petugas_arum')->get();
    $data = array('petugas_arum' => $petugas_arum);
    return view ('petugas/index', $data);
}

}


