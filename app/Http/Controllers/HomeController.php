<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Ipack;

class HomeController extends Controller
{
    public function index()
    {
       return view('welcome');
    }
}
