<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientSideController extends Controller
{
    function index()
    {
        return view('homepage.homepage');
    }
    function registration(Request $request)
    {
        return view('register.register');
    }
    public function store(Request $request)
    {
        return $request;
    }

}
