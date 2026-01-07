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
            // ডাটাবেস থেকে config নিয়ে আসা (একবার cache করতে পারেন)
            $cpanelHost   = str_replace(['https://', 'http://'], '', \DB::table('configs')->where('key', 'cpanel_address')->value('value')); // business906.web-hosting.com
            $cpanelUser   = DB::table('configs')->where('key', 'cpanel_username')->value('value'); // markyuiz
            $apiToken     = DB::table('configs')->where('key', 'api_token')->value('value');
            $port         = DB::table('configs')->where('key', 'port')->value('value') ?? 2083;
            $parentPath   = DB::table('configs')->where('key', 'parent_path')->value('value'); // /home/markyuiz/admeterpro.com

            // ফোল্ডারের parent path – public_html-এর সমান
            $folderParent = $parentPath; // অথবা সরাসরি 'public_html' দিয়ে টেস্ট করতে পারেন

            $url = "https://{$cpanelHost}:{$port}/json-api/cpanel?"
                . http_build_query([
                    'cpanel_jsonapi_user'       => $cpanelUser,
                    'cpanel_jsonapi_apiversion' => 2,
                    'cpanel_jsonapi_module'     => 'Fileman',
                    'cpanel_jsonapi_func'       => 'mkdir',
                    'path'                      => $folderParent,       // parent directory
                    'name'                      => $brandSlug,          // নতুন ফোল্ডারের নাম
                    'permissions'               => '0755',
                ]);

            $response = Http::withHeaders([
                'Authorization' => "cpanel {$cpanelUser}:{$apiToken}",
            ])->get($url);

            if ($response->successful()) {
                $data = $response->json();
                if ($data['cpanelresult']['event']['result'] ?? 0 == 1) {
                    // সফল হলে (অপশনাল: লগ বা মেসেজ)
                    Log::info("Folder created for client: {$brandSlug}");
                } else {
                    Log::error("cPanel folder create failed: " . ($data['cpanelresult']['error'] ?? 'Unknown'));
                }
            } else {
                Log::error("cPanel API HTTP error: " . $response->status());
            }
        } catch (\Exception $e) {
            Log::error("cPanel folder creation exception: " . $e->getMessage());
        }
        SetupClientSiteJob::dispatch($client);

        return redirect()->route('registration')
            ->with('success', "রেজিস্ট্রেশন সফল! আপনার সাইট তৈরি হচ্ছে। URL: https://{$brandSlug}.admeterpro.com (৫-১০ মিনিট লাগতে পারে)");
    }

}
