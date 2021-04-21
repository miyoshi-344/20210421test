<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index1()
    {
        return "建物です";
    }
    public function index2($room)
    {
        return '部屋番号は'.$room.'です';
    }
}
