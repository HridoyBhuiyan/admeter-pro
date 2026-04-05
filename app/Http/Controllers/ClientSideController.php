<?php

namespace App\Http\Controllers;

use App\Models\ClientDueModel;
use App\Models\Clients;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Stevebauman\Location\Facades\Location;

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

    /**
     * @throws \Exception
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:55|regex:/^[\pL\s\-]+$/u',
            'brandName' => 'required|string|max:55|unique:clients,brand_name',
            'whatsapp' => 'required|max:55|unique:clients,whatsapp',
            'email' => 'required|email|max:255|unique:clients,email',
        ], [
            'name.regex' => 'Only Full Name Allowed',
            'brandName.unique' => 'This Brand Name Already Exist. Please Try Another Name',
            'whatsapp.unique' => 'This WhatsApp Number Already Exist. Please Try Another Number',
            'email.unique' => 'This Email Already Exist. Please Try Another Email',
        ]);

        $brandSlug = Str::slug($request['brandName']);
        $ip = $request->ip();
        $location = Location::get($ip);

        $region = $location->regionName ?? null;
        $city    = $location->cityName ?? null;


        $client = Clients::create([
            'name'       => $request['name'],
            'brand_name' => $request['brandName'],
            'email'      => $request['email'],
            'whatsapp'      => $request['whatsapp'],
            'trial'      => 1,
            'ip_address'=> $ip,
            'region' => $region,
            'user_agent'=> $request->userAgent(),
            'city' => $city,
            'last_activity' => now(),
            'brand_slug' => $brandSlug,
            'status'     => 'pending',
        ]);

        ClientDueModel::create([
            "client_id"=>$client->id,
            "due_amount"=>0,
        ]);


        return redirect()->route('registration')
            ->with('success', "রেজিস্ট্রেশন সফল!");
    }

}
