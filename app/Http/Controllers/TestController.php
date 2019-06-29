<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TestController extends Controller
{
    

    public function test()
    {

        // Session::put('key2', 'teste2');

        dump(Session::get('key'));
        dump(Session::get('key2'));

        return view('test');
    }
}
