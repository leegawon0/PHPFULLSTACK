<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    function index() {
        $arr = [
            'name' => '이가원'
            ,'gender' => '여자'
            ,'birthday' => '20081023'
            ,'address' => '구미'
            ,'tel' => '01029347238'
        ];

        $arr2 = [];
        return view('blade')->with('data', $arr)->with('data2', $arr2);
    }
}
