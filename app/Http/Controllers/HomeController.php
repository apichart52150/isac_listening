<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function index()
    {
        dd(auth('ipack')->user()->std_id);
        return view('welcome');
    }

    public function not()
    {
        return view('notfound');
    }
}
