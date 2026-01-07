<?php

namespace App\Http\Controllers;

use App\Jobs\SetupClientSiteJob;
use App\Models\Clients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
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

        try {
            $cpanelHost   = str_replace(['https://', 'http://'], '', DB::table('configs')->where('key', 'cpanel_address')->value('value'));
            $cpanelUser   = DB::table('configs')->where('key', 'cpanel_username')->value('value');
            $apiToken     = DB::table('configs')->where('key', 'api_token')->value('value');
            $port         = DB::table('configs')->where('key', 'port')->value('value') ?? 2083;
            $parentPath   = DB::table('configs')->where('key', 'parent_path')->value('value');

            $folderParent = $parentPath;

            $url = "https://{$cpanelHost}:{$port}/json-api/cpanel?"
                . http_build_query([
                    'cpanel_jsonapi_user'       => $cpanelUser,
                    'cpanel_jsonapi_apiversion' => 2,
                    'cpanel_jsonapi_module'     => 'Fileman',
                    'cpanel_jsonapi_func'       => 'mkdir',
                    'path'                      => $folderParent,
                    'name'                      => $brandSlug,
                    'permissions'               => '0755',
                ]);

            $response = Http::withHeaders([
                'Authorization' => "cpanel {$cpanelUser}:{$apiToken}",
            ])->get($url);

        } catch (\Exception $e) {
            Log::error("cPanel folder creation exception: " . $e->getMessage());
        }


        SetupClientSiteJob::dispatch($client);

        return redirect()->route('registration')
            ->with('success', "রেজিস্ট্রেশন সফল! আপনার সাইট তৈরি হচ্ছে। URL: https://{$brandSlug}.admeterpro.com (৫-১০ মিনিট লাগতে পারে)");
    }

}
