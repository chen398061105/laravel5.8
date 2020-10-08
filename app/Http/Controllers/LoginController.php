<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    function  index(){
        echo  'hello admin';
    }

    function login(){

        echo  'login failed';
    }

    function  blade(){
        return view('demo.info');
    }
}
