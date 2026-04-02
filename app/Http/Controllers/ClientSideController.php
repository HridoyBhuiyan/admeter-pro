<?php

namespace App\Http\Controllers;

use App\Jobs\SetupClientSiteJob;
use App\Models\Clients;
use App\Services\ClientSiteService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
        $request->validate([
            'name' => 'required|string|max:55|regex:/^[\pL\s\-]+$/u',
            'brandName' => 'required|string|max:55|unique:clients,brand_name',
            'phone' => 'required|max:55|unique:clients,phone',
            'email' => 'required|email|max:255|unique:clients,email',
        ], [
            'name.regex' => 'Only Full Name Allowed',
            'brandName.unique' => 'This Brand Name Already Exist. Please Try Another Name',
            'phone.unique' => 'This Phone Number Already Exist. Please Try Another Number',
            'email.unique' => 'This Email Already Exist. Please Try Another Email',
        ]);



        $brandSlug = Str::slug($request['brandName']);

        $client = Clients::create([
            'name'       => $request['name'],
            'brand_name' => $request['brandName'],
            'email'      => $request['email'],
            'phone'      => $request['phone'],
        ]);


        return redirect()->route('registration')
            ->with('success', "রেজিস্ট্রেশন সফল!");
    }

}
