<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;

class MainController extends Controller
{
    public function main()
    {
        return view('site.main');
    }//
}
