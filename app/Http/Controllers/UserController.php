<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    private function welcome(){
        return view('welcome');
    }
}
