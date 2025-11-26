<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientSideController extends Controller
{
    function index()
    {
        return view('homepage.homepage');
    }
}
