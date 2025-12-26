<?php

namespace App\Http\Controllers;

use App\Jobs\SetupClientSiteJob;
use App\Models\Clients;
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
//            'name' => 'required|string|max:255|regex:/^[\pL\s\-]+$/u',
//            'brandName' => 'required|string|max:255|unique:clients,brand_name',
//            'phone' => 'required|digits_between:10,15|unique:clients,phone',
//            'email' => 'required|email|max:255|unique:clients,email',
        ], [
            'name.regex' => 'Only Full Name Allowed',
            'brandName.unique' => 'This Brand Name Already Exist. Please Try Another Name',
            'phone.unique' => 'This Phone Number Already Exist. Please Try Another Number',
            'phone.numeric' => 'Phone Number Must Be Numeric Only',
            'email.unique' => 'This Email Already Exist. Please Try Another Email',
        ]);

        $brandSlug = Str::slug($request['brandName']);

        $client = Clients::create([
            'name'       => $request['name'],
            'brand_name' => $request['brandName'],
            'email'      => $request['email'],
            'phone'      => $request['phone'],
        ]);


        SetupClientSiteJob::dispatch($client->id);

        return redirect()->route('registration')
            ->with('success', "রেজিস্ট্রেশন সফল! আপনার সাইট তৈরি হচ্ছে। URL: https://{$brandSlug}.admeterpro.com (৫-১০ মিনিট লাগতে পারে)");
    }

}
